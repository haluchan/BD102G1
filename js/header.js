function doFirst(){
	
	//跟HTML畫面產生關連
};
	
	
	
// 漢堡選單下滑(已移到header.php下)
// $(document).ready(function(){
// 			$('#ham_button').click(function(){
// 				$('#hamicon').toggleClass("hamicon_slide");
// 				$('#ham_menu').toggleClass("ham_slide");
// 				});
// 		});		






//scroll選單 漸變
	$(function(){
		var fixed = false;//設定fix變數 false未fixed, true已fixed
		$(window).scroll(function () {
			var scrollVal = $(this).scrollTop();
			// var adscrtop=$(".topmenu").offset().bottom;
			 var adscrtop=100;
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
		 		$(".mainmenu").css({"position": "fixed"});
		 	}
		});
	});



// //scroll Magic
// $(function(){
// 	var controller = new ScrollMagic.Controller();

// 	var navbar = TweenMax.staggerFromTo(['#menu','#logo'],0.5,{
// 		opacity:0
// 	},{
// 		opacity:1

		
// 	},0.5);

// 	var scene = new ScrollMagic.Scene({
// 		triggerElement:"trigger1",
// 		duration:500,
// 		offset:-10,
// 		reverse:true
// 	})
// 	.setTween(navbar)
// 	.addIndicators({
// 		name:'scene'
// 	})
// 	.addTo(controller);
// })







window.addEventListener('load',doFirst,false);

