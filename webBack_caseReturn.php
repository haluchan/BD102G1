<<<<<<< HEAD
<?php 
ob_start();
session_start();
 ?>
=======
<?php
session_start();
ob_start();?>
>>>>>>> a46be0a2d4532b4f4871473d4e53a97d42cd9a1d
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>後台::案件回報</title>
<<<<<<< HEAD
	<link rel="stylesheet" href="css/webBack_caseReturn.css">
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
=======
	
	<!-- 自己的css擺這裡 -->
	<link rel="stylesheet" href="css/webBack_caseReturn.css">
>>>>>>> a46be0a2d4532b4f4871473d4e53a97d42cd9a1d
	<!-- 不准動的部分，以下三行 -->
	<link rel="stylesheet" type="text/css" href="css/web_back_frame.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/web_back_frame/web_back_frame.js"></script>
<<<<<<< HEAD
	<!-- 自己的css擺這裡 -->
	
=======
>>>>>>> a46be0a2d4532b4f4871473d4e53a97d42cd9a1d

</head>
<body>
<?php require_once('web_back_frame_top.php') ?>
<nav>
			
			<div class="nav_item">

				<h2>案件回報</h2>
			</div>
			<div class="nav_item ">
				<div class="search">
					<input type="text" name="" placeholder="搜尋">

					<button><img src="src/image/web_back_frame/seaech.png"></button>
					<button><img src="src/image/web_back_frame/erase.png"></button>
				</div>
			</div>
			
			<div class="nav_item select">
				<span>類別：</span>
				<select>
					<option value="">不限</option>
					<option value="">不限</option>
					<option value="">不限</option>
				</select>
			</div>
			<div class="nav_item select">
				<span>類別：</span>
				<select>
					<option value="">全部</option>
					<option value="">種子</option>
					<option value="">魚缸</option>
				</select>
			</div>
			<div class="clearfix"></div>
</nav>


<div class="myForm">

	<?php 
		$i=0;
		try{
			require_once("php/connectGrowing_hope.php");
			$sql = "select * 
					from growing_hope.return
					where return_status in ('N')";
			$return = $pdo ->query($sql);
	?>		
			
	
	<table cellspacing="1">
		<tr>
			<th></th>
			<th>案件編號</th> <!-- event_no -->
			<th>撥款金額</th> <!-- event_title -->
			<th>回報日期</th> <!-- event_need -->
			<th>回報說明</th> <!-- event_period -->
			<th>回報內容</th> <!-- event_allowdate -->
			<th>撥款日期</th> <!-- event_status -->
			<th>回報審核</th>
			<th>確認通過</th>
			
		</tr>
		<?php  while ( $returnRow = $return->fetchObject()) { 
			$i++;
			$return_no = $returnRow -> return_no;
		?>
		<!-- <from action="webBack_caseStatus_update.php" method="get"> -->
			<tr class="tdRow">
				<input type="hidden" name="return_no" class="return_no" value="<?php echo $return_no; ?>">
				<td><?php echo $i; ?></td>
				<td class="event_no"><?php echo $returnRow -> event_no; ?></td>
				<td><?php echo $returnRow -> return_paymoney; ?></td>
				<td><?php echo $returnRow -> return_date; ?></td>
				<td><?php echo $returnRow -> return_remark; ?></td>
				<td><button class="btn detail">查看詳情</button></td>

				<td class="paydate">
					<input type="date" class="date" name="reutrn_paydate">
				</td>

				<td class="status">
					<select name="status" class="date status">
						<option>請選擇</option>
						<option value="Y">審核通過</option>
						<option value="R">回報退回</option>
					</select>
				</td>
				<td><input type="button" value="確定" class="btn yes"></td>
				<!-- <?php //if($status <>"P" echo "disabled";) ?> -->
			
			</tr>
			<tr class="tdRow tddisplay">
				<td colspan="9"> 
					<?php $type = $returnRow -> return_frame; ?>
					<select name="frame" class="date frame change">
						<option value="type">選擇版型</option>
						<option value="type_1" <?php if ($type == "type_1") echo "selected"; ?>>版型A</option>
						<option value="type_2" <?php if ($type == "type_2") echo "selected"; ?>>版型B</option>
						<option value="type_3" <?php if ($type == "type_3") echo "selected"; ?>>版型C</option>
					</select>

					<div class="return">
						<div class="type">
							<div class="type_img">
								<img src="src/image/funded/p0001_1.jpg">
							</div>
							<div class="type_txt">
								<p class="title">
									<input type="text" class="change" name="return_remark" value="<?php echo $returnRow -> return_remark; ?>">
									 <span class="date"><?php echo $returnRow -> return_date; ?></span> 
								</p>
								<p class="content">
									<textarea class="change">
										<?php echo $returnRow -> return_info; ?>
									</textarea>
									
								</p>
								<div class="clear"></div>
							</div>
							<input type="hidden" name="return_no" class="return_no" value="<?php echo $return_no; ?>">
							<div class="clear"></div>

							
						</div>
						<button class="edit" disabled="disabled">確定修改</button>

					</div>
				

				</td>
			</tr>
		<!-- </from> -->

	
	

<?php 		
		}
		echo "</table>
</div>";
	}catch (PDOException $e) {
			  echo "錯誤行號 : ", $e->getLine(), "<br>";
			  echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
		}
