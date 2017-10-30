<?php 
ob_start();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>即刻菜援</title>
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0">

<?php require_once('Header_head.php');  ?>


<link rel="stylesheet" href="css/font.css">
<link href="css/donate_info.css" rel="stylesheet">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/login.css" >
<!-- web-font -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="src/libs/jquery/dist/jquery.min.js"></script>
<script src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
<script src="js/change_SVG_color.js"></script>

<!-- scrollmagic -->
<script src="src/libs/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="src/libs/ScrollMagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script src="src/libs/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
</head>
<body>
<?php require_once('header.php');  ?>

<section class="donate_info">


<?php 

	$event_no = $_REQUEST['event_no'];
	
	if (($_SESSION['mem_no'] == null) || ($_SESSION['mem_no'] == '') ) {
		$mem_no = 99;
		$mem_pho= 'mem_9999.png';
	}else{
		$mem_no = $_SESSION['mem_no'];
		$mem_pho= $_SESSION['mem_pho'];
	}

//	$event_no = $_REQUEST['event_no'];
    $event_no = 1;
	// $mem_no = $_SESSION['mem_no'];
	try {

		require_once("php/connectGrowing_hope.php");
		$sql = "select * from growing_hope.donate_info where event_no = :event_no";
		$event = $pdo ->prepare($sql);
		$event->bindValue(":event_no", $event_no);
		$event->execute();

		$eventRow = $event->fetchObject();
		$reach =  ($eventRow->reach)*100;


 ?>






	<!-- 第一屏數據 -->
	<section class="data_info">
		<div class="case_title">
			<h2><?php echo $eventRow -> event_title; ?></h2>
			<h3><?php echo $eventRow -> event_title_2; ?></h3>
			<h4>在地 | 由 <span><?php echo $eventRow -> event_dept; ?></span>	提案</h4>
		</div>

		<div class='play-video col-xs-12  col-sm-8' >
		<input type="hidden" name="bar" value="<?php echo $eventRow->reach; ?>">
			<div class="video_item">
				<iframe class="video" width="560" height="315" src="<?php echo $eventRow -> event_video;?>" style='background-image: url(src/image/funded/video_img.jpg);' frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="progress col-xs-12 hidden-sm">
			<!-- <img src="src/image/index/run.svg"> -->
			<div class="progress_bar">
				<div class="bar">
					<img src="src/image/funded/run.gif" class="running_man"></div>
			</div>
			<p class="amt">$<span class="now_money"><?php echo $eventRow -> price;?></span> / $<span class="target_money"><?php echo $eventRow -> event_allow;?></span></p>
		</div>	

		<div class="case_data  col-xs-12  col-sm-4">
			<div class="case_tiem">
				<p class="hidden-xs"><?php echo $eventRow -> count_people;?> <span>人資助</span></p>
				<p class="hidden-xs"><?php echo $eventRow -> dday;?> <span>天結束</span></p>

				<form action="want_donate.php" method="GET" class="donate_form">
					<input type="hidden" name="event_no" value="<?php echo $_REQUEST['event_no']; ?>">
					<select name="dona_price" class="dona_price">
					　<option value="A">A. 1,000元小資自理餐</option>
					　<option value="B">B. 2,000元夏祭限定蔬果禮盒</option>
					　<option value="C">C. 3,000元夏祭限定蔬果禮盒(大)</option>
					</select><br>
					<button>我 要 資 助</button>
				</form>
				<p class="case_ing">
					專案正在募資中！<br>
					在 <?php echo $eventRow -> event_deadline;?> 23:59 募資結束前，<br>
					至少募得 $<?php echo $eventRow -> event_allow;?> 便募資成功。
				</p>

			</div>

		</div>
		<div class="progress hidden-xs col-sm-12 ">
			<!-- <img src="src/image/index/run.svg"> -->

			
			
			<div class="progress_bar">
				<div class="bar">
					<img src="src/image/funded/run.gif" class="running_man">
				</div>
			</div>
			<p class="amt">$<span class="now_money"><?php echo $eventRow -> price;?></span> / $<span class="target_money"><?php echo $eventRow -> event_allow;?></span></p>
		</div>	
		<div class="clear"></div>
	</section>

	<div class="clear"></div>

</section>












<!-- nva=================================================================================	 -->
	<nav class="col_xs_12 col_sm_12 main-nav">
		<div id="nav"></div>
		<div class="full-wrapper ">
			<div class="inner-nav xs_hidden">
				<ul>
					<li>
						<a href="#">專案內容</a>
					</li>
					<li>
						<a href="#">專案進度</a>
					</li>
					<li>
						<a href="#">留言評論</a>
					</li>
					<li class="donate_nav">
						<input type="button" name="want_donate" class="want_donate" value="我 要 資 助">
						<!-- <button class="want_donate">我 要 資 助</button> -->
						<!-- <a href="want_donate.php">我 要 資 助</a> -->
					</li>
				</ul>
			</div>
		<div class="clear"></div>
		</div>
	</nav>








<!-- ================================================================================= -->


<section class="donate_info">

	<section class="case_content col-sm-12 col-xs-12 ">
		<dir id="trigger1"></dir>
		<div class="content_title col-xs-12 col-sm-12">
			<p class="title"><?php echo $eventRow -> event_txe_title;?></p>
		</div>


		<div class="content_txt col-sm-12 col-xs-12">
			<div class=" content_img col-sm-2 col-xs-2">

				<img src="src/image/funded/<?php echo $eventRow -> event_pho ?>">

				<img src="src/image/funded/<?php echo $eventRow -> event_pho;?>">

			</div>
			<div class="content_item col-sm-7 col-xs-10">
				<p class="txt"><?php echo $eventRow -> event_txt;?></p>
				
			</div>
			<div class="content_img col-sm-3 hidden-xs">
				<img src="src/image/funded/farmer.png">
			</div>
		</div>


<?php 
		
	} catch (PDOException $e) {
		echo "行號: ",$e->getLine(), "<br>"; 
	  	echo "訊息: ",$e->getMessage() , "<br>"; 	
	}



 ?>



		<div class="food col-sm-12">
			<div id="trigger2"></div>
			<div class="food_title">
				<p>主要作物</p>
			</div>
			<?php 
				$plantstr = $eventRow -> event_plant;

				$plants = explode(",", $plantstr);
				$count = count($plants);
				$i = 0;
				while ( $i < $count ) {
					$sql = "select * from growing_hope.plant where plant_no ='$plants[$i]'" ;
					$plent = $pdo ->query($sql);
					$plentRow = $plent->fetchObject(); 
			?>
			<div class="food_item col-sm-3">
				<img src="src/image/funded/<?php echo $plentRow->plant_pho1; ?>" class="food_img1">

				<div class="food_img2">
					<p>
						<span><?php echo $plentRow->plant_name; ?></span><br>
						<?php echo $plentRow->plant_detail; ?>
					</p>
				</div>
			</div>

			<?php
					$i++;
				}
			 ?>
			
		</div>



		<div class="clear"></div>
	</section>



	<img src="src/image/funded/hr.png" class="food_hr">


	<!-- 進度回報==================================== -->
	<section class="progress_return">

		<h2>進度回報</h2>


		<?php 
				$sql = "select * from growing_hope.return where event_no =:event_no" ;
				$return = $pdo ->prepare($sql);
				$return->bindValue(":event_no", $event_no);
				$return->execute();
				while ( $returnRow = $return->fetchObject() ) {
					$frame = $returnRow -> return_frame;

		 ?>
		<div class="type <?php echo $frame;?>">

			<div class="trigger3"></div>
			<div class="type_img <?php if($frame == 'type_1'){ echo 'col-sm-12 col-xs-12';}else{echo 'col-sm-6 col-xs-6';} ?>">
				<img src="src/image/funded/<?php echo $returnRow -> return_pho; ?>">
			</div>
			<div class="type_txt <?php if($frame == 'type_1'){ echo 'col-sm-12 col-xs-12';}else{echo 'col-sm-6 col-xs-6';} ?>">
				<p class="title">
					<?php echo $returnRow -> return_remark; ?> <span class="date"><?php echo $returnRow -> return_date; ?></span> 
				</p>
				<p class="content">
					<?php echo $returnRow -> return_info; ?>
				</p>
				
			</div>
			<div class="clear"></div>
			<!--		 -->
		</div>
		<?php
			}
		 ?>
	 
	</section>








