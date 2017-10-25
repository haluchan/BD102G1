<?php 

try {
	
	require_once("php/connectGrowing_hope.php");
	$sql = "update growing_hope.event set event_status= :status where event_no=:event_no";
	$event = $pdo->prepare($sql);
	$event->bindValue(":event_no",$_REQUEST["event_no"]);
	$event->bindValue(":status",$_REQUEST["status"]);
	$event->execute();


	$sql = "insert into eventstatus(eventSta_no,event_no,eventSta_before,eventSta_now,eventSta_date) VALUES (null,:event_no,:eventSta_before,:eventSta_now,CURDATE());";
	$event = $pdo->prepare($sql);
	$event->bindValue(":event_no",$_REQUEST["event_no"]);
	$event->bindValue(":eventSta_before",$_REQUEST["status"]);
	$event->bindValue(":eventSta_now",$_REQUEST["old_status"]);
	$event->execute();






}catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}

 ?>