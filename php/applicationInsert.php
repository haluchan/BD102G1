<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>applicationInsert.php</title>
	</head>

	<body>

	<?php
		$form=$_REQUEST["form"];
		switch ($form) {
			case 'a':
				echo "我從申請資助來";
				break;
			case 'b':
				echo "我從回報進度來";
				break;
			case 'c':
				echo "我從查詢案件來";
				break;
		}

	?>
		

		
	</body>
</html>