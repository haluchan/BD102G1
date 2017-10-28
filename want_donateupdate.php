<?php 

try {
	require_once("php/connectGrowing_hope.php");
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);


	$sql = "insert Growing_hope.donate 
			set event_no = :event_no,
				mem_no = :mem_no,
				dona_price = :dona_price,
				dona_date =  now(),
				dona_payway = :payway,
				dona_name = :dona_name,
				dona_tel = :dona_tel,
				dona_add = :dona_add,
				dona_remark = :dona_remark " ;



	$donate = $pdo->prepare($sql);
	$donate->bindValue(":event_no", $loginObj->event_no);
	$donate->bindValue(":mem_no", $loginObj->mem_no);
	$donate->bindValue(":dona_price", $loginObj->dona_price);
	$donate->bindValue(":payway", $loginObj->payway);
	$donate->bindValue(":dona_name", $loginObj->dona_name);
	$donate->bindValue(":dona_tel", $loginObj->dona_tel);
	$donate->bindValue(":dona_add", $loginObj->dona_add);
	$donate->bindValue(":dona_remark",$loginObj->dona_remark);
	$donate->execute();


	
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}




 ?>