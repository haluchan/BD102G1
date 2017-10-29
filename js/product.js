var storage = sessionStorage;


//特定螢幕尺寸觸動特定效果(無限制的效果在最尾端)
function proSreenWidth(){
	//偵測螢幕寬度
	proScreenWidth = document.body.clientWidth;

	//固定前兩個種子有new
	seedNewBrandShow();	


	//點到魚缸有效果
	proClickHighLight();
	//點魚缸換下方資料
	proEveryTank();
	//第一次的魚缸撈資料
	proTankInfoChange();
	//點到商品，卷軸自動下移
	autoScorll();
	
	if( proScreenWidth >= 767){   //(only桌機&pad)
		//魚缸的輪播
		proTankWheel();
		//點小圖換大圖
		proClickSmall();
	}else{      //手機版
		//點到跳出燈箱顯示種子資訊
		proMobileClickSeed();
		//魚缸資訊滑動--外掛--在php檔裡面
	}
}


function $id(id){
	return document.getElementById(id);
}
function $qs(qs){
	return document.querySelector(qs);
}
function $qsa(qsa){
	return document.querySelectorAll(qsa);
}

//==========================================================================================

//==========================================================================================

//魚缸輪播
	function proTankWheel(){
		$id('toLeft').addEventListener('click', proToLeft, false);
		$id('toRight').addEventListener('click', proToRight, false);
	}

	function proToLeft(e){
		var imgShelf = $id('pro_t_shelf');
		var imgs = $id('pro_t_shelf').getElementsByClassName('pro_t_each');
		var lastImg = imgs[imgs.length-1];
		var firstImg = imgs[0];
		imgShelf.insertBefore( lastImg , firstImg );

		e ? e.stopPropagation() : window.event.cancelBubble = true;
	}

	function proToRight(e){
		var imgShelf = $id('pro_t_shelf');
		var imgs = $id('pro_t_shelf').getElementsByClassName('pro_t_each');
		var firstImg = imgs[0];
		imgShelf.appendChild(firstImg);

		// e ? e.stopPropagation() : window.event.cancelBubble = true;
	}

//==========================================================================================

//點小圖換大圖
	//1.每個li建立事件聆聽功能
	function proClickSmall(){
		var lists = document.querySelectorAll('.pro_t_imgGroup>li');
		for (var i=0; i<lists.length; i++){
			lists[i].addEventListener('click',proShowLarge,true);
		}
	}
	//2.
	function proShowLarge(e){
		//為什麼點什麼都會換圖??泡泡現象?
		// e ? e.stopPropagation() : window.event.cancelBubble = true;
		var small = e.target;
		var large = $id('tank_Large');
		// alert(large.src);
		// alert(small.className);
		large.src = small.src;
		console.log('large.src'+large.src);
		console.log('small.src'+small.src);
		// large.alt = small.alt;
	}

//==========================================================================================

//點到跳出燈箱顯示種子資訊
	//1.每個種子li建立事件聆聽功能
	function proMobileClickSeed(){
		var lists = document.querySelectorAll('.pro_s_white');
		for (var i=0; i<lists.length; i++){
			lists[i].addEventListener('click' ,proMobileInfoMove, false);
		}
	}
	//2.移動code
	function proMobileInfoMove(e){

		//抓到要複製或是移動的code
		// alert(e.target.innerHTML);
		var moveFrom = e.target.innerHTML;
		var code = '<div class="pro_s_white"><span class="iii" id="iii_close"><img src="src/image/login/pop_close.png"></span>' + moveFrom +'</div>';
			

		//抓到目標位置
		var moveTo = document.querySelector('#pro_s_mobileInfo');
		//把資料放入燈箱資料區
		moveTo.innerHTML = code;

		//可以做到一樣的效果，差了一個叉叉
		// $(this).clone().appendTo($('#pro_s_mobileInfo'));

		//把燈箱打開
		moveTo.style.display = 'block';

		//加入購物車
		$qs('#pro_s_mobileInfo .addButton').addEventListener('click', function(){
			var proInfo = document.querySelector('#' + this.id + ' input').value;
			// alert('55555');
			
			// 執行另一個函數，資料帶過去
			proAddItem( this.id , proInfo);
			proCloseLightbox();
		},false);


		// 關掉燈箱
		$id('iii_close').addEventListener('click',proCloseLightbox ,false);
	}

