<?php 
try {
	require_once("connectBeck.php");
	$sql =
	 "update ordermaster set	
	order_status=:order_status, 
	 order_shipdate=:order_shipdate
	 where order_no=:order_no";	
	 $ordermaster = $pdo->prepare($sql);
	$ordermaster->bindValue( ":order_status" , $_REQUEST["order_status"]);
	$ordermaster->bindValue( ":order_shipdate" , $_REQUEST["order_shipdate"]);
	$ordermaster->bindValue( ":order_no" , $_REQUEST["order_no"]);
	$ordermaster->execute();
	
	header("location:../ordermaster.php");
		}
	 catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
?>    
