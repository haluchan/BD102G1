<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Taipei");


/**
 * 
 * @authors halu (you@example.org)
 * @date    2017-10-28 18:02:10
 * 1 $Id$
 */

try {
	require_once("connectGrowing_hope.php");


	$pdo->beginTransaction(); //準備寫入資料庫
	
	$actSign_name =  $_REQUEST["mem_name"];
	$actSign_tel  =  $_REQUEST["mem_phone"];
	$actSign_mail =  $_REQUEST["mem_mail"];
	$actSign_qty  =  $_REQUEST["actSign_qty"];
	$act_no       =  $_REQUEST["mem_no"];



	$sqlActSignUp = "insert into actSign ( act_no , actSign_name , actSign_mail , actSign_tel , actSign_qty) value (:act_no , :actSign_name , :actSign_mail , :actSign_tel , :actSign_qty )";



	$actSignUp = $pdo->prepare($sqlActSignUp);

	$actSignUp->bindValue(":act_no", $act_no);
	$actSignUp->bindValue(":actSign_name", $actSign_name);
	$actSignUp->bindValue(":actSign_mail", $actSign_mail);
	$actSignUp->bindValue(":actSign_tel", $actSign_tel);
	$actSignUp->bindValue(":actSign_qty", $actSign_qty);

	$actSignUp->execute();
	$pdo->commit(); //寫入資料庫

	// header("location:../sign-up.php");

	echo "<script> alert('報名成功');location.href='../event.php;</script>";
	// echo "$orderSend";

} catch (Exception $e) {
	$pdo->rollback();//有錯的話回覆不寫入
	echo "資料庫操作失敗,原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
	
}



?>