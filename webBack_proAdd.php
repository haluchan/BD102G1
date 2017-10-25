<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::新增商品</title>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" href="css/webBack_proAdd.css">
	<!-- 不准動的部分，以下三行 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
	<nav>				
		<div class="nav_item pageTitle">
			<h2>新增商品</h2>
		</div>
		<div class="clearfix"></div>
	</nav>

	<form action="php/webBack_pro_add.php" method="post" enctype="multipart/form-data" class="myForm">
		<div class="pro_line"></div>
		<table cellspacing="0">
			<!-- 寬度設定在第一行，隱藏 -->
			<tr visibilitiy="hidden" class="hide">
				<th></th>
				<td></td>
				<th></th>
				<td></td>
			</tr>
			<!-- 表格 -->
			<tr class="pro_numDisable">
				<th><div>商品編號</div></th>
				<td colspan="3">
					<div class="input">
						<span id="typeEnName"></span>
						<span>
						<?php
							try {
								require_once("php/connectGrowing_hope.php");
								$sql = "select lpad(MAX(pro_no)+1, 3, 0) from product";
								$product = $pdo->query($sql);
								$proNoNew = $product->fetchColumn(0); //目前編號到幾
								echo $proNoNew;
						?>
						<!-- 目前的商品號偷偷送過去 -->
						<input type="hidden" name="pro_no" value="<?php echo $proNoNew?>">
						<?php
							} catch (PDOException $e) {
								echo "錯誤行號 : ", $e->getLine(), "<br>";
								echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
							}
						?>

						</span>
					</div>
				</td>
			</tr>
			<tr>
				<th>商品名稱</th>
				<td><input type="text" name="pro_name" required></td>
				<th>上傳圖檔</th>
				<td><input type="file" name="image[]" multiple="multiple" draggable="true"></td>
			</tr>
			<tr>
				<th>商品類別</th>
				<td>
					<select name="pro_type" id="typeSelect" required>
						<option value="">請選擇</option>	
						<option value="1">種子</option>	
						<option value="2">魚缸</option>	
						<option value="3">其他/未定義</option>	
					</select>

				</td>
				<th colspan="2" rowspan="3"></th>
			</tr>
			<tr>
				<th>商品價格</th>
				<td><input type="text" name="pro_price" required></td>
			</tr>
			<tr>
				<th>商品規格</th>
				<td>
					<textarea name="pro_std" cols="30" rows="10" required></textarea>
				</td>
			</tr>
		</table>
		<div class="proSave">
			<input type="submit" class="submit" value="送出">
		</div>
	</form>


<?php require_once('web_back_frame_bottom.php') ?>






<script>

	// 依據選擇不同自動立即更換編號首字母
	$("#typeSelect").change(function(){
		$("#typeEnName").empty(); //清空位置
		var name = $("#typeSelect :selected").text(); //得到結果
		var enType = productEnCode(name); //傳出中文傳回英文
		// $("#typeEnName").text() = type;
	  	$("#typeEnName").text(enType);
	});

	//判斷是哪個英文字(之後可以單獨包出去再掛進來)
	function productEnCode($txt){
		if($txt == "種子" || $txt ==1){
			return 's';
		}else if($txt == "魚缸" || $txt ==2){
			return 't';					
		}else{
			return 'z';
		}
	}
</script>

</body>
</html>