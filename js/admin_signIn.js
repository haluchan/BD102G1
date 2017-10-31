var trueId = 'root';
var truePsw = 'bd102g1';

function $id($id){
	return document.getElementById($id);
}

//按鈕建立事件聆聽功能
function doFirst(){
	$id('signIn').addEventListener('click', adminCheck, false);
}

//檢查有沒有填寫完成
function adminCheck(){
	// var id = $id('adm_id').value;
	// var psw = $id('adm_psw').value;

	// if (id == trueId && psw == truePsw) {
	// 	alert('登入成功');
	// }else{
	// 	alert('帳密錯誤');
	// }

}




//驗證帳號密碼
// 10/13 帳密已預設
// function adminCheck(){
// 	var id = $id('adm_id').value;
// 	var psw = $id('adm_psw').value;

// 	if (id == trueId && psw == truePsw) {
// 		alert('登入成功');
// 	}else{
// 		alert('帳密錯誤');
// 	}

// }




window.addEventListener('load', doFirst, false);