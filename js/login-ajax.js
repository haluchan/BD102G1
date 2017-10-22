/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-10-21 15:33:12
 * @version $Id$
 */





function $id(id){
	return document.getElementById(id);
}





// 重置

function resetPsw(){
	var forgotPsw = $id("forgotPsw");
	var login_naka = $id("login_naka");
	login_naka.style.display="none";
	forgotPsw.style.display="block";

}

function sendReset(){

	var memId = $id("memId");
	var email = $id("email");
	var memObj = {};

	memObj.memId = memId;
	memObj.email = email;

	var xhr = new XMLHttpRequest();


	xhr.onreadystatechange = function(){

		if(xhr.readyState == 4){
			if(xhr.status == 200){
				console.log(xhr.responseText);
				if(xhr.responseText == "error"){
					alert("帳號電子信箱輸入錯誤");
				}else{
					alert("密碼已發送至信箱");
					document.location.href="index.php";
				}

			}else{
				alert(xhr.status);
			}
		}


	};
	var data_info = "jsonStr=" +JSON.stringify(memObj);
	console.log( data_info );
	var url = "php/login-reset.php?" + data_info;
	xhr.open("Get",url,true);
	xhr.send(null);

}








// 登入



function showPanel(){
	var spanLogin = $id("spanLogin");
	var lightboxbg= $id("lightbox-bg");
	if(spanLogin.innerHTML == "註冊/登入"){
		lightboxbg.style.display = "block";
		lightboxbg.style.opacity = '1';
		// lightboxbg.style.transition = "all , 1s";


	}else{
		spanLogin.innerHTML = "註冊/登入";
		$id("memMail").value="";
		$id("memPsw").value="";

	}

}








function sendForm(){

	var memMail = $id("memMail").value;
	var memPsw = $id("memPsw").value;
	var memObj = {};

	memObj.memMail = memMail;
	memObj.memPsw = memPsw;

	// ==========

	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){ 
		if(xhr.readyState == 4){
			if (xhr.status == 200){
				// console.log(xhr.responseText);
				if(xhr.responseText=="error"){
					alert("帳號密碼錯誤");
				}else{
					// $id("memName").innerHTML = xhr.responseText;
					alert(xhr.responseText,+"歡迎回來");
					$id("spanLogin").innerHTML = "登出";
					$id("lightbox-bg").style.display="none";
					// alert(xhr.responseText);
					
				}
			}else{
				alert(xhr.status);
			}
		}
	};

	var mem_info = "jsonStr=" + JSON.stringify(memObj);
	console.log(mem_info);
	var url = "php/login-program.php?" + mem_info;
	xhr.open("Post", url, true);
	xhr.send(null);
}

function cancelPanel(){
	var lightboxbg= $id("lightbox-bg");
	$("memMail").value = "";
	$("memPsw").value = "";
	lightboxbg.style.display = "none";
	lightboxbg.style.opacity = '0';
	document.getElementById("forgotPsw").style.display="none";
	document.getElementById("login_naka").style.display="";
	// lightboxbg.style.transitionDuration = "1s";
}



function init(){

	$id("spanLogin").onclick = showPanel;

	$id("login_btn").onclick = sendForm;
	
	$id("button_x").onclick = cancelPanel;

	$id("resetPsw").onclick = resetPsw;

	$id("reset_btn").onclick = sendReset;
}

window.onload=init;

