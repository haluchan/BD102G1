$(document).ready(function(){

  //選單展開收合
	$('.slideButton').click(function(){
     
      // $('.slideButton').parent().children('.item').slideUp(200,easeInOutQuint);
    $(this).parent().children('.item').slideToggle(200, function(){
        
        if($('.item').is(':visible')){
         $(this).parent().children('.slideButton').children('img').attr('src','src/image/web_back_frame/circleWithLine.png');
        } else {	
          $(this).parent().children('.slideButton').children('img').attr('src','src/image/web_back_frame/circleWithPlus.png');
        }
     });

  });





  // clicked = true;
   $(".item li").click(function(){
      // $(".item li").css('background-color','inherit');
      $(this).css('background-color','rgba(236,254,218,1)');
    });
});
    // $(document).ready(function(){
    //   $(".item li").click(function(){
    //     // $(".item li").css('background-color','inherit');
    //     $(this).css('background-color','rgba(236,254,218,1)');
    //   });
    //   // $(".itemClick").click(function(){
    //   //   $(this).css('background-color','#a7938b');
    //   // });

    // });

  // if(clicked){
  //               $(this).css('background-color', 'brown');
  //               clicked  = false;
  //           } else {
  //               $(this).css('background-color', 'blue');
  //               clicked  = true;
  //           } 



