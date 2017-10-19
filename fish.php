<!DOCTYPE html>
<html>
	<head>
		 <?php require_once('Header_head.php') ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<title>都市小農</title>


		<!-- <link rel="stylesheet" href="css/font.css"> -->
		<link rel="stylesheet" href="css/fish/fish.css">

		<!-- <script src="src/libs/jquery/dist/jquery.min.js"></script> -->
		<script src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
		<script src="src/libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
		<script src="src/libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
		<script src="src/libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
		<!-- <script src="js/parallax.min.js"></script> -->


	</head>


<body>
	  <?php require_once('Header.php') ?>
	
    <section class="fish_first"><!-- 都市第一屏 -->
    	<div class="clear">
    	<img src="src/image/fish/fish_baner01.svg" id="fish_banner">
    	<div class="fishbase" id="title">
    		<!-- <img id="title" src="src/image/fish/title-01.png"> -->
    		<h2>想要無毒健康</h2>
    		<h2>就先從蔬菜開始</h2>
    		<h3>自己的菜自己種</h3>
    		<h3>療癒又舒壓</h3>
    	</div>	
 		</div>
   </section><!-- 都市第一屏結束 -->


	<div class="container"><!-- container說明內容開始 -->
		<div class="baserotate">
			<!-- <img src="src/image/member/concept_index.png"> -->
		</div>	
		<div class="step">
			<div class="stepFlow clear">
				<div id="trigger2"></div>
				<div class="stepFlowLeft">
					<img src="src/image/fish/farmer.png">
				</div>
				<div class="stepFlowRight ">
					<img src="src/image/fish/arrow1.png" class="arrow" id="arrow1">
					<img src="src/image/fish/arrow3.png" class="arrow" id="arrow3">
					<img src="src/image/fish/arrow2.png" class="arrow" id="arrow2">
					<img src="src/image/fish/flow_pic.svg" class="front" >
				</div>
			</div>
			<div class="hr"><img src="src/image/funded/hr.png"></div>	
			<div class="stepContent">
				<p><strong>自己的菜自己種</strong>，可依喜好組合屬於自己小魚菜缸，靠著<strong>魚幫菜</strong>，<strong>菜幫魚</strong>的大自然共生原理就可以在自家採收到新鮮無毒的蔬菜! 將養魚結合種菜，環保又紓壓！即刻菜援邀請您成為都市小農，一起<strong>環保愛地球！</strong></p>
				<p>魚菜共生需要很少的土壤、水及面積，可以在任何氣候條件下生產新鮮的蔬菜和水果，並且其能源的消耗遠遠小於一般傳統農業。一般傳統農業仰賴大量的農作機械，這些機械主要是消耗石油的，由於石油是不可再生能源，未來油價只會更高不會更低；而「魚菜共生」系統僅使用電力，電是可再生能源，我們可以用太陽能發電或風力、水力發電，不用受油價制約且效率更高。 </p>
			</div>
			<div class="stepBuy">
				<a class="btn_green" href="product.php">前往選購</a>
			</div>
			<!-- <div class="swim"><img src="src/image/fish/fish.gif"></div> -->

		</div><!--step結束-->


		<div class="theory">
			<div class="theory_word">
				<div class="theoryTitle"><h2>運作原理</h2></div>
				<div class="theoryTxt">
					<p>魚菜共生是結合了水生動物中的糞便和水中的雜質，將排泄物中的養分供應給飼養箱上的植物，同時植物的根系把飼養箱內的水淨化供給水生動物使用。永遠不用澆水換水，不添加農藥化肥抗生素生長激素。靠著魚幫菜，菜幫魚的大自然共生原理就可以在自家採收到新鮮無毒的蔬菜! </p>
				</div>
			</div>
			<div class="theoryVideo">
				<iframe src="https://player.vimeo.com/video/118155097"  frameborder="0"  allowfullscreen></iframe>
			</div>
		</div><!--theory結束-->


		<div class="role"> <!-- role開始 -->
			<div class="role_word">
				<div class="roleTitle"><h2>必備元素</h2></div>
			</div>	
			<div class="roleItem">				
				<div class="roleItemTitle"><h3>植物</h3></div>
				<div class="center">
					<div class="roleItemPic">
					<img src="src/image/fish/role-plant.svg">
				</div>
				<div class="roleItemTxt">
					<p>植物吸收養分可實現水質過濾，許多植物都適用於水生系統。魚類排泄物會影響營養物質的濃度及通過微生物向植物根部提供營養物質的多寡。</p>
				</div>
				</div>
									
			</div>
			<div class="roleItem">
				<div class="roleItemTitle"><h3>魚</h3></div>
				<div class="center"><div class="roleItemPic">
					<img src="src/image/fish/role-fish.svg">
				</div>
				<div class="roleItemTxt">
					<p>魚透過排泄物為植物提供營養。淡水魚是使用魚菜共生最常見的水生生物，例如：寶石魚、大頭魚、錦鯉等等，但也有使用淡水小龍蝦和蝦。</p>
				</div></div>
											
			</div>
			<div class="roleItem">
				<div class="roleItemTitle"><h3>微生物</h3></div>
				<div class="center"><div class="roleItemPic">
					<img src="src/image/fish/role-bac.svg">
				</div>
				<div class="roleItemTxt">
					<p>微生物對魚排泄物進行分解，為植物提供養分。即硝化菌，在有氧的環境下將氨轉化成硝酸鹽，是在魚菜共生系統中最重要的功能之一。</p>
				</div></div>
				
			</div>	
		</div> <!-- role結束 -->






	</div><!-- container說明內容結束 -->

  <?php require_once('Footer.php') ?> 
  <script src="js/header.js"></script>
	<script src="js/fish.js"></script> 
</body>
	
</html>