<!-- 留言評論======================================== -->
	<section class="message">
		<h2>留言評論</h2>
		<!-- 送出留言======================================== -->

	<div class="message_form" >
		<!-- <form action="php/messageInsert.php" method="GET"> -->
		<input type="hidden" name="event_no" value="<?php echo $_REQUEST['event_no']; ?>">
		<div class="message_box msg_box col-xs-12 col-sm-12">
			<div class="mem_photo col-sm-2 col-xs-2">
				<img src="src/image/member/<?php echo $mem_pho; ?>">
			</div>
			<div class="mem_txt col-sm-10 col-xs-10">
				<textarea cols="50" rows="3" wrap="off" class="content" id="msg_txt" placeholder="留言支持這個計畫!"></textarea>
			</div>
			
			<button class="col-sm-10 col-xs-10 msg">送出</button>
		<!-- </form>	 -->
		</div>
			
		<!-- <div class="clear"></div> -->

	<!-- 留言內容================-->

	<?php 
		$sql = "select * from growing_hope.message_event where event_no =:event_no ORDER BY `msg_date` desc" ;
		$msg = $pdo ->prepare($sql);
		$msg->bindValue(":event_no", $event_no);
		$msg->execute();
		while ( $msgRow = $msg->fetchObject() ) {


	?>

		<div class="message_box col-xs-12 col-sm-12">
			<div class="mem_photo col-sm-2 col-xs-2">
				<img src="src/image/member/<?php echo $msgRow -> mem_pho;?>">
			</div>
			<div class="mem_txt col-sm-10 col-xs-10">
				
				<p class="content">
					<?php echo $msgRow -> msg_txt;?>
					<span class="date"><?php echo $msgRow -> msg_date;?> <img src="src/image/funded/report.svg" class="report"></span>
					<input type="hidden" class="msg_no" value="<?php echo $msgRow ->msg_no;?>">
					<input type="hidden" class="mem_no" value="<?php echo $msgRow ->mem_no;?>">
				</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>

	<?php
		}
	?>





		<!-- 檢舉燈箱============ -->
		<div class="report_box">
			<div class="report_title"><p>
				協助我們瞭解發生的狀況<span class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
			</p>
		</div>
			<div class="report_detail">
				<p>發生了什麼問題?</p>
				<ul>
					<li>
						<input type="radio" name="report_ans" value="1"> 暴力或禁止的內容
					</li>
					<li>
						<input type="radio" name="report_ans" value="2"> 這會冒犯他人
					</li>
					<li>
						<input type="radio" name="report_ans" value="3"> 內容有所誤導或詐騙
					</li>
				</ul>
				<button class="rexport_check">確定</button>
				<div class="clear"></div>
			</div>

		<div class="clear"></div>
	</section>




