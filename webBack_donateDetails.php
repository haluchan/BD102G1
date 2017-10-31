
<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::資助進度</title>
	<link rel="stylesheet" href="css/webBack_donateDetails.css">
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<!-- 自己的css擺這裡 -->
	

</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item">

				<h2>資助進度</h2>
			</div>
			<div class="nav_item">
				<span>狀態：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select>
			</div>
			<div class="nav_item">
				<span>類別：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select>
			</div>
			<div class="nav_item">
				<div class="search">
					<input type="text" name="" placeholder="搜尋">

					<button><img src="src/image/web_back_frame/seaech.png"></button>
					<button><img src="src/image/web_back_frame/erase.png"></button>
				</div>
			</div>
			<div class="clearfix"></div>
</nav>


<div class="myForm">
	<?php 
		$event_no = $_REQUEST['event_no'];
		$i=0;
		try{
			require_once("php/connectGrowing_hope.php");
			$sql = "select * from donate_count where event_no = '$event_no'";
			$donate = $pdo ->query($sql);
			$donateRow = $donate->fetchObject();
	?>	
	<ul>
		<li><span>案件名稱:</span><?php echo $donateRow -> event_title; ?></li>
		<li><span>募資截止日:</span><?php echo $donateRow -> event_deadline; ?></li>
		<li><span>剩於天數:</span><?php echo $donateRow -> dday,'天'; ?></li>
		<li><span>累績金額:</span><?php echo $donateRow -> price; ?></li>
		<li><span>募資達成率:</span><?php echo $donateRow -> reach,'%'; ?></li>
	</ul>	



	<?php 
		}catch (PDOException $e) {
				  echo "錯誤行號 : ", $e->getLine(), "<br>";
				  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
		}

		
		$i=0;
		try{
			require_once("php/connectGrowing_hope.php");
			$sql = "select * from donate where event_no = '$event_no'";
			$donateDetail = $pdo ->query($sql);



	?>		
			
	
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>會員編號</th> <!-- mem_no -->
			<th>會員姓名</th> <!-- dona_name -->
			<th>會員電話</th> <!-- dona_tel -->
			<th>資助金額</th> <!-- dona_price -->
			<th>資助時間</th> <!-- dona_date -->
			<th>付款方式</th> <!-- dona_payway -->
			<th>付款狀態</th> <!-- dona_status -->
			<th>備註</th> <!-- dona_remark -->
		</tr>
		<?php  while ( $donateRow = $donateDetail->fetchObject()) { 
			$i++;
			

		?>
		<!-- <from action="webBack_donateDetails.php" method="get"> -->
			<tr class="tdRow" >
				<td><?php echo $i; ?></td>
				<td><?php echo  $donateRow -> mem_no; ?></td>
				<td><?php echo $donateRow -> dona_name;  ?></td>
				<td><?php echo $donateRow -> dona_tel; ?></td>
				<td><?php echo $donateRow -> dona_price; ?></td>
				<td><?php echo $donateRow -> dona_date; ?></td>
				<td><?php if ($donateRow -> dona_payway == 1) {echo "信用卡付款";}else{echo "atm轉帳";} ?></td>
				<td><?php if ($donateRow -> dona_status == 1) {echo "已付款";}else{echo "未付款";}  ?></td>
				<td><?php echo $donateRow -> dona_remark; ?></td>
				<!-- <td><input type="button" value="查看" class="btn"></td> -->
			</tr>
		<!-- </from> -->
			

<?php 		
		}
		echo '</table>';
		?>
		<button class="btn back" onclick="javascript:location.href='webBack_donate.php'">回上頁</button>
		<?php

echo '</div>';
	}catch (PDOException $e) {
			  echo "錯誤行號 : ", $e->getLine(), "<br>";
			  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
		}
?>


<?php require_once('web_back_frame_bottom.php') ?>




<script>
	function $id(id){
		return document.getElementById(id);
	}	

	function init(){

	}

	window.onload=init;

</script>

</body>
</html>