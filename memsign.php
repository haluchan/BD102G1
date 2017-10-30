


	
	<div class="lightbox-bg" id="memsign-lightbox">
		<div class="lightbox-target" >
			<div class="wrapper cancel">
				<div class="button-block">
			    	<button type="button" class="button-x" id="membutton_x">
			    	<i class="mark x"></i>
			    	<i class="mark xx"></i>
			    	</button>
				</div>
			</div>
			<form action="php/memberInsert.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				
			
	
		  <div class="login-content">
			  	<h2>會員註冊</h2>
			<!-- <div class="photo ">
				<img src="src/image/member/
					<?php //echo $_SESSION['mem_pho'];?>" alt=""> 
			</div> -->
			<div class="imguplod">
				<span >選擇照片</span>
				<input type="file" class="memimguplod" name="mem_pho">
			</div>
			   <div class="sign-account">
				   	<p>帳號</p>
			   		<input type="text" name="mem_Id" value="" placeholder="請輸入帳號">
			   		<span class="focus-border"></span>
			   </div>
			   <div class="sign-account">
				   	<p>姓名</p>
			   		<input type="text" name="mem_name" value="" placeholder="請輸入姓名">
			   		<span class="focus-border"></span>
			   </div>
			  	<div class="sign-pws">
			  		<p>密碼</p>
			  		<input type="password" name="mem_psw" value="" placeholder="請輸入密碼">
			  		<span class="focus-border"></span>
			  	</div>
			  	<div class="sign-repws">
			  		<p>確認密碼</p>
			  		<input type="password" name="mem_psw" value="" placeholder="請輸入密碼">
			  		<span class="focus-border"></span>
			  	</div>
			  		<div class="sign-birth">
			  		<p>生日</p>
			  		<input type="date" name="mem_birth" value="" placeholder="">
			  		<span class="focus-border"></span>
			  	</div>
			  	<div class="sign-gender">
			  		
			  		<p>性別</p>
			  		
			  		<div class="genderinput">
			  			<label for="male">
			  		<input type="radio" name="mem_gender" value="male" id="male">&nbsp;&nbsp;男</label>
			  		<label for="female">
			  		<input type="radio" name="mem_gender" value="female" id="female">&nbsp;&nbsp;女</label>
			  		</div>
			  		
			  	</div>
			  		<div class="sign-mail">
			  		<p>email</p>
			  		<input type="email" name="mem_mail" value="" placeholder="gb@gmail.com">
			  		<span class="focus-border"></span>
			  	</div>
			  
			  		<div class="sign-add">
			  		<p>居住地址</p>
			  		<textarea name="mem_add" value="" placeholder="" cols="2">
			  			
			  		</textarea>
			  		<span class="focus-border"></span>
			  	</div>
			  
			  <!-- 	<div class="forget">
			  		<a href="">忘記密碼?</a>
			  	</div> -->
		  		<button type="submit" class="btn_green">確定</button>
		  	 <!-- <button type="submit" class="btn_green">facebook登入</button> -->
		  	<!-- <button type="" class="btn_green">註冊</button> -->
			 
		  			</form>
		  		</div>	
			</div>
		 <!--  <img class="login-bee" src="src/image/login/deco-img-03.gif"> -->
		</div>
		<div class="login-clear"></div>
	</div>

