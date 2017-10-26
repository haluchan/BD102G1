<?php 
ob_start();
session_start();

?>
<?php

try {
	require_once('php/connectGrowing_hope.php');
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);

	$sql="insert Growing_hope.message 
			set 
				event_no = :event_no,
				mem_no = :mem_no,
				msg_txt = :msg_txt,
				msg_date = NOW(),
				xreport_ny = 'N'";
			$message = $pdo->prepare($sql);//執行
			$message -> bindValue(":event_no",$loginObj->event_no);
			$message -> bindValue(":mem_no",$loginObj->mem_no);
			$message -> bindValue(":msg_txt",$loginObj->msg_txt);
			$message -> execute();
	
}catch (PDOException $e){
	echo "錯誤原因：" ,$e->getMessage(),"<br>";
	echo "行號：",$e->getline(),"<br>";
}



 ?>