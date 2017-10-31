<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Taipei");
 ?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php require_once('Header_head.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/cart.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font.css">
<title>購物車</title>

</head>
<body>

	<?php require_once('Header.php'); ?>
<form action="php/orderlist.php" method="get" accept-charset="utf-8"  id="checkToPaySubmit">
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

	<?php


if (isset($_REQUEST["cartCount"]) === false) {
	
	$_REQUEST["cartCount"] = "0";
	
}else{

	try {

	$cartCount = $_REQUEST["cartCount"];

	// echo $cartCount,"<br>";



	$cartStr = substr($cartCount,0,-2); //切掉最後2個字元


	$cartarry = explode(", ", $cartStr); //分割後存進陣列

	
	$cartArryLength = count($cartarry);


	require_once("php/connectGrowing_hope.php");

	

		// echo "$cartarry[$i]","<br>";

	$sqlMem = "select * from mixproduct";

	// $productNo = $pdo->prepare($sql);


	$productNo = $pdo->query($sqlMem);

	$proTotal = 0;
	// for($i=0; $i < $cartArryLength; $i++) {
    // for($i=0; $i <$cartArryLength; $i++) {

	
	while ( $prodRow = $productNo->fetchObject() ){

		
		for($i=0; $i <$cartArryLength; $i++) {
		
			if($cartarry[$i] == $prodRow->pro_realno  ){

				// echo $prodRow->pro_name ," <br>" ;

				// echo $prodRow->pro_price ," <br>";

				// echo $prodRow->pro_pho ," <br>";

			$proTotal += $prodRow->pro_price;



	

	// foreach ($prodRow as  $value) {
	// 	foreach ($value as  $key => $val) {
	// 		echo  "$key : $val" ,"<br>";
	// 	}
		
	// }

?>



	

					<div class="cart-item-left" >
						<div class="cart-prod-img" >
							<img src="src/image/product/<?php echo $prodRow->pro_pho; ?>" alt="水族箱">
						</div>
						<div class="item-group">
							<span>商品</span><br>
							<span>數量</span><br>
							
						</div>
						<div class="item-group">
							<input type="text" name="prodName" style="none" class="prodName" readonly value="<?php echo $prodRow->pro_name; ?>" ><br>
							<input type="number" name="Quantity" value="1" class="prodNum" min="1" max="10"><br>
							
						</div>
						<div class="item-price">
							<span>NT $<input type="text" name="prodPrice" class="prodPrice" readonly value="<?php echo $prodRow->pro_price;?>"></span><br>
							<a class="cartBtn"><span type="" class="editNum" >修改數量</span></a>
							<a  class="cartBtn" id="<?php echo $cartarry[$i] ; ?>"><span  class="removeBtn" id="removeItem" >移除</span></a>
						</div>						
					</div>

<?php



}else{}

			

		}
	
}





	
?>



				</div>
			</div>
		







			<!-- 價格總計 -->

			<div class="cart-total-panel">
				<div>
					<select name="transmath">
					　<option value="0">便利商店取貨</option>
					　<option value="1">宅配</option>
					</select>
				</div>
				<div class="cart-total-title">
					<span>商品總金額</span><br>
					<span>使用紅利折抵</span><br>
					<span>紅利折抵</span><br>
					<span>運費</span>
				</div>
				<div class="cart-total-money">
					<span>NT $<span id="prodTotal"><?php echo $proTotal ?></span></span><br>
					<span><input type="radio" name="bonusBtn" value="1"  class="bonusBtn">&nbsp是&nbsp<input type="radio" name="bonusBtn" class="bonusBtn" value="0" checked="true">&nbsp否</span><br>
					<span >NT $ <input type="text" name="memBonus" value="0" id="bonus" readonly></span><br>
					<span >NT $ <input type="text" value="0" name="shippingCost" readonly id="transCost"></span>
				</div>
				<div class="cart-total">
					<span>合計</span>
					<span>NT $ <input type="text" name="orderTotal" id="total" value=""  readonly></span></span>
				</div>

			</div>
		</div>
		<div class="keep-shopping">
				<a href="product.php"><span  class="btn_green" value="" >繼續購物</span></a>
		</div>
		<!-- 運送地址 -->


<?php 

	if(isset($_SESSION["mem_name"]) === false){

	$mem_name =  "";
	$mem_add =   "";
	$mem_phone =  "";
	$mem_mail =  "";

	}else{


	$mem_name =  $_SESSION["mem_name"];
	$mem_add =   $_SESSION["mem_add"];
	$mem_phone =  $_SESSION["mem_phone"];
	$mem_mail =  $_SESSION["mem_mail"];
	
}

 ?>










		<div class="cart-address">
			<h2>寄送地址</h2>
			<div class="cart-preset">
				<!-- <input type="radio" name="preset" value="1" checked="true">&nbsp預設1
				<input type="radio" name="preset" value="2">&nbsp預設2
				<input type="radio" name="preset" value="3">&nbsp預設3 -->
			</div>
			<div class="cart-shipping-info">
				
					<div class="form-group">
						<label for="ShippingInfo_full_name" class="required">
							收件人姓名
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo_name" id="ShippingInfo_full_name" type="text" required value="<?php echo $mem_name; ?>"><br>
						<label for="ShippingInfo_full_phone"  class="required">
							收件人電話
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo_phone" id="ShippingInfo_full_phone" type="text" required maxlength="10" value="<?php echo $mem_phone; ?>">
					</div>
					<div class="form-group">
						<label for="ShippingInfo_full_name" class="required">
							電子信箱
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo_mail" id="ShippingInfo_full_mail" type="text" required value="<?php echo $mem_mail; ?>"><br>
						<label for="ShippingInfo_full_address" class="required">
							地址
							<span class="required">*</span><br>
						</label>
						<input class="form-control" name="ShippingInfo_add" id="ShippingInfo_full_address" type="text" required value="<?php echo $mem_add; ?>">
					</div>
			
			</div>
		</div>



<?php 



	}catch (PDOException $e) {
		echo "錯誤原因 : " , $e->getMessage(),"<br>";
		echo "行號 : " , $e->getLine(),"<br>";	
	}


}

 ?>









		<!-- 付款方式 -->

		<div class="cart-pay">
			<h2>付款方式</h2>
			<div>
				<div class="form-group">
					<span>選擇付款方式</span>
					<select name="pay-way" id="payWay">
						<option value="card">信用卡</option>
						<option value="trans">轉帳</option>
					</select>
				</div>
				<div class="form-group cartWay">
					<span>卡別</span>
					<select name="cart-selsct" >
						<option value="visa">VISA</option>
						<option value="master">Master</option>
					</select>
				</div>
				<div class="form-group cartWay">
					<span>卡號</span><br>
					<input type="text" class="form-control" name="cardNum" maxlength="12" value="" placeholder="">
					
				</div>
				<div class="form-group cartWay">
					<span>有效日期</span><br>
					<input type="text" class="form-control" name="cardMonth" maxlength="2" value="" placeholder="">
					<input type="text" class="form-control" name="cardDate" value="" maxlength="2" placeholder="">
				</div>
				<div class="form-group cartWay">
					<span>後三碼</span><br>
					<input type="text" class="form-control" name="lastNum" value="" maxlength="3" placeholder="">
				</div>
				<div id="transWay">
					<p>中大銀行 匯款帳號：123456789  戶名：即刻菜園</p>
				</div>
			</div>
		</div>
		<input type="button" class="btn_green" name="" value="結帳" id="checkToPay">
		</div>
		<div class="clear"></div>
    </div>
</form>
	<?php require_once('Footer.php'); ?>






			

		


		






	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/login-ajax.js"></script>


<script type="text/javascript">





	var button = document.querySelectorAll(".removeBtn");


	for (var i =0 ; i<button.length ; i++) {
		
		// console.log(button[i]);

		button[i].addEventListener('click',deleteItem, false);



		function deleteItem(){
		

		var itemId = this.parentNode.getAttribute('id');
		
		//刪除該筆資料前，先將金額扣除
		// var itemValue = storage.getItem(itemId); //var itemValue = storage[itemId]; 兩種寫法
		// total -= parseInt(itemValue.split('|')[2]);

		// document.getElementById('total').innerText = total;

		//清除storage的資料
		storage.removeItem(itemId);
		storage['addItemList'] = storage['addItemList'].replace(itemId+', ',''); //replace(itemId+逗號和空格,'') 裡面東西用空字串取代


		// window.reload("cart.php");

		}

	}



	

	var prodPrice = document.querySelectorAll(".prodPrice");


	// 商品名
	var prodMoney = new Array();

	var editNum = document.querySelectorAll(".editNum");

	var prodNum = document.querySelectorAll(".prodNum");

	// 商品數
	var prodNo = new Array();


	
	
	// console.log(prodNum);
	// console.log(prodNo);

	

	for (var j=0 ; j<prodNum.length ; j++){

		prodNum[j].addEventListener('click',changPriceTotal,false);

		}

		function changPriceTotal(){

			var prodTotal=0;

			// 抓商品價格

			for (var i =0 ; i < prodPrice.length; i++) {

				prodMoney[i]  = prodPrice[i].innerText;

			}

			// 抓商品數量

			for (var i =0 ; i < prodNum.length; i++) {

				prodNo[i]  = prodNum[i].value;

			}


			
			// 計算價格
			for (var j=0 ; j<prodNum.length ; j++){

			  prodTotal	+=  prodNo[j]*prodMoney[j];



			}

			document.getElementById("prodTotal").innerHTML= prodTotal;

			// alert(prodTotal);


			countFinalTotal();
		}




	// 使用紅利折抵
	var bonusBtn = document.querySelectorAll("input[name=bonusBtn]");

		bonusBtn[0].addEventListener('change',

		function transMoney(){

		var bonusMoney = document.getElementById('bonus');


		if(this.value == 1 ){

		bonusMoney.value =50;

		}else{

		// bonusMoney.innerHTML ="NT $" + "-" + "0";

		}

	countFinalTotal();

	}



	,false);



// 計算紅利

	 var bonusMoney = document.getElementById('bonus');
	 
	bonusBtn[1].addEventListener('change',

	 	function transMoney(){

		


		if(this.value !== 1 ){

		bonusMoney.innerHTML ="NT $" + 0;

		}else{

		

		}

		countFinalTotal();


	}

	 	,false);



// 選擇付款方式

var payWay   = document.getElementById("payWay");
var transWay = document.getElementById("transWay");
var cartWay  = document.querySelectorAll('.cartWay');

payWay.addEventListener("change" , 

		function() {

		if( payWay.value == "trans"){


			transWay.style.display="block";

			for (var i =0 ; i < cartWay.length; i++) {
				cartWay[i].style.display="none";
			}
			
				
	
		}else{

			transWay.style.display="none";

			for (var i =0 ; i < cartWay.length; i++) {
				cartWay[i].style.display="inline-block";
			}

			
		}



 },false);






// 計算總金額

	




	var checkToPay =document.getElementById("checkToPay");

	var ShippingInfo_full_name =document.getElementById("ShippingInfo_full_name").value;

	var ShippingInfo_full_phone =document.getElementById("ShippingInfo_full_phone").value;

	var ShippingInfo_full_mail =document.getElementById("ShippingInfo_full_mail").value;

	var ShippingInfo_full_address =document.getElementById("ShippingInfo_full_address").value;

	checkToPay.addEventListener('click', function pushSubmit() {
        if(document.getElementById("spanLogin").innerHTML=="註冊/登入"){

            alert("請先登入");

//            if(ShippingInfo_full_name == false && ShippingInfo_full_phone == false && ShippingInfo_full_mail == false && ShippingInfo_full_address == false ){
//                alert("還有東西沒填完喔！！");
            }else{
                document.getElementById("checkToPaySubmit").submit();
            }

	}
	,false);

// 確認購物車沒東西時 運費為0元

	

	function checkCost(){

		

		if( storage.getItem('addItemList') == null){
			document.getElementById("transCost").value = 0;
		}else{
			document.getElementById("transCost").value = 80;
		}

	}




	var totalPrice = 0;

	

	function countFinalTotal(){

		var transCost = document.getElementById("transCost").value;	

		var bonusText = bonusMoney.value;


		var total = document.getElementById("total");



		totalPrice =  parseInt(prodTotal.innerText)  +  parseInt(transCost) +  parseInt(bonusText);

		document.getElementById("total").value= totalPrice;


	// alert(totalPrice);

	}


function init(){

	checkCost();

	countFinalTotal();
	

}

window.addEventListener('load',init,false);


</script>



</body>
</html>