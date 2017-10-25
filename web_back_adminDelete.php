<?php 
ob_start();
 ?>
<?php 


	try{
	require_once('php/connectGrowing_hope.php');
	$sql='delete  from admin where admin_id =?';


	$admin = $pdo->prepare($sql);
	$admin->bindValue(1,$_REQUEST["admin_id"]);
	$admin->execute();
	header("location:webBack_admin.php");
}catch (PDOException $e){
	echo "錯誤原因：" ,$e->getMessage(),"<br>";
	echo "行號：",$e->getline(),"<br>";
}

 ?>

