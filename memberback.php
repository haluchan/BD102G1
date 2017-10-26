<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::會員</title>
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 不准動的部分，以下三行 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" href="css/webBack_memberback.css">
</head>
<body>

<?php require_once('web_back_frame_top.php') ?>
<nav>
			<div class="nav_item pageTitle">

				<h2>會員名單</h2>
			</div>
			<div class="nav_item">
				<div class="search">
					<input type="text" name="" placeholder="搜尋">

					<button><img src="src/image/web_back_frame/seaech.png"></button>
					<!-- <button><img src="src/image/web_back_frame/erase.png"></button> -->
				</div>
			</div>
			<div class="nav_item select">
				<!-- <span>狀態：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select> -->
			</div>
			<div class="nav_item select">
				<span>分類：</span>
				<select>
					<option value="">會員編號</option>
				<!-- 	<option value=""></option> -->
					
				</select>
			</div>
			<div class="clearfix"></div>
		</nav>
		<div class="myForm" >

	<table cellspacing="1">
		<tr>
			<th>會員編號</th>
			<th>帳號</th>
			<th>密碼</th>
			<th>姓名</th>
			<th>信箱</th>
			<!-- <th>照片</th> -->
			<th>生日</th>
			<th>性別</th>
		<!-- 	<th>居住地</th>
			<th>紅利</th>
			<th>種子</th> -->
			<th>資格</th>
			<th>更改資格</th>
		</tr>
		<?php try {
			require_once("php/connectBeck.php");
	
    $sql = "select * from member";
    
    $member = $pdo->query($sql);	
	
		while(  $resultset = $member ->fetchObject() ){
		$mem_no = $resultset->mem_no ;
		?>
		<tr class="tdRow">
			<td><?php echo $resultset->mem_no ;?></td>
			<td><?php echo $resultset->mem_id ;?></td>
			<td><?php echo $resultset->mem_psw ;?></td>
			<td><?php echo $resultset->mem_name ;?></td>
			<td><?php echo $resultset->mem_mail ;?></td>
		<!-- 	<td><?php echo $resultset->mem_pho ;?></td> -->
			<td><?php echo $resultset->mem_birth ;?></td>
			<td><?php 
			if( $resultset->mem_gender == 1){echo "男";}else{
				echo "女";}  ;?></td>
		<!-- 	<td><?php echo $resultset->mem_add ;?></td>
			<td><?php echo $resultset->mem_seed ;?></td>
			<td><?php echo $resultset->mem_bonus ;?></td> -->
			<td><?php if( $resultset->mem_equity == N){echo "正常";}else{
				echo "停權";}   ;?></td>
			<td style="padding-left: 20px;">
				<form class="myForm" action="php/memequ.php">
				<input type="hidden" name="mem_no" value="<?php echo $mem_no;?>">
				<select name="mem_equity">
					<option value="S">停權</option>
					<option value="N">復權</option>
				</select>
				<button type="submit" style="width:50px;height:20px;background-color: #e6ac00;outline-style: none;border-radius: 20px;" 
					id="chanmember">更改
				</button>
				</form>
			</td>	
		</tr>
		
		


		



	

	

<?php	
}	

}
	catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";	
}
?>	  
</table>
</div>
<?php require_once('web_back_frame_bottom.php') ?>

</body>
</html>