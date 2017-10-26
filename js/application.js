         //畫面一load完成 預設開啟 申請資助表單
        document.getElementById("bara").onclick=apply;
        function apply(){
            document.getElementById("search").style.display="none";
            document.getElementById("report").style.display="none";
            document.getElementById("apply").style.display="";
            $('.navbarli').removeClass('barActive');
            $('#bara').addClass('barActive');

        }
        document.getElementById("barc").onclick=report;
        function report(){
            document.getElementById("report").style.display="";
            document.getElementById("apply").style.display="none";
            document.getElementById("search").style.display="none";
            $('.navbarli').removeClass('barActive');
            $('#barc').addClass('barActive');
        }
        document.getElementById("barb").onclick=search;
        function search(){
            document.getElementById("apply").style.display="none";
            document.getElementById("report").style.display="none";
            document.getElementById("search").style.display="";
            $('.navbarli').removeClass('barActive');
            $('#barb').addClass('barActive');
        }
      window.onload=apply;





 		// 驗證申請資助表單value格式

 		//身分證字號須為正確格式(引進函式)
 		$('#idno').blur(function(){
 			var id=$(this).val().length;
 			if(id==0  || id <10){
 				$(this).css("border-color","rgba(253,13,77,0.7)");
 				alert("是不是漏填");
 			}	
 		});

 		//申請金額需全為數字
 		 $('input[name=allow]').blur(function(){
 		 	var money= $('input[name="allow"]').val();
 		 	if(isNaN(money) || money==0){//若不為number 且不為0 則傳回true
 		 		alert("申請金額必須為大於零之數字");
 		 	}
 		 });
 		


        //查詢案件
        //將案件編號 申請人姓名 申請人身分證字號存入session
        //連資料庫 若有吻合資料 就撈出顯示在畫面上
         		

 		
 		


