<?php 
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>即刻菜援</title>
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0">

<link rel="stylesheet" href="css/font.css">
<link href="css/index.css" rel="stylesheet">
<link rel="stylesheet" href="css/font.css">
<?php require_once('Header_head.php');  ?>



<link rel="stylesheet" href="css/header_index.css">
<link href="css/index.css" rel="stylesheet">

<!-- plugin -->
 <link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick.css"/>
 <link rel="stylesheet" type="text/css" href="src/libs/slick/slick/slick-theme.css"/>
 <link rel="stylesheet" type="text/css" href="src/libs/fullPage.js-master/jquery.fullPage.css">
 <!-- <link rel="stylesheet" type="text/css" href="src/libs/pagePiling.js-master/jquery.pagepiling.css"> -->



<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>


<!-- TweenMax -->
<script src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
<script src="src/libs/gsap/src/minified/TimelineLite.min.js"></script>
<script src="js/parallax.mins.js"></script>
<script src="js/change_SVG_color.js"></script>
<!-- <script src="http://d3js.org/d3.v3.min.js"></script> -->


<!-- scrollmagic -->
<script src="src/libs/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="src/libs/ScrollMagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script src="src/libs/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>






</head>
<body>
	
<div id="header">
		<?php require_once('header.php');  ?>
		
	</div>



