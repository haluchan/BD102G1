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
			<th>檢舉編號</th>
			<th>被檢舉會員</th>
			<th>檢舉會員</th>
			<th>留言編號</th>
			<th>檢舉內容</th>
			<th>審核</th>
			<th>檢舉時間</th>
		</tr>
		<tr class="tdRow">
			<td>1</td>
			<td>2AA</td>
			<td>3AA</td>
			<td>4AA</td>
			<td></td>
			<td></td>
			<td>
				<input type="radio" name="status" value="0"><label>通過</label>
				<input type="radio" name="status" value="1"><label>駁回</label>
			</td>
			<td>
				<input class="btn" type="button" name="revise" value="？？">
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
		<tr class="tdRow">
			<td colspan="8" bgcolor="#ABCD87">
				<input type="submit" value="確認">
			</td>
		</tr>
		
	</table>
</form>

<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>