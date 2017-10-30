<?php 
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::資助進度</title>
	<link rel="stylesheet" href="css/webBack_donate.css">
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
		$i=0;
		try{
			require_once("php/connectGrowing_hope.php");
			$sql = "select * from donate_count where event_status = 'di' ";
			$donate = $pdo ->query($sql);
	?>		
			
	
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>案件編號</th> <!-- event_no -->
			<th>案件名稱</th> <!-- event_title -->
			<th>目標金額</th> <!-- event_allow -->
			<th>累績金額</th> <!-- price -->
			<th>募資截止日</th> <!-- event_deadline -->
			<th>剩於天數</th> <!-- dday -->
			<th>募資達成率</th> <!-- reach -->
			<th>查看明細</th>
			
		</tr>
		<?php  while ( $donateRow = $donate->fetchObject()) { 
			$i++;
			$event_no = $donateRow -> event_no;
			$event_title = $donateRow -> event_title;
			$event_allow = $donateRow -> event_allow; 
			$price = $donateRow -> price;
			$dday = $donateRow -> dday;
			$event_deadline = $donateRow -> event_deadline; 
			$reach = $donateRow -> reach;

		?>
		<!-- <from action="webBack_donateDetails.php" method="get"> -->

			<tr class="tdRow <?php if (($reach >= 80) || ($dday <=20)){ echo 'red';}?>" >
				<td><?php echo $i; ?></td>
				<td><?php echo $event_no; ?></td>
				<td><?php echo $event_title; ?></td>
				<td><?php echo $event_allow; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $event_deadline; ?></td>
				<td><?php echo $dday; ?></td>
				<td><?php echo $reach; ?>%</td>
				<td><input type="button" value="查看" class="btn" onclick="self.location.href='webBack_donateDetails.php?event_no='+ <?php echo $event_no; ?>"></td>
			</tr>
		<!-- </from> -->
			

<?php 		
		}
		echo "</table>
</div>";
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