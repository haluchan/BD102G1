<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet"  href="css/font.css">
		<link rel="stylesheet"  href="css/application/application.css">
		<script src="src/libs/jquery/dist/jquery.min.js"></script>
		<title>表單</title>
	</head>


	<body>  
		 <?php require_once('Header.php') ?> 
		<div class="navbar">
			<div class="navbarli" id="bara">
				<p>申請資助</p>
			</div>
			<div class="navbarli" id="barb">
				<p>查詢案件</p>
			</div>
			<div class="navbarli" id="barc">
				<p>回報進度</p>
			</div>
		</div>
		
		<div class="containAll">
		    <div class="container one" id="apply">  	
		    	<!-- 頁面標題 申請資助 -->
		    	<div class="applicationTitle">
		    		<!-- Icon -->
		    		<div class="Title item">
		    			<img src="src/image/application/write.png">
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
			    				<img src="src/image/application/step1.png">
			    			</div>
			    			<div class="stepAll item">
			    				<img src="src/image/application/step2.png">
			    			</div>
			    			<div class="stepAll item">
			    				<img src="src/image/application/step3.png">
			    			</div>
			    		</div>
			    		<div class="stepContent">
			    			<div class="stepContentNumber">
			    				<img src="src/image/application/one.png">
			    			</div>
			    			<h2>下載資助計畫表</h2>
			    			<a class="btn_brown" download href="src/image/application/donateForm.docx">下載</a>	
			    		</div>
			    		<div class="stepContent">
			    			<div class="stepContentNumber">
			    				<img src="src/image/application/two.png">
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
			    				<img src="src/image/application/three.png">
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
	    



	     <div class="container two" id="report"> 	
	    	<!-- 頁面標題 回報進度 -->
	    	<div class="applicationTitle">
	    		<!-- Icon -->
	    		<div class="Title item">
	    			<img src="src/image/application/write.png">
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
		    			<div class="td">選擇版型:</div>
		    			<div class="td">
		    				<input type="radio" name="frame" id="frameA"><label for="frameA">A</label>
		    				<input type="radio" name="frame" id="frameB"><label for="frameB">B</label>
		    				<input type="radio" name="frame" id="frameC"><label for="frameC">C</label>
		    			</div>
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




	    <div class="container three" id="search"> 	
	    	<!-- 頁面標題 查詢進度 -->
	    	<div class="applicationTitle">
	    		<!-- Icon -->
	    		<div class="Title item">
	    			<img src="src/image/application/search.png">
	    		</div>
	    		<!-- 標題 -->
	    		<div class="Title item">
	    			<h1>查詢案件</h1>
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
		    	</div>
	    	</form>
			<div class="formSubmit">
		    	<input class="btn_green" type="submit" name="submit" value="確定送出">
		    </div>
		    <div class="feedback">
		    	<div class="feedbackTitle"><h2>查詢結果</h2></div>
		    	<div class="feedbackCotent">
		    		<div>您的案件編號為:<span>123</span></div>
					<div>申請日期為:<span>2017-08-08</span></div>
					<div>目前狀態為:<span>審核中</span></div>
		    	</div>
				<button class="btn_green">確認</button>	
			</div>
	    </div>
	</div>

  <?php require_once('Footer.php') ?> 
 	<script>
		document.getElementById("bara").onclick=apply;
    	function apply(){
    		document.getElementById("search").style.display="none";
    		document.getElementById("report").style.display="none";
    		document.getElementById("apply").style.display="";
    	}
    	document.getElementById("barc").onclick=report;
    	function report(){
    		document.getElementById("report").style.display="";
    		document.getElementById("apply").style.display="none";
    		document.getElementById("search").style.display="none";
    	}
    	document.getElementById("barb").onclick=search;
    	function search(){
    		document.getElementById("apply").style.display="none";
    		document.getElementById("report").style.display="none";
    		document.getElementById("search").style.display="";
    	}

 	window.onload=apply;
 	</script>
	</body>
</html>