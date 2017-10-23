<?php
session_start();
ob_start();

$errorInfo = '';


try { 
	$pro_no = $_REQUEST["pro_no"];	
	$pro_type = $_REQUEST["pro_type"];
	$pro_name = $_REQUEST["pro_name"];
	$pro_price = $_REQUEST["pro_price"];
	$pro_std = $_REQUEST["pro_std"];
	$pro_realNo = $_REQUEST["pro_realNo"];
	// $image = $_FILES["image"];
	


	//存商品資料到product
	require_once("connectGrowing_hope.php");

		$sql = "update product
				set    
					   pro_name   = :pro_name, 
					   pro_price  = :pro_price, 
					   pro_std    = :pro_std, 
					   pro_status = :pro_status
				where  pro_no = $pro_no";

		$product = $pdo ->prepare( $sql );
		//類別也不給修改，因為關係到圖檔編號
		// $product -> bindValue(":pro_type" , $pro_type);
		$product -> bindValue(":pro_name" , $pro_name);
		$product -> bindValue(":pro_price" , $pro_price);
		$product -> bindValue(":pro_std" , $pro_std);
		$product -> bindValue(":pro_status" , 0);
		$product -> execute();

		$errorInfo = productEnCode($pro_type).$pro_realNo. $pro_name . '\\n' ;
		$errorInfo .= "資料修改成功\\n" ;



//存圖片到prophoto //不給改
	// foreach( $image["error"] as $i => $value ){
	// 	if ( $value != 0) {
			
	// 		switch ( $value) {
	// 			case 1:
	// 				$errorInfo .= "圖片上傳失敗,不可超過" . ini_get("upload_max_filesize") . "\\n";
	// 				break;	
	// 			case 3:
	// 			 	$errorInfo .= "圖片上傳失敗,上傳檔案不完整\\n";
	// 			 	break;	
	// 			case 4:
	// 			 	$errorInfo .= "圖片檔案未選\\n";
	// 			 	break;			
	// 			default:
	// 				$errorInfo .= "error : " . $value . "\\n";
	// 				break;
	// 		}

	// 	}else{

	// 		echo $image["name"][$i].'<br>';
	// 		echo $image["tmp_name"][$i].'<br>';
	// 		echo $image["size"][$i].'<br>';
	// 		echo $image["type"][$i].'<br>';
	// 		echo 'i='.$i.'<br>';
	// 		echo 'pro_no='.$pro_no.'<br>';

	// 		$from = $image["tmp_name"][$i];

	// 		//判斷種子或魚缸，圖片編號方式、副檔名不同: pro-s001.png, pro-t0011.jpg
	// 		if ($pro_type == 2) { //魚缸
	// 			$pro_pho = "pro-t".$pro_no.($i+1).".jpg";
	// 			$to   = "../src/image/product/" . $pro_pho;

	// 		}else{  //種子或其他
	// 			$pro_pho = "pro-s".$pro_no.".png";
	// 			$to   = "../src/image/product/" . $pro_pho;
	// 		}
			 
	// 		echo 'to: '.$to.'<br>';

	// 		require_once("connectGrowing_hope.php");

	// 		$sql = "insert into prophoto
	// 				value( null, :pro_no, :pro_pho)";

	// 		$product = $pdo ->prepare( $sql );
	// 		// $product -> bindValue(":pro_no" ,$pro_no);
	// 		$product -> bindValue(":pro_no" , $pro_no);
	// 		$product -> bindValue(":pro_pho" , $pro_pho);
	// 		$product -> execute();

	// 		if (copy($from,$to))
	// 			$errorInfo .= "第" .($i+1). "張圖片上傳成功\\n" ;
	// 		else
	// 			$errorInfo .= "第" .($i+1). "張圖片上傳失敗\\n" ;
	// 	}
	// }
	


	// // echo "<script>alert(' ". $errorInfo ." ')</script>";
	$_SESSION['proAddErrorInfo'] = $errorInfo;

	header("Location:../webBack_pro.php");


} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
}

function productEnCode($txt){
	if($txt == "種子" || $txt ==1){
		return 's';
	}else if($txt == "魚缸" || $txt ==2){
		return 't';					
	}else{
		return 'z';
	}
}

?>