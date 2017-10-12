<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>pointFarm</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css-master/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/pointFarm.css">
  <style>
  		#draggable { 
  			width: 150px; 
  			height: 150px; 
  			padding: 2px;
  			border: 2px solid black; 
  		}
  		.area{
  			background-color: gray;
  			width: 1400px;
  			height: 600px;
  		}
      #grass{
        /* visibility: hidden; */
      }
      #seed{
        display: none;
      }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/Lettering.js-master/jquery.lettering.js"></script>
  <script src="js/textillate-master/jquery.textillate.js"></script>
  <script type="text/javascript" src="http://beneposto.pl/jqueryrotate/js/jQueryRotateCompressed.js"></script>
  <script type="text/javascript" src="js/pointFarm.js"></script>
</head>
<body>
 <?php require_once('Header.php') ?>
 <div class="container">

    <!-- nav -->


    <!-- farm -->
    <div class="boxxx">
      <div class="sky">
        <img src="src/image/img/sun4.png" class="sun" id="sun">
        <div class="cloud">
          <img src="src/image/img/cloud_1.png" id="cloud1">
          <img src="src/image/img/cloud_2.png" id="cloud2">
          <img src="src/image/img/cloud_3.png" id="cloud3">
          <img src="src/image/img/cloud_4.png" id="cloud4">
        </div>
        <div class="info" id="info"><h2>請將右方種子拖曳到田中</h2></div>
        <div class="wallet1">
          <img src="src/image/img/coin_bag.png
          " id="wallet2" class="wallet2">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="farm">
        <img src="src/image/img/seedBag.png" class="seedBag">
        <img src="src/image/img/farmer.png" class="farmer">
        <div class="land">
          <img src="src/image/img/land.png" class="dirt">
          <img src="src/image/img/vegetable1.png" id="v1" class="v1">
          <img src="src/image/img/vegetable2.png" id="v2" class="v2">
          <img src="src/image/img/vegetable3.png" id="v3" class="v3">
        </div>
      </div>
      <div class="clearfix"></div>
    </div>  
    <div class="clearfix"></div>
  </div>
 
<div class="container2">
    <img src="src/image/img/background.png">
    <h2 id="sign">此菜園不支援手機版本，請移駕到桌機版本</h2>
</div>
<?php require_once('Footer.php') ?>  
</body>
</html>