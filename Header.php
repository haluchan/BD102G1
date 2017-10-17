
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/header.css">
	<script src="src/libs/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css" >
	<!-- <script src="js/change.js"></script> -->
	<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
	<script src="js/change_SVG_color.js"></script>
	<!-- <script src="js/header.js"></script> -->
	
		<!-- <?php require_once('login.php'); ?> -->
	    <header>
	    	<div class="topmenu">
	    		<ul>	
	    			<li><a href="cart.php">購物車<span class="cartNo">1</span></a></li>
	    			<li><a  id="login-btn" >註冊/登入</a></li>
	    			<li><a href="application.php">申請資助</a></li>
	    		</ul>
	    	</div>
	    	<div class="mainmenu" id="menu">
	    		<div class="ham ">
	    			<div class="ham_circle" id="ham_button">
	    				<img src="src/image/header/carrot2.png" id="hamicon">
	    			</div>			
					<div class="ham_menu" id="ham_menu">
						<ul class="ham_main">
							<li><a href="hopeFarm.php">希望農場</a></li>
							<li><a href="event.php">體驗活動</a></li>
							<li><a href="fish.php">都市小農</a></li>
							<li><a href="pointFarm.php">紅利菜園</a></li>
						</ul>
						<ul class="ham_sub">
							<li><a href="application.php">申請資助</a></li>
							<li><a href="application.php">查詢案件</a></li>
							<li><a href="application.php">回報進度</a></li>
							<li><a id="login-btn2">註冊/登入</a></li>
							<li><a href="memberedit.php">會員專區</a></li>
							<li><a href="cart.php">購物車</a></li>
						</ul>
					</div>
	    		</div>
	    		<div class="menu_list">
	    			<ul class="left">
	    				<li>
	    					<a href="hopeFarm.php">
	    						<div class="circle">
	    							<img src="src/image/header/donate.svg" class="icon">
	    						</div>希望農場
	    					</a>
	    				</li>
	    				<li>
	    					<a href="event.php">
	    						<div class="circle">
	    							<img src="src/image/header/active.svg" class="icon">
	    						</div>體驗活動
	    					</a>
	    				</li>
	    			</ul>
	    		</div>
	    		<div class="menu_list">
	    			<ul class="right">
	    				<li>
	    					<a href="fish.php">
	    						<div class="circle">
	    							<img src="src/image/header/city.svg" class="icon">
	    						</div>都市小農
	    					</a>
	    				</li>
	    				
	    				<li>
	    					<a href="pointFarm.php">
	    						<div class="circle">
	    							<img src="src/image/header/farm.svg" class="icon">
	    						</div>紅利菜園
	    					</a>
	    				</li>
	    			</ul>
	    		</div>


	    		<div class="menu_logo"><a href="index.php"><img src="src/image/header/logo_v2.png" id="logo"></a></div>
	    		
	    	</div>
	    </header>
		

	<!-- <section>
 		
	</section> -->
	
	<div class="lightbox-bg">
		<div class="lightbox-target" id="login">
			<div class="cancel">
				<a  id="login-cancel"><img src="src/image/login/pop_close.png"></a>
			</div>
		  <div class="login-content">
			  	<h2>會員登入</h2>
			   <div class="login-account">
				   	<p>帳號</p>
			   		<input type="text" name="memId" value="" placeholder="請輸入帳號">
			   		<span class="focus-border"></span>
			   </div>
			  	<div class="login-pws">
			  		<p>密碼</p>
			  		<input type="password" name="" value="" placeholder="請輸入密碼">
			  		<span class="focus-border"></span>
			  	</div>
			  	<div class="forget">
			  		<a href="">忘記密碼?</a>
			  	</div>
		  	<button type="submit" class="btn_green">登入</button>
		  	 <button type="submit" class="btn_green">facebook登入</button>
		  	<button type="" class="btn_green">註冊</button>
			 
		  	
		  </div>
		  <img class="login-bee" src="src/image/login/deco-img-03.gif">
		</div>
		<div class="login-clear"></div>
	</div>

	    <script type="text/javascript">
			$(document).ready(function(){
			$('#ham_button').click(function(){
				$('#hamicon').toggleClass("hamicon_slide");
				$('#ham_menu').toggleClass("ham_slide");
				});
		});		
			
			$("#login-btn").click(function(){
				$(".lightbox-bg").fadeIn();
			});
			$("#login-btn2").click(function(){
				$(".lightbox-bg").fadeIn();
			});
			$(".cancel").click(function(){
				$(".lightbox-bg").fadeOut();
			});


			$(function(){
				var fixed = false;//設定fix變數 false未fixed, true已fixed
					$(window).scroll(function () {
				var scrollVal = $(this).scrollTop();
				// var adscrtop=$(".topmenu").offset().bottom;
				 var adscrtop=24;
				if(window.innerWidth>767){ //RWD 767以下寬不動作
					if(scrollVal>adscrtop ){//捲動超過 處理方式
						if( ! fixed){
							fixed = true;
							$(".mainmenu").css({"position": "fixed","box-shadow":"0px 1px 10px #aaa"});
							$(".mainmenu").animate({top:'0px'},500,'swing');
							// $(".mainmenu").css({"position": "fixed","top": "0px","box-shadow":"0px 1px 10px #aaa"});
							$('#logo').css({"width":"20%"});
							$('#logo').attr('src','src/image/header/small-logo.png');	
							$('#logo').animate({width:'40%'},800,'swing');							
						}
					}else{//捲動不超過設定距離時
						$(".mainmenu").css({"position": "relative","box-shadow":"none"});
						$('#logo').attr('src','src/image/header/logo_v2.png').css({"width":"100%"});
							if(scrollVal<adscrtop){//捲動小於設定距離 fixed=false
								fixed = false;
							}
						}
				}else{
					$('#logo').css({"width":"100%"});
					$('#logo').attr('src','src/image/header/logo_v2.png');
			 		$(".mainmenu").css({"position": "fixed"});
		 	}
		});
	});

	</script>

	