



   	
   	<div>
   		<?php require_once('login.php'); ?> 
        <?php require_once('memsign.php'); ?> 
   	</div>

<!-- 購物車session 夾帶 -->
    <form action="cart.php" method="get" accept-charset="utf-8" id="formCart">
      <input type="hidden" name="cartCount" value="" id="cartCount">
    </form>



    <header class="header">


    	<div class="topmenu">
    		<ul>	
    			<li><a class="cartBtn">購物車<span class="cartNo">0</span></a></li>
    			<li><span id="memName"></span><a  id="spanLogin" >註冊/登入</a></li>
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
						<!-- <li><a href="application.php">查詢案件</a></li> -->
						<li><a href="application.php">回報進度</a></li>
						<li><a id="login-btn2">註冊/登入</a></li>
                        <li><a href="member.php">會員專區</a></li>
						<li><a href="product.php">商品專區</a></li>
						<li><a  class="cartBtn" >購物車(<span class="cartNo">0</span>)</a></li>
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