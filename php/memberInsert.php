<?php 
ob_start();
session_start();
try {
	$photonum=$_FILES["mem_pho"]["name"];
	$photoname=strrchr($photonum,".");
	switch ($_FILES["mem_pho"]["error"]) {
					case 0:
					
					$from=$_FILES["mem_pho"]["tmp_name"];// 從暫存檔路徑移至images/member資料夾中
					$to = "../src/image/member/" ."mem_".date("md").$photoname;
					$photonum="mem_".date("md").$photoname;
					copy($from,$to);
					// echo"成功";
					break;

					case 1:
					echo "失敗", ini_get("upload_max_filesize");
					break;
					case 2:
					echo "失敗",  $_REQUEST["MAX_FILE_SIZE"];
					break;
					case 3:
					echo "檔案不完整";
					break;
					case 4:
					echo "檔案未選";
					break;
					default:
					echo "error";
				}

	require_once("connectBeck.php");
	$sql = "insert into member(mem_name,mem_pho,mem_Id,Mem_Psw,mem_mail,mem_gender,mem_birth,mem_add)value(:mem_name,:mem_pho,:mem_Id,:mem_Psw,:mem_mail,:mem_gender,:mem_birth,:mem_add)";	
	$product = $pdo->prepare($sql);

	$product->bindValue( ":mem_pho" , $photonum);
	$product->bindValue( ":mem_name" , $_REQUEST["mem_name"]);
	$product->bindValue( ":mem_Id" , $_REQUEST["mem_Id"]);
	$product->bindValue( ":mem_Psw" , $_REQUEST["mem_Psw"]);
	$product->bindValue( ":mem_mail" , $_REQUEST["mem_mail"]);
	$product->bindValue( ":mem_gender" , $_REQUEST["mem_gender"]);
	$product->bindValue( ":mem_birth" , $_REQUEST["mem_birth"]);
	$product->bindValue( ":mem_add" , $_REQUEST["mem_add"]);
	$product->execute();
	// echo "異動成功~<br>";
	header("location:../index.php");
} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}
?>    

