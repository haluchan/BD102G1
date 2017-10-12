<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/memberedit.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

</head>
<body>
	<?php require_once('Header.php'); ?>
	<div class="titlebg">
		<img src="src/image/member/mv01.png" alt="">
	</div>
<div class="bigtitle">
	<h2>會員資料修改</h2>
</div>
<!-- <div class="navbar">
	<div class="navbarli">
		<p>我的資料</p>
	</div>
	<div class="navbarli">
		<p>歷史訂單</p>
	</div>
	<div class="navbarli">
		<p>資助紀錄</p>
	</div>
</div> -->
<div class="mem">
		<div class="table">
			<h2></h2>
			<img src="src/image/member/child.png" alt="">
			<div class="btnbox">
				<a href="">上傳圖檔</a>
			</div>
				<table>
					<thead>
						<tr>
														
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>會員帳號:</td>
							<td><p>becky</p></td>
							
						</tr>
						<tr>
							<td>會員暱稱:</td>
							<td><input type="text" name="" placeholder="becky"></td>
						</tr>
						<tr>
							<td>e-mail:</td>
							<td><input type="email" name=""></td>
						
						</tr>
						<tr>
							<td>會員生日:</td>
							<td>10/06/1998</td>
						
						</tr>
						<tr>
							<td>居住地:</td>
							<td><select name="" >
								<option value="">台北</option>
								<option value="">台中</option>
								<option value="">高雄</option>
								
							</select></td>
						
						</tr>
						<tr>
							<td>性別:</td>
							<td>女</td>
						
						</tr>
					</tbody>
				</table>
			<div class="btnbox">
				<a href="">確定修改</a>
				<a href="">取消修改</a>
			</div>	
		
		</div>	
	
				
	
	


<?php require_once('Footer.php');?>
</div>
</body>
</html>