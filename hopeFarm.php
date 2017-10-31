<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('Header_head.php') ?>

	<meta charset="UTF-8">
	<title>hopeFarm</title>
	<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
	<script type="text/javascript" src="js/hopeFarm.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<!-- <link rel="stylesheet" href="css/headerFooter.css"> -->
	<!-- 輪播 -->
	<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick-theme.css"/>
  	<link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick.css"/>
  	<!-- 字數限定 -->
  	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- ScrollMagic -->
  	<script src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
  	<script src="src/libs/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script src="src/libs/ScrollMagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
	<script src="src/libs/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>

  	<link rel="stylesheet" href="css/hopeFarm.css">
	
</head>
<body>
<?php require_once('Header.php') ?>

<section class="containerhope">
	<section class="view col-sm-12 col-xs-12 col-lg-12">
		<div class="view_container">
			<div class="cloulds">
				<div class="cloulds-1">
					<img src="src/image/hopeFarm/cloud.png" alt="">
				</div>
				<div class="cloulds-2">
					<img src="src/image/hopeFarm/cloud.png" alt="">
				</div>
				<div class="cloulds-3">
					<img  src="src/image/hopeFarm/cloud-noface.png" alt="">
				</div>
			</div>
			<!-- <div class="for_h2">
				<h2>友善栽培農法</h2>
				<h2>珍惜我們的土地</h2>
				<h2>愛護環境永續發展</h2>
			</div> -->
			<div class="cleare"></div>
		</div>
		
	</section>
	<div class="cleare"></div>
	<div class="hopefarmrwd-select  col-xs-12">
				<ul>
					<a href="#now">
						<li class="active01 t4 col-xs-3">
							<h2>最新</h2>
						</li>
					</a>
					<a href="#doing">
						<li class="t1 col-xs-3">
							<h2>募資中</h2>
						</li>
					</a>
					<a href="#end">
						<li class="t2 col-xs-3">
							<h2>已結案</h2>
						</li>
					</a>
					<a href="#sucess ">
						<li class="t3 col-xs-3">
							<h2>成功案件</h2>
						</li>
					</a>
					
					<div class="cleare"></li>
				</ul>
				
	</div>
	<div class="cleare"></div>
	<!-- =============///section01=========== -->
	<section class="latest  col-xs-12">
		<div class="latest_title">
			<h2>最新</h2>
			<!-- <img src="src/image/hopeFarm/short.png" alt=""> -->
		</div>
		<div class="latest_cloud">
			<img src="src/image/hopeFarm/cloud.png" alt="">
			<div class="cleare"></div>
		</div>

		<!-- ========輪播============= -->
		<div class="carousel col-lg-12">
			<div class="carousel_container kk ">
<?php
require_once("php/connectGrowing_hope.php");
$sql = "select * from count_donate_total where new='Y'";
$event = $pdo->query( $sql);
while( $eventRow = $event->fetchObject()){
// count bar
	$sql2 = "select sum(dona_price) from donate where event_no = {$eventRow->event_no}";
	$donateResult = $pdo->query($sql2);
	$donateResult->bindColumn(1,$totalPrice);
	$donateResult->fetch();
	$price_allow = $eventRow->event_allow;
	$totalPrice=$totalPrice?$totalPrice:0;
	$width = floor ($totalPrice/$price_allow * 99) . "%";
// 
?>
					<div class="carouselson ">
						<div class="carousel_shadow ">
							<div class="c_left">
								<img src="src/image/funded/<?php echo $eventRow->event_pho; ?>" alt="">
							</div>
							<div class="c_right col-sm-2 col-lg-2">
								<h3><?php echo $eventRow->event_title; ?></h3>
								<p class="coName"><?php echo $eventRow->event_name; ?></p>
								<p class="coTxt"><?php echo $eventRow->event_txt; ?></p>
								<div class="bar col-sm-2">
									<div class="inside-bar col-sm-2" style="width:<?php echo $width; ?> "></div>
								</div>
								<p class="coCount">累積金額 <?php echo $eventRow->price; ?>元</p>
								<p class="coCount">倒數 <?php echo $eventRow->dday; ?>天</p>
							</div>
							<div class="cleare"></div>
							<div class="c_btn">
								<a href="donate_info.php?event_no=<?php  echo $eventRow->event_no;?>">
									<h2>我要資助</h2>
								</a>
							</div>
							<div class="cleare"></div>
						</div>
					</div>
<?php	
}
?>
			</div>
		</div>
		<div class="cleare"></div>
	</section>

	<!-- =============///latest=========== -->
	<section class="purpose  col-xs-12 ">
		<div class="purpose_img">
			<img src="src/image/hopeFarm/family_1.png" alt="">
		</div>
		<div class="purpose_txt">
			<h2>核心價值</h2>
			<p class="purp">安全蔬果 :</p><p class="purp">合作社成員皆為友善農業之農夫。</p> 
			<p class="purp">公平交易 :</p><p class="purp">由農民所組成的合作社，讓消費者買的合理，降低農民利潤剝削。</p>
			<p class="purp">減碳運送 :</p><p class="purp">農產品產地直送集貨場後，出貨消費者，運送路程降低、產品更保鮮。</p> 
		</div>
	</section>
	<!-- =============///section03=========== -->
	<section class="section04 col-xs-12">
		<div class="section04-g4-left">
			<img src="src/image/hopeFarm/bg01_1.png" alt="">
		</div>
		<div class="section04-g4-right">
			<img src="src/image/hopeFarm/couple.png" alt="">
		</div>
		<div class="cleare"></div>
	</section>
	<!-- =============///section04=========== -->
