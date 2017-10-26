<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::訂單總覽</title>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" href="css/webBack_ordermaster.css">
	<!-- 不准動的部分，以下三行 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item pageTitle">

				<h2>訂單總覽</h2>
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
			<div class="clearfix"></div>
		</nav>
<form class="myForm">
	<table cellspacing="1">
		<tr>
			
			<th>訂單編號</th>
			<th>會員編號</th>
			<th>使用紅利</th>
			<th>折抵金額</th>
			<th>訂單總額</th>
			<th>訂單狀態</th>
			<th>訂單日期</th>
			<th>備註</th>
			<th>配送方式</th>
			<th>送貨地址</th>
			<th>聯絡電話</th>
			<th>收件人</th>
			<th>出貨日</th>
			
		</tr>
		<?php try {
			require_once("php/connectBeck.php");
    	$sql = "select * from ordermaster";
    
    	$ordermaster = $pdo->query($sql);	
	
		while(  $resultset = $ordermaster ->fetchObject() ){
		?>
		<tr class="tdRow">
			<td><a href="orderItem.php?order_no=<?php echo $resultset->order_no; ?>"><?php echo $resultset->order_no ;?></a></td>
			<td><?php echo $resultset->mem_no ;?></td>
			<td><?php echo $resultset->order_bonus ;?></td>
			<td><?php echo $resultset->order_cut ;?></td>
			<td><?php echo $resultset->order_total ;?></td>
			<td><?php if( $resultset->order_status == 1){echo "已處理";}else{
				echo "未處理";} ;?></td>
			<td><?php echo $resultset->order_date ;?></td>
			<td><?php echo $resultset->order_remark ;?></td>
			<td><?php if( $resultset->order_send == 1){echo "宅配";}else{
				echo "超商取貨";} ;?></td>
			<td><?php echo $resultset->order_add ;?></td>
			<td><?php echo $resultset->order_tel ;?></td>
			<td><?php echo $resultset->order_name ;?></td>
			<td><?php echo $resultset->order_shipdate ;?></td>
			
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