<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Taipei");

/**
 * 
 * @authors halu  (you@example.org)
 * @date    2017-10-24 14:06:37
 * @version $Id$
 */

// date_default_timezone_set("Asia/Taipei");

// $date  =  date_create (  );

// $localTime = date_format ( $date ,  'Y-m-d H:i:s' );

// echo $localTime ;

try {
	require_once("connectGrowing_hope.php");


	$pdo->beginTransaction(); //準備寫入資料庫

	$mem_name =  $_SESSION["mem_name"];
	$mem_add =   $_SESSION["mem_add"];
	$mem_phone =  $_SESSION["mem_phone"];
	$mem_mail =  $_SESSION["mem_mail"];
	$mem_bonus = $_SESSION["mem_bonus"];
	$mem_no =  $_SESSION["mem_no"];

	$orderSend = $_REQUEST["transmath"];
	
	$orderStatus =1;

	$orderCut =50;

	$date  =  date_create ();

	$orderDate = date_format ( $date , 'Y-m-d H:i:s' );


	$sqlShipAdd = "insert into ordermaster (  mem_no , order_bonus , order_cut , order_total , order_status , order_date , order_send , order_name , order_mail , order_tel , order_add ) value ( :memNo , :orderBonus , :orderCut ,  :orderTotal , :orderStatus , :orderDate , :orderSend , :orderName , :orderMail , :orderTel , :orderAdd )";

	// $sqlShipAdd = "insert into ordermaster ( mem_no , order_bonus ,order_cut , order_total ) value ( :memNo , :orderBonus , :orderCut )";


	$ordermaster = $pdo->prepare($sqlShipAdd);

	$ordermaster->bindValue(":memNo", $mem_no);
	$ordermaster->bindValue(":orderBonus", $mem_bonus);
	$ordermaster->bindValue(":orderCut", $orderCut);
	$ordermaster->bindValue(":orderStatus", $orderStatus);
	$ordermaster->bindValue(":orderTotal", $_REQUEST["orderTotal"]);
	$ordermaster->bindValue(":orderDate", $orderDate);
	$ordermaster->bindValue(":orderSend" , $_REQUEST["transmath"]);
	$ordermaster->bindValue(":orderName" , $_REQUEST["ShippingInfo_name"]);
	$ordermaster->bindValue(":orderMail" , $_REQUEST["ShippingInfo_mail"]);
	$ordermaster->bindValue(":orderTel" , $_REQUEST["ShippingInfo_phone"]);
	$ordermaster->bindValue(":orderAdd" , $_REQUEST["ShippingInfo_add"]);

	$ordermaster->execute();
	$pdo->commit();

	header("location:../product.php");
	// echo "$orderSend";

} catch (Exception $e) {
	$pdo->rollback();
	echo "資料庫操作失敗,原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
	
}



?>