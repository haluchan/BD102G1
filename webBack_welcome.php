<?php
session_start();
ob_start();
if($_SESSION['adminName'] == ''){
	$_SESSION['adminName'] = $_SESSION['signInInfo'];
	$_SESSION['signInInfo'] = '';
	$_SESSION['signInDate'] =  date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));
}

?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::歡迎</title>
	<!-- 不准動的部分，以下三行 -->	
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 自己的css擺這裡 -->
	<!-- <link rel="stylesheet" href="css/webBack_pro.css"> -->
</head>
<body>
	<?php require_once('web_back_frame_top.php') ?>

	<nav>
				
		<div class="nav_item pageTitle">
			<h2>即刻菜園::新進資料</h2>
		</div>		
		<div class="clearfix"></div>
	</nav>

	<div>
		<?php
			try {
				require_once("php/connectGrowing_hope.php");
				$sql = "select *,lpad(pro_no, 3, 0) pro_realNo 
						from product 
						where pro_no = " . $pro_no . ";";
				$product = $pdo->query($sql);
			//新進案件event_status
			//新進回報


			//昨日(今日)募資截止
			//昨日(今日)結案


		//昨日活動截止(今日活動截止)

		//未出貨訂單order_status

		//未審核檢舉


		?>
	</div>







	<?php require_once('web_back_frame_bottom.php') ?>
</body>
</html>