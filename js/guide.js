function $id(id){
	return document.getElementById(id);
}
function $qs(qs){
	return document.querySelector(qs);
}
function $qsa(qsa){
	return document.querySelectorAll(qsa);
}


var i = 0;
var littleName = new Array('2.gif','3.gif');




function doFirst(){
	// 建立去後台click事件
	$qs('.sayBack').addEventListener('click',function(){
		carrotOpenEyes();
		timeId = setInterval(carrot,1600);
	}, false);



	//建立去前台click事件
	$qs('.sayFront').addEventListener('click',function(){
		driveTrak();
	}, false);
}

function carrotOpenEyes(){
	var oldSrc = $('.carrot img').attr('src'); 
	var newSrc = oldSrc.replace('0.png','2.gif');

	$('.carrot img').attr('src',newSrc);
}
function carrot(){

	if ( i == 1) {

		//必須同時停掉計時器
		clearInterval( timeId);
		// 轉址
		location.href = '../admin_signIn.php';

		
	}else{
		//換圖
		var oldSrc = $('.carrot img').attr('src'); 

		var newSrc = oldSrc.replace(littleName[i],littleName[i+1]);
		$('.carrot img').attr('src',newSrc);


		//向右移動
		if ( i==0) {
			var nowLeft = parseInt($('.carrot').css('left'));
			var newLeft = nowLeft+650 +'px';

			$('.carrot').animate({ left: newLeft} , 1500);
			$('.sayBack').animate({ marginLeft: newLeft} ,1800);
		}


		i++;
	}	
}





function driveTrak(){
	//拿掉頭和手
	$('.head').remove();
	$('.hand').remove();



	//換圖
	var oldSrc = $('.trak img').attr('src'); 
	var newSrc = oldSrc.replace('1.png','2.gif');
	$('.trak img').attr('src',newSrc);

	//加動畫class
	$('.farmer').addClass('trakGo');
	$('.sayFront').addClass('sayFrontGo');
	

	//轉址
	timeId = setInterval(goFront,2150);
}

function goFront(){

	location.href = '../index.php';
}







window.addEventListener('load', doFirst,false);