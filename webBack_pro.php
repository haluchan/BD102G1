<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::商品</title>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" href="css/webBack_pro.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<form class="myForm">
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>商品編號</th>
			<th>類別</th>
			<th>商品名稱</th>
			<th>價格</th>
			<th>規格</th>
			<th>狀態</th>
			<th>修改</th>
		</tr>
		<tr class="tdRow">
			<td>1</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			<td>
				<input type="radio" name="status" value="0"><label>上架</label>
				<input type="radio" name="status" value="1"><label>下架</label>
			</td>
			<td>
				<input class="btn" type="button" name="revise" value="修改資料">
			</td>
		</tr>
		<tr class="tdRow">
			<td>2</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
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
			<td></td>
			<td></td>
		</tr>
		<tr class="tdRow">
			<td>4</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4aaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbb</td>
			<td>Lo</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="tdRow">
			<td>5</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="tdRow">
			<td>6</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="tdRow">
			<td>7</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
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
			<td></td>
			<td></td>
		</tr>
	</table>
</form>

<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>