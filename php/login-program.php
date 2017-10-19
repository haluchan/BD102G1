<?php
/**
 * 
 * @authors halu 
 * @date    2017-10-19 13:42:08
 * 
 */
//輸出緩沖區
ob_start();
//啟用session
session_start();

try {
	require_once("connectGrowing_hope.php");
	$sql ="select * from member where mem_Id = :memId and mem_psw = :memPsw";
	$member = $pdo->prepare($sql);
	$member -> bindValue(":memId",$_REQUEST["memId"]);
	$member -> bindValue(":memPsw",$_REQUEST["memPsw"]);
	$member -> execute();

	if ( $member->rowCount() != 0){
		$memRow = $member->fetchObject();
		echo $memRow->memName;

		//登入成功，將登入者資訊寫入session
		$_SESSION["mem_no"] = $memeRow->mem_no;
       $_SESSION["mem_id"] = $memRow->mem_id;
       $_SESSION["mem_name"] = $memRow->mem_name;
       $_SESSION["mem_mail"] = $memRow->mem_mail;


	}else{
		echo "查無此帳密，請重新登入";
	}




	
} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
	
}





?>