<?php
session_start();
ob_start();?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::案件審核</title>
		<!-- 不准動的部分，以下三行 -->	
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
	<link rel="stylesheet" href="css/webBack_eventDecide.css">
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- 自己的css擺這裡 -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <i class="material-icons" style="font-size:22px">add_circle_outline</i> -->
</head>

<body>
<?php require_once('web_back_frame_top.php') ?>

	<nav>
		<div class="nav_item pageTitle">
			<h2>案件審核</h2>
		</div>
	</nav>
<?php 
try {
	require_once("php/connectPon.php");//之後要換成connectGrowing_hope.php
    $sql = "select * from event where event_status='F'";//撈出案件狀態為審核中(F)的案件
	$event = $pdo->query($sql);	
	$count= $event->rowCount();//返回記錄數
?>
	<!-- <form class="myForm" action="php/webBack_eventPassOrFail.php" method="get"> -->
	<form class="myForm">
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>案件編號</th>
			<th>申請人</th>
			<th>申請時間</th>
			<th>申請金額</th>
			<th>核准金額</th>
			<th>募資截止日</th>
			<th>備註</th>
			<th>申請結果</th>
		</tr>
<?php
	if($count==0){
		echo"<tr><td colspan='9'>無案件</td></tr>";
	}else{
		$i=1;
		while( $eventRow = $event->fetchObject() ){		
	?>
			<tr class="tdRow">
				<td> <?php echo $i;?></td>
				<!-- $value = str_pad($value,3,'0',STR_PAD_LEFT); 補0用法-->
				<td class="pointer"><?php echo str_pad($eventRow->event_no,5,'0',STR_PAD_LEFT) ;?></td>
				<td> <?php echo $eventRow->event_name;?></td>
				<td> <?php echo $eventRow->event_date;?></td>
				<td> <?php echo number_format($eventRow->event_need);?></td>
				<td>
					<input type="text" name="allow">
				</td>
				<td>
					<input type="date" name="enddate">
				</td>
				<td>
					<input type="text" name="remark">
				</td> 
				<td>

					<button  class="btn" id="pass" value="P">通過</button>
					<button  class="btn" id="fail" value="R">退回</button>
					<!-- <input type="button" class="btn" id="fail" value="退回"> -->
				</td>		
			</tr>
			
			<!-- <div class="test"> -->
				<tr hidden>
					<td colspan="9">
						<p>案件標題</p><?php echo $eventRow->event_title;?>
						<p>案件摘要</p><?php echo $eventRow->event_txt;?>
						<p>內容照片</p><img src="src/image/funded//<?php echo $eventRow->event_pho;?>">
					</td>
				</tr> 
			<!-- </div> -->
	<?php
		$i++;	
		}
	}	
	echo "</table>";

} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";	
}

?>	    
	</table>
	</form>



<?php require_once('web_back_frame_bottom.php') ?>

<script>	
	$(".btn").click(function(){
		// $(this).parents(".tdRow").remove();
		// var value= $(this).parent().siblings('#test').text();
		var button=$(this).text();
		var idNo= $(this).parent().siblings("td:nth-child(2)").text();
		// var money= $('input[name="allow"]').val();
		// alert("案件編號"+value);
		// alert("金額"+money);
		// alert(status);
		var remark=$(this).parent().siblings().find('input[name="remark"]').val();
		// alert(remark);
		var enddate=$(this).parent().siblings().find('input[name="enddate"]').val();
		

		if(button=="通過"){
			var checkallow=$(this).parent().siblings().find('input[name="allow"]').val();
			var checkdate=$(this).parent().siblings().find('input[name="enddate"]').val();
			
			if(checkallow==""||checkdate==""){

				alert('未輸入核准金額或募資結束日期');
			}
			status="P"
			var allow= $(this).parent().siblings("td:nth-child(6)").find('input[name="allow"]').val();
		}else if(button=="退回"){
			status="R";
			var allow=0;
			var enddate="0000-00-00";
		}
		// alert(status);
		// alert(idNo+allow+status+remark+enddate);
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange=function(){
			if(xhr.readyState==4){
				if(xhr.status==200){
					// alert("XML成功");
				}else{
					// alert(xhr.status);
				}
			}
		}
		var url="php/webBack_eventPassOrFail.php?idNo="+idNo+"&allow="+allow+"&status="+status+"&remark="+remark+"&enddate="+enddate;
		xhr.open("Get",url,true);
		xhr.send(null);	
		// location.reload();
	});

	
$(".tdRow").find("td:nth-child(2)").click(function(){
	// $(this).css({color:"red"});
		// alert("顯示案件內容");
		$(this).parents("tr").next("tr").toggle();
});


	
</script>

</body>
</html>