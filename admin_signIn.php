<?php
session_start();
ob_start();
$_SESSION['signInInfo']='';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>後台::管理員登入</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/admin_signIn.css" rel="stylesheet">
<script src="js/admin_signIn.js"></script>
</head>
<body>
	<section>
		<div class="carrot">
			<!-- <img src="src/image/admin_signIn/carrot.png"> -->
			<img src="src/image/admin_signIn/carrotMove.gif">
		</div>

		<div class="title">管理員登入</div>



		<div class="center">
			<div class="contain">
				<div class="logo">
					<img src="src/image/admin_signIn/logo.png" alt="">
				</div>
				<div class="vegetable">
					<img src="src/image/admin_signIn/vegetable.png" alt="">
				</div>


				<div class="form">
					<form action="php/webBack_admin_signIn.php" method="post">
						<div class="input">
							<label for="adm_id">帳號</label>
							<input type="text" id="adm_id" name="admin_id">
						</div>
						<div class="input">
							<label for="adm_psw">密碼</label>
							<input type="password" id="adm_psw" name="admin_psw">
						</div>
						<div>
							<input type="submit" class="btn" id="signIn" value="登入">
						</div>
					</form>
				</div>


			<div class="greenLine"></div>



			</div>
		</div>
	</section>

<script>
	window.addEventListener('load', function(){

		var signInInfo = " <?php echo $_SESSION['signInInfo']; ?>";

		if (signInInfo.length > 1){
			alert(signInInfo);
			<?php  $_SESSION['signInInfo'] = '';?>
		}
		

	}, false);
</script>

</body>
</html>