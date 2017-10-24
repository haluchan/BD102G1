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
	//=============取得前端送來的jsonStr
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);//轉成物件


		//解釋decode
		//$json = '{"foo-bar": 12345}';
		//$obj = json_decode($json);
		//print $obj->{'foo-bar'}; // 12345


	// ===========

	$sql ="select * from member where mem_Id = :memId and mem_mail = :memMail";
	$member = $pdo->prepare($sql);

	
	$member->bindValue(":memId" , $loginObj->memId);
	$member->bindValue(":memMail" , $loginObj->memMail);


	$member->execute();

	if ( $member->rowCount() == 0){
		
		echo "error";
		
	}else{ 
		$memRow = $member->fetchObject();
		//登入成功，將登入者資訊寫入session
		// $_SESSION["mem_no"] = $memRow->mem_no;
		// $_SESSION["mem_id"] = $memRow->mem_id;
		// $_SESSION["mem_name"] = $memRow->mem_name;
		// $_SESSION["mem_mail"] = $memRow->mem_mail;
		echo $memRow->mem_mail;
   


		

	}
} catch (Exception $e) {
	echo "資料庫操作失敗,原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
	
}

?>