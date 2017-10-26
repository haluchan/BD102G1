<?php
session_start();
ob_start();

$_SESSION['signInInfo'] = '';

try { 	

	//輸入的資料
	$id = $_REQUEST["admin_id"];
	$psw = $_REQUEST["admin_psw"];


	//來自資料庫
	require_once("connectGrowing_hope.php");

	$sql = "select *
			from admin
			where  admin_id  = :id 
			   and admin_psw = :psw";

	$input = $pdo ->prepare( $sql );
	$input -> bindValue(":id" , $id);
	$input -> bindValue(":psw" , $psw);
	$input -> execute();

	if ( $admin = $input->fetchObject() ){
		//登入成功，把管理者名字送到後台第一頁
		$admin_name = $admin->admin_name;
		$_SESSION['signInInfo'] = $admin_name;
		// echo '';
		header("Location:../webBack_welcome.php");
	}else{

		// 登入失敗，把失敗訊息傳回登入頁
		$_SESSION['signInInfo'] = '輸入錯了捏！';
		
		//所權限的話可以再用這個
		// $_SESSION['signInInfo'] = '輸入錯了捏！<br>訪客帳號&密碼：carrot';

		header("Location:../admin_signIn.php");
	}



} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}

?>