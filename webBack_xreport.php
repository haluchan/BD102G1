<?php
session_start();
ob_start();?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::留言檢舉</title>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" href="css/webBack_xreport.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
		<div class="nav_item pageTitle">

			<h2>留言檢舉</h2>
		</div>
		<div class="nav_item ">
			<div class="search">
				<input type="text" name="" placeholder="搜尋">

				<button><img src="src/image/web_back_frame/seaech.png"></button>
				<button><img src="src/image/web_back_frame/erase.png"></button>
			</div>
		</div>
		
		<div class="nav_item select">
			<span>類別：</span>
			<select>
				<option value="">不限</option>
				<option value="">不限</option>
				<option value="">不限</option>
			</select>
		</div>
		<div class="nav_item select">
			<span>類別：</span>
			<select>
				<option value="">全部</option>
				<option value="">種子</option>
				<option value="">魚缸</option>
			</select>
		</div>
			<div class="clearfix"></div>
		</nav>
<div class="myForm">
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>被檢舉會員</th>
			<th>檢舉會員</th>
			<th>留言編號</th>
			<th>檢舉內容</th>
			<th>檢舉原因</th>
			<th>檢舉時間</th>

			<th>審核</th>
			<th></th>
		</tr>
	<?php 
		$i=0;
			try{
			require_once('php/connectGrowing_hope.php');
			$sql='select * from x_message';

			$xreport = $pdo->query($sql);
			while ($xreportRow = $xreport->fetchObject()) {
				$i++;
	 ?>
	 <form action="webBack_xreportUpdate.php" method="get">
		<tr class="tdRow">
		<input type="hidden" name="msg_no" value="<?php  echo $xreportRow->msg_no; ?>">
			<td><?php echo $i; ?></td>
			<td><?php  echo $xreportRow->mem_no; ?></td>
			<td><?php  echo $xreportRow->x_memno;   ?></td>
			<td><?php  echo $xreportRow->msg_no;   ?></td>
			<td><?php  echo $xreportRow->msg_txt;   ?></td>
			<td><?php  echo $xreportRow->x_txt;   ?></td>
			<td><?php  echo $xreportRow->x_date;   ?></td>
			<td>
				<input type="radio" name="status" value="0"><label>通過</label>
				<input type="radio" name="status" value="1"><label>駁回</label>
			</td>
			<td >
				<input type="submit" value="確認">
			</td>
		</tr>
	</form>
<?php 
	}
	echo '</table>
</div>
';
}catch (PDOException $e){
			echo "錯誤原因：" ,$e->getMessage(),"<br>";
			echo "行號：",$e->getline(),"<br>";
		}
 ?>
<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>