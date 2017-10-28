	<div class="container">

		<article>
			 <div class="manage">
			 	
			 	<ol>
			 		<!-- logo -->
			 		<li><img src="src/image/web_back_frame/logo.png"></li>


			 		<li>
			 			<span class="slideButton motherTitle"><img src="src/image/web_back_frame/circleWithPlus.png">資助管理</span>
			 			<ol class="item">
			 				<li><a href="webBack_eventDecide.php" class="itemClick"><img src="src/image/web_back_frame/line.png">案件審核</a></li>
			 				<li><a href="webBack_caseStatus.php" class="itemClick"><img src="src/image/web_back_frame/line.png">案件狀態</a></li>
			 				<li><a href="webBack_donateDetails.php" class="itemClick"><img src="src/image/web_back_frame/line.png">資助進度</a></li>
			 				<li><a href="webBack_caseCheckUp.php" class="itemClick"><img src="src/image/web_back_frame/line.png">上架確認</a></li>
			 				<li><a href="webBack_caseReturn.php" class="itemClick"><img src="src/image/web_back_frame/line.png">案件回報</a></li>
			 			</ol>
			 		</li>


			 		<li><a class="motherTitle" href="webBack_xreport.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">檢舉管理</a></li>


			 		<li>
			 			<span class="slideButton motherTitle"><img src="src/image/web_back_frame/circleWithPlus.png">活動管理</span>
			 			<ol class="item">
			 				<li><a href="#" class="itemClick"><img src="src/image/web_back_frame/line.png">活動全覽</a></li>
			 				<li><a href="#" class="itemClick"><img src="src/image/web_back_frame/line.png">新增活動</a></li>
			 			</ol>
			 		</li>


			 		<li><a class="motherTitle" href="memberback.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">會員管理</a></li>


			 		<li><a class="motherTitle" href="orderMaster.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">訂單管理</a></li>


			 		<li>
			 			<span class="slideButton motherTitle"><img src="src/image/web_back_frame/circleWithPlus.png">商品管理</span>
			 			<ol class="item">
			 				<li><a href="webBack_pro.php" class="itemClick"><img src="src/image/web_back_frame/line.png">商品全覽</a></li>
			 				<li><a href="webBack_proadd.php" class="itemClick"><img src="src/image/web_back_frame/line.png">新增商品</a></li>
			 			</ol>
			 		</li>


			 		<li><a class="motherTitle" href="webBack_admin.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">管理員管理</a></li>


			 	</ol>
				

				<p class="signInInfo"><?php echo '管理員：<br>' .$_SESSION['adminName']. '<br>登入時間：<br>' .$_SESSION['signInDate']; ?></p>
			 	<a class="logout" type="button" href="php/admin_signOut.php">登出</a>

			 </div>
		<!-- 內容 -->
			<div class="content_form">
		



