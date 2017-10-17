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
	<link rel="stylesheet" href="css/webBack_proAdd.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<form class="myForm">
	<div class="pro_line"></div>
	<table cellspacing="0">
		<!-- 寬度設定在第一行，隱藏 -->
		<tr visibilitiy="hidden" class="hide">
			<th></th>
			<td></td>
			<th></th>
			<td></td>
		</tr>
		<tr class="pro_numDisable">
			<th><span>商品編號</span></th>
			<td colspan="3"><input type="text" value="s001" disabled="disabled"></td>
		</tr>
		<tr>
			<th>商品名稱</th>
			<td><input type="text"></td>
			<th>上傳圖檔</th>
			<td><input type="file" multiple="multiple" required="required" draggable="true" ></td>
		</tr>
		<tr>
			<th>商品類別</th>
			<td>
				<select name="proClass" id="">
					<option value="s">種子</option>	
					<option value="t">魚缸</option>	
				</select>
			</td>
			<th colspan="2" rowspan="3"></th>
		</tr>
		<tr>
			<th>商品價格</th>
			<td><input type="text"></td>
		</tr>
		<tr>
			<th>商品規格</th>
			<td>
				<textarea name="" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
	</table>
</form>
<div class="proSave">
	<button class=".btn">新增</button>
</div>

<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>