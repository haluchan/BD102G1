<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		
		try {
			require_once('php/connectBeck.php');
			$sql = "insert into activity(act_name,act_date,act_loc,act_limit, act_price,act_txt,act_start,act_end) values(:act_name,:act_date,:act_loc,:act_limit,:act_price,:act_txt,:act_start,:act_end)";
				
			switch($_FILES["picture"]["error"]){

				case 0:
				  if( file_exists("image") === false){        //若沒有資料夾 //
				  	mkdir("image"); //make directory  新建資料夾  放上傳來的東西 //
				  }
				  $from = $_FILES["picture"]["tmp_name"]; //tmp_name 為暫存檔命和路徑
				  $to = "image//" . $_FILES["picture"]["name"];  //到images裡並且名字為檔案的名字  

				  copy($from, $to);  //從暫存從區複製檔案到要的路徑位址，暫存位址去Ini 設定(目前為C:\php\temp 中)
				  echo "上傳成功";  //因為成功上傳就可在資料價中找到檔案
				  break;
				case 1:
				  echo "上傳失敗,不可超過" , ini_get("upload_max_filesize"),"<br>";
				  break;	
				case 2:
				  echo "上傳失敗,不可超過", $_REQUEST["MAX_FILE_SIZE"],"<br>";
				  break;	
				case 3:
				  echo "上傳失敗,上傳檔案不完整<br>";
				  break;	
				case 4:
				  echo "檔案未選<br>";
				  break;	
				default:
					echo "error : " , $_FILES["picture"]["error"];
			}

			$activity = $pdo->prepare($sql);
			$activity->bindValue("act_name",$_REQUEST["act_name"]);
			$activity->bindValue(":act_date",$_REQUEST["act_date"]);
			$activity->bindValue(":act_loc",$_REQUEST["act_loc"]);
			$activity->bindValue(":act_limit",$_REQUEST["act_limit"]);
			$activity->bindValue(":act_price",$_REQUEST["act_price"]);
			$activity->bindValue(":act_txt",$_REQUEST["act_txt"]);
			$activity->bindValue(":act_start",$_REQUEST["act_start"]);
			$activity->bindValue(":act_end",$_REQUEST["act_end"]);
			$activity->execute();

			
			// $message ="活動新增成功";
			// echo "<script type='text/javascript'>alert('$message');</script>";
		} catch (PDOException $e) {
			echo "錯誤行號: ", $e-> getLine(), "<br>";
			echo "錯誤訊息: ", $e-> getMessage(), "<br>";

		}

	 ?>
</body>
</html>