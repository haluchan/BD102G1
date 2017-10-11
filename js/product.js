var storage = sessionStorage;

function $id(id){
	return document.getElementById(id);
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
function addItem( proId , proInfo){

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
function wheel(){

}



window.addEventListener('load', cartNumber, false);
window.addEventListener('load', wheel, false);