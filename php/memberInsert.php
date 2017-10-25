<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>memberInsert.php</title>
</head>
<body>
	<?php 
	try {
		require_once("connectBeck.php");
		

		
	} catch (Exception $e) {
		echo "錯誤行號:",$e->getLine(),"<br>";
		echo "錯誤訊息:",$e->getMessage(),"<br>";
	}

	 ?>
</body>
</html>