	<?php
		$form=$_REQUEST["form"];
		if($form=="new"){
			try {
				$videoname =$_FILES["cover"]["name"];
				$phoname =$_FILES["pho"]["name"];
				$videotype= strrchr($videoname, ".");
				$photype= strrchr($phoname, ".");


				$select_item=$_POST["plant"];
				$output=implode(",",$select_item);
				
				// 根據($_FILES["file"]["error"]來判斷case	
				// 0代表成功

				switch ($_FILES["cover"]["error"]) {
					case 0:
					if(file_exists("files")===false){// 如果不存在files 創建一資料夾 files
							mkdir("files");
					}
					$from=$_FILES["cover"]["tmp_name"];// 從暫存檔路徑移至剛剛建立的files資料夾中
					$to="../src/image/funded//" ."Cover-".date("YmdHis") .$videotype;//年月日時分秒當作檔名
					$vname="Cover-".date("YmdHis") .$videotype;
					copy($from,$to);
					echo"成功";
					break;
							
					case 1:
					echo "失敗", ini_get("upload_max_filesize");
					break;
					case 2:
					echo "失敗",  $_REQUEST["MAX_FILE_SIZE"];
					break;
					case 3:
					echo "檔案不完整";
					break;
					case 4:
					echo "檔案未選";
					break;
					default:
					echo "error";
				}
				switch ($_FILES["pho"]["error"]) {
					case 0:
					if(file_exists("files")===false){// 如果不存在files 創建一資料夾 files
							mkdir("files");
					}
					$from=$_FILES["pho"]["tmp_name"];// 從暫存檔路徑移至剛剛建立的files資料夾中
					$to="../src/image/funded//" ."E-".date("md") .$photype;//年月日時分秒當作檔名
					$pname="P-".date("md") .$photype;
					copy($from,$to);
					echo"成功";
					break;
							
					case 1:
					echo "失敗", ini_get("upload_max_filesize");
					break;
					case 2:
					echo "失敗",  $_REQUEST["MAX_FILE_SIZE"];
					break;
					case 3:
					echo "檔案不完整";
					break;
					case 4:
					echo "檔案未選";
					break;
					default:
					echo "error";
				}
				require_once("connectPon.php");//之後要換成connectGrowing_hope.php

	    		$sql = "insert into event(event_no,event_name,event_idno,event_account,event_birth,event_gender,event_add,event_tel,event_mail,event_need,event_date,event_title,event_title_2,event_dept,event_video,event_txe_title,event_txt,event_pho,event_plant,event_status)
	    		values(:event_no, :name, :id,:account,:birth,:gender, :add, :tel, :mail, :need,current_date(),:title, :title_2, :dept, :cover,:txtTitle, :txt,:pho, :plant, :status)";
				$event=$pdo->prepare($sql);
				
				$event->bindValue(":event_no",null);
				$event->bindValue(":name",$_REQUEST["name"]);
				$event->bindValue(":gender",$_REQUEST["gender"]);
				$event->bindValue(":id",$_REQUEST["id"]);	
				$event->bindValue(":birth",$_REQUEST["birth"]);
				$event->bindValue(":tel",$_REQUEST["tel"]);
				$event->bindValue(":mail",$_REQUEST["mail"]);
				$event->bindValue(":add",$_REQUEST["add"]);

				$event->bindValue(":title",$_REQUEST["title"]);
				$event->bindValue("title_2",$_REQUEST["title_2"]);
				$event->bindValue(":cover",$vname);
				$event->bindValue(":txtTitle",$_REQUEST["txtTitle"]);
				$event->bindValue(":txt",$_REQUEST["txt"]);
				$event->bindValue(":pho",$pname);
				// $event->bindValue(":plant",$_REQUEST["plant"]);
				$event->bindValue(":plant",$output);
				$event->bindValue(":dept",$_REQUEST["dept"]);
				$event->bindValue(":need",$_REQUEST["need"]);
				$event->bindValue(":account",$_REQUEST["account"]);
				$event->bindValue(":status","F");
				$event->execute();

				$name=$_REQUEST["name"];

				$sql="select LAST_INSERT_ID()";
				$result=$pdo->query($sql);
				$no=$result->fetchColumn();	
				$title="您已成功送出申請";
				$item="申請人";
				// echo"新增案件成功";
				// echo "<script>alert('成功送出申請 你的案件編號為123'); location.href='../application.php';</script>";
				header("Location: ../applicationAfter.php?name=$name&no=$no&title=$title&item=$item");
				

			}catch (PDOException $e) {
				echo "錯誤原因 : " , $e->getMessage(),"<br>";
				echo "行號 : " , $e->getLine(),"<br>";	
			}
		}else if($form=="search"){
				try {
					require_once("connectPon.php");//之後要換成connectGrowing_hope.php
	    		
	    			$sql = "select * from event where  event_no=:no and event_name=:name and event_idno=:id ";

					$event=$pdo->prepare($sql);
					$event->bindValue(":no",$_REQUEST["event_no"]);
					$event->bindValue(":name",$_REQUEST["event_name"]);
					$event->bindValue(":id",$_REQUEST["event_idno"]);	
					$event->execute();
				
					if($event->rowCount()===0){
						echo "error";
						// $msg =array('msg'=>'error');
						// echo json_encode($msg);
						
					}else{
						$eventRow = $event->fetchObject();
						echo json_encode($eventRow);//將php陣列轉成JSON	
					}
				}catch (PDOException $e) {
					echo "錯誤原因 : " , $e->getMessage(),"<br>";
					echo "行號 : " , $e->getLine(),"<br>";	
				}

		}else if($form=="report"){
				$no=$_REQUEST["event_noRe"];//輸入之案件編號
				try {
					require_once("connectPon.php");//之後要換成connectGrowing_hope.php
					$sql="select * from  growing_hope.return join growing_hope.event where growing_hope.event.event_no= ? AND growing_hope.event.event_dept=? ";

					$event=$pdo->prepare($sql);
					$event->bindValue(1,$_REQUEST["event_noRe"]);
					$event->bindValue(2,$_REQUEST["event_dept"]);
					$event->execute();
					if($event->rowCount()===0){
						// echo "<script>alert('案件編號不正確');  location.href='../application.php';</script>";
						$title="案件資料有誤 以下為您輸入的資料";//訊息頁標題
						$no=$_REQUEST["event_noRe"];//輸入之案件編號
						$item="代表人/單位";//顯示項目標題
						$name2=$_REQUEST["event_dept"];//輸入之代表人/單位
						// $url="history.go(-2)";
						// echo "<script>alert('回報成功'); location.href='../application.php';report();</script>";
						header("Location: ../applicationAfter.php?no=$no&name=$name2&title=$title&item=$item");
					}else{//如果有吻合資料
						// $fileCount=count($_FILES['return_remark']['name']);
						 // for($i=0; $i<$fileCount; $i++)
							$file=array();
							// 根據($_FILES["file"]["error"]來判斷case	, 0代表成功
							foreach( $_FILES["return_remark"]["error"] as $i=>$data ){
							switch ($_FILES["return_remark"]["error"][$i]) {
							case 0:
								if(file_exists("files")===false){// 如果不存在files 創建一資料夾 files
									mkdir("files");
								}

								//寫法1
								$filename=$_FILES["return_remark"]["name"][$i];

								$filetype= strrchr($filename, ".");
								$from=$_FILES["return_remark"]["tmp_name"][$i];// 從暫存檔路徑移至剛剛建立的files資料夾中
								
								$to="../src/image/funded//" ."R-".$no."-".date("Ymd")."-".$i .$filetype;//年月日時分秒當作檔名
								$name="R-"."-".$no.date("Ymd")."-".$i.$filetype;
								
								array_push($file,$name);
								copy($from,$to);

								//寫法2
								// $file=$_FILES['return_remark']['name'][$i];
								// $dest='files/' .$_FILES['return_remark']['name'][$i];

								// move_uploaded_file($file, $dest);



								
							break;
							case 1:
								echo "失敗", ini_get("upload_max_filesize");
							break;
							case 2:
								echo "失敗",  $_REQUEST["MAX_FILE_SIZE"];
							break;
							case 3:
								echo "檔案不完整";
							break;
							case 4:
								echo "檔案未選";
							break;
							default:
								echo "error";
							}

						}
						
						
						$name=implode(",",$file);

		    			$sql = "insert into growing_hope.return (return_no, event_no, return_date, return_info, return_pho) values(:return_no,:event_no, current_date(),:return_info,:return_pho) ";
						$return=$pdo->prepare($sql);
						$return->bindValue(":return_no",null);
						$return->bindValue(":event_no",$_REQUEST["event_noRe"]);
						$return->bindValue(":return_info",$_REQUEST["return_info"]);	
						$return->bindValue(":return_pho",$name);

						$return->execute();

						$no=$_REQUEST["event_noRe"];	
						$sql="select COUNT(event_no) from growing_hope.return where event_no=$no";

						$result=$pdo->query($sql);
						$times=$result->fetchColumn();	

						$title="您已成功回報進度"."<br><p style='font-size:16px';>此次為第".$times."次回報</p>";
						// $no=$_REQUEST["event_noRe"];
						$item="代表人/單位";
						$name2=$_REQUEST["event_dept"];
						// echo "<script>alert('回報成功'); location.href='../application.php';report();</script>";
						header("Location: ../applicationAfter.php?no=$no&name=$name2&title=$title&item=$item");
					}	
	    		
				}catch (PDOException $e) {
				echo "錯誤原因 : " , $e->getMessage(),"<br>";
				echo "行號 : " , $e->getLine(),"<br>";	
			}
		}

?>	



	
		