<section class="bookmark   ">
		<div class="mark_title">
				<ul>
					<li class="t1 active01">
						募資中
					</li>
					<li class="t2">
						案件進行中
					</li>
					<li class="t3">
						成功案件
					</li>
					<div class="cleare"></li>
				</ul>
		</div>

		<div class="mark_container active01 c1">
			<div class="mark_item">
<!-- 抓資料 -->
<?php
require_once("php/connectGrowing_hope.php");
$sql = " select * from count_donate_total where event_status='DI' order by dday ";
$event = $pdo->query( $sql);
while( $eventRow = $event->fetchObject()){
	// count bar
	$sql2 = "select sum(dona_price) from donate where event_no = {$eventRow->event_no}";
	$donateResult = $pdo->query($sql2);
	$donateResult->bindColumn(1,$totalPrice);
	$donateResult->fetch();
	$price_allow = $eventRow->event_allow;
	$totalPrice=$totalPrice?$totalPrice:0;
	$width = floor ($totalPrice/$price_allow * 99) . "%";
// 
?>
				<a href="donate_info.php?event_no=<?php  echo $eventRow->event_no;?>">
					<div class="item-box col-sm-4 col-xs-12  col-lg-4"  id="doing">
						<div class="item-box-shadow">
							<div class="box-img">
								<div class="box-imgToHover">
									<div class="imgToHover">
										<img src="src/image/funded/<?php echo $eventRow->event_pho; ?>" alt="">
									</div>
									
								</div>
								
								<div class="square">
									<img src="src/image/funded/<?php echo $eventRow->event_title_pho; ?>" alt="">
								</div>
							</div>
							<div class="box-fontt">
								<p class="txt_name">by <?php echo $eventRow->event_name; ?></p>
								<h3 class="txt_title"><?php echo $eventRow->event_title; ?></h3>
								<p class="JQellipsis" ><?php echo $eventRow->event_txt; ?></p>
								<div class="bar">
									<div class="inside-bar" style="width:<?php echo $width; ?>"></div>
								</div>
								<p class="coP">累積金額 <?php echo $eventRow->price; ?>元</p>
								<p class="coP ">倒數<?php echo $eventRow->dday; ?>天</p>
							</div>
								<div class="cleare"></div>
						</div>
					</div>
				</a>
<?php	
}
?>				<div class="cleare"></div>	
				<div class="mark_deco">
					<img src="src/image/hopeFarm/poor.png" alt="">
				</div>
				<div class="mark_more">
					<img src="src/image/hopeFarm/frog.png" alt="">
					<a href="#">
						<p>查看更多</p>
					</a>
				</div>
			</div>
		</div>
		<!-- //c1 -->
		<div class="mark_container c2">
			<div class="mark_item">
