
	<script src="src/libs/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/headerFooter.css">
	
	<?php require_once('login.php'); ?>
	<div class="header-cont">
		<header id="header_none">
			<div class="head-1">
				<div class="head-1-text">
					<a href="cart.php">
						<h4 class="header-h4">購物車</h4>
					</a>
					<a id="login-btn">
						<h4 class="header-h4">註冊/登入</h4>
					</a>
					<a href="application.php">
						<h4 class="header-h4">申請資助</h4>
					</a>
					<div class="clear"></div>
				</div>
			</div>
			<!-- hamberger -->
			<btn>
		        	<div class="starbtn btn-sidebar">
		            	<span></span>
		        	</div>
		    	</btn>
		    <div class="sidebar">
		        <ul>
		            <li><a href="hopeFarm.php"><h3 class="header-h3">希望農場</h3></a></li>
		            <li><a href="event.php"><h3 class="header-h3">體驗活動</h3></a></li>
		            <li><a href="fish.php"><h3 class="header-h3">都市小農</h3></a></li>
		            <li><a href="pointFarm.php"><h3 class="header-h3">紅利菜園</h3></a></li>
		            <li><a href="application.php"><h6 class="header-h6">申請資助</h6></a></li>
		            <li><a href="application_search.php"><h6 class="header-h6">查詢案件</h6></a></li>
		            <li><a href="application_report.php"><h6 class="header-h6">回報進度</h6></a></li>
		            <li><a href="login.php"><h6 class="header-h6">註冊/登入</h6></a></li>
		            <li><a href="memberedit.php"><h6 class="header-h6">會員專區</h6></a></li>
		            <li><a href="cart.php"><h6 class="header-h6">購物車</h6></a></li>
		        </ul>
		    </div>
		    <!-- ///hamberger -->
			<div class="head-2">
				<div class="head-2-box">
					<div class="head-2-left">
					<a href="hopeFarm.php">
						<div class="head-2-item" id="nav01">
							<img class="header-img" src="src/image/hopeFarm/farm.png" id="bg01">	
							<h2 class="header-h2">希望農場</h2>
						</div>
					</a>
					<a href="event.php">
						<div class="head-2-item" id="nav02">
							<img class="header-img"  src="src/image/hopeFarm/active.png" id="bg02">
							<h2 class="header-h2" >體驗活動</h2>
						</div>
					</a>	
					</div>
					<div class="head-2-right">
					<a href="fish.php">
						<div class="head-2-item" id="nav03">
							<img class="header-img"  src="src/image/hopeFarm/city.png" id="bg03">
							<h2 class="header-h2">都市小農</h2>
							
						</div>
					</a>
					<a href="pointFarm.php">	
						<div class="head-2-item" id="nav04">
							<img class="header-img"  src="src/image/hopeFarm/donate.png" id="bg04">
							<h2 class="header-h2">紅利菜園</h2>
						</div>
					</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="head-3 ">
				<a href="">
					<img class="header-img" src="src/image/hopeFarm/logo.png">
				</a>
			</div>
			<div class="clear"></div>
		</header>
	</div>
		<!-- ============///fix_navbar===================================== -->
		<div class="fix_navbar" id="top-bar">
			<div class="fix_navbar-box">
				<div class="fix_navbar-left">
				<a href="hopeFarm.php">
					<div class="fix_navbar-item" id="fix_nav01">
						<img class="header-img"  src="src/image/hopeFarm/farm.png" id="fix_bg01">	
						<h2 class="header-h2">希望農場</h2>
					</div>
				</a>
				<a href="event.php">
					<div class="fix_navbar-item" id="ix_nav02">
						<img class="header-img"  src="src/image/hopeFarm/active.png" id="bg02">
						<h2 class="header-h2">體驗活動</h2>
					</div>
				</a>	
				</div>
				<div class="fix_navbar-right">
				<a href="fish.php">
					<div class="fix_navbar-item" id="ix_nav03">
						
						<img class="header-img"  src="src/image/hopeFarm/city.png" id="bg03">
						<h2 class="header-h2">都市小農</h2>
						
					</div>
				</a>
				<a href="pointFarm.php">	
					<div class="fix_navbar-item" id="ix_nav04">
						<img class="header-img"  src="src/image/hopeFarm/donate.png" id="bg04">
						<h2 class="header-h2">紅利菜園</h2>
					</div>
				</a>
				</div>
			</div>
		
		<div class="fix_navbar-3 ">
			<a href="index.html">
				<img class="header-img" src="src/image/heatfooter/fix_navbar.png">
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<!-- /header -->
	<script type="text/javascript">
	$( "#login-btn" ).click(function() {
  	$( ".lightbox-bg" ).toggle( "slow" );
	});
	$( "#login-cancel" ).click(function() {
  	$( ".lightbox-bg" ).toggle( "off" );
	});
	</script>

