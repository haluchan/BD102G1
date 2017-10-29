<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/memberedit.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<?php require_once('Header_head.php'); ?>
	</head>
	<body>
	<?php require_once('Header.php'); ?>
	
	<div class="titlebg">
		<img src="src/image/member/mv01.png" alt="">
	</div>
<div class="bigtitle">
	<h2>會員資料修改</h2>
</div>

<div class="mem">

</section>
	<form action="php/memupdata.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<div class="table">
			<div class="photo">
			<img src="src/image/member/
					<?php echo $_SESSION['mem_pho'];?>.png" alt=""> 
			</div>
			<div class="imguplod">
				<span >選擇照片</span>
				<input type="file" class="memimguplod" name="mem_pho">
			</div>
				<table>
					<tbody>
						<tr>
							<td>會員帳號:</td>
							<td><p><?php echo $_SESSION["mem_id"] ;?></p></td>
							<input type="hidden" name="mem_id" value="<?php echo $_SESSION["mem_id"] ;?>">
						</tr>
						<tr>
							<td>會員暱稱:</td>
							<td><input type="text" name="mem_name" value="<?php echo $_SESSION['mem_name'] ;?>"></td>
						</tr>
						<tr>
							<td>會員密碼:</td>
							<td><input type="text" name="mem_psw" value="<?php echo $_SESSION['mem_psw'] ;?>"></td>
						</tr>
						<tr>
							<td>e-mail:</td>
							<td><input type="email" name="mem_mail" value="<?php echo $_SESSION['mem_mail'] ;?>"></td>
						
						</tr>
						<!-- <tr>
							<td>會員生日:</td>
							<td><p><?php echo $_SESSION["mem_birth"] ;?></p></td>
						
						</tr> -->
						<tr>
							<td>居住地:</td>
							<td><input type="text" name="mem_add" value="<?php echo $_SESSION['mem_add'];?>" ></td>
						
						</tr>
						<!-- <tr>
							<td>性別:</td>
							<td><p><?php echo $_SESSION["mem_gender"] ;?></p></td>
						
						</tr> -->
					</tbody>
				</table>
			<div class="btnbox">
				<input class="but" type="submit">
				<input class="but" type="button" onClick="location.href='member.php'" value='取消修改'>
			</div>		
		</form>
	</div>
		<div class="clear"></div>
	</div>
	
	



<?php require_once('Footer.php');?>
</div>
 <script type="text/javascript" src="js/header.js"></script>

</body>
</html>