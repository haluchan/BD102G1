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
			<th>管理員帳號</th>
			<th>管理員密碼</th>
			<th>管理員名稱</th>
			<th>新增 ｜ 刪除</th>
		</tr>
		<tr class="tdRow">
			<td>1</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>2</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>3</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>4</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>5</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>6</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>7</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>8</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>9</td>
			<td>2AA</td>
			<td>3AA</td>
			<td></td>
			<td>
				<input type="button" value="刪除">
			</td>
		</tr>
		<tr class="tdRow">
			<td>9</td>
			<td><input type="text" name="memId" maxlength="10"></td>
			<td><input type="text" name="memPsd" maxlength="10"></td>
			<td><input type="text" name="memName" maxlength="10"></td>
			<td><input type="submit" value="新增"></td>

		</tr>
	</table>
</form>

<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>