?>


<?php require_once('web_back_frame_bottom.php') ?>




<script>
	function $id(id){
		return document.getElementById(id);
	}	

	$('.detail').click(function(){
		$(this).parent().parent().find('+.tddisplay').slideToggle();
	});

	$('.frame').change(function(){
		$type = $(this).val();
		$old = $(this).parent().children('.return').children().first().attr('class');
		$(this).parent().children('.return').children().first().removeClass($old).addClass($type);
	});

	$('.change').change(function(){
			$('.edit').text('確定修改');
			$('.edit').removeAttr('disabled');
			$('.edit').addClass('btn');
	});



	$('.edit').click(function(){
		var returnObj = {};
		returnObj.return_frame = $(this).parent().parent().children('.frame').val();
		returnObj.return_no = $(this).parent().children().children('.return_no').val();
		returnObj.return_title = $(this).parent().children('').children('.type_txt').children('.title').children('.change').val();
		returnObj.return_info = $(this).parent().children('').children('.type_txt').children('.content').children('.change').val();
			
		  //================

			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function (){
			 	if( xhr.readyState == 4){
			    	if( xhr.status == 200 ){
				    	// alert(xhr.responseText);
				    	alert('修改成功!');
				    	location.reload();
			       }else{
			       		alert( xhr.status );
			       }
			   }
			}
			var data_info = "jsonStr=" + JSON.stringify(returnObj);
			alert(data_info);
			console.log( data_info);
			var url = "webBack_returnEdit.php?" + data_info;
			xhr.open("Get", url, true);
			xhr.send(null);
			$(this).text('修改成功');
			$(this).attr('disabled');
			$(this).removeClass('btn');
		});

		



	$(".yes").click(function(){
		var status = $(this).parent().parent().children('.status').children().val();
		if (status == 'Y') {
			$payday =  $(this).parent().parent().children('.paydate').children('.date').val();
			if (($payday != null) && ($payday != '0000-00-00') && ($payday != '')) {
				var upObj = {};//retrun_paydate
				upObj.event_no = $(this).parent().parent().children('.event_no').text();
				upObj.return_no = $(this).parent().parent().children('.return_no').val();
				upObj.return_paydate = $payday;

				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange=function (){
				 	if( xhr.readyState == 4){
				    	if( xhr.status == 200 ){
					    	location.reload();

				       }else{
				       		alert( xhr.status );
				       }
				   }
				}
				var data_info = "jsonStr=" + JSON.stringify(upObj);
				console.log( data_info);
				var url = "webBack_returnUp.php?" + data_info;
				xhr.open("Get", url, true);
				xhr.send(null);
			}else{
				alert("請選擇撥款日期!");
				
			}
		}else{
			alert('請選擇是否通過!');
		}
		
		
	});


		
	

</script>

</body>
</html>