<!-- 抓資料 -->
<?php
require_once("php/connectGrowing_hope.php");
$sql = "select * from count_donate_total where event_status='DE'";
$event = $pdo->query( $sql);
while( $eventRow = $event->fetchObject()){
	
	$event_enddate = $eventRow->event_enddate;
	$event_deadline = $eventRow->event_deadline;
	$today = date ("Y-m-d");
	$green = floor(  (strtotime($event_deadline) - strtotime($today))/(60*60*24)  ."<br>");
	$white = floor(  (strtotime($event_deadline) - strtotime($event_enddate))/(60*60*24)  );
	$width = (($green / $white)*99)."%";

	//$time1 = "2013-12-02 10:00:00";
	//$time2 = "2013-11-02 10:00:00";
	//echo (  (strtotime($time1) - strtotime($time2))/(60*60*24)."<br>"  );
	


	//echo $event_enddate."<br>".$event_deadline;
// 
?>
				<a href="donate_info.php?event_no=<?php  echo $eventRow->event_no;?>">
					<div class="item-box  col-sm-4 col-xs-12 col-lg-4" id="end">
						<div class="item-box-shadow">
							<div class="box-img">
								<div class="box-imgToHover">
									<div class="imgToHover">
										<img src="src/image/funded/<?php echo $eventRow->event_pho; ?>" alt="">
									</div>
									
								</div>
								<div class="square">
									<img src="src/image/funded/<?php echo $eventRow->event_title_pho; ?>" alt="">
								</div>
							</div>
							<div class="box-fontt">
								<p class="txt_name">by <?php echo $eventRow->event_name; ?></p>
								<h3 class="txt_title"><?php echo $eventRow->event_title; ?></h3>
								<p class="JQellipsis" ><?php echo $eventRow->event_txt; ?></p>
								<div class="bar">
									<div class="inside-bar" style="width:<?php echo $width; ?> "></div>
								</div>
								<p class="countP">案件進度回報 </p>
							</div>
								<div class="cleare"></div>
						</div>
					</div>
				</a>
<?php	
}
?>				<div class="cleare"></div>	
				<div class="mark_deco">
					<img src="src/image/hopeFarm/poor.png" alt="">
				</div>
				<div class="mark_more">
					<img src="src/image/hopeFarm/frog.png" alt="">
					<a href="#">
						<p>查看更多</p>
					</a>
				</div>
			</div>
		</div>
		<!-- //c2 -->
		<div class="mark_container c3">
			<div class="mark_item">
<!-- 抓資料 -->
<?php
require_once("php/connectGrowing_hope.php");
$sql = "select * from count_donate_total where event_best = 'Y'";
// $type = isset($_REQUEST["type"]) ? $_REQUEST["type"] : 1;
// switch($type){
// 	case 1:
// 	$sql = "select * from count_donate_total where event_status = 'DI'";
// 	case 2:
// 	$sql = "select * from count_donate_total where event_status = 'CI'";
// 	case 3:
// 	$sql = "select * from count_donate_total where event_best = 'Y'";
// 	break;
// 	case 4:
// 	$sql = "select * from count_donate_total where new = 'Y'";
// }
$event = $pdo->query( $sql);
while( $eventRow = $event->fetchObject()){
//
 //$totalPrice = 0;
// count bar
	$sql2 = "select sum(dona_price) from donate where event_no = {$eventRow->event_no}";
	$donateResult = $pdo->query($sql2);
	$donateResult->bindColumn(1,$totalPrice);
	$donateResult->fetch();
	$price_allow = $eventRow->event_allow;
	$totalPrice=$totalPrice?$totalPrice:0;
	$width = floor ($totalPrice/$price_allow * 99) . "%";
// 
?>
				<a href="donate_info.php?event_no=<?php  echo $eventRow->event_no;?>">
					<div class="item-box  col-sm-4 col-xs-12 col-lg-4" id="sucess">
						<div class="item-box-shadow">
							<div class="box-img">
								<div class="box-imgToHover">
									<div class="imgToHover">
										<img src="src/image/funded/<?php echo $eventRow->event_pho; ?>" alt="">
									</div>
									
								</div>
								<div class="square">
									<img src="src/image/funded/<?php echo $eventRow->event_title_pho; ?>" alt="">
								</div>
							</div>
							<div class="box-fontt">
								<p class="txt_name">by <?php echo $eventRow->event_name; ?></p>
								<h3 class="txt_title"><?php echo $eventRow->event_title; ?></h3>
								<p class="JQellipsis" ><?php echo $eventRow->event_txt; ?></p>
								<!-- <div class="bar">
									<div class="inside-bar" style="width:<?php echo $width; ?> "></div>
								</div>
								<p class="countP">募資總金額 <?php echo $totalPrice;?>元</p> -->
							</div>
								<div class="cleare"></div>
						</div>
					</div>
				</a>
<?php	
}
?>				<div class="cleare"></div>	
				<div class="mark_deco">
					<img src="src/image/hopeFarm/poor.png" alt="">
				</div>
				<div class="mark_more">
					<img src="src/image/hopeFarm/frog.png" alt="">
					<a href="#">
						<p>查看更多</p>
					</a>
				</div>
			</div>
		</div>
<!--================輪播最新RWD===============  -->
<div class="mark_container c4">
	<div class="mark_item">
