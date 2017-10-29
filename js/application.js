         //畫面一load完成 預設開啟 申請資助表單
        document.getElementById("bara").onclick=apply;
        function apply(){
            document.getElementById("search").style.display="none";
            document.getElementById("report").style.display="none";
            document.getElementById("apply").style.display="";

        }
        document.getElementById("barc").onclick=report;
        function report(){
            document.getElementById("report").style.display="";
            document.getElementById("apply").style.display="none";
            document.getElementById("search").style.display="none";
           
        }
        document.getElementById("barb").onclick=search;
        function search(){
            document.getElementById("apply").style.display="none";
            document.getElementById("report").style.display="none";
            document.getElementById("search").style.display="";
           
        }
      window.onload=apply;


      //JQuery切換baractive
      $('#bara').click(function (){
        $('.navbarli').removeClass('barActive').addClass('normal');
        $(this).removeClass('normal').addClass('barActive');
      });

      $('#barb').click(function (){
        $('.navbarli').removeClass('barActive').addClass('normal');
        $(this).removeClass('normal').addClass('barActive');
      });

      $('#barc').click(function (){
        $('.navbarli').removeClass('barActive').addClass('normal');
        $(this).removeClass('normal').addClass('barActive');
      });
    


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
 		


         		

 		
 		


