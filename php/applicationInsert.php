<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>applicationInsert.php</title>
	</head>

	<body>
		<?php
		// 抓取前端送來資料
	    $name=$_REQUEST["name"];
	    $gender=$_REQUEST["gender"];
	    $id=$_REQUEST["id"];
	    $birth=$_REQUEST["birth"];
	    $add=$_REQUEST["add"];
	    $tel=$_REQUEST["tel"];
	    $mail=$_REQUEST["mail"];
	    $account=$_REQUEST["account"];
	    $allow=$_REQUEST["allow"];

	    echo $name;
		?>
	</body>
</html>