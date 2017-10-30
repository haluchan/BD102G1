<?php 
ob_start();
session_start();
 ?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


 <!-- plugin -->
<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick-theme.css"/>

<link rel="stylesheet" type="text/css" href="src/libs/lightbox2-master/src/css/lightbox.css">

<script type="text/javascript" src="src/libs/gsap/src/minified/TweenMax.min.js"></script>





<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
<!-- //scrollmagic 要拿掉滾動的名字 要跟ＪＳ另一個function 一起隱藏  -->
    <link href="css/event-inside.css" rel="stylesheet">

<?php require_once("Header_head.php"); ?>
   
   <title>活動詳情</title>

</head>
<body>





	<!-- nav -->

<?php require_once('Header.php'); ?>

	<div class="event">
		
		<!-- banner  -->
		<div class="event-banner">
			<div class="slides">
				<div><img src="src/image/event-inside-page/event-banner8.jpg"></div>
				<div><img src="src/image/event-inside-page/event-banner9.jpg"></div>
				<div><img src="src/image/event-inside-page/event-banner10.jpg"></div>
				<div><img src="src/image/event-inside-page/event-banner7.jpg"></div>
				<div><img src="src/image/event-inside-page/event-banner14.jpg"></div>
			</div>
		</div>

		
<?php 

$act_no=$_REQUEST["act_no"];


try {

	require_once("php/connectGrowing_hope.php");

	$eventInfo = "select * from activity a , growing_hope.activityPhoto_vu ap where a.act_no=ap.act_no and ap.act_no = $act_no ";

	$eventInsideInfo = $pdo->query( $eventInfo );
	
	$eventRow        = $eventInsideInfo->fetchObject();
	
	$photos          = $eventRow->pho_nos;
	
	$photosArry      = explode(",",$photos);
	
	$photosLength    = count($photosArry);

	// foreach ($photosArry as $key => $value) {
	// 	 echo $value, "<br>";
	// }

	// echo $photosLength;
    // echo $eventRow->act_title ;
    // echo $eventRow->act_host ;
    // echo $eventRow->act_detail ;
    // echo $eventRow->act_add ;
    // echo $eventRow->act_phone ;
    // echo $eventRow->act_price ;
    // echo $eventRow->act_date ;
	
	// $detail =  $eventRow->act_detail

?>




		<!-- 內容 -->
		<div id="trigger1"></div>
		<section class="main-bg event-ins-item1">

			<div class="event-row">
				<div class="main-container">
					<div class="title-frame">
						<img src="src/image/event-inside-page/event-title.png" alt="">
					</div>
					<div class="main-title">
						<h2><?php echo $eventRow->act_title ?></h2>
						<p>農場主人：<?php echo $eventRow->act_host ?></p>	
					</div>
					<div class="main-img">
							<img src="src/image/event-inside-page/main-img.png" alt="">
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</section>
			<div class="clear"></div>
		<section class="tree">
			<div class="tree-left">
					<img src="src/image/event-inside-page/deco-wood-01.gif" alt="">
			</div>
			<div class="tree-right">
				<img src="src/image/event-inside-page/deco-wood-01.gif" alt="">
			</div>
			<div class="clear"></div>
		</section>
		
		<!-- 說明 -->
		<div id="trigger2"></div>
		<section class="event-cotent event-ins-item2">
			
			<div class="main-container">
				<br>
				<p><?php echo nl2br($eventRow->act_detail) ?>
				</p>
				<br>
			</div>
		</section>	

		<!-- 活動地點 -->






		<div id="trigger3"></div>
		<form action="sign-up.php" method="get" accept-charset="utf-8">
		<input type="hidden" name="act_no" value="<?php $act_no?>" placeholder="">
		<section class="event-map event-ins-item3">
			<div class="event-row">
				<div class="event-map-content">
					<div class="event-info">
						<h1>活動資訊</h1>
						<ul>日期：<li><?php echo $eventRow->act_date ?></li></ul>
						<ul>電話：<li><?php echo $eventRow->act_phone ?></li></ul>
						<ul>費用：<li>NT<?php echo $eventRow->act_price ?>元</li></ul>
						<ul>地址：<li><?php echo $eventRow->act_add ?></li></ul>
						<a href="sign-up.php">
							<button type="submit" class="btn_green">我要報名</button>
							<input type="hidden" name="act_no" value="<?php echo $eventRow->act_no?>">
						</a>
					</div>
				<div class="event-map-img" >
					<img src="src/image/event-inside-page/map-img.png" alt="">
				</div>
				<div class="event-map-right">
					<img src="src/image/event-inside-page/map.png" alt="">
				</div>
				</div>
			</div>
			<div class="clear"></div>
		</section>
		</form>



		<!-- 活動回報 -->






		<div id="trigger4"></div>
		<section class="event-report event-ins-item4">
			<div class="event-report-title ">
				<img src="src/image/event-inside-page/event-report-title.png" alt="">
			</div>


			<div class="event-report-main">

<?php


	
	for ($i=0 ; $i<$photosLength ; $i++) { 
		// echo $eventRow->act_no, $photosArry[$i];


?>


		
				<div class="event-report-photo">
					<a href="src/image/event-inside-page/<?php echo $eventRow->act_no,$photosArry[$i];?>.jpg"  data-lightbox="roadtrip">

					<img src="src/image/event-inside-page/<?php echo $eventRow->act_no,$photosArry[$i];?>.jpg" alt="活動照片" >
					</a>
				</div>
		

<?php


		}
	
} catch (Exception $e) {

		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";
	
}







 ?>


			</div>
		
		</section>
		<div class="event-deck">



		
		<!-- footer -->
		<?php require_once('Footer.php'); ?>

		</div>
	</div>

	
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type ="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type ="text/javascript" src="src/libs/slick/slick/slick.min.js"></script>

<script type="text/javascript" src="src/libs/lightbox2-master/src/js/lightbox.js" ></script>

<script type="text/javascript" src="src/libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>

<script type="text/javascript" src="js/header.js"></script>

<script type="text/javascript" src="js/event-inside.js"></script>
<script type="text/javascript" src="js/login-ajax.js"></script>

</body>
</html>