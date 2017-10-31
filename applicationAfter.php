<!-- <!DOCTYPE html> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> -->
	<head>
		<?php require_once('Header_head.php') ?>
		<meta charset="utf-8">
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=big5">  -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- <link rel="stylesheet"  href="css/font.css"> -->
		<link rel="stylesheet"  href="css/application/applicationAfter.css">
		<script src="src/libs/jquery/dist/jquery.min.js"></script>
		<title>申請結果</title>
	</head>


	<body>  
		<?php require_once('Header.php') ?> 
		
		
		<div class="container">
		  	  <div class="feedback">
		    	<div class="feedbackTitle"><h2><?php echo $_GET['title']?></h2></div>
		    	<div class="feedbackCotent">
		    		<div>案件編號<span><?php echo str_pad($_GET['no'],5,'0',STR_PAD_LEFT)?></span></div>
					<div><?php echo $_GET['item']?><span><?php echo $_GET['name']?></span></div>
					
		    	</div>
				<a href="application.php"><button class="btn_green"> 確定</button></a>	
			</div>
	 	 
	   </div>

	 <?php require_once('Footer.php') ?>
  	
  	<script src="js/header.js"></script>
	<!-- <script src="js/application.js"></script> -->


	</body>
</html>