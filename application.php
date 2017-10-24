<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require_once('Header_head.php') ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- <link rel="stylesheet"  href="css/font.css"> -->
		<link rel="stylesheet"  href="css/application/application.css">
		<script src="src/libs/jquery/dist/jquery.min.js"></script>
		<title>資助相關表單</title>
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
		    	<div class="applicationTitle">
		    		<div class="Title item">
		    			<img src="src/image/application/write.png">
		    		</div>
		    		<div class="Title item">
		    			<h2>申請資助</h2>
		    		</div>	
		    	</div>	
		    	<div class="SubTitle">
		    		<p>常為銷售收成的作物而傷透腦筋?　為收入不穩定、要不要繼續下去而苦惱??</p>
		    		<p>填寫你的資助計劃，讓更多人看見你的理念!!</p>
		    	</div>
				<form action="php/applicationInsert.php" method="post" enctype="multipart/form-data">
			    	<div class="formStep">
			    		<div class="stepContent">
			    			<div class="stepContentNumber">
			    				<img src="src/image/application/one.png">
			    			</div>
			    			<h3>填寫申請人基本資料</h3>
			    			<h4><span>*</span>項目為必填</h4>
			    			<div  class="formContent table">		    		
					    		<div class="tr">
					    			<div class="td"><label for="nameApply">姓名</label></div>
					    			<div class="td"><input type="text" name="name" id="nameApply"></div>
					    			<div class="td"><label for="gender">性別</label></div>
					    			<div class="td">
					    				<input type="radio" name="gender" value="1">男
					    				<input type="radio" name="gender" value="2">女
					    			</div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label for="idApply">身分證字號</label></div>
					    			<div class="td"><input type="text" name="id" id="idApply"></div>
					    			<div class="td"><label for="birth">出生年月日</label></div>
					    			<div class="td"><input type="date" name="birth" id="birth"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label for="tel">電話</label></div>
					    			<div class="td"><input type="text" name="tel" id="tel"></div>
					    			<div class="td"><label for="mail">電子信箱</label></div>
					    			<div class="td"><input type="mail" name="mail" id="mail"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label for="add">地址</label></div>
									<div class="td"><input type="text" name="add" id="add"></div>
					    		</div>
					    	</div>	
			    		</div>

			    		<div class="stepContent">
			    			<div class="stepContentNumber">
			    				<img src="src/image/application/two.png">
			    			</div>
			    			<h3>資助案內容</h3>
		    				<div  class="formContent table">		    		
					    		<div class="tr">
					    			<div class="td"><label for="title">專案主標題</label></div>
					    			<div class="td"><input type="text" name="title"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label for="title_2">副標題</label></div>
					    			<div class="td"><input type="text" name="title_2"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label for="cover">封面影像</label></div>
					    			<div class="td"><input type="file" name="cover"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label for="txtTitle">內容標題</label></div>
									<div class="td"><input type="text" name="txtTitle"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label>內容說明</label></div>
									<div class="td"><textarea  rows="10" cols="25" name="txt"></textarea></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label>內容照片</label></div>
									<div class="td"><input type="file" name="pho"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label>主要生產作物</label></div>
									<div class="td"><input type="checkbox" name="plant" value="banana">香蕉
													<input type="checkbox" name="plant" value="apple">蘋果
													<input type="checkbox" name="plant" value="tomato">番茄
													<input type="checkbox" name="plant" value="orange">橘子
									</div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label>代表人/單位</label></div>
									<div class="td"><input type="text" name="dept"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label>申請金額</label></div>
									<div class="td"><input type="text" name="need"></div>
					    		</div>
					    		<div class="tr">
					    			<div class="td"><label>帳戶</label></div>
									<div class="td"><input type="text" name="account"></div>
					    		</div>
					    	</div>		

			    		</div>
			    	</div>
		    	
			    	<div class="formSubmit">
			    		<input type="hidden" name="form" value="new">
			    		<input class="btn_green" type="submit" name="submit" value="確定送出" >
			    	</div>
		    	</form>
		    </div>
	    

<!-- ========================回報進度============================= -->

	     <div class="container two" id="report"> 	
	    	<div class="applicationTitle">
	    		<div class="Title item">
	    			<img src="src/image/application/write.png">
	    		</div>
	    		<div class="Title item">
	    			<h2>回報進度</h2>
	    		</div>
	    	</div>  

			<form   action="php/applicationInsert.php" method="post" enctype="multipart/form-data">
		    	<div  class="formContent table">		    		
		    		<div class="tr">
		    			<div class="td"><label for="numberRe">案件編號</label></div>
		    			<div class="td"><input type="text" name="event_noRe"  placeholder="" id="numberRe"></div>
		    		</div>		    		
		    		<div class="tr">
		    			<div class="td"><label for="photo">上傳照片</label></div>
						<div class="td"><input type="file" name="return_remark"></div>
		    		</div>
		    		<div class="tr">
		    			<div class="td"><label for="remark">進度說明</label></div>
						<div class="td"><textarea  rows="10" cols="25" name="return_info" id="remark"></textarea></div>
		    		</div>
		    	</div>   			
				<div class="formSubmit">
					<input type="hidden" name="form" value="report">
		    		<input class="btn_green" type="submit" name="submit" value="確定送出">
		   		</div>
			</form>
	    </div>


