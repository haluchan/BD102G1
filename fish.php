<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<title>都市小農</title>


		<link rel="stylesheet" href="css/font.css">
		<link rel="stylesheet" href="css/fish/fish.css">

		<script src="src/libs/jquery/dist/jquery.min.js"></script>
		<script src="src/libs/gsap/src/minified/TweenMax.min.js"></script>
		<script src="src/libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
		<script src="src/libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
		<script src="src/libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
		<script src="js/parallax.min.js"></script>


	</head>


<body>
	<?php require_once('Header.php') ?>
	<!-- 個人式小魚菜缸 -->
    <section>
    	
    	<!-- 星空藍天背景+星星 -->
    	<div class="fish_universeBase" >
			
    		<div class="star" id="star"  data-hover-only="true">
    			<img src="src/image/fish/star1.svg" data-depth="0.2" >
    			<img src="src/image/fish/star2.svg" data-depth="1" >
    		</div>
    		
			<!-- 標題 -->
			<div class="fish_universeTitle" id="title">
	    		<img src="src/image/fish/smoke.svg">
	    		<div class="title_txt">
	    			<img src="src/image/fish/smoke_title.svg">
	    		</div>
	    		
	    	</div>


			<!-- 物件:火箭 -->
			<div class="fish_universeItem" id="rocket">
				<img src="src/image/fish/rocket.svg" >
			</div>	
			
			
			<!-- 物件:地球 -->
			<div class="fish_universeItem" id="earth">
	    		<img src="src/image/fish/earth.svg">
	    	</div>

			<!-- 物件: 雙手 -->
	    	<div class="fish_universeItem" id="hand">
	    		<img src="src/image/fish/hand.svg" >
	    	</div>

			<!-- 物件:魚缸 -->
	    	<div class="fish_universeItem" id="tank">
	    		<img src="src/image/fish/tank.svg" >
	    		<!-- 物件:魚 -->
	    		<div class="fish_universeItem" id="fish">
	    		<img src="src/image/fish/fish.gif" >
	    		</div>
	    	</div>
			
			<!-- 物件:小草 -->
	    	<div class="fish_universeItem" id="plant">
	    		<img src="src/image/fish/plant.svg"  >
	    	</div>

	    	

			<!-- 物件:行星 -->
			<div class="fish_universeItem" id="planet">
				<img src="src/image/fish/planet.svg">
			</div>

    	</div>	

		
    </section><!-- 星空結束 -->





	<div class="container"><!-- container說明內容開始 -->
		

		<div class="step">
			<div class="stepFlow clear">
				<div id="trigger1"></div>
				<div class="stepFlowLeft">
					<div class="stepbig" id="one">
						<div class="stepCircle" id="stepOne">1</div>
						<p>選擇蔬果</p>
					</div>
			
					<div class="stepbig" id="two">
						<div class="stepCircle" id="stepTwo">2</div>
						<p>選擇魚缸造型</p>
					</div>
			
					<div class="stepbig" id="three">
						<div class="stepCircle" id="stepThree">3</div>
						<p>小魚菜缸完成</p>
					</div>
				</div>
				
				<div id="trigger2"></div>
				<div class="stepFlowRight ">
					
					<img src="src/image/fish/arrow1.svg" class="arrow" id="arrow1">
					<img src="src/image/fish/arrow3.svg" class="arrow" id="arrow3">
					<img src="src/image/fish/arrow2.svg" class="arrow" id="arrow2">
					<img src="src/image/fish/flow_pic.svg" class="front" >
				</div>

			</div>
			
			<div class="stepContent">
				<p>自己的菜自己種，可依喜好組合屬於自己小魚菜缸，靠著魚幫菜，菜幫魚的大自然共生原理就可以在自家採收到新鮮無毒的蔬菜! 將養魚結合種菜，環保又紓壓！即刻菜援邀請您成為都市小農，一起環保愛地球！</p>
			</div>
			
			
			<div class="stepBuy">
				<div class="btn_green"><a href="product.php">前往選購</a></div>
			</div>



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
				<div class="roleItemPic">
					<img src="src/image/fish/role-plant.svg">
				</div>
				<div class="roleItemTxt">
					<p>植物吸收養分可實現水質過濾，許多植物都適用於水生系統。魚類排泄物會影響營養物質的濃度及通過微生物向植物根部提供營養物質的多寡。</p>
				</div>					
			</div>


			<div class="roleItem">
				<div class="roleItemTitle"><h3>魚</h3></div>
				<div class="roleItemPic">
					<img src="src/image/fish/role-fish.svg">
				</div>
				<div class="roleItemTxt">
					<p>魚透過排泄物為植物提供營養。淡水魚是使用魚菜共生最常見的水生生物，例如：寶石魚、大頭魚、錦鯉等等，但也有使用淡水小龍蝦和蝦。</p>
				</div>							
			</div>


			<div class="roleItem">
				<div class="roleItemTitle"><h3>微生物</h3></div>
				<div class="roleItemPic">
					<img src="src/image/fish/role-bac.svg">
				</div>
				<div class="roleItemTxt">
					<p>微生物對魚排泄物進行分解，為植物提供養分。即硝化菌，在有氧的環境下將氨轉化成硝酸鹽，是在魚菜共生系統中最重要的功能之一。</p>
				</div>
			</div>
			
		</div> <!-- role結束 -->






	</div><!-- container說明內容結束 -->

 <?php require_once('Footer.php') ?>
<script src="js/fish.js"></script> 
</body>
	
</html>