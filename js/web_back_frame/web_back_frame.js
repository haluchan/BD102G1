$(document).ready(function(){

  //選單展開收合
	$('.slideButton').click(function(){

    //判斷點到的目前是開或關
    if($(this).parent().children('.item').is(':visible')){
      //全部關起來，變加號
      $('.item').not(this).slideUp(200,'linear'); 
      $('.item').parent().children('.slideButton').children('img').attr('src','src/image/web_back_frame/circleWithPlus.png');
 
    }else{
      //全部關起來，變加號
      $('.item').not(this).slideUp(200,'linear');
      $('.item').parent().children('.slideButton').children('img').attr('src','src/image/web_back_frame/circleWithPlus.png');

      //被點到的展開，變減號
      $(this).parent().children('.item').slideDown(200);
      $(this).parent().children('.slideButton').children('img').attr('src','src/image/web_back_frame/circleWithLine.png');

     }

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



