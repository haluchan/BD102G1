<?php 
ob_start();
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php require_once('Header_head.php'); ?>
<title>活動報名</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/sign-up.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font.css">

</head>
<body>

	<?php require_once('Header.php'); ?>

<?php 

// 報名成功訊息
// if($_REQUEST["info"] == "success"){

// 	echo "<script>alert('報名成功')</script>";

// }





$act_no=$_REQUEST["act_no"];




// echo $act_no;

try{
	require_once("php/connectGrowing_hope.php");

	$signUpEventInfo = "select * from activity where act_no = $act_no";

	$eventSignup = $pdo->query($signUpEventInfo);


	if( $eventSignup->rowCount() == 0 ){

		echo" <script> alert('查無此活動'); </script> ";

	}else{

	$signUpInfoRow = $eventSignup->fetchObject();
	// echo $signUpInfoRow->act_no;
	// echo $signUpInfoRow->act_name;
	// echo $signUpInfoRow->act_price; 

		
 ?>	

	<?php  

		if(isset($_SESSION["mem_id"]) === true){

			// echo $_SESSION["mem_no"];
			// echo $_SESSION["mem_name"];
			// echo $_SESSION["mem_mail"];
			// echo $_SESSION["mem_phone"];



		


	 ?>

					
		







    <div class="sign-up">
    	<div class="sign-up-bg">
				<img src="src/image/sign-up/sign-up-bg.jpg" alt="幫助小農">
			</div>
		<div class="lightbox-target">
			<div >
				<!-- <a  id="sign-cancel"><img src="src/image/login/pop_close.png"></a> -->
			</div>
			<form action="php/sign-up-list.php" method="get" accept-charset="utf-8">
			<div class="sign-content">
				<h2>活動報名</h2>
				<div class="sign-title">
					<ul>
						<li>活動編號</li>
						<li>活動名稱</li>
						<li>會員編號</li>
						<li>活動費用</li>
						<li>會員姓名</li>
						<li>參加人數</li>
						<li>電子信箱</li>
						<li>電話</li>
					</ul>
				</div>
				
				<div class="sign-info">
					<ul>
						<li><input type="text" name="act_no" value="<?php echo $signUpInfoRow->act_no; ?>" readonly="true"></li>
						<li><input type="text" name="act_name" value="<?php echo $signUpInfoRow->act_name; ?>" readonly="true"></li>
						<li><input type="text" name="mem_no" value="<?php echo $_SESSION["mem_no"];?>" readonly="true"></li>
						<li><input type="text" name="act_price" value="<?php echo $signUpInfoRow->act_price; ?>" readonly="true"></li>
						<li><input type="text" name="mem_name" value="<?php echo $_SESSION["mem_name"];?>"></li>
						<li><input type="number" name="actSign_qty" value="" min="0" placeholder="輸入人數"></li>
						<li><input type="text" name="mem_mail" value="<?php echo $_SESSION["mem_mail"];?>" placeholder="輸入連絡信箱"></li>
						<li><input type="text" name="mem_phone" value="<?php echo $_SESSION["mem_phone"];?>" placeholder="輸入聯絡電話"></li>
					</ul>
				</div>
				<div class="sign-clear"></div>
				<div class="btn-item">
					<button type="submit" class="btn_green">
				確定報名</button>
				</div>

				<div class="sign-clear"></div>

			</div>
		</div>
		<div class="sign-clear"></div>

	</div>
	</form>

<?php
		}

	}


}catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}



 ?>


<?php require_once('Footer.php'); ?>
<script type="text/javascript" src="js/login-ajax.js"></script>

	
</body>
</html>