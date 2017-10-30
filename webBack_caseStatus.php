<?php 
ob_start();
session_start();
 ?>


<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::案件狀態</title>
	<link rel="stylesheet" href="css/webBack_caseStatus.css">

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

				<h2>案件狀態</h2>
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
		try{
			require_once("php/connectGrowing_hope.php");
			$sql = "select * from growing_hope.event order by event_status desc";
			$events = $pdo ->query($sql);
	?>		
			
	
	<table cellspacing="1">
		<tr>
			<!-- <th></th> -->
			<th>案件編號</th> <!-- event_no -->
			<th>案件名稱</th> <!-- event_title -->
			<th>申請金額</th> <!-- event_need -->
			<th>核準金額</th> <!-- event_allow -->
			<th>案件歷程</th> <!-- event_period -->
			<th>成立時間</th> <!-- event_allowdate -->
			<th>目前狀態</th> <!-- event_status -->
			<th>狀態修改</th>
			<th></th>
			
		</tr>
		<?php  while ( $eventsRow = $events->fetchObject()) { ?>
		<!-- <from action="webBack_caseStatus_update.php" method="get"> -->
			<tr class="tdRow">
				<td class="event_no"><?php echo $eventsRow -> event_no; ?></td>
				<td><?php echo $eventsRow -> event_title; ?></td>
				<td><?php echo $eventsRow -> event_need; ?></td>
				<td><?php echo $eventsRow -> event_allow; ?></td>
				<td><?php echo $eventsRow -> event_period; ?>個月</td>
				<td><?php echo $eventsRow -> event_allowdate; ?></td>
				<td class="status"><select name="status">
						<?php  $status = $eventsRow -> event_status;  ?>

						<option value="P" <?php if ($status == "P") echo "selected"; ?>>審核通過</option>
						<option value="R" <?php if ($status == "R") echo "selected"; ?>>案件退回</option>
						<option value="DI" <?php if ($status == "DI") echo "selected"; ?>>募資中</option>
						<option value="DE" <?php if ($status == "DE") echo "selected"; ?>>募資結束</option>
						<option value="CI" <?php if ($status == "CI") echo "selected"; ?>>案件進行中</option>
						<option value="CN" <?php if ($status == "CN") echo "selected"; ?>>結案</option>
					</select>
				</td>
				<td><input type="button" value="確定" class="btn yes"></td>
				<td><input type="button" value="編輯內容" class="btn edit"  onclick="self.location.href='webBack_caseCheckUp.php?event_no=<?php echo $eventsRow -> event_no; ?>'"></td>
				<!-- <?php //if($status <>"P" echo "disabled";) ?> -->
			
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
	$(function(){

		$(".yes").click(function(){
			
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if (xhr.readyState == 4) {
					if (xhr.status == 200) {
						$(this).parent().innerHTML= xhr.responseText;
						location.reload();
					}else{
						alert(xhr.status);
					}
				}
			}	
			var event_no = $(this).parent().parent().children('.event_no').text();
			var status = $(this).parent().parent().children('.status').children().val();
			var url = "webBack_caseStatus_update.php?event_no=" + event_no +"&status=" + status+"&old_status=<?php echo $status; ?>";
			alert(url);
			xhr.open("Get", url , true);
			xhr.send(null);
		});


		// $(".edit").click(function(){
			 
		// });

		
	
	})
</script>

</body>
</html>