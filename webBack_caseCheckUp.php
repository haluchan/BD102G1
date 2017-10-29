<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::訂單明細</title>
	<link rel="stylesheet" href="css/webBack_caseCheckUp.css">
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<!-- 自己的css擺這裡 -->
	

</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item pageTitle">

				<h2>上架確認</h2>
			</div>
			
			<div class="clearfix"></div>
</nav>


<div class="myForm">

	<?php 
		$event_no = $_REQUEST["event_no"];

		try{
			require_once("php/connectGrowing_hope.php");
			$sql = "select * from growing_hope.event where event_no ='$event_no'" ;
			$events = $pdo ->query($sql);
			$eventsRow = $events->fetchObject(); 
			$status = $eventsRow -> event_status;
	?>
	<input type="hidden" id="event_no" value="<?php echo $eventsRow -> event_no; ?>">

	<section class="data_info">
		<div class="case_title">
			<h2><input type="text" id="event_title" class="change" value="<?php echo $eventsRow -> event_title; ?>"></h2>
			<h3><input type="text" id="event_title_2" class="change" value="<?php echo $eventsRow -> event_title_2; ?>"></h3>
			<h4>在地 | 由 <span><input type="text" id="event_dept" class="change" value="<?php echo $eventsRow -> event_dept; ?>"></span>	提案</h4>
		</div>

		<div class='play-video col-sm-8' >
			<div class="video_item">
				<iframe class="video" width="560" height="315" src="<?php echo $eventsRow -> event_video;?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<input type="text" id="event_video" class="change" value="<?php echo $eventsRow -> event_video;?>">
		</div>

		<div class="case_data col-sm-4">
			<div class="case_tiem">
				<p class="hidden-xs">0 <span>人資助</span></p>
				<p class="hidden-xs">0 <span>天結束</span></p>

				<form>
					<select name="Program">
					　<option value="A">A. 1,000元小資自理餐</option>
					　<option value="B">B. 2,000元夏祭限定蔬果禮盒</option>
					　<option value="C">C. 3,000元夏祭限定蔬果禮盒(大)</option>
					</select><br>
					<button>我 要 資 助</button>
				</form>
				<p class="case_ing">
					專案正在募資中！<br>
					在 <input type="date" id="event_enddate" class="change" value="<?php echo $eventsRow -> event_deadline;?>"> 23:59 募資結束前，<br>
					至少募得 $<?php echo $eventsRow -> event_allow;?> 便募資成功。
				</p>

			</div>

		</div>
		<div class="progress col-sm-12 ">
			<div class="progress_bar">
				<div class="bar"></div>
			</div>
			<p class="amt">$<span class="now_money">0</span> / $<span class="target_money"><?php echo $eventsRow -> event_allow;?></span></p>
		</div>	
		<div class="clear"></div>
		<div class="navv">
			<ul>
				<li>專案內容</li>
				<li>專案進度</li>
				<li>留言評論</li>
				<li class="donate_nav">我 要 資 助</li>
			</ul>
			<div class="clear"></div>
		</div>

		<section class="case_content col-sm-12 ">
		<div class="content_title col-sm-12">
			<p class="title"><input type="text" id="event_txe_title" class="change" value="<?php echo $eventsRow -> event_txe_title;?>"></p>
		</div>


		<div class="content_txt col-sm-12">
			<div class=" content_img col-sm-2">
				<img src="src/image/funded/<?php echo $eventsRow -> event_pho ?>">
			</div>
			<div class="content_item col-sm-7">
				<p class="txt">
					<textarea class="change" id="event_txt"><?php echo $eventsRow -> event_txt ?>
					</textarea>
				</p>
			</div>
			<div class="content_img col-sm-3 hidden-xs">
				<!-- <img src="src/image/funded/farmer.png"> -->
			</div>
		</div>






		


		<div class="clear"></div>
	</section>
	<div class="clear"></div>
	<div class="btns">
		<button class="edit" disabled="disabled">確定修改</button>
		<?php 
			if ($status == "DI")  echo '<button class="up">上架成功</button>'; 
			else echo '<button class="btn up_now">立即上架</button>';
		?>
		<button class="btn back" onclick="javascript:location.href='webBack_caseStatus.php'">回上頁</button>
		

	</div>


	</section>






	

	

		
		
	<?php	

	}catch (PDOException $e) {
			  echo "錯誤行號 : ", $e->getLine(), "<br>";
			  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
		}
?>


<?php require_once('web_back_frame_bottom.php') ?>




<script>



	function $id(id){
		return document.getElementById(id);
	}	

		$('.change').change(function(){
			$('.edit').text('確定修改');
			$('.edit').removeAttr('disabled');
			$('.edit').addClass('btn');
		});

		$(".edit").click(function(){
			var eventObj = {};
			eventObj.event_no = $id("event_no").value;
			eventObj.event_title = $id("event_title").value;
			eventObj.event_title_2 = $id("event_title_2").value;
			eventObj.event_dept = $id("event_dept").value;
			// eventObj.event_video = $id("event_video").value;
			eventObj.event_enddate = $id("event_enddate").value;
			eventObj.event_txe_title = $id("event_txe_title").value;
			eventObj.event_txt = $id("event_txt").value;
			
		  //================

			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function (){
			 	if( xhr.readyState == 4){
			    	if( xhr.status == 200 ){
				    	// alert('修改成功');
			       }else{
			       		alert( xhr.status );
			       }
			   }
			}
			var data_info = "jsonStr=" + JSON.stringify(eventObj);
			console.log( data_info);
			var url = "webBack_caseEdit.php?" + data_info;
			xhr.open("Get", url, true);
			xhr.send(null);
			$(this).text('修改成功');
			$(this).attr('disabled');
			$(this).removeClass('btn');
		});

		$('.up_now').click(function(){
			var upObj = {};
			upObj.event_no = $id("event_no").value;
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function (){
			 	if( xhr.readyState == 4){
			    	if( xhr.status == 200 ){
				    	location.reload();
			       }else{
			       		alert( xhr.status );
			       		alert($id("event_no").value)
			       }
			   }
			}
			var data_info = "jsonStr=" + JSON.stringify(upObj);
			console.log( data_info);
			var url = "webBack_caseUp.php?" + data_info;
			xhr.open("Get", url, true);
			xhr.send(null);
		});


		

		

</script>

</body>
</html>