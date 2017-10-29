<?php 
ob_start();
 ?>
<?php 
try{
	$admin_id = $_REQUEST["admin_id"];
	$admin_psw = $_REQUEST["admin_psw"];
	$admin_name = $_REQUEST["admin_name"];

	if ( $admin_id == "" ||  $admin_psw == "" || $admin_name == ""){
		echo "資料不齊全<br>";	
	}else{
		require_once('php/connectGrowing_hope.php');

		$sql = "insert into admin
				values (  :admin_id , :admin_psw , :admin_name);";
		$admin= $pdo->prepare($sql);
		$admin -> bindValue(":admin_id",$admin_id);
		$admin -> bindValue(":admin_psw",$admin_psw);
		$admin -> bindValue(":admin_name",$admin_name);
		$admin -> execute();
		header("location:webBack_admin.php");
		echo "新增成功";
	}
}catch(PDOException $e) {
	echo "錯誤原因：" ,$e->getMessage(),"<br>";
	echo "行號：",$e->getline(),"<br>";
}
 ?>

