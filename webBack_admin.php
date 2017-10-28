<?php
session_start();
ob_start();?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::商品</title>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" href="css/webBack_pro.css">
</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
		<div class="nav_item pageTitle">

			<h2>管理員管理</h2>
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
			<th>管理員帳號</th>
			<th>管理員密碼</th>
			<th>管理員名稱</th>
			<th>新增 ｜ 刪除</th>
		</tr>

		<?php 
			$i=0;
			try{
			require_once('php/connectGrowing_hope.php');
			$sql='select * from admin';

			$admin = $pdo->query($sql);
			while ($adminRow = $admin->fetchObject()) {
				$i++;
		?>
		<form action="web_back_adminDelete.php" method="get">
		<input type="hidden" name="admin_id" value="<?php echo $adminRow->admin_id; ?>">
			<tr class="tdRow">
				<td><?php echo $i; ?></td>
				<td><?php echo $adminRow->admin_id; ?></td>
				<td><?php echo $adminRow->admin_psw; ?></td>
				<td><?php echo $adminRow->admin_name; ?></td>
				<td>
					<input type="submit" value="刪除">
				</td>
			</tr>
		</form>

		<?php
			}
			echo '
			<form action="webBack_adminAdd.php" method="get">
			<tr class="tdRow">
				<td></td>
				<td><input type="text" name="admin_id" maxlength="10"></td>
				<td><input type="text" name="admin_psw" maxlength="10"></td>
				<td><input type="text" name="admin_name" maxlength="10"></td>
				<td><input type="submit" value="新增"></td>
			</tr>
			</form>
			</table>';
		}catch (PDOException $e){
			echo "錯誤原因：" ,$e->getMessage(),"<br>";
			echo "行號：",$e->getline(),"<br>";
		}



		 ?>
		
		
</div>

<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>