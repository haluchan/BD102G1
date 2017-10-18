var storage = sessionStorage;

//特定螢幕尺寸觸動特定效果(無限制的效果在最尾端)
function proSreenWidth(){
	var w = document.body.clientWidth;
	if( w >= 767){   //(only桌機&pad)
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

//購物清單
	function proCartNumber(){
		//1.建立空storage 放購買順序
		if (storage['addItemList'] == null){
			storage['addItemList'] = '';
		}else{ //已存在則計算數量	
			var itemString = storage.getItem('addItemList');
			var items = itemString.substr(0 , itemString.length-2).split(', ');
			if(items ==""){
				$id('cart').innerText = 0;			    
			}else{
				$id('cart').innerText =  items.length;
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
		var eachCart = $qsa('.cartNo');
		for (var j = 0; j<eachCart.length; j++){
			eachCart[j].innerText = items.length;
		}

		// document.getElementById('cart').innerText =  items.length;
	}

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
		var lists = document.querySelectorAll('#myElement>li>img');
		for (var i=0; i<lists.length; i++){
			lists[i].addEventListener('click',proShowLarge,false);
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
		large.alt = small.alt;
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

		//把燈箱打開
		moveTo.style.display = 'block';

		//加入購物車
		$qs('#pro_s_mobileInfo .addButton').addEventListener('click', function(){
			var proInfo = document.querySelector('#' + this.id + ' input').value;
			// alert('55555');
			
			// 執行另一個函數，資料帶過去
			proAddItem( this.id , proInfo);
		},false);


		// 關掉燈箱
		$id('iii_close').addEventListener('click', function(){
			$qs('#pro_s_mobileInfo').style.display = 'none';
		},false);
	}

//==========================================================================================

//點到魚缸有click效果
	function proClickHighLight(){
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
  
	$(window).scroll(function(){
		var scrollValue = $(this).scrollTop();
		var anchor = 24;
		console.log(scrollValue);
	});
  




  });







//購物車數字增加
window.addEventListener('load', proCartNumber, false);
//抓螢幕寬度去觸發特定裝置的事件
window.addEventListener('load', proSreenWidth, false);
//點到魚缸有效果
window.addEventListener('load', proClickHighLight, false);
