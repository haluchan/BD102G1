<?php 
// ob_start();

try {
	require_once("php/connectGrowing_hope.php");
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);


	$sql = "update Growing_hope.return 
			set return_status = 'Y' , return_paydate = :return_paydate
			where return_no=:return_no and event_no=:event_no ";
	$return = $pdo->prepare($sql);
	$return->bindValue(":event_no", $loginObj->event_no);
	$return->bindValue(":return_no", $loginObj->return_no);
	$return->bindValue(":return_paydate", $loginObj->return_paydate);
	$return->execute();

} catch(PDOException $e){
   	echo "行號: ",$e->getLine(), "<br>"; 
  	echo "訊息: ",$e->getMessage() , "<br>"; 	
}






 ?>