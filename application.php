<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet"  href="css/font.css">
		<link rel="stylesheet"  href="css/application/application.css">
		<script src=""></script>
		<title>Form</title>
	</head>


	<body>  
		<?php require_once('Header.php') ?>
	    <div class="container">
	    	
	    	<!-- 頁面標題 申請資助 -->
	    	<div class="applicationTitle">

	    		<!-- Icon -->
	    		<div class="Title item">
	    			<img src="src/image/application/write.svg">
	    		</div>

	    		<!-- 標題 -->
	    		<div class="Title item">
	    			<h1>申請資助</h1>
	    		</div>
	    		
	    	</div>
	    		

	    	<!-- 頁面說明文字 -->
	    	<div class="SubTitle">
	    		<p>常為銷售收成的作物而傷透腦筋?　為收入不穩定、要不要繼續下去而苦惱??</p>
	    		<p>填寫你的資助計劃，讓更多人看見你的理念!!</p>
	    	</div>


			<form>
		    	<div class="formStep">
		    		<div class="stepContent" id="hidden"  >
		    			<div class="stepAll item">
		    				<img src="src/image/application/step1.svg">
		    			</div>
		    			<div class="stepAll item">
		    				<img src="src/image/application/step2.svg">
		    			</div>
		    			<div class="stepAll item">
		    				<img src="src/image/application/step3.svg">
		    			</div>
		    		</div>
		    		<div class="stepContent">
		    			<div class="stepContentNumber">
		    				<img src="src/image/application/one.svg">
		    			</div>
		    			<h2>下載資助計畫表</h2>
		    			<button class="btn">下載</button>
		    		</div>

		    		
		    		<div class="stepContent">
		    			<div class="stepContentNumber">
		    				<img src="src/image/application/two.svg">
		    			</div>
		    			<h2>填寫基本資料</h2>
		    				
		    					<table>
		    						<tr>
		    							<th>姓名:</th>
		    							<td><input type="text" name="name" ></td>
		    						</tr>
		    						<tr>
		    							<th>性別:</th>
		    							<td class="radio">
		    								<div class="gender"><input type="radio" name="gender" id="male" value="male" >
		    								<label for="male">男</label></div>
		    								
		    								<div class="gender"><input type="radio" name="gender" id="female" value="female">
		    								<label for="female">女</label></div>
		    								
		    							</td>
		    						</tr>
		    						<tr>
		    							<th>身分證字號:</th>
		    							<td><input type="password" name="id" ></td>
		    						</tr>
		    						<tr>
		    							<th>地址:</th>
		    							<td><input type="text" name="add" ></td>
		    						</tr>
		    						<tr>
		    							<th>電話:</th>
		    							<td><input type="text" name="tel" ></td>
		    						</tr>
		    						<tr>
		    							<th>電子信箱:</th>
		    							<td><input type="text" name="mail" ></td>
		    						</tr>
		    						<tr>
		    							<th>帳戶:</th>
		    							<td><input type="text" name="account" ></td>
		    						</tr>
		    						<tr>
		    							<th>申請金額:</th>
		    							<td><input type="text" name="apply" ></td>
		    						</tr>
		    					</table>
		    					
		    				
		    		</div>
		    		<div class="stepContent">
		    			<div class="stepContentNumber">
		    				<img src="src/image/application/three.svg">
		    			</div>
		    			<div class="upItem">
		    				<h2>上傳計畫表</h2>
		    				<input type="file" name="" id="upload">
		    			</div>
		    			
		    		</div>
		    	</div>
	    	
		    	<div class="formSubmit">
		    		<input class="btn_green" type="submit" name="submit" value="確定送出">
		    	</div>
	    	
	    	</form>

	    </div>
	    

 <?php require_once('Footer.php') ?>
	</body>
</html>