//關掉燈箱
  function proCloseLightbox(){
  	$qs('#pro_s_mobileInfo').style.display = 'none';
  }

//==========================================================================================

//點到魚缸有click效果pro_t_each
	function proClickHighLight(){
		$qs('.pro_t_each div').className = 'pro_click';
		//每個li建立事件聆聽功能
		var list = $qsa('.pro_t_each');
		for (var i = 0; i<list.length; i++){
			list[i].addEventListener('click', function(){

				//清掉所有人的class
				for (var j = 0; j<list.length; j++) {
					var item = $qs('#' + list[j].id + ' div');
					item.className = '';
				}

				//加class
				var choose = $qs('#' + this.id + ' div'); 
				choose.className = 'pro_click';
				
			},false);
		}
	}

//==========================================================================================

//購物車圖示，scroll時的觸發效果--jQ
  $(document).ready(function(){
  	var fixed = false; //false:從上往下；true:從下往上
	$(window).scroll(function(){
		var scrollValue = $(this).scrollTop();
	
		var anchor = 24;
		// console.log(scrollValue);
		if (window.innerWidth > 767) {  //PC的效果

			$('#cartCircle').addClass('cartAnimatPc');
			if (scrollValue > anchor) {  
				if(!fixed){ //尚未被fix就加
					$('.cartAnimatPc').css({
						'display'  : 'block',
						'animation': 'cartPc 1s -.1s cubic-bezier(.14,.87,.25,.7) reverse;'
					});
					fixed = true;
				}
			}else{  //由下往上
				$('.cartAnimatPc').css({
					'animation': 'cartPc 1s cubic-bezier(.14,.87,.25,.7)',
				});
				//兩秒後購物車圓圈圈消失
				timeId = setInterval( noSee ,2000);
				fixed = false;
			}

		}else{ //mobile效果
			$('#cartCircle').addClass('cartAnimatMobile');

		}
	});


  });

  function noSee(){
  	$('.cart').css('display','none');
  	clearInterval( timeId);
  }


//==============================================================================
//點魚缸換於資料pro_t_each
	//1.每個li建立事件聆聽功能
	function proEveryTank(){
		var lists = document.querySelectorAll('.pro_t_each');
		for (var i=0; i<lists.length; i++){
			lists[i].addEventListener('click',proTankInfoChange,false);
		// e ? e.stopPropagation() : window.event.cancelBubble = true;
		}
	}
	//2.
	function proTankInfoChange(e){
		var pro_realno = $('.pro_click').parent().attr('id');
		var pro_name = $('.pro_click').parent().find('.pro_t_name').text();
		var pro_price = $('.pro_click').parent().find('.pro_t_price').text();
		var pro_std = $('.pro_click').parent().find('.pro_t_std').text().replace(/\n/g,"<br>");
		var pro_info = $('.pro_click img').attr('alt');

		var oldProId = $('.pro_t_infoTop .pro_t_infoTR .pro_t_TBuy span:nth-child(2)').attr('id');
		console.log('oldProId'+oldProId);

		// var altArr= ["主圖", "結構圖", "細部圖", "情境圖", "尺寸圖"];
		
		// $('.pro_t_infoTop').children().remove();
		// $('.pro_t_infoTop').html('');
		// $('.pro_t_infoTop .pro_t_infoTL div img').attr('src','src/image/product/pro-'+pro_realno+'1.jpg');
		// 大圖更新
		$('.pro_t_infoTop .pro_t_infoTL div img').attr('src','src/image/product/pro-' + pro_realno + '1.jpg');
		
		//商品名稱更新
		$('.pro_t_infoTop .pro_t_infoTR h3').text(pro_name);
		
		//換掉輪播圖片的src，原5張，因外掛自動產稱，故總共12張，結論:桌機5張  手機12張
		
		if( proScreenWidth >= 767){
			var proBecauseSlick = 0;
		}else{
			var proBecauseSlick = 5;
		}

		var i = 1;
		while( i <= $('.pro_t_infoTop .pro_t_infoTR .pro_t_imgGroup li').size()-proBecauseSlick ){
			console.log('i='+i);
			// var targetImg = $('.pro_t_infoTop .pro_t_infoTR .pro_t_imgGroup li:nth-child('+ i +') img');
			var targetImg = $('.pro_t_infoTop .pro_t_infoTR .pro_t_imgGroup ').find('li:nth-child('+ i +') img');

			// var newSrc = "src/image/product/pro-"+pro_realno+i+".jpg";
			var newSrc = targetImg.attr('src').replace(oldProId,pro_realno);
			targetImg.attr('src',newSrc);
			i++;
		};
		//重新呼叫點小圖換大圖，去建立事件聆聽功能
		proClickSmall();

		//價格更新
		$('.pro_t_infoTop .pro_t_infoTR .pro_t_TBuy span:first-child').text(pro_price);

		//按鈕id更新
		$('.pro_t_infoTop .pro_t_infoTR .pro_t_TBuy .addButton').attr('id', pro_realno);

		//按鈕綁更新
		$('.pro_t_infoTop .pro_t_infoTR .pro_t_TBuy span:nth-child(2) input').attr('value', pro_info);

		//規格更新
		$('.pro_t_infoBottom p').first().html(pro_std);


	}


