<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::商品</title>
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
			<h2>商品管理</h2>
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
	    $sql = "select *, lpad(pro_no, 3, 0) pro_realNo from product";

		$products = $pdo->query($sql);

		$x = 0;
		while( $prodRow = $products->fetchObject() ){
			
?>


			<tr class="tdRow">
				<td><?php echo $x += 1 ; ?></td>
				<td>
					<?php 
						$typ ='';
						//辨認類別給編號開頭
						switch ($prodRow->pro_type) {
							case 1:
								$typ = 'S';
								break;

							case 2:
								$typ = 'T';
								break;
							
							default:
								$typ = 'Z';
								break;
						}
						
						$proNo = $typ. $prodRow->pro_realNo; 
						echo $proNo; 

					?>
						
				</td>
				<td>
					<?php 
						//辨認類別給中文
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
				<td><?php echo $prodRow->pro_name; ?></td>
				<td><?php echo $prodRow->pro_price; ?></td>
				
				<td>
					<input class="btn" type="button" name="revise" value="修改資料">
				</td>
				<td>
					<?php $status = $prodRow->pro_status; ?>
					<label><input type="radio" name="status<?php echo $prodRow->pro_no ?>" value="1" class="on" <?php if ( $status == 1){echo 'checked';}?> >上架</label>
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



<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>