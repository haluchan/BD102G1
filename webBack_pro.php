<?php
session_start();
ob_start();
//得到登入者的名字，然後清掉; 寫入登入時間
$admin_name = $_SESSION['signInInfo'];
$_SESSION['signInInfo'] = '';
$_SESSION['adminName'] = $admin_name;
$_SESSION['signInDate'] =  date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));

echo '預計會加在後台公版裡$admin_name='.$admin_name .'  '.$_SESSION['signInDate'] ;
?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::商品管理</title>
	<!-- 不准動的部分，以下三行 -->	
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" href="css/webBack_pro.css">
</head>
<body>
	<?php require_once('web_back_frame_top.php') ?>

	<nav>
				
		<div class="nav_item">
			<h2>商品全覽</h2>
		</div>
		<div class="nav_item">
			<span>類別：</span>
			<select>
				<option value="">不限</option>
				<option value="">不限</option>
				<option value="">不限</option>
			</select>
		</div>
		<div class="nav_item">
			<span>類別：</span>
			<select>
				<option value="">全部</option>
				<option value="">種子</option>
				<option value="">魚缸</option>
			</select>
		</div>
		
		<div class="nav_item">
			<div class="search">
				<input type="text" name="" placeholder="搜尋">

				<button><img src="src/image/web_back_frame/seaech.png"></button>
				<button><img src="src/image/web_back_frame/erase.png"></button>
			</div>
		</div>
		<div class="clearfix"></div>
	</nav>


	<form class="myForm" method="post" action="php/webBack_pro_resetStatus.php" enctype="multipart/form-data">
		<table cellspacing="1">
			<tr>
				<th></th>
				<th>商品編號</th>
				<th>類別</th>
				<th>名稱</th>
				<th>價格</th>
				<!-- <th>規格</th> -->
				<th>修改</th>
				<th>狀態</th>
			</tr>



<?php 
	try {

		require_once("php/connectGrowing_hope.php");

	    //加一個把編號和類別組合在一起並補齊三個位數的指令作為商品編號
	    $sql = "select *, lpad(pro_no, 3, 0) pro_realNo 
	    		from product";

		$products = $pdo->query($sql);

		$x = 0;
		while( $prodRow = $products->fetchObject() ){
			
?>


			<tr class="tdRow">
				<!-- 行號 -->
				<td><?php echo $x += 1 ; ?></td>

				<!-- 組合過類別的商品編號 -->
				<td>
					<?php 
						$typ ='';
						//辨認類別給編號開頭
						switch ($prodRow->pro_type) {
							case 1:
								$typ = 's';
								break;

							case 2:
								$typ = 't';
								break;
							
							default:
								$typ = 'z';
								break;
						}
						
						$proNo = $typ. $prodRow->pro_realNo; 
						echo $proNo; 

					?>
						
				</td>
				<!-- 類別 辨認給中文 -->
				<td>
					<?php 						
						switch ($prodRow->pro_type) {
							case 1:
								$typ = '種子';
								break;

							case 2:
								$typ = '魚缸';
								break;
							
							default:
								$typ = '其他/未定義';
								break;
						}
						echo $typ; 
					?>					
				</td> 

				<!-- 商品名稱 -->
				<td><?php echo $prodRow->pro_name; ?></td>

				<!-- 價格 -->
				<td><?php echo $prodRow->pro_price; ?></td>
				
				<!-- 修改按鈕 -->
				<td>
					<a href="webBack_proUpdate.php?pro_no=<?php echo $prodRow->pro_no;?>" class="btn">修改資料</a>
				</td>

				<!-- 狀態 -->
				<td>
					<?php $status = $prodRow->pro_status; ?>
					<label>
						<input type="radio" name="status<?php echo $prodRow->pro_no ?>" value="1" class="on" 
						<?php if ( $status == 1){echo 'checked';}?> >上架
					</label>

					
					<label><input type="radio" name="status<?php echo $prodRow->pro_no ?>" value="0" class="off"<?php if ( $status == 0){echo 'checked';}?> >下架</label>

					<!-- 商品號碼最大到幾號 -->
					<input type="hidden" name="pro_no<?php echo $x ?>" value="<?php echo $prodRow->pro_no;?>">
					<!-- 本頁row數量 -->
					<input type="hidden" name="howManyRow" value="<?php echo $x ;?>">
				</td>
			</tr>
			
			


<?php	
		}

	} catch (PDOException $e) {
		echo "錯誤原因 : " , $e->getMessage(),"<br>";
		echo "行號 : " , $e->getLine(),"<br>";
	}
?>



		</table>
		
		
		<div class="proSave">
			<input type="submit" class="submit" value="修改上下架">
			<div class="ccc" style="clear: both;"></div>
		</div>

	</form>
	<!-- 送去webBack_pro_resetStatus.php -->



<?php require_once('web_back_frame_bottom.php') ?>

<script>
	//更動資料庫送來的結果，有就跳窗顯示然後清空$_SESSION，沒有就不跳窗
	$(document).ready(function(){

			//webBack_pro_add 或 webBack_pro_update傳來的資訊
			var proAddErrorInfo = "<?php

				if ( isset($_SESSION['proAddErrorInfo']) == 1){
					echo $_SESSION['proAddErrorInfo']; 
					// session_unset($_SESSION['proAddErrorInfo']);
					$_SESSION['proAddErrorInfo'] = ''; 

				}	

			?>";

			if (proAddErrorInfo != '') {
				alert(proAddErrorInfo);
			}		



			//webBack_pro_resetStatus傳來的資訊
			var proStatusResetInfo = "<?php 

				if ( isset($_SESSION['proStatusResetInfo']) == 1){
					echo $_SESSION['proStatusResetInfo']; 
					$_SESSION['proStatusResetInfo'] =''; 
				}	

			?>";

			if (proStatusResetInfo != '') {
				alert(proStatusResetInfo);
			}	

	});
</script>

</body>
</html>