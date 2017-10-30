
<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::新增活動</title>
	
	<!-- 不准動的部分，以下三行 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" type="text/css" href="css/activity.css">
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- <link rel="stylesheet" href="css/webBack_orderItem.css"> -->
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item pageTitle">

				<h2>新增活動</h2>
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


 <form action="activitySend.php" method="post" enctype="multipart/form-data">

	 	<table class="activity" cellpadding="1">
		<tr>
			<td>活動名稱</td>
			<td><input type="text" name="act_name"></td>
		</tr>
		<tr>
			<td>申請日期</td>
			<td><input type="date" name="act_date"></td>
		</tr>
		<tr>
			<td>活動地點</td>
			<td><input type="text" name="act_loc"></td>
		</tr>
		<tr>
			<td>限制人數</td>
			<td><input type="text" name="act_limit"></td>
		</tr>
		<tr>
			<td>活動費用</td>
			<td><input type="text" name="act_price"></td>
		</tr>
		<tr>
			<td>備註</td>
			<td><input type="text" name="act_txt"></td>
		</tr>
		<tr>
			<td>開始日期</td>
			<td><input type="date" name="act_start"></td>
		</tr>
		<tr>
			<td>結束日期</td>
			<td><input type="date" name="act_end"></td>
		</tr>
		<tr>
			<td>上傳照片</td>
			<td><input type="file" name="picture"></td>
		</tr>
		<tr>
			<th colspan="2"><button class="btn1" type="submit">確定新增</button></th>
			
		</tr>
		

	</table>

	 </form>  


<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>