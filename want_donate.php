<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
<title>即刻菜援</title>

<link rel="stylesheet" type="text/css" href="css/font.css">
<link rel="stylesheet" type="text/css" href="css/want_donate.css">
<!-- web-font -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="src/libs/jquery/dist/jquery.min.js"></script>

</head>
<body>
<?php require_once('header.php');  ?>
	<section class="want_donate">

		<div class="donate_title col-xs-12 col-sm-12">
			<h2>台中「親農」嚴選在地好物 </h2>
			<h3>台中青年農夫的堅持，唯有善耕才能結善果</h3>
			<h4>在地 | 由 <span>親農運銷合作社</span>	提案</h4>
		</div>
		<div class="donate_info col-xs-12 col-sm-12">
			<ul>
				<li class="dib your_itme"><i class="fa fa-check" aria-hidden="true"></i>你的資助選項</li>
				<li class="db item_content"><p>B 2,000元夏祭限定蔬果禮盒<br>．友善稻田．當令鮮米（５斤入）-４包<br>．自然禾香．鮮磨玄米麩　　　　-２包<br>．以及一份我們細心栽培，盛夏限定的田野鮮果禮盒：白玉蜜香瓜．甜蜜嚴選伴手禮盒（中)</p>
				</li>
				<li class="dib group_3">$1,000</li><li class="dib group_3">預計於2017年11月送出<i class="fa fa-question-circle" aria-hidden="true"></i></li><li class="dib group_3"><select name="Program">
					　<option value="A">A. 1,000元小資自理餐</option>
					　<option value="B">B. 2,000元夏祭限定蔬果禮盒</option>
					　<option value="C">C. 3,000元夏祭限定蔬果禮盒(大)</option>
					</select>
				</li>
				<li class="db remark"><i class="fa fa-angle-right" aria-hidden="true"></i>備註 <span>可留空</span></li>
				<li class="db"><textarea class="ta" rows="3" wrap="off" class="content" placeholder="填寫備註(參考回饋或計畫內容的說明，可留空!)"></textarea></li>
				<li class="clear db"></li>
			</ul>

			<form>
				<div class="donate_back">
					<div class="title">
						<p><i class="fa fa-angle-right" aria-hidden="true"></i>資助金額<span> 最低金額為資助選項價格。可向上加碼幫助計畫加速成功。</span></p>
					</div>
					<span class="symbol">$</span>
					<input class="order_sum" min="2000" name="order_sum" type="number" value="2000">
					<div class="title">
						<p><i class="fa fa-angle-right" aria-hidden="true"></i>付款方式</p>
					</div>
					<input type="radio" name="pay_way" class="pay_way_radio" id="pay_way_card" value="1">
					<label class="pay_way_label border_bottom" for="pay_way_card"><i class="fa fa-credit-card" aria-hidden="true"></i> 信用卡付款</label>

					<input type="radio" name="pay_way" class="pay_way_radio" id="pay_way_atm" value="2">
					<label class="pay_way_label border_top" for="pay_way_atm"><i class="fa fa-building-o" aria-hidden="true"></i> ATM機器轉帳或銀行臨櫃繳款</label>

					<div class="title donate_detail">
						<p><i class="fa fa-angle-right" aria-hidden="true"></i>贊助細節</p>
						<table class="mem_info">
							<tr>
								<td class="td_title">收件人姓名</td>
								<td><input type="text" name="mem_name" class="td_input"></td>
								<td class="td_icon"><i class="fa fa-info-circle" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td class="td_title">收件人電話</td>
								<td><input type="text" name="mem_tel" class="td_input"></td>
								<td class="td_icon"><i class="fa fa-info-circle" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td class="td_title">收件地址</td>
								<td><input type="text" name="mem_add" class="td_input"></td>
							</tr>
						</table>
						<table class="mem_info pay_for_card">
							<tr>
								<td class="td_title">持卡人姓名</td>
								<td><input type="text" name="card_name" class="td_input"></td>
							</tr>
							<tr>
								<td class="td_title">交易金額</td>
								<td>NT $2,000 元</td>
							</tr>
							<tr>
								<td class="td_title">信用卡號</td>
								<td><input type="text" name="card_number" class="td_input" placeholder="0000-0000-0000-0000"></td>
							</tr>
							<tr>
								<td class="td_title">到期日</td>
								<td>月(MM)<input type="number" name="mm">/年(YY)<input type="number" name="yy"></td>
							</tr>
						</table>

						<table class="mem_info pay_for_atm">
							<tr>
								<td class="td_title">匯款戶名</td>
								<td>即刻菜援線上金流股份有限公司</td>
							</tr>
							<tr>
								<td class="td_title">銀行代碼</td>
								<td>009</td>
							</tr>
							<tr>
								<td class="td_title">轉帳帳號</td>
								<td>0111-0130-1812-65</td>
							</tr>
							<tr>
								<td class="td_title">應繳金額</td>
								<td>NT $2,000 元</td>
							</tr>
						</table>
						<button class="btn_green">立即付款資助</button>
					</div>
				</div>

			</form>

		</div>
		


	</section>



<?php require_once('Footer.php');  ?>

<script type="text/javascript" src="js/want_donate.js"></script>


	
</body>
</html>