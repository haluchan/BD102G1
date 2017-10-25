<?php 
// ob_start();

try {
	require_once("php/connectGrowing_hope.php");
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);


	$sql = "update Growing_hope.event 
			set event_status = 'DI'
			where event_no=:event_no ";
	$event = $pdo->prepare($sql);
	$event->bindValue(":event_no", $loginObj->event_no);
	$event->execute();

} catch(PDOException $e){
   	echo "行號: ",$e->getLine(), "<br>"; 
  	echo "訊息: ",$e->getMessage() , "<br>"; 	
}






 ?>