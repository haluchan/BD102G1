	<div class="container">

		<article>
			 <div class="manage">
			 	
			 	<ol>
			 		<!-- logo -->
			 		<li><a href="webBack_welcome.php"><img src="src/image/web_back_frame/logo.png"></a></li>


			 		<li>
			 			<span class="slideButton motherTitle"><img src="src/image/web_back_frame/circleWithPlus.png">資助管理</span>
			 			<ol class="item">
			 				<li><a href="webBack_eventDecide.php" class="itemClick"><img src="src/image/web_back_frame/line.png">案件審核</a></li>
			 				<li><a href="webBack_caseStatus.php" class="itemClick"><img src="src/image/web_back_frame/line.png">案件狀態</a></li>
			 				<li><a href="webBack_donate.php" class="itemClick"><img src="src/image/web_back_frame/line.png">資助進度</a></li>
			 				
			 				<li><a href="webBack_caseReturn.php" class="itemClick"><img src="src/image/web_back_frame/line.png">案件回報</a></li>
			 			</ol>
			 		</li>


			 		<li><a class="motherTitle" href="webBack_xreport.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">留言檢舉</a></li>


			 		<li>
			 			<span class="slideButton motherTitle"><img src="src/image/web_back_frame/circleWithPlus.png">活動管理</span>
			 			<ol class="item">
			 				<li><a href="actSign.php" class="itemClick"><img src="src/image/web_back_frame/line.png">查看報名</a></li>
			 				<li><a href="activity.php" class="itemClick"><img src="src/image/web_back_frame/line.png">新增活動</a></li>
			 			</ol>
			 		</li>


			 		<li><a class="motherTitle" href="memberback.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">會員名單</a></li>


			 		<li><a class="motherTitle" href="orderMaster.php" class="itemClick"><img src="src/image/web_back_frame/circleWithPlus.png" id="slideButton">訂單總覽</a></li>


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
		