<!-- 抓資料 -->
<?php
require_once("php/connectGrowing_hope.php");
$sql = "select * from count_donate_total where new='Y'";
$event = $pdo->query( $sql);
while( $eventRow = $event->fetchObject()){
	// count bar
	$sql2 = "select sum(dona_price) from donate where event_no = {$eventRow->event_no}";
	$donateResult = $pdo->query($sql2);
	$donateResult->bindColumn(1,$totalPrice);
	$donateResult->fetch();
	$price_allow = $eventRow->event_allow;
	$totalPrice=$totalPrice?$totalPrice:0;
	$width = floor ($totalPrice/$price_allow * 99) . "%";
// 
?>
				<a href="donate_info.php?event_no=<?php  echo $eventRow->event_no;?>">
					<div class="item-box  col-sm-4 col-xs-12 col-lg-4" id="now">
						<div class="item-box-shadow">
							<div class="box-img">
								<div class="box-imgToHover">
									<div class="imgToHover">
										<img src="src/image/funded/<?php echo $eventRow->event_pho; ?>" alt="">
									</div>
								</div>
								<div class="square">
									<img src="src/image/funded/<?php echo $eventRow->event_title_pho; ?>" alt="">
								</div>
							</div>
							<div class="box-fontt">
								<p class="txt_name">by <?php echo $eventRow->event_name; ?></p>
								<h3 class="txt_title"><?php echo $eventRow->event_title; ?></h3>
								<p class="JQellipsis" ><?php echo $eventRow->event_txt; ?></p>
								<div class="bar">
									<div class="inside-bar" style="width:<?php echo $width; ?> "></div>
								</div>
								<p class="countP">累積金額 <?php echo $eventRow->price; ?>元</p>
								<p class="countP">倒數50天</p>
							</div>
							<div class="cleare"></div>
						</div>
					</div>
				</a>
<?php	
}
?>				<div class="cleare"></div>	
				<div class="mark_deco">
					<img src="src/image/hopeFarm/poor.png" alt="">
				</div>
				<div class="mark_more">
					<img src="src/image/hopeFarm/frog.png" alt="">
					<a href="#">
						<p>查看更多</p>
					</a>
				</div>
	</div>
</div>
<!-- // -->
		<div class="cleare"></div>
	</section>
	<!-- =============///bookmark=========== -->
	<section class="risk col-xs-12 col-sm-12 col-lg-12">
		<div class="risk_title">
			<h2>風險與變數</h2>
		</div>
		<div class="cleare"></div>
	</section>
	<!-- =============///risk=========== -->
	<section class="risk_container col-xs-12 col-sm-12 col-lg-12">
		<div class="risk_range">
			<div class="risk_txt">
				<p class="risk_p">贊助者訂購時務必確認資料正確，出貨前一週會與贊助者聯繫。</p>
				<p class="risk_p">蔬菜箱內容物分量、種類依產季變化，皆以當季蔬菜為主。(種類分為 : 葉菜類4~6份、根莖類2~3份、瓜果類2~3份、菇類1~2份、蛋類1盒)。</p>
				<p class="risk_p">農產品具有時效性，宅配途中若有撞傷、壓傷等情形，收到商品後請先確認外箱是否完整，盡速拆開檢視商品是否完好</p>
				<p class="risk_p">若發現有嚴重損毀，請消費者於貨到當日拍照存檔，並e-mail(附照片檔案)及來電告知，我們將有專人與您聯繫。</p>
				<p class="risk_p">如有任何問題歡迎您隨時來信與我們聯繫~</p><p>e-mail：ctfactw@gmail.com</p>
			</div>
			<div class="risk_img col-sm-12 col-lg-12">
				<img src="src/image/hopeFarm/duck.png" alt="">
			</div>
		</div>
	</section>
	<!-- =============///risk_container=========== -->
	<section class="stone_img col-xs-12">
		<img src="src/image/hopeFarm/stone.png" alt="">
	</section>
</section>
<?php require_once('Footer.php') ?> 
<script src="js/header.js"></script>
<!-- -============= -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="src/libs/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="js/font_Range.js"></script>
<!-- book_mark -->
<script>

// function  dofirst(){
/**/
	var inside_bar = document.getElementsByClassName('inside-bar');



	for (i=0 ; i<inside_bar.length ; i++){

			 
			//var width=inside_bar[i].width;
			//console.log(inside_bar[i])
			var bar_run =new TimelineMax();
			bar_run.staggerFromTo(inside_bar[i],5,{
				width:0,
			},{
				width:inside_bar[i].width,
				ease:Expo.easeOut
			});
		}

// }

// document.addEventListener('load', dofirst, false );

    $(document).ready(function(){

        $('.kk').slick();




		
    });
</script>

</body>
</html>
























