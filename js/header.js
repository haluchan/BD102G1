 
			$(document).ready(function(){
				$('#ham_button').click(function(){
					$('#hamicon').toggleClass("hamicon_slide");
					$('#ham_menu').toggleClass("ham_slide");
				});
			});		
			// //登入lightbox
			// $("#spanLogin").click(function(){
			// 	$("#lightbox-bg").fadeIn();

			// });

			// $("#login-btn2").click(function(){
			// 	$("#lightbox-bg").fadeIn();
			// });
			// $(".button-x").click(function(){
			// 	$("#lightbox-bg").fadeOut();
			// });
			
			//註冊lightbox
			$("#memSignBtn").click(function(){
				$("#lightbox-bg").css("display","none");
				$("#memsign-lightbox").css("display","block");

			});
			$("#membutton_x").click(function(){
				$("#memsign-lightbox").fadeOut(400);
			//完成註冊
			});

			$(function(){
				var fixed = false;//設定fix變數 false未fixed, true已fixed
					$(window).scroll(function () {
				var scrollVal = $(this).scrollTop();
				// var adscrtop=$(".topmenu").offset().bottom;
				 var adscrtop=24;
				if(window.innerWidth>767){ //RWD 767以下寬不動作
					if(scrollVal>adscrtop ){//捲動超過 處理方式
						if( ! fixed){
							fixed = true;
							$(".mainmenu").css({"position": "fixed","box-shadow":"0px 1px 10px #aaa"});
							$(".mainmenu").animate({top:'0px'},500,'swing');
							// $(".mainmenu").css({"position": "fixed","top": "0px","box-shadow":"0px 1px 10px #aaa"});
							$('#logo').css({"width":"20%"});
							$('#logo').attr('src','src/image/header/small-logo.png');	
							$('#logo').animate({width:'40%'},800,'swing');							
						}
					}else{//捲動不超過設定距離時
						$(".mainmenu").css({"position": "relative","box-shadow":"none"});
						$('#logo').attr('src','src/image/header/logo_v2.png').css({"width":"100%"});
							if(scrollVal<adscrtop){//捲動小於設定距離 fixed=false
								fixed = false;
							}
						}
				}else{
					$('#logo').css({"width":"100%"});
					$('#logo').attr('src','src/image/header/logo_v2.png');
			 		$(".mainmenu").css({"position": "fixed"});
		 	}
		});
	});



//購物清單
	function proCartNumber(){
		var storage = sessionStorage;
		//1.建立空storage 放購買順序
		if (storage['addItemList'] == null){
			storage['addItemList'] = '';
		}else{ //已存在則計算數量	
			var itemString = storage.getItem('addItemList');
			var items = itemString.substr(0 , itemString.length-2).split(', ');
			var eachCart = document.querySelectorAll('.cartNo');
			for (var j = 0; j<eachCart.length; j++){
				if(items ==""){
					eachCart[j].innerText = 0;			    
				}else{
					eachCart[j].innerText =  items.length;
				}	
			}
					
		}


		//每個按鈕建立事件聆聽功能
		var list = document.querySelectorAll('.addButton');
		for (var i = 0; i<list.length; i++){
			list[i].addEventListener('click', function(){
				var proInfo = document.querySelector('#' + this.id + ' input').value;
				
				// 執行另一個函數，資料帶過去
				proAddItem( this.id , proInfo);
			},false);
		}
	}



	// 2.按下去後，把資料存進storage+更改購物車數字
	function proAddItem( proId , proInfo , e){		

		var storage = sessionStorage;
		//1.將購買訊息存入storage中
		if (storage[proId]){
			alert('購物車裡已經有了喔！');
		}else{
			storage['addItemList'] += proId + ', ';
			storage[proId] = proInfo;
		}

		//2.更改購物車數字
		var itemString = storage.getItem('addItemList');
		var items = itemString.substr(0 , itemString.length-2).split(', ');
		var eachCart = document.querySelectorAll('.cartNo');
		for (var j = 0; j<eachCart.length; j++){
			eachCart[j].innerText = items.length;
		}

		// document.getElementById('cart').innerText =  items.length;
	}



window.addEventListener('load', proCartNumber, false);