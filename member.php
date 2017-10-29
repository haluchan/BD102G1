<?php 
ob_start();
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/member.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
<?php require_once('Header_head.php'); ?>

</head>

<body>
	<?php require_once('Header.php'); ?>
		<?php 
		$eve=$_SESSION["mem_no"];
		if( isset($_SESSION["mem_no"]) === false){
  		$_SESSION["where"] = $_SERVER["PHP_SELF"];
  		//echo "尚未登入，請<a href='cart_Login.html'>登入</a>";
  		echo "<script>alert('還沒登入喔');window.history.go(-1);</script>";
}else{
		try {

			require_once("php/connectBeck.php");
	
	 		$sql = "select dona_price,date(dona_date) as dona_date,event_title
				from growing_hope.event, donate 
				where event.event_no = donate.event_no 
				and mem_no = '$eve';"; 
	    
	 	  	$event= $pdo->query($sql);	
		
			// while($resultset = $event ->fetchObject()) {
	 	  	$resultset = $event ->fetchObject();
			// $mem_no = $resultset->mem_no ;
			$sql = "select pro_name,date(order_date) as order_date,orderItem_qty
				from orderItem,ordermaster
				where orderitem.order_no=ordermaster.order_no
				 and mem_no= '$eve' and pro_no not in(13,14);";
	    
	 	  	$event= $pdo->query($sql);	
		
			// while($resultset = $event ->fetchObject()) {
	 	  	$resultset2 = $event ->fetchObject();
			// $mem_no = $resultset->mem_no ;
		?>
	<div class="titlebg">
		<img src="src/image/member/mv01.png" alt="">
	</div>
	


	<!-- 選單 -->
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
			<p>贊助紀錄</p>
		</div>
	</div>

		<div id="scenes" data-hover-only="false" >
            <div class="parallax_area" data-depth="0.2">
            	<img src="src/image/member/concept_index.png" alt="">
            </div>	
        </div>
	<div class="mem">
		<!-- 我的資料 -->
		<div class="table" id="memdetail">
			<h2>我的資料</h2>
				<table>					
					<thead>
						<tr>
							<div class="pho">
							<img src="src/image/member/<?php echo $_SESSION['mem_pho'];?>" alt="">	</div>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>會員帳號:</td>
							<td><p><?php echo $_SESSION["mem_id"] ;?></p></td>
							
						</tr>
						<tr>
							<td>會員暱稱:</td>
							<td><p><?php echo $_SESSION["mem_name"] ;?></p></td>
							
						</tr>
						<tr>
							<td>我的種子:</td>
							<td><p><?php echo $_SESSION["mem_seed"] ;?></p></td>
						
						</tr>
						<tr>
							<td>我的紅利:</td>
							<td><p><?php echo $_SESSION["mem_bonus"] ;?></p></td>
						
						</tr>
						<tr>
							<td>e-mail:</td>
							<td><p><?php echo $_SESSION["mem_mail"] ;?></p></td>
						
						</tr>
						<tr>
							<td>會員生日:</td>
							<td><p><?php echo $_SESSION["mem_birth"] ;?></p></td>
						
						</tr>
						<tr>
							<td>居住地:</td>
							<td><p><?php echo $_SESSION["mem_add"] ;?></td>
						
						</tr>
						<tr>
							<td>性別:</td>
							<td><p><?php 
							if( $_SESSION["mem_gender"] == 1){echo "男";}else{
							echo "女";}  ;?></p></td>
						
						</tr>
					</tbody>
				</table>
			<div class="btnbox">
				<a href="memberedit.php" class="btnbox">修改資料</a>
			</div>	
		</div>	
			
		<!-- 歷史訂單		 -->
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
							<td><?php echo $resultset2->pro_name ;?></td>
							<td><?php echo $resultset2->order_date ;?></td>
							<td><?php echo $resultset2->orderItem_qty ;?></td>
						</tr>
					
					</tbody>
				</table>
				
		</div>

		<!-- 贊助紀錄	 -->
		<div class="table" id="date">
			<h2>贊助紀錄</h2>
				<table>
					<thead>
						<tr>
							<th>金額</th>
							<th>日期</th>
							<th>贊助專案</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $resultset->dona_price ;?></td>
							<td><?php echo $resultset->dona_date ;?></td>
							<td><?php echo $resultset->event_title ;?></td>
						</tr>
					
					</tbody>
				</table>
		</div>	

	</div>
<?php  

}
catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
}
?>
<?php require_once('Footer.php');?>


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
  <script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/member.js"></script>
	
</body>
</html>