<!-- ========================查詢案件============================= -->

	    <div class="container three" id="search"> 	
	    	<div class="applicationTitle">
	    		<div class="Title item">
	    			<img src="src/image/application/search.png">
	    		</div>
	    		<div class="Title item">
	    			<h2>查詢案件</h2>
	    		</div>
	    	</div>   	
			<div class="form">
		    	<div  class="formContent table">		    		
		    		<div class="tr">
		    			<div class="td"><label for="number">案件編號</label></div>
		    			<div class="td"><input type="text" name="event_no" placeholder="" id="number"></div>
		    		</div>
		    		<div class="tr">
		    			<div class="td"><label for="name">申請人姓名</label></div>
		    			<div class="td"><input type="text" name="event_name" id="name" ></div>
		    		</div>
		    		<div class="tr">
		    			<div class="td"><label for="id">申請人身分證字號</label></div>
		    			<div class="td"><input type="text" name="event_idno" id="id"></div>
		    		</div>	
		    	</div>
	    	
				<div class="formSubmit">
			    	<button class="btn_green" name="submit" value="search">確定送出</button>
			    </div>
		    </div>
		    <div id="showPanel"></div>
		</div>


  	<?php require_once('Footer.php') ?> 
  	
  	<script src="js/header.js"></script>
	<script src="js/application.js"></script>
	
	<script>
		$('.btn_green').click(function(){
			 caseNumber =($(this).attr("value"));
			 if(caseNumber=="search"){
				 event_no=$('input[name="event_no"]').val();//查詢案件 ajax用
				 event_name=$('input[name="event_name"]').val();//查詢案件 ajax用
				 event_idno=$('input[name="event_idno"]').val();//查詢案件 ajax用
				 getMember();
			 }	
			 // alert("no"+event_no+"name"+event_name+"idno"+event_idno);
			 // return_remark=$('input[name="return_remark"]').val();
			 // return_info=$('textarea[name="return_info"]').val();		
		});



		// function showError(jsonStr){
		// 	var eventRow = JSON.parse( jsonStr );
		// 	var str = "<table id='feedbackTable'>";
		// 	str += "<tr><th>處理結果</th><td>" + eventRow.msg + "</td></tr>";
		// 	str += "</table>";
		//  	document.getElementById("showPanel").innerHTML = str;
		// }



		function showMember(jsonStr){
  			var eventRow = JSON.parse( jsonStr );
  			// var msg = JSON.parse( jsonStr );
  			// alert(msg.msg);

		 	var str = "<table id='feedbackTable'>";
		 	var condition;
		 	status=(eventRow.event_status);
		 	// alert(status);
		 	switch (status){
		 		case 'F':
		 		condition="審核中";	
		 		break;

		 		case 'P':
		 		condition="審核通過";
		 		break;

		 		case 'R':
		 		condition="案件退回";
		 		break;

		 		case 'DI':
		 		 condition="募資中";
		 		break;

		 		case 'DE':
		 		condition="募資結束";
		 		break;

		 		case 'CI':
		 		condition="案件進行中";
		 		break;

		 		case 'CN':
		 		condition="結案";
		 		break;
		 	}
		 	
		 	str += "<tr><th>案件編號</th><td>" + eventRow.event_no + "</td></tr>";
		 	str += "<tr><th>案件標題</th><td>" + eventRow.event_title + "</td></tr>";
		 	str += "<tr><th>申請日期</th><td>" + eventRow.event_enddate + "</td></tr>";
		 	str += "<tr><th>狀態</th><td>" + condition + "</td></tr>";
		 	str += "</table>";
		 	document.getElementById("showPanel").innerHTML = str;
		}

		function getMember(){
			// var msg="有錯";
  			var xhr = new XMLHttpRequest();
 			xhr.onreadystatechange=function (){
	    		if( xhr.readyState == 4){
	       			if( xhr.status == 200 ){
	       				// alert("結果出爐");
	       				// alert(xhr.responseText);
	       				if((xhr.responseText).indexOf('error') !== -1){
	       					// alert(xhr.responseText);
	       					alert("輸入資料有誤 請重新輸入");
	       					// exit();
	       				}else{
	        			showMember(xhr.responseText);
	        			}
	      			}else{
	          			alert( xhr.status );
	       			}
	   			}
  			}
  		
		  var url = "php/applicationInsert.php?form="+caseNumber+"&event_no="+event_no+"&event_name="+event_name+"&event_idno="+event_idno;
		  xhr.open("Get", url, true);
		  xhr.send( null );
		}
	</script>
	</body>

</html>