<?php 
ob_start();
session_start();

?>
<?php

try {
	require_once('php/connectGrowing_hope.php');
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);

	$sql="insert Growing_hope.xreport 
			set 
				msg_no = :msg_no,
				x_memno = :x_memno,
				x_txt = :x_txt,
				x_date = NOW()";
			$xreport = $pdo->prepare($sql);//執行
			$xreport -> bindValue(":msg_no",$loginObj->msg_no);
			$xreport -> bindValue(":x_memno",$loginObj->xmem_no);
			$xreport -> bindValue(":x_txt",$loginObj->x_txt);
			$xreport -> execute();
	
}catch (PDOException $e){
	echo "錯誤原因：" ,$e->getMessage(),"<br>";
	echo "行號：",$e->getline(),"<br>";
}



 ?>