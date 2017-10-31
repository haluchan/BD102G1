<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::訂單明細</title>
	<link rel="stylesheet" href="css/webBack_orderItem.css">
	
	<!-- 不准動的部分，以下三行 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item pageTitle">

				<h2>訂單明細</h2>
			</div>
			
			<div class="nav_item ">
			<div class="search">
				<input type="text" name="" placeholder="搜尋">

				<button><img src="src/image/web_back_frame/seaech.png"></button>
				<button><img src="src/image/web_back_frame/erase.png"></button>
			</div>
		</div>
		
		<div class="nav_item select">
			<span>類別：</span>
			<select>
				<option value="">不限</option>
				<option value="">不限</option>
				<option value="">不限</option>
			</select>
		</div>
		<div class="nav_item select">
			<span>類別：</span>
			<select>
				<option value="">全部</option>
				<option value="">種子</option>
				<option value="">魚缸</option>
			</select>
		</div>
			
			<div class="clearfix"></div>
		</nav>

<form class="myForm">
	<table cellspacing="1">
		<tr>
		
			<th></th>
			<th>商品編號</th>
			<th>商品名稱</th>
			<th>商品數量</th>
			<th>商品價格</th>
			
		</tr>
		<?php
		$item=$_REQUEST["order_no"];

		try {
			require_once("php/connectBeck.php");

    $sql = "select * from orderitem where order_no='$item' ";
    
    $orderitem = $pdo->query($sql);	
	
	while($resultset = $orderitem ->fetchObject()) {
	 
?>
		<tr class="tdRow">
			<td><?php echo $resultset->order_no ;?></td>
			<td><?php echo $resultset->pro_no ;?></td>
			<td><?php echo $resultset->pro_name ;?></td>
			<td><?php echo $resultset->orderItem_qty ;?></td>
			<td><?php echo $resultset->pro_price ;?></td>
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
<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>