<?php 
ob_start();
 ?>
<?php 	
echo $ststus = $_REQUEST["status"];
echo $mes_Arr = $_REQUEST["msg_no"];

// try{	
// 	require_once('php/connectGrowing_hope.php');
// 		if($ststus==0){
// 			$sql='update message set xreport_ny="Y"  WHERE msg_no=?';
// 			$message = $pdo->prepare($sql);//執行
// 			$message -> bindValue(1,$mes_Arr);
// 			$message -> execute();

// 		}else{
// 			$sql='update message set xreport_ny="R"  WHERE msg_no=?';
// 			$message = $pdo->prepare($sql);//執行
// 			$message -> bindValue(1,$mes_Arr);
// 			$message -> execute();
// 		}	

		
// 		header("location:webBack_xreport.php");
// 		// while迴圈跑完轉址

 
// }catch (PDOException $e){
// 			echo "錯誤原因：" ,$e->getMessage(),"<br>";
// 			echo "行號：",$e->getline(),"<br>";
// 		}
 ?>
