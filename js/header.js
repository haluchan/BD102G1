 
			$(document).ready(function(){
			$('#ham_button').click(function(){
				$('#hamicon').toggleClass("hamicon_slide");
				$('#ham_menu').toggleClass("ham_slide");
				});
			});		
			//登入lightbox
			$("#login-btn").click(function(){
				$("#lightbox-bg").fadeIn();

			});

			$("#login-btn2").click(function(){
				$("#lightbox-bg").fadeIn();
			});
			$(".button-x").click(function(){
				$("#lightbox-bg").fadeOut();
			});
			
			//註冊lightbox
			$("#sign-btn").click(function(){
				$("#lightbox-bg").fadeOut();
				$("#sign-lightbox").fadeIn();

			});
			$("#cancel-sign").click(function(){
				$("#sign-lightbox").fadeOut();
			});
			//完成註冊


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
