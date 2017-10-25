<?php 
// ob_start();

try {
	require_once("php/connectGrowing_hope.php");
	$jsonStr = $_REQUEST["jsonStr"];
	$loginObj = json_decode($jsonStr);


	// echo $_REQUEST["jsonStr"];
	// // echo $loginObj->event_title;

	//  $event_title_2 = $loginObj->event_title_2 ;
	//  $event_dept = $loginObj->event_dept ; 
	//  $event_video = $loginObj->event_video  ;
	//  $event_enddate = $loginObj->event_enddate;
	//  $event_txe_title = $loginObj->event_txe_title;
	//  $event_txt = $loginObj->event_txt;

	// echo $event_no; 
	// echo $event_title;
	// echo $event_title_2;
	// echo $event_dept; 
	// echo $event_video;
	// echo $event_enddate;
	// echo $event_txe_title;
	// echo $event_txt;

	$sql = "update Growing_hope.event 
			set event_title=:event_title , 
				event_title_2=:event_title_2,
				event_dept = :event_dept,
				event_enddate = :event_enddate,
				event_txe_title = :event_txe_title,
				event_txt = :event_txt
			where event_no=:event_no ";
	$event = $pdo->prepare($sql);
	$event->bindValue(":event_no", $loginObj->event_no);
	$event->bindValue(":event_title", $loginObj->event_title);  
	$event->bindValue(":event_title_2", $loginObj->event_title_2);
	$event->bindValue(":event_dept" , $loginObj->event_dept);
	$event->bindValue(":event_enddate" , $loginObj->event_enddate);
	$event->bindValue(":event_txe_title" , $loginObj->event_txe_title);
	$event->bindValue(":event_txt" , $loginObj->event_txt);
	$event->execute();

} catch(PDOException $e){
   	echo "行號: ",$e->getLine(), "<br>"; 
  	echo "訊息: ",$e->getMessage() , "<br>"; 	
}






 ?>