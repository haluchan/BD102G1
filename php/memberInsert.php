<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>memberInsert.php</title>
</head>
<body>
	<?php 
try {
	require_once("connectBeck.php");
	$sql = "insert into member(mem_name,mem_Id,Mem_Psw,mem_mail,mem_gender,mem_birth,mem_add)value(:mem_name,:mem_Id,:mem_Psw,:mem_mail,:mem_gender,:mem_birth,:mem_add)";	
	$product = $pdo->prepare($sql);
	$product->bindValue( ":mem_name" , $_REQUEST["mem_name"]);
	$product->bindValue( ":mem_Id" , $_REQUEST["mem_Id"]);
	$product->bindValue( ":mem_Psw" , $_REQUEST["mem_Psw"]);
	$product->bindValue( ":mem_mail" , $_REQUEST["mem_mail"]);
	$product->bindValue( ":mem_gender" , $_REQUEST["mem_gender"]);
	$product->bindValue( ":mem_birth" , $_REQUEST["mem_birth"]);
	$product->bindValue( ":mem_add" , $_REQUEST["mem_add"]);
	$product->execute();
	// echo "異動成功~<br>";
	
	
	
	// header("location:../index.php");
} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
?>    
</body>
</html>