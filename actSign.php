<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::查看報名</title>
	
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" href="css/actSign.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item pageTitle">

				<h2>查看報名</h2>
			</div>
			<div class="nav_item">
				<div class="search">
					<input type="text" name="" placeholder="搜尋">

					<button><img src="src/image/web_back_frame/seaech.png"></button>
				<!-- 	<button><img src="src/image/web_back_frame/erase.png"></button> -->
				</div>
			</div>
			<div class="nav_item select">
				<!-- <span>狀態：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select> -->
			</div>
			<div class="nav_item select">
				<span>分類：</span>
				<select>
					<option value="">訂單編號</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select>
			</div>
			<div class="clearfix"></div>
		</nav>

<form class="myForm">
	<table cellspacing="1">
		<tr>
		
			<th>活動編號</th>
			<th>活動編號</th>
			<th>報名人</th>
			<th>信箱</th>
			<th>電話</th>
			<th>報名數量</th>
			
		</tr>
			<?php try {
			require_once("php/connectBeck.php");
    $sql = "select * from actSign";
 	//共有幾筆資料
	$sql = "select count(*) from actSign";
	$result = $pdo->query($sql);
	$result->bindColumn(1,$totalRecord);
	$result->fetch();

	//每頁有幾筆
	$recPerPage = 7;

	//共有幾頁
	$totalPage = ceil($totalRecord/$recPerPage);

	//設定好要開始抓取的位置
	if(isset($_GET["pageNo"])==false)
	  $pageNo=1;
	else  
	  $pageNo=$_GET["pageNo"];
	  
	$start = ($pageNo-1) * $recPerPage;

	$sql = "select * from actSign order by actSign_no limit $start,$recPerPage";
	$products = $pdo->query($sql);
    $orderItem = $pdo->query($sql);	
	
	while(  $resultset = $orderItem ->fetchObject() ){
?>
		<tr class="tdRow">
			<td><?php echo $resultset->actSign_no ;?></td>
			<td><?php echo $resultset->act_no ;?></td>
			<td><?php echo $resultset->actSign_name ;?></td>
			<td><?php echo $resultset->actSign_mail ;?></td>
			<td><?php echo $resultset->actSign_tel ;?></td>
			<td><?php echo $resultset->actSign_qty ;?></td>	
		</tr>


<?php	
}	

}
	catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";	
}
?>	  
</table>
</form>
<div style="display:compact;text-align:center" class="pages">
<?php
//印可連結的頁數資料
echo "<a href='?pageNo=1'>第一頁</a>&nbsp";
for($i=1; $i <= $totalPage;$i++){
  if($i==$pageNo)
    echo "<a href='?pageNo=$i' style='color:#F29600;border-bottom:1px solid #F29600;'>",$i,"</a>&nbsp&nbsp";
  else
    echo "<a href='?pageNo=$i'>",$i,"</a>&nbsp&nbsp";
}
echo "<a href='?pageNo=$totalPage'>最末頁</a>&nbsp";
?>
</div>
<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>