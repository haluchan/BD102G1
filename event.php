<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once('Header_head.php') ?>
<meta charset="utf-8">
<title>體驗活動</title>
<link rel="stylesheet" href="css/imagehover.css-master/css/imagehover.min.css">
<link rel="stylesheet" type="text/css" href="css/event.css">
<link rel="stylesheet" type="text/css" href="css/font.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<script type="text/javascript" src="src/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script type="text/javascript" src="src/libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>

</head>
<body>
	<?php require_once('Header.php') ?>
	<div class="container">
<header class="header">
	<img src="src/image/event/headimg.png" alt="" style="width:100%;">
	<div class="headertext">
		小農活動<br>體驗生活
	</div>
</header>

	
	<!-- ========== -->
  

	
	<div class="firstblock">
		<div class="firstblockin">
			<!-- <img src="src/image/event/tunagari_anime.gif" alt=""> -->
				<div class="firstblockbg">
					
				<div class="firstblockp">
					
					<p>
					做自己的食物、過自然的生活，小農體驗活動讓你融入當地小農的生活，了解農作的生長、收成，親自採收無農藥的新鮮蔬果，最適合親子同遊、家族出遊，品嚐現採作物的美味，本農場飼養的奶牛從加拿大進口，飼喂苜蓿草，生產出的牛奶香濃可口，品質絕佳。農場內設有露天茶座、露營烤肉區和森林浴場，和森林步道區。</p>
				</div>
						


				</div>
		</div>
		
	</div>

<div class="section-border">

</div>

<div class="clear"></div>
		<!-- ==================== -->
		<div class="titleblock">

			<div class="titletext">
				<h2>報名中</h2>
				<div class="titletextli">
					<p>透過專業領域的小農帶路，</p>
					<p>體驗另一種人生。</p>
				</div>
				
				<img src="" alt="">
			</div>
			
		</div>	

<div class="secondblock">
	<div class="secondblockin">
		<div id="trigger1"></div>
	<ul>


<?php try {
			require_once("php/connectBeck.php");
	
    $sql = "select * from activity a , activityPhoto_vu ap where a.act_no=ap.act_no and ap.act_no and act_date > '2017-10-25'";
    
    $activity = $pdo->query($sql);	
	
	while($resultset = $activity ->fetchObject()){
		
		$act_name = $resultset->act_name;
		$act_no = $resultset->act_no;
		$act_txt = $resultset->act_txt;
		$pho_nos = $resultset->pho_nos;
?>

<!-- <input type="submit" style="display:none";>			 -->
		<li class="show col-xs-12">
				<div class="img">
				<figure class="imghvr-blur" style="background-color:#64b464;">
					<img src="src/image/event/<?php echo $act_no,1; ?>.jpg" alt="">
			
				<figcaption style="background-color:#64b464";>
			   	<h4><?php echo $act_txt;?></h4>
			    </figcaption>
				    <a href="event-inside.php?act_no=<?php echo $act_no; ?>">
				    </a>
				</figure>
				</div>	
				
			<div class="balloon">
					<p><?php echo $act_name;?></p> 		
			</div>
			
		</li>
<?php			
		}
	
?>	  

<!-- 
			<li class="show col-xs-12">
			<a href="#">
				<div class="img">	
					<img src="src/image/event/07.jpg" alt="">
				</div>
			</a>
				<div class="balloon">
					<p>農家講解，了解小農</p> 		
				</div>
		</li>
		 -->


		<div class="clear"></div>
	</ul>
	<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>
<!-- ================ -->
<div class="titleblocks">
		<div class="titletexts">
				<h2>活動紀錄</h2>
				<!-- <img src="src/image/event/sankaku_garland4.png" alt=""> -->
			</div>
			<img class=" bglineyama" src="src/image/event/bg_line_yama_white.png" alt="">
</div>	
<!-- ================ -->
<div class="bgyama">
</div>
<div class="thirdblock" >
	
	<div class="thirdblockin">
		<div id="trigger2"></div>
	
<!-- select act_name,act_no,date(act_date) as act_date,act_loc from activity
    where act_date -->

<?php 

	$overdate = "select * from activity a , activityPhoto_vu ap where a.act_no=ap.act_no and act_date < '2017-06-20 00:00:00'";
   
    $over_act = $pdo->query($overdate);	

	while( $resultOverDate = $over_act->fetchObject()){
				
		$overact_no = $resultOverDate->act_no;
		$overact_date = $resultOverDate->act_date;
		$overact_loc = $resultOverDate->act_loc;
		// echo $overact_no;
?>
		
		<div class="eventreco">
			<a href="event-inside.php?act_no=<?php echo $overact_no; ?>">
				<div class="img">
					<img src="src/image/event/<?php echo $overact_no,1; ?>.jpg" alt="">
				</div>	
				<div class="infobar1">
					<h5><?php echo $overact_loc; ?></h5>
					<div class="inforbar2">
						舉辦日期：<?php echo $overact_date; ?>
					</div>
				</div>
			</a>
				</div>

<?php
		}
	}
	catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";	
}
?>	  
	<!-- 	<div class="eventreco" >
			<a href="#">
				<div class="img">
					<img src="src/image/event/event09.jpg" alt="">
				</div>
				<div class="infobar1">
					<h5>台中</h5>
					<div class="inforbar2">
						舉辦日期：2016-10-26
					</div>
				</div>
			</a>
</div>
	 -->
	
<div class="clear"></div>
		<div class="littlelittle2">
			<div class="littlelittle">
				
			</div>
		</div>
		

	</div>
</div>
<div class="clear"></div>

<!-- ======================== -->

<!-- ====================================== -->


</div>

<?php require_once('Footer.php') ?> 
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/event.js"></script>
<script type="text/javascript" src="js/login-ajax.js"></script>
</body>
</html>