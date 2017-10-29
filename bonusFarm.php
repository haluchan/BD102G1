<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BonusFarm</title>
	<?php require_once('Header_head.php'); ?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="css/bonusFarm.css">
	<!-- js -->
	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <script type="text/javascript" src="http://beneposto.pl/jqueryrotate/js/jQueryRotateCompressed.js"></script>
	 <script src="js/bonusFarm.js"></script>
</head>
<body>
	<!-- 撥雲見氣球 -->
	<div class="move_cloud">
        <p class="opcloud1"><img src="src/image/bonusFarm/op_cloud1.png" alt=""></p>
        <p class="opcloud2"><img src="src/image/bonusFarm/op_cloud2.png" alt=""></p>
        <p class="opcloud3"><img src="src/image/bonusFarm/op_cloud3.png" alt=""></p>
        <p class="opcloud4"><img src="src/image/bonusFarm/op_cloud4.png" alt=""></p>
        <p class="opcloud5"><img src="src/image/bonusFarm/op_cloud5.png" alt=""></p>
        <p class="opcloud6"><img src="src/image/bonusFarm/op_cloud6.png" alt=""></p>
        <p class="opcloud7"><img src="src/image/bonusFarm/op_cloud7.png" alt=""></p>
        <p class="opcloud8"><img src="src/image/bonusFarm/op_cloud8.png" alt=""></p>
    </div>
    <div class="move_balloon">
      <p class="opballoon1"><img src="src/image/bonusFarm/op_balloon1.png" alt=""></p>
      <p class="opballoon2"><img src="src/image/bonusFarm/op_balloon2.png" alt=""></p>
      <p class="opballoon3"><img src="src/image/bonusFarm/op_balloon3.png" alt=""></p>
      <p class="opballoon4"><img src="src/image/bonusFarm/op_balloon4.png" alt=""></p>
      <p class="opballoon5"><img src="src/image/bonusFarm/op_balloon5.png" alt=""></p>
      <p class="opballoon6"><img src="src/image/bonusFarm/op_balloon6.png" alt=""></p>
      <p class="opballoon7"><img src="src/image/bonusFarm/op_balloon7.png" alt=""></p>
      <p class="opballoon8"><img src="src/image/bonusFarm/op_balloon8.png" alt=""></p>
    </div>


	<div class="container">
	<?php require_once('Header.php'); ?>


		<div id="id01" class="modal animate">
			<div class="imgcontainer">
				<div class="title"><p>種子</p> <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<div class="item one">
				<img src="src/image/bonusFarm/seedOne@4x.png" alt="20" class="seedFirst">
			</div>
			<div class="item two">
				<img src="src/image/bonusFarm/seedTwo@4x.png" alt="30" class="seedSecond">
			</div>
			<div class="item three">
				<img src="src/image/bonusFarm/seedThree@4x.png" alt="40" class="seedThird">
			</div>
			<div class="sure"><button id="btn2">確定</button></div>
				<div class="clearfix"></div>
		</div>	
		
	<!-- </div> -->
		<div class="farm">
			<div class="cloud">
				<p class="cloud1"><img src="src/image/bonusFarm/cloud1@4x.png" alt=""></p>
				<p class="cloud2"><img src="src/image/bonusFarm/cloud1@4x.png" alt=""></p>
				<p class="cloud3"><img src="src/image/bonusFarm/cloud1@4x.png" alt=""></p>
				<p class="bird"><img src="src/image/bonusFarm/bird.gif"></p>
			</div>
			<div class="info">
				<img src="src/image/bonusFarm/seedBag.png" class="seedBag">
				<div class="tutorial">
					<img src="src/image/bonusFarm/dialog2.png">
					<div class="content">
						<p>選擇蔬果，賺取紅利點數</p>
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="btn1">我知道了</button>
					</div>			
				</div>
			</div>
				<img class="windmill_top" src="src/image/bonusFarm/windmill.png">
				<img class="windmill_bot" src="src/image/bonusFarm/windmill2@4x.png">
			<div class="wallet1">
          		<img src="src/image/bonusFarm/coin_bag.png" id="wallet2" class="wallet2">
          		<div id="circle"></div>
        	</div>
        		<div class="clearfix"></div>
      		</div>
			<div class="land">
				<img src="src/image/bonusFarm/dirt@4x.png">
				<img class="carrot1" src="src/image/bonusFarm/carrot1@4x.png" alt="">
				<img class="tomato1" src="src/image/bonusFarm/tomato1@4x.png" alt="">
				<img class="carrot2" src="src/image/bonusFarm/carrot2@4x.png" alt="">
				<img class="tomato2" src="src/image/bonusFarm/tomato2@4x.png" alt="">
				<img class="carrot3" src="src/image/bonusFarm/carrot3@4x.png" alt="">
				<img class="tomato3" src="src/image/bonusFarm/tomato3@4x.png" alt="">
				<img class="carrot4" src="src/image/bonusFarm/carrot1@4x.png" alt="">
				<img class="tomato4" src="src/image/bonusFarm/tomato1@4x.png" alt="">
				<img class="carrot5" src="src/image/bonusFarm/carrot2@4x.png" alt="">
				<img class="tomato5" src="src/image/bonusFarm/tomato2@4x.png" alt="">
				<img class="carrot6" src="src/image/bonusFarm/carrot3@4x.png" alt="">
				<img class="tomato6" src="src/image/bonusFarm/tomato3@4x.png" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
		<?php require_once('Footer.php'); ?>	
	</div>
</div>
		
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/login-ajax.js"></script>

	<div class="container2">
    <img src="src/image/bonusFarm/background2.png">
    <h2 id="sign">此菜園不支援手機版本，請移駕到桌機版本</h2>
	</div>
</body>
</html>