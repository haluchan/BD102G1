<?php 
ob_start();
session_start();
try {
	require_once("connectBeck.php");
	// echo  $_REQUEST["mem_equity"];
	// echo  $_REQUEST["mem_no"];
	$sql =
	"update member set	
	mem_equity=:mem_equity where mem_no= :mem_no";	
	$member = $pdo->prepare($sql);
	
	$member->bindValue( ":mem_equity" , $_REQUEST["mem_equity"]);
	$member->bindValue( ":mem_no" , $_REQUEST["mem_no"]);
	$member->execute();
	// echo "異動成功~<br>";
	header("location:../memberback.php");
	
	}
	
	 catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
?>    
