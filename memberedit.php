<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/memberedit.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	
	<body>
	<?php require_once('Header.php'); ?>
	<div class="titlebg">
		<img src="src/image/member/mv01.png" alt="">
	</div>
<div class="bigtitle">
	<h2>會員資料修改</h2>
</div>

<div class="mem">
	<!-- <section class="parallax">	
<div id="scenes" data-hover-only="false">
            <div class="parallax_area" data-depth="0.5">
            	<img src="src/image/member/concept_index.png" alt="">
            </div> -->
            <!-- <div class="parallax_area_01" data-depth="0.4">
            	<img src="src/image/event/hatsuka_daikon.png" alt="">
            </div> -->
       <!--      <div class="parallax_area_02" data-depth="0.8"><img src="src/image/event/ninjin_carrot2.png" alt=""></div> -->
</div>
</section>
	<form action="" method="get" accept-charset="utf-8">
	
	
		<div class="table">
			<h2></h2>
			<img src="src/image/member/child.png" alt="">
			<div class="imguplod btnbox">
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
							<td><p>10/06/1998</p></td>
						
						</tr>
						<tr>
							<td>居住地:</td>
							<td><input type="text" name="" ></td>
						
						</tr>
						<tr>
							<td>性別:</td>
							<td><p>女</p></td>
						
						</tr>
					</tbody>
				</table>
			
		</form>
			<div class="btnbox">
				<a href="">確定修改</a>
				<a href="">取消修改</a>
			</div>	
				
	</div>
	
	



<?php require_once('Footer.php');?>
</div>


</body>
</html>