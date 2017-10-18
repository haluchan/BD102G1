<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::訂單明細</title>
	
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" href="css/webBack_orderItem.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item">

				<h2>訂單明細</h2>
			</div>
			<div class="nav_item">
				<span>狀態：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select>
			</div>
			<div class="nav_item">
				<span>類別：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select>
			</div>
			<div class="nav_item">
				<div class="search">
					<input type="text" name="" placeholder="搜尋">

					<button><img src="src/image/web_back_frame/seaech.png"></button>
					<button><img src="src/image/web_back_frame/erase.png"></button>
				</div>
			</div>
			<div class="clearfix"></div>
		</nav>

<form class="myForm">
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>123訂單編號</th>
			<th>商品編號</th>
			<th>商品名稱</th>
			<th>商品數量</th>
			<th>商品價格</th>
			
		</tr>
		<tr class="tdRow">
			<td>1</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
		
		</tr>
		<tr class="tdRow">
			<td>2</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
		
		</tr>
		<tr class="tdRow">
			<td>3</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			
		</tr>
		<tr class="tdRow">
			<td>4</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4aaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbb</td>
			<td>Lo</td>
			<td>Lo</td>
			
		</tr>
		<tr class="tdRow">
			<td>5</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td>Lo</td>
		
		</tr>
		<tr class="tdRow">
			<td>6</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td>Lo</td>
		
		</tr>
		<tr class="tdRow">
			<td>7</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			
		</tr>
		<tr class="tdRow">
			<td>8</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
		
		</tr>
		<tr class="tdRow">
			<td>9</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
		
		</tr>
		<tr class="tdRow">
			<td>10</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			
		</tr>
		<tr class="tdRow">
			<td>11</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			
		</tr>
		<tr class="tdRow">
			<td>12</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			
		</tr>

		<tr class="tdRow">
			<td>13</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			
		</tr>

	</table>
</form>

<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>