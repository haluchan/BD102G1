<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/cart.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font.css">
<title>購物車</title>

</head>
<body>

	<?php require_once('Header.php'); ?>

	<div class="cart-container">
		<div class="cart-bg">
		<!-- 標題 -->

	    <div class="cart-title">
	    	<img src="src/image/cart/Group 10.png" alt="購物車">
	    </div>

		<!-- 商品資訊 -->

		<div class="cart-list">
			<div class="cart-item" id="cart-item">
				<div class="item-left-group">
					<div class="cart-item-left">
						<div class="cart-prod-img" >
							<img src="src/image/cart/cart-img01.png" alt="水族箱">
						</div>
						<div class="item-group">
							<span>商品</span><br>
							<span>數量</span><br>
							<span>使用紅利折抵</span>
						</div>
						<div class="item-group">
							<span>魚菜-組合</span><br>
							<input type="number" name="Quantity" placeholder="" min="0" max="10"><br>
							<input type="radio" name="red" value="1">是
							<input type="radio" name="red" value="0">否
						</div>
						<div class="item-price">
							<span>NT $1000</span><br>
							<a href="#" class="edit"><span>修改數量</span></a>
							<a href="#" class="delete"><span>移除</span></a>
						</div>						
					</div>
				</div>
			</div>
			

			<!-- 價格總計 -->

			<div class="cart-total-panel">
				<form>
					<select name="transmath">
					　<option value="便利商店取貨">便利商店取貨</option>
					　<option value="宅配">宅配</option>
					</select>
				</form>
				<div class="cart-total-title">
					<span>商品總金額</span><br>
					<span>紅利折抵</span><br>
					<span>運費</span>
				</div>
				<div class="cart-total-money">
					<span>NT $1000</span><br>
					<span>NT $-80</span><br>
					<span>NT $80</span>
				</div>
				<div class="cart-total">
					<span>合計</span>
					<span>NT $1000</span>
				</div>

			</div>
		</div>
		<div class="keep-shopping">
				<button type="submit" class="btn_green" value="">繼續購物</button>
		</div>
		<!-- 運送地址 -->


		<div class="cart-address">
			<h2>寄送地址</h2>
			<div class="cart-preset">
				<input type="radio" name="preset" value="1">&nbsp預設1
				<input type="radio" name="preset" value="2">&nbsp預設2
				<input type="radio" name="preset" value="3">&nbsp預設3
			</div>
			<div class="cart-shipping-info">
				<form action="#">
					<div class="form-group">
						<label for="ShippingInfo_full_name" class="required">
							收件人姓名
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo[full_name]" id="ShippingInfo_full_name" type="text"><br>
						<label for="ShippingInfo_full_phone" class="required">
							收件人電話
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo[full_phone]" id="ShippingInfo_full_phone" type="text">
					</div>
					<div class="form-group">
						<label for="ShippingInfo_full_name" class="required">
							電子信箱
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo[full_mail]" id="ShippingInfo_full_mail" type="text"><br>
						<label for="ShippingInfo_full_address" class="required">
							地址
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo[full_address]" id="ShippingInfo_full_address" type="text">
					</div>
				</form>
			</div>
		</div>


		<!-- 付款方式 -->

		<div class="cart-pay">
			<h2>付款方式</h2>
			<form action="cart_submit" method="get" accept-charset="utf-8">
				<div class="form-group">
					<span>選擇付款方式</span>
					<select name="pay-way" >
						<option value="card">信用卡</option>
						<option value="trans">轉帳</option>
					</select>
				</div>
				<div class="form-group">
					<span>卡別</span>
					<select name="cart-selsct" >
						<option value="visa">VISA</option>
						<option value="master">Master</option>
					</select>
				</div>
				<div class="form-group">
					<span>卡號</span><br>
					<input type="text" class="form-control" name="" value="" placeholder="">
					
				</div>
				<div class="form-group">
					<span>有效日期</span><br>
					<input type="text" class="form-control" name="" value="" placeholder="">
					<input type="text" class="form-control" name="" value="" placeholder="">
				</div>
				<div class="form-group">
					<span>後三碼</span><br>
					<input type="text" class="form-control" name="" value="" placeholder="">
				</div>
				
			</form>
		</div>
		<button type="submit" class="btn_green" name="" value="">結帳</button>
		</div>
		<div class="clear"></div>
    </div>

	<?php require_once('Footer.php'); ?>

</body>
</html>