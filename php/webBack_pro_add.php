<?php
$errorInfo = '結果:\n';


try { 
	$pro_no = $_REQUEST["pro_no"];	
	$pro_type = $_REQUEST["pro_type"];
	$pro_name = $_REQUEST["pro_name"];
	$pro_price = $_REQUEST["pro_price"];
	$pro_std = $_REQUEST["pro_std"];
	$image = $_FILES["image"];
	


	//存商品資料到product
	require_once("connectGrowing_hope.php");

		$sql = "insert into product
				value( null, :pro_type, :pro_name, :pro_price, :pro_std, :pro_status)";

		$product = $pdo ->prepare( $sql );
		$product -> bindValue(":pro_type" , $pro_type);
		$product -> bindValue(":pro_name" , $pro_name);
		$product -> bindValue(":pro_price" , $pro_price);
		$product -> bindValue(":pro_std" , $pro_std);
		$product -> bindValue(":pro_status" , 0);
		$product -> execute();

		$errorInfo .= "商品資料建立成功\\n" ;





	//存圖片到prophoto
	foreach( $image["error"] as $i => $value ){
		if ( $value != 0) {
			
			switch ( $value) {
				case 1:
					$errorInfo .= "圖片上傳失敗,不可超過" . ini_get("upload_max_filesize") . "\\n";
					break;	
				case 3:
				 	$errorInfo .= "圖片上傳失敗,上傳檔案不完整\\n";
				 	break;	
				case 4:
				 	$errorInfo .= "圖片檔案未選\\n";
				 	break;			
				default:
					$errorInfo .= "error : " . $value . "\\n";
					break;
			}

		}else{

			echo $image["name"][$i].'<br>';
			echo $image["tmp_name"][$i].'<br>';
			echo $image["size"][$i].'<br>';
			echo $image["type"][$i].'<br>';
			echo 'i='.$i.'<br>';
			echo 'pro_no='.$pro_no.'<br>';

			$from = $image["tmp_name"][$i];

			//判斷種子或魚缸，圖片編號方式、副檔名不同: pro-s001.png, pro-t0011.jpg
			if ($pro_type == 2) { //魚缸
				$to   = "../src/image/product/"."pro-t".$pro_no.($i+1).".jpg";
			}else{  //種子或其他
				$to   = "../src/image/product/"."pro-s".$pro_no.".png";
			}
			 
			echo 'to: '.$to.'<br>';

			require_once("connectGrowing_hope.php");

			$sql = "insert into prophoto
					value( null, :pro_no)";

			$product = $pdo ->prepare( $sql );
			// $product -> bindValue(":pro_no" ,$pro_no);
			$product -> bindValue(":pro_no" , $pro_no);
			$product -> execute();

			if (copy($from,$to))
				$errorInfo .= "圖片上傳成功" ;
			else
				$errorInfo .= "圖片上傳失敗" ;
		}
	}
	


	echo "<script>alert(' ". $errorInfo ." ')</script>";

	// header("Location:../webBack_proAdd.php");


} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}



?>