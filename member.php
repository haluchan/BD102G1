<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/member.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>

<body>
	<?php require_once('Header.php'); ?>
	<div class="titlebg">
		<img src="src/image/member/mv01.png" alt="">
		
	</div>
	
<div class="bigtitle">
	<h2>會員專區</h2>
</div>
<div class="navbar">
	<div class="navbarli" id="detail">
		<p>我的資料</p>
	</div>
	<div class="navbarli" id="history">
		<p>歷史訂單</p>
	</div>
	<div class="navbarli" id="payhisto">
		<p>資助紀錄</p>
	</div>
</div>
<div class="mem">
		<div class="table" id="memdetail">

			<h2>我的資料</h2>
			<img src="src/image/member/child.png" alt="">
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
							<td>becky</td>
							
						</tr>
						<tr>
							<td>我的種子:</td>
							<td>9</td>
						
						</tr>
						<tr>
							<td>我的紅利:</td>
							<td>10</td>
						
						</tr>
						<tr>
							<td>e-mail:</td>
							<td>nobody@gmail.com</td>
						
						</tr>
						<tr>
							<td>會員生日:</td>
							<td>01/01/1998</td>
						
						</tr>
						<tr>
							<td>居住地:</td>
							<td>台北</td>
						
						</tr>
						<tr>
							<td>性別:</td>
							<td>女</td>
						
						</tr>
					</tbody>
				</table>
			<div class="btnbox">
			
				<a href="" class="btnbox">修改資料</a>
			</div>	
		</div>	
	
				
	<div class="table" id="oderhis">
			<h2>歷史訂單</h2>
				<table>
					
					<thead>
						<tr>
							<th>商品</th>
							<th>購買日期</th>
							<th>數量</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>魚缸</td>
							<td>01/09/2017</td>
							<td>1</td>
						</tr>
						<tr>
							<td>XL魚缸</td>
							<td>01/01/2017</td>
							<td>1</td>
						</tr>
						<tr>
							<td>種子</td>
							<td>01/06/2017</td>
							<td>1</td>
						</tr>
						<tr>
							<td>種子</td>
							<td>01/01/2017</td>
							<td>4</td>
						</tr>
						<tr>
							<td>種子</td>
							<td>01/12/2017</td>
							<td>6</td>
						</tr>
						<tr>
							<td>XXL魚缸</td>
							<td>01/07/2017</td>
							<td>2</td>
						</tr>
					</tbody>
				</table>
				
		</div>	
		<div class="table" id="date">
			<h2>資助紀錄</h2>
				<table>
					
					<thead>
						<tr>
							<th>金額</th>
							<th>日期</th>
							<th>資助農家</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>200</td>
							<td>01/04/2017</td>
							<td>小美</td>
						</tr>
						<tr>
							<td>300</td>
							<td>10/12/2017</td>
							<td>無米樂</td>
						</tr>
						<tr>
							<td>300</td>
							<td>01/01/2017</td>
							<td>陳阿土</td>
						</tr>
						<tr>
							<td>300</td>
							<td>01/05/2017</td>
							<td>阿水</td>
						</tr>
					</tbody>
				</table>
		</div>	
	

<?php require_once('Footer.php');?>
</div>
<script type="text/javascript">
    	document.getElementById("history").onclick=history;
    	function history(){
    		document.getElementById("memdetail").style.display="none";
    		document.getElementById("date").style.display="none";
    		document.getElementById("oderhis").style.display="";
    	}
    	document.getElementById("detail").onclick=detail;
    	function detail(){
    		document.getElementById("memdetail").style.display="";
    		document.getElementById("date").style.display="none";
    		document.getElementById("oderhis").style.display="none";
    	}
    	document.getElementById("payhisto").onclick=payhisto;
    	function payhisto(){
    		document.getElementById("oderhis").style.display="none";
    		document.getElementById("memdetail").style.display="none";
    		document.getElementById("date").style.display="";
    	}

 	window.onload=detail;
  </script>

	
</body>
</html>