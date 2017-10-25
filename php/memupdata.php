<?php
ob_start();
session_start();

try {
	require_once("connectBeck.php");
	$sql = 
	"update member set	
	mem_name=:mem_name,mem_mail=:mem_mail,mem_add=:mem_add,mem_psw=:mem_psw,mem_pho=:mem_pho where mem_id = :mem_id";	
	$member = $pdo->prepare($sql);
	
	$member->bindValue( ":mem_pho" , $_REQUEST["mem_pho"]);
	$member->bindValue( ":mem_name" , $_REQUEST["mem_name"]);
	$member->bindValue( ":mem_mail" , $_REQUEST["mem_mail"]);
	$member->bindValue( ":mem_add" , $_REQUEST["mem_add"]);
	$member->bindValue( ":mem_id" , $_REQUEST["mem_id"]);
	$member->bindValue( ":mem_psw" , $_REQUEST["mem_psw"]);
	$member->execute();
	// echo "異動成功~<br>";
	$_SESSION['mem_pho']=$_REQUEST["mem_pho"];
	$_SESSION['mem_psw']=$_REQUEST["mem_psw"];
	$_SESSION['mem_name']=$_REQUEST["mem_name"];
	$_SESSION['mem_mail']=$_REQUEST["mem_mail"];
	$_SESSION['mem_add']=$_REQUEST["mem_add"];
	header("location:../member.php");
	
	} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
?>    