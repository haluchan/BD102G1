<?php
 
//  $status= $_REQUEST["status"];
// if($status=="通過"){
// 	$event_status="P";
// }else if($status=="退回"){
// 	$event_status="R";
// }

try{
	require_once("connectPon.php");
	$sql="update event set event_status=?,event_allow=?,event_allowdate=now(),event_remark=?, event_enddate=? where event_no=?";

	$event=$pdo->prepare($sql);
	$event->bindValue(1,$_REQUEST["status"]);
	// $event->bindValue(1,"P");
	$event->bindValue(2,$_REQUEST["allow"]);
	$event->bindValue(3,$_REQUEST["remark"]);
	$event->bindValue(4,$_REQUEST["enddate"]);
	$event->bindValue(5,$_REQUEST["idNo"]);
	
	$event->execute();

	

}catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";
}


// header("../webBack_eventDecide.php");




?>