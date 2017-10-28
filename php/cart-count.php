<?php
/**
 * 
 * halu Your Name
 * @date    2017-10-23 14:15:38
 */



try {
	require_once("connectGrowing_hope.php");
	$sql = "select * from product";

	$product = $pdo->query($sql);

	while( $prodRow = $product->fetchObject()){

		$proRow->

	}

}catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";	
}






?>