<div id="fullPage">


		<!-- 發揚農民心血的募資平台 src/image/index/ -->
		<div class="section">
			<section class="col-xs-12 col-sm-12 index_1">

				<div class="h_100vh fill_screen" id="background">
					<div id="hidden-xs">
						<ul>	
			    			<li><a href="cart.php" class="cartBtn">購物車<span class="cartNo">0</span></a></li>
			    			<li><span id="memName"></span><a  id="spanLogin" >註冊/登入</a></li>
			    			<li><a href="application.php">申請資助</a></li>
			    			<li class="clear"></li>
			    		</ul>
			    		<div class="clear"></div>
		    		</div>




					<img src="src/image/index/1_background.svg" class="w_100p">
					<img src="src/image/index/2_background_cloud.svg" data-depth="1" class="w_120p">
					<img src="src/image/index/5_grass.svg" data-depth=".6" class="w_120p">
					<img src="src/image/index/6_hill_buttom.svg" data-depth=".1" class="bottom_5p w_120p">
					<img src="src/image/index/7_grass.svg" data-depth=".2" class="bottom-0">
					<img src="src/image/index/8_hill_top.svg" data-depth="0" class="bottom-0">
			
			
					
			
			
			
			
					<img src="src/image/index/3_cloud_top.svg" class="cloud margin-top-50" data-depth=".3">
					<img src="src/image/index/3-5-4-cloud.svg" class="cloud_2 margin-top-100" data-depth=".5">
					<img src="src/image/index/4_cloud_buttom.svg" class="cloud margin-top-80" data-depth=".8">
					<img src="src/image/index/logo2.svg" class="logo">
					<img src="src/image/index/14_farmer_o.svg" class="farm">
					<img src="src/image/index/16_farmer_close.svg" class="farm">
			
					<div class="title_info">
						<h1 class="h1">發揚農民心血的募資平台</h1>
						<h3 class="h3">為消費者健康把關也給農民一個豐年。</h3>
						<div class="cir">
							<img src="src/image/index/11_amt.svg" class="info_icon margin-top-20 margin-bottom-13">
							<p>5億總集資金額</p>	
						</div>
						<div class="cir">
							<img src="src/image/index/12_success.svg" class="info_icon margin-top-35 margin-bottom-7">
							<p>90%集資成功率</p>	
						</div>
						<div class="cir">
							<img src="src/image/index/13_case.svg" class="info_icon margin-top-30 margin-bottom-8">
							<p>100+國內外案件</p>	
						</div>
					</div>
					
					
				</div>
			
				
			</section>
		</div>



		<!-- 募資倒數 -->
		<div class="section">
			<section class="col-xs-12 col-sm-12 donate_banner">
				<dir id="trigger1"></dir>
				<div class="col-sm-4 final_txt hidden-xs">
					<img src="src/image/index/final.svg" class="final_img">
				</div>
				<div class="col-sm-4 col-xs-12 donate_title">
					<p class="title">友善稻田．夢想榖倉 募資計畫 <br><span>想要無毒有機有的蔬菜 | 就來魚菜農場看一下</span></p>
					<a href="donate_info.php?event_no=1"><p class="buttom">立即贊助</p></a>
				</div>
				<div class="col-xs-7 final_txt hidden-sm">
					<img src="src/image/index/final.svg" class="final_img">
				</div>
			</section>
		</div>




		<!-- 資助進行中 -->
		<div class="section">
			<section class="col-xs-12 col-sm-12 donate_ing">
				<div class="donate_title">
					<!-- <p>資助進行中</p> -->
				</div>
				<div id="donate_ing"></div>
			
				<div class="donate_top">
					<div class="donate_txt">

					<?php 
						try {
							require_once("php/connectGrowing_hope.php");
							$sql = "select * from count_donate_total where new = 'Y'";
							$event_new = $pdo ->query($sql);
							$i =0;
							while ( $newRow = $event_new->fetchObject()) { 
								$i++;
							
					?>

						<div class="donate_info col-xs-12 col-sm-4 don<?php echo $i;?>">
							<a href="donate_info.php?event_no=<?php echo $newRow -> event_no; ?> ">
								<div class="info">
									<div class="info_img">
										<img src="src/image/funded/<?php echo $newRow -> event_pho; ?>">
									</div>
									<h3><?php echo $newRow -> event_title; ?></h3>
									<p><?php echo $newRow -> event_txt; ?>...</p>
									<!-- <img src="src/image/index/run.svg"> -->
									<div class="progress_bar">
										<div class="bar">
											<img src="src/image/funded/run.gif" class="running_man">
										</div>
									</div>
									<p class="amt">$<?php echo $newRow -> price; ?>/ $<?php echo $newRow -> event_allow; ?>   	剩 <?php echo $newRow -> dday; ?> 天</p>
								</div>
							</a>
						</div>


					<?php 
							}
						} catch (PDOException $e) {
							echo "錯誤行號 : ", $e->getLine(), "<br>";
			  				echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
								
						}

					?>
					
					
						
					</div>
				</div>
			<div class="clear"></div>
				
			</section>
		</div>







		<!-- 米的故鄉 -->
		<div class="section">
			<section class="col-xs-12 col-sm-12 activity">
				<div id="trigger4"></div>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 237.33" class="rice_img">
						<defs>
							<style>.rice_cloud-1{fill:#fff100;opacity:0;}.rice_cloud-2{fill:#fff;}</style>
						</defs>
						<title>rice_cloud</title>
						<g id="圖層_2" data-name="圖層 2">
							<g id="圖層_1-2" data-name="圖層 1">
								<rect class="rice_cloud-1" width="1920" height="237.33"/>
			
								<path class="rice_cloud-2 cloud_1" d=""/>
								
								<path class="rice_cloud-2 cloud_2" d=""/>
							</g>
						</g>
					</svg>
			
				<img src="src/image/index/rice_bird.svg" class="rice_img">
				<img src="src/image/index/inekari_man.png" class="bottom-0 rice-man">
				<div class="activity_title">
					<h1>米的故鄉</h1>
					<h2><span class="h2_1">友善稻田 </span><br class="hidden-xs"><span class="h2_2">稻榖金黃熟成</span></h2>
					<p class="p_3">募資成功　小農家感恩回饋</p>
				</div>
			
			
				<div class="activity_info">
					<p>2017/11/10</p>
					<p>邀請大家一起來碾米</p>
					<p>費用包含:一食二泊、碾米體驗、當令鮮米（５斤裝）</p>
					<p>$900NT/人</p>
					<a href="event.php" class="btn_brown">我要報名</a>
				</div>
				
				
			</section>
		</div>



		<!-- 第二代知能魚缸新上市 -->
		<div class="section">
			<section class="col-xs-12 col-sm-12 fish">
				<div class="fish_info col-sm-11 col-xs-12">
			
					<h3>第二代智能魚缸新上市</h3>
					<p class="p_2">早鳥限定優惠五折起</p>
					<p>
						<a href="fish.php" class="btn_blue btn">了解魚菜共生</a>
						<a href="product.php" class="btn_green btn">前往購買</a>
					</p>
					<img src="src/image/index/fish_icon_1.svg" class="fish_icon">
					<img src="src/image/index/fish_icon_2.svg" class="fish_icon">
					<img src="src/image/index/fish_icon_3.svg" class="fish_icon">
					<img src="src/image/index/fish_icon_4.svg" class="fish_icon">
					<img src="src/image/index/fish_icon_5.svg" class="fish_icon">
					<img src="src/image/index/fish_icon_6.svg" class="fish_icon">
					<img src="src/image/index/fish_icon_7.svg" class="fish_icon">
					<img src="src/image/index/phone-02-02.svg" class="phone">
				</div>
				<div class="clear"></div>
			</section>
			<div class="clear"></div>
		</div>


</div>












 	<?php //require_once('Footer.php');  ?> 
		



	

	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="src/libs/slick/slick/slick.min.js"></script>
	<script src="src/libs/fullPage.js-master/jquery.fullPage.js"></script>
	<!-- <script type="text/javascript" src="src/libs/pagePiling.js-master/jquery.pagepiling.js"></script> -->
	

	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/header_index.js"></script>
	<script type="text/javascript" src="js/login-ajax.js"></script>

	<script type="text/javascript">
		 $('header').addClass('db');
		$(document).ready(function(){
			$('#fullPage').fullpage({
			    navigation: true,
			    fixedElements: '#header',
			afterLoad: function(anchorLink, index){
            	var loadedSection = $(this);
            },
            onLeave: function(index, nextIndex, direction){
	            var leavingSection = $(this);
	             if( nextIndex == 2 )
	            {
	              $('header').removeClass('db');
	            }else{
	            	$('header').addClass('db');
	            }
	            if( nextIndex == 3 )
	            {
	              $('header').removeClass('db');
	            }
	            if( nextIndex == 4 )
	            {
	              $('header').removeClass('db');
	            }
	            if( nextIndex == 5 )
	            {
	              $('header').removeClass('db');
	            }
        }






			});

			
			$('.donate_txt').slick({
			  centerMode: true,
			  // centerPadding: '60px',
			  slidesToShow: 3,
			  responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        // centerMode: true,
			        centerPadding: '20px',
			        slidesToShow: 1,
			        autoplay:true,
			        autoplaySpeed:2000,
			        // dots:true,
			      }
			    }]
			});
			
			
		});
	</script>

	
   
</body>
</html>