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
			$sqlImage = "select act_no from activity join activityPhoto on activity.act_no = activityPhoto.act_no"; 


			$activity = $pdo->prepare($sql);
			$activity_Pho = $pdo->prepare($sqlImage);
			$activity->bindValue("act_name",$_REQUEST["act_name"]);
			$activity->bindValue(":act_date",$_REQUEST["act_date"]);
			$activity->bindValue(":act_loc",$_REQUEST["act_loc"]);
			$activity->bindValue(":act_limit",$_REQUEST["act_limit"]);
			$activity->bindValue(":act_price",$_REQUEST["act_price"]);
			$activity->bindValue(":act_txt",$_REQUEST["act_txt"]);
			$activity->bindValue(":act_start",$_REQUEST["act_start"]);
			$activity->bindValue(":act_end",$_REQUEST["act_end"]);
			$activity->bindValue(":pho_no",$_REQUEST["photo"])
			$activity->execute();


		} catch (PDOException $e) {
			echo "錯誤行號: ", $e-> getLine(), "<br>";
			echo "錯誤訊息: ", $e-> getMessage(), "<br>";
		}
		echo "yeahhhhhh!!";
	 ?>
</body>
</html>