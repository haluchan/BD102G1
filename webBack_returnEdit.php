<?php 
// ob_start();

try {
	require_once("php/connectGrowing_hope.php");
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);


	$sql = "update Growing_hope.return 
			set return_remark=:return_title , 
				return_frame=:return_frame,
				return_info = :return_info
			where return_no=:return_no ";
	$return = $pdo->prepare($sql);
	$return->bindValue(":return_no", $loginObj->return_no);
	$return->bindValue(":return_title", $loginObj->return_title);  
	$return->bindValue(":return_frame", $loginObj->return_frame);
	$return->bindValue(":return_info" , $loginObj->return_info);
	$return->execute();
	// echo "修改成功!";

} catch(PDOException $e){
   	echo "行號: ",$e->getLine(), "<br>"; 
  	echo "訊息: ",$e->getMessage() , "<br>"; 	
}






 ?>