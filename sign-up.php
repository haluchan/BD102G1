<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php require_once('Header_head.php'); ?>
<title>活動報名</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/sign-up.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font.css">

</head>
<body>

	<?php require_once('Header.php'); ?>



    <div class="sign-up">
    	<div class="sign-up-bg">
				<img src="src/image/sign-up/sign-up-bg.jpg" alt="幫助小農">
			</div>
		<div class="lightbox-target">
			<div >
				<!-- <a  id="sign-cancel"><img src="src/image/login/pop_close.png"></a> -->
			</div>
			
			<div class="sign-content">
				<h2>活動報名</h2>
				<div class="sign-title">
					<ul>
						<li>活動編號</li>
						<li>活動名稱</li>
						<li>會員編號</li>
						<li>活動費用</li>
						<li>會員姓名</li>
						<li>參加人數</li>
						<li>電子信箱</li>
						<li>電話</li>
					</ul>
				</div>
			
				<div class="sign-info">
					<ul>
						<li>A00001</li>
						<li>農村樂活之旅</li>
						<li>V00021</li>
						<li>NT:1000元</li>
						<li>王小明</li>
						<li><input type="number" name="Number-of-people" value="" min="0" placeholder="輸入參加人數"></li>
						<li><input type="text" name="email" value="" placeholder="輸入連絡信箱"></li>
						<li><input type="text" name="phone" value="" placeholder="輸入聯絡電話"></li>
					</ul>
				</div>
				<div class="sign-clear"></div>
				<div class="btn-item">
					<button type="submit" class="btn_green">
				確定報名</button>
				</div>
				<div class="sign-clear"></div>

			</div>
		</div>
		<div class="sign-clear"></div>

	</div>
<?php require_once('Footer.php'); ?>
<script type="text/javascript" src="js/login-ajax.js"></script>

	
</body>
</html>