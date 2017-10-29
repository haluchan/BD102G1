<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		
		try {
			require_once('php/connectBeck.php');
			$sql = "insert into activity(act_name,act_date,act_loc,act_limit, act_price,act_txt,act_start,act_end) values(:act_name,:act_date,:act_loc,:act_limit,:act_price,:act_txt,:act_start,:act_end)";
			// $sql2 = "insert into activityPhoto(act_no,pho_no) values(:act_no,:pho_no);"
			


			$activity = $pdo->prepare($sql);
			$activity = $pdo->prepare($sql2);
			$activity->bindValue("act_name",$_REQUEST["act_name"]);
			$activity->bindValue(":act_date",$_REQUEST["act_date"]);
			$activity->bindValue(":act_loc",$_REQUEST["act_loc"]);
			$activity->bindValue(":act_limit",$_REQUEST["act_limit"]);
			$activity->bindValue(":act_price",$_REQUEST["act_price"]);
			$activity->bindValue(":act_txt",$_REQUEST["act_txt"]);
			$activity->bindValue(":act_start",$_REQUEST["act_start"]);
			$activity->bindValue(":act_end",$_REQUEST["act_end"]);
			$activity->bindValue(":pho_no",$_REQUEST[""])
			$activity->execute();
			$actRow = $activity->fetchObject();
			$actRow-> act_no
		} catch (PDOException $e) {
			echo "錯誤行號: ", $e-> getLine(), "<br>";
			echo "錯誤訊息: ", $e-> getMessage(), "<br>";
		}
		echo "yeahhhhhh!!";
	 ?>
</body>
</html>