$(document).ready(function(){
	$('#slideButton').click(function(){
      var self = $(this);
 
      $('.item').slideToggle(200, function(){
          
    if($('.item').is(':visible')){
      self.attr('src','img/circleWithLine.png');
    } else {	
      self.attr('src','img/circleWithPlus.png');
    }
	});
 });

});

// clicked = true;
    $(document).ready(function(){
      $("#itemClick").click(function(){
        $(this).css('background-color','#a7938b');
      });
    });

  // if(clicked){
  //               $(this).css('background-color', 'brown');
  //               clicked  = false;
  //           } else {
  //               $(this).css('background-color', 'blue');
  //               clicked  = true;
  //           } 