//========================================================================
//前兩個菜菜的牌子才有new
	function seedNewBrandShow(){
		$('#pro_s_cabinet li:first-child .pro_s_vegetable .pro_s_brand .pro_s_new').removeAttr('hidden');
		$('#pro_s_cabinet li:nth-child(2) .pro_s_vegetable .pro_s_brand .pro_s_new').removeAttr('hidden');
	}

//==========================================================
//點到商品，卷軸自動下移

	function autoScorll(){
		$('.pro_t_each').click(function(){

			//種子部分高pro_seed+遮雨棚pro_tent+pro_t_wheel+pro_t_shelfImg = 指定高
			var downTo = $('.pro_seed').height()+ $('.pro_tent').height()+ $('.pro_t_wheel').height()+ $('.pro_t_shelfImg').height();
			// $(window).scrollTop(downTo);
			console.log(downTo);

			//參考w3c
			if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: downTo
		      }, 400 ,function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = downTo;
		      });
		    } // End if

		});
	}



//==========================================================
//購物車數字增加----移去header.js
	// //購物清單
	// 	function proCartNumber(){
	// 		//1.建立空storage 放購買順序
	// 		if (storage['addItemList'] == null){
	// 			storage['addItemList'] = '';
	// 		}else{ //已存在則計算數量	
	// 			var itemString = storage.getItem('addItemList');
	// 			var items = itemString.substr(0 , itemString.length-2).split(', ');
	// 			var eachCart = $qsa('.cartNo');
	// 			for (var j = 0; j<eachCart.length; j++){
	// 				if(items ==""){
	// 					eachCart[j].innerText = 0;			    
	// 				}else{
	// 					eachCart[j].innerText =  items.length;
	// 				}	
	// 			}
						
	// 		}


	// 		//每個按鈕建立事件聆聽功能
	// 		var list = document.querySelectorAll('.addButton');
	// 		for (var i = 0; i<list.length; i++){
	// 			list[i].addEventListener('click', function(){
	// 				var proInfo = document.querySelector('#' + this.id + ' input').value;
					
	// 				// 執行另一個函數，資料帶過去
	// 				proAddItem( this.id , proInfo);
	// 			},false);
	// 		}
	// 	}



	// 	// 2.按下去後，把資料存進storage+更改購物車數字
	// 	function proAddItem( proId , proInfo , e){		
	// 		//1.將購買訊息存入storage中
	// 		if (storage[proId]){
	// 			alert('購物車裡已經有了喔！');
	// 		}else{
	// 			storage['addItemList'] += proId + ', ';
	// 			storage[proId] = proInfo;
	// 		}

	// 		//2.更改購物車數字
	// 		var itemString = storage.getItem('addItemList');
	// 		var items = itemString.substr(0 , itemString.length-2).split(', ');
	// 		var eachCart = $qsa('.cartNo');
	// 		for (var j = 0; j<eachCart.length; j++){
	// 			eachCart[j].innerText = items.length;
	// 		}

	// 		// document.getElementById('cart').innerText =  items.length;
	// 	}




//抓螢幕寬度去觸發特定裝置的事件
window.addEventListener('load', proSreenWidth, false);
