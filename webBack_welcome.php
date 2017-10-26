<?php
session_start();
ob_start();
$_SESSION['adminName'] = $_SESSION['signInInfo'];
$_SESSION['signInInfo'] = '';
$_SESSION['signInDate'] =  date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));
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
			<h2>即刻菜園::後台很硬</h2>
		</div>

		<!-- <div class="nav_item ">
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
		</div> -->
		
		<div class="clearfix"></div>
	</nav>








	<?php require_once('web_back_frame_bottom.php') ?>
</body>
</html>