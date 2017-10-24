<!DOCTYPE html>
<html>
	<head>
		<?php require_once('Header_head.php') ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- <link rel="stylesheet"  href="css/font.css"> -->
		<link rel="stylesheet"  href="css/application/applicationAfter.css">
		<script src="src/libs/jquery/dist/jquery.min.js"></script>
		<title>成功送出申請</title>
	</head>


	<body>  
		<?php require_once('Header.php') ?> 
		
		
		<div class="container">
		  	  <div class="feedback">
		    	<div class="feedbackTitle"><h2>您已成功送出申請</h2></div>
		    	<div class="feedbackCotent">
		    		<div>案件編號為:<span><?php echo str_pad($_GET['no'],5,'0',STR_PAD_LEFT)?></span></div>
					<div>申請人為:<span><?php echo $_GET['name']?></span></div>
		    	</div>
				<button class="btn_green"><a href="application.php">確認</a></button>	
			</div>
	   </div>

	<?php require_once('Footer.php') ?> 
  	
  	<script src="js/header.js"></script>
	<script src="js/application.js"></script>

	</body>
</html>