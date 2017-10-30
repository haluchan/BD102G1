<?php
ob_start();
session_start();
try {
	$photonum=$_FILES["mem_pho"]["name"];
	$photoname=strrchr($photonum,".");
	switch ($_FILES["mem_pho"]["error"]) {
					case 0:
					
					$from=$_FILES["mem_pho"]["tmp_name"];// 從暫存檔路徑移至images/member資料夾中
					$to = "../src/image/member/" ."mem_".date("mdhis").$photoname;
					$photonum="mem_".date("mdhis").$photoname;
					
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
	$sql = 
	"update member set	
	mem_name=:mem_name,mem_mail=:mem_mail,mem_add=:mem_add,mem_psw=:mem_psw,mem_pho=:mem_pho where mem_id = :mem_id";	
	$member = $pdo->prepare($sql);
	
	$member->bindValue( ":mem_pho" , $photonum);
	$member->bindValue( ":mem_name" , $_REQUEST["mem_name"]);
	$member->bindValue( ":mem_mail" , $_REQUEST["mem_mail"]);
	$member->bindValue( ":mem_add" , $_REQUEST["mem_add"]);
	$member->bindValue( ":mem_id" , $_REQUEST["mem_id"]);
	$member->bindValue( ":mem_psw" , $_REQUEST["mem_psw"]);
	$member->execute();
	// echo "異動成功~<br>";
	$_SESSION['mem_pho']=$photonum;
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