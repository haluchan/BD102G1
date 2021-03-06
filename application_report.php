<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet"  href="css/font.css">
		<link rel="stylesheet"  href="css/application/application_report.css">
		<script src=""></script>
		<title>Form</title>
	</head>


	<body>  
		<?php require_once('Header.php') ?>
	    <div class="container"> 	
	    	<!-- 頁面標題 回報進度 -->
	    	<div class="applicationTitle">

	    		<!-- Icon -->
	    		<div class="Title item">
	    			<img src="src/image/application/write.svg">
	    		</div>

	    		<!-- 標題 -->
	    		<div class="Title item">
	    			<h1>回報進度</h1>
	    		</div>
	    		
	    	</div>   	

			<form  action="" method="get">
		    	<div  class="formContent table">		    		
		    		<div class="tr">
		    			<div class="td"><label for="number">案件編號:</label></div>
		    			<div class="td"><input type="text" name="number" id="number" placeholder="請輸入案件編號共5碼"></div>
		    		</div>
		    		<div class="tr">
		    			<div class="td"><label for="name">申請人姓名:</label></div>
		    			<div class="td"><input type="text" name="name" id="name"></div>
		    		</div>
		    		<div class="tr">
		    			<div class="td"><label for="id">申請人身分證字號:</label></div>
		    			<div class="td"><input type="password" name="id" id="id"></div>
		    		</div>

		    		<div class="tr">
		    			<div class="td"><label for="photo">上傳照片</label></div>
						<div class="td"><input type="file" name="" id="photo"></div>
		    		</div>

		    		<div class="tr">
		    			<div class="td"><label>進度說明</label></div>
						<div class="td"><textarea  rows="10" cols="25"></textarea></div>
		    		</div>
		    	</div>
	    	</form>
			
			<div class="formSubmit">
		    	<input class="btn_green" type="submit" name="submit" value="確定送出">
		    </div>
	    </div>
	    

 <?php require_once('Footer.php') ?>
	</body>
</html>