<?php 
session_start();
ob_start();

try { 
	$howManyRow = $_REQUEST["howManyRow"];
	echo $howManyRow . '<br>';
	//直到$howManyRow跑完
	for ($i=1; $i<=$howManyRow ; $i++) { 
				
		$pro_no = $_REQUEST["pro_no".$i];
		$pro_status = $_REQUEST["status".$pro_no];

		require_once("connectGrowing_hope.php");

		$sql = "update product
				set pro_status = :pro_status
				where pro_no = :pro_no;";

		$product = $pdo -> prepare( $sql );

		$product -> bindValue(":pro_no" , $pro_no);
		$product -> bindValue(":pro_status" , $pro_status);

		$product -> execute();

	}
	

	$_SESSION['proStatusResetInfo'] = '狀態更新成功';
	header("Location: ../webBack_pro.php");
	

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}

 ?>