</section>







<?php require_once('Footer.php');  ?>


<script type="text/javascript" src="js/donate_info_tweenmax.js"></script>
<script type="text/javascript" src="js/login-ajax.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript">

	$(function(){


		$('.want_donate').click(function(){
			$('.donate_form').submit();
		});

		$('.msg').click(function(){

			if (<?php echo $mem_no; ?> == 99) {
				alert('請登入!');
				var spanLogin = $id("spanLogin");
				var lightboxbg= $id("lightbox-bg");
				if(spanLogin.innerHTML == "註冊/登入"){
					lightboxbg.style.display = "block";
					lightboxbg.style.opacity = '1';
					// lightboxbg.style.transition = "all , 1s";


				}else{
					spanLogin.innerHTML = "註冊/登入";
					$id("memMail").value="";
					$id("memPsw").value="";
				}
			}else{

				var msgObj = {};
				msgObj.event_no = "<?php echo $_REQUEST['event_no']; ?>";
				msgObj.mem_no = "<?php echo $mem_no; ?>";
				msgObj.msg_txt = document.getElementById('msg_txt').value;



				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange=function (){
				 	if( xhr.readyState == 4){
				    	if( xhr.status == 200 ){
				
					    	message_box = document.createElement('div');
					    	message_box.className = 'message_box col-xs-12 col-sm-12';
					    	


					    	// ====第一個div
					    	mem_photo = document.createElement('div');
					    	mem_photo.className = "mem_photo col-xs-2 col-sm-2";

					    	mem_img = document.createElement('img');
					    	mem_img.src='src/image/member/mem_<?php echo $mem_no;?>.png'

					    	// append
					    	// mem_photo;
							message_box.appendChild(mem_photo).appendChild(mem_img);


					    	// ====第二個div
					    	mem_txt = document.createElement('div');
					    	mem_txt.className = 'mem_txt col-sm-10 col-xs-10';

					    	message_box.appendChild(mem_txt);

					    	content = document.createElement('p');
					    	content.className = 'content';
					    	content.innerText = document.getElementById('msg_txt').value;

					    	date = document.createElement('span');
					    	date.className = 'date';
					    	today = new Date();
							datetime = today.getFullYear()+"/"+ (today.getMonth()+1)+ "/" + today.getDate() +" "+ today.getHours() +":"+ today.getMinutes()+" ";
					    	date.innerText = datetime;

					    	report = document.createElement('img');
					    	report.className = 'report';
					    	report.src='src/image/funded/report.svg';

					    	// append
					    	// date.;
					    	// content;
					    	// mem_txt;
					    	message_box.appendChild(mem_txt).appendChild(content).appendChild(date).appendChild(report);

					    	clear = document.createElement('div');
					    	clear.className = 'clear';
					    	mem_txt.appendChild(clear);

					    	message_box.appendChild(clear);

					    	$('.msg_box').after(message_box);

					    	// append_over=======
					    	document.getElementById('msg_txt').value = "";


					    	
				       }else{
				       		alert( xhr.status );
				       		alert($id("event_no").value)
				       }
				   }
				}
				var data_info = "jsonStr=" + JSON.stringify(msgObj);
				console.log( data_info);
				var url = "messageInsert.php?" + data_info;
				xhr.open("Get", url, true);
				xhr.send(null);
			}
		});
		


		$(".date").click(function(){
			if (<?php echo $mem_no; ?> == 99) {
				alert('請登入!');
				var spanLogin = $id("spanLogin");
				var lightboxbg= $id("lightbox-bg");
				if(spanLogin.innerHTML == "註冊/登入"){
					lightboxbg.style.display = "block";
					lightboxbg.style.opacity = '1';
				}else{
					spanLogin.innerHTML = "註冊/登入";
					$id("memMail").value="";
					$id("memPsw").value="";

				}
			}else{
				$(".report_box").css({'display':'block'});
				msg_no = $(this).parent().children('.msg_no').val();

			}

		  

		 });

		$(".close").click(function(){
		   $(".report_box").css({
				'display':'none'
			});
		 });

		$('.rexport_check').click(function(){
			var rexportObj = {};
			rexportObj.msg_no = msg_no;
			rexportObj.xmem_no = <?php echo $mem_no; ?>;
			rexportObj.x_txt = $("input[name='report_ans']").val();



			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function (){
			 	if( xhr.readyState == 4){
			    	if( xhr.status == 200 ){
			    		$(".report_box").css({
							'display':'none'
						});
						alert('檢舉成功，謝謝您的提醒，我們將盡速完成審查!');

			    	}else{
				       	alert( xhr.status );
			       }
			   }
			}


			var data_info = "jsonStr=" + JSON.stringify(rexportObj);
			console.log( data_info);
			var url = "xreportInsert.php?" + data_info;
			xhr.open("Get", url, true);
			xhr.send(null);





		});
	





	})

	



</script>
	 
</body>
</html>




