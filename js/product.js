var storage = sessionStorage;

function $id(id){
	return document.getElementById(id);
}


function sreenWidth(){
	var w = document.body.clientWidth;
	if( w >= 767){
		//魚缸的輪播(only桌機&pad)
		tankWheel();
		//點小圖換大圖(only桌機&pad)
		clickSmall();
	}else{
		//點到跳出燈箱顯示種子資訊
		mobileClickSeed();
	}
}

function cartNumber(){
	//建立空storage 放購買順序
	if (storage['addItemList'] == null){
		storage['addItemList'] = '';
	}else{ //已存在則計算數量	
		var itemString = storage.getItem('addItemList');
		var items = itemString.substr(0 , itemString.length-2).split(', ');
		document.getElementById('cart').innerText =  '(' + items.length + ')';
	}


	//每個按鈕建立事件聆聽功能
	var list = document.querySelectorAll('.addButton');
	for (var i = 0; i<list.length; i++){
		list[i].addEventListener('click', function(){
			var proInfo = document.querySelector('#' + this.id + ' input').value;
			
			// 執行另一個函數，資料帶過去
			addItem( this.id , proInfo);
		},false);
	}

}

// 把資料存進storage+更改購物車數字
function addItem( proId , proInfo , e){
	//取消泡泡現象
	e ? e.stopPropagation() : window.event.cancelBubble = true;
	
	//1.將購買訊息存入storage中
	if (storage[proId]){
		alert('購物車裡已經有了喔！')
	}else{
		storage['addItemList'] += proId + ', ';
		storage[proId] = proInfo;
	}

	//2.更改購物車數字
	var itemString = storage.getItem('addItemList');
	var items = itemString.substr(0 , itemString.length-2).split(', ');
	document.getElementById('cart').innerText =  '(' + items.length + ')';
}




//魚缸輪播
function tankWheel(){
	$id('toLeft').addEventListener('click', toLeft, false);
	$id('toRight').addEventListener('click', toRight, false);
}

function toLeft(e){
	var imgShelf = $id('pro_t_shelf');
	var imgs = $id('pro_t_shelf').getElementsByClassName('pro_t_each');
	var lastImg = imgs[imgs.length-1];
	var firstImg = imgs[0];
	imgShelf.insertBefore( lastImg , firstImg );

	e ? e.stopPropagation() : window.event.cancelBubble = true;
}

function toRight(e){
	var imgShelf = $id('pro_t_shelf');
	var imgs = $id('pro_t_shelf').getElementsByClassName('pro_t_each');
	var firstImg = imgs[0];
	imgShelf.appendChild(firstImg);

	e ? e.stopPropagation() : window.event.cancelBubble = true;
}



//點小圖換大圖
//1.每個li建立事件聆聽功能
function clickSmall(){
	var lists = document.querySelectorAll('#pro_t_imgGroup>li>img');
	for (var i=0; i<=lists.length; i++){
		lists[i] = addEventListener('click' ,showLarge, false);
	}
}
//2.
function showLarge(e){
	//為什麼點什麼都會換圖??泡泡現象?
	//e ? e.stopPropagation() : window.event.cancelBubble = true;
	var small = e.target;
	var large = $id('tank_Large');
	// alert(small +'/' + large);
	// alert(small.className);
	large.src = small.src;
	large.alt = small.alt;
}



//點到跳出燈箱顯示種子資訊
//1.每個種子li建立事件聆聽功能
function mobileClickSeed(){
	var lists = document.querySelectorAll('.pro_s_white');
	for (var i=0; i<=lists.length; i++){
		lists[i] = addEventListener('click' ,mobileInfoMove, false);
	}
}
//2.移動code
function mobileInfoMove(e){



	//抓到要複製或是移動的code
	// alert(e.target.innerHTML);
	var moveFrom = e.target.innerHTML;
	var code = '<i class="fa fa-times" aria-hidden="true"></i>' + moveFrom;
		

	//抓到目標位置
	var moveTo = document.querySelector('#pro_s_mobileInfo');
	// if ( moveTo.hasChildNodes()) {
		// while ( moveTo.childNodes.length >= 1){
			 // moveTo.removeChild(moveTo.firstChild);
		// }
		// alert('yes');
	// }//不寫if也會過，但寫if比較完整



	//把資料放入燈箱資料區
	moveTo.innerHTML = code; 
		//設定i的css
		// var icon = document.querySelector('#pro_s_mobileInfo .pro_s_info .icon');
		// icon.style.float = 'right';
		// icon.style.margin = '10px 12px 0 0';  
		// icon.style.fontSize = '8vw';
		// icon.style.color = '#555'; 
	//把燈箱打開
	moveTo.style.display = 'block';

}


//購物車數字增加
window.addEventListener('load', cartNumber, false);
//抓螢幕寬度去觸發特定裝置的事件
window.addEventListener('load', sreenWidth, false);