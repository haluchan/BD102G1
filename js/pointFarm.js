 $( function() {
    $( "#seedBag" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );    

 $( function() {
    $( ".seedBag" ).draggable();
    $( ".land" ).droppable({
      drop: function( event, ui ) {
        // $( this ).addClass( "ui-state-highlight" ).find( "p" ).html( "Dropped!" );
        // $("#seedBag").css("visibility","hidden");
        // $("#v1").fadeIn(2000).fadeOut(2000);
        // $("#v2").fadeIn(2000).fadeOut(2000);
        // $("#v3").fadeIn(2000).fadeOut(2000);
        $('#v1').css('height','100px').css('display','inline-block').animate({height: "150px"},4000).fadeOut(3000);
        $('#v2').css('height','100px').css('display','inline-block').animate({height: "150px"},4000).fadeOut(3000);
        $('#v3').css('height','100px').css('display','inline-block').animate({height: "150px"},4000).fadeOut(3000);
        $('.seedBag').css({'top':0,'left':0});
        // setTimeout(function(){
        //   $('#v1').hide()
        // },5000);
      }
    });
  } );
// 雲特效
 // $(document).ready(function(){
 //    $('.cloud').fadeIn(3000,function(){
 //      $(this).css('display','block');
 //    });
 //    $("#cloud1").fadeIn(2000);
 //    $("#cloud2").fadeIn(3000);
 //    $("#cloud3").fadeIn(4000);
 //    $("#cloud4").fadeIn(5000);
 // });

// 文字特效
 $(document).ready(function(){
      $('#info').textillate({
        in: {
          effect: 'flash'
        },
        out: {
            effect: 'rollOut',
            delayScale: 1.5,
            delay: 50,
            sync: false,
            shuffle: false,
            reverse: false,
            callback: function () {}
                },
                loop: true
      });
      $('#sign').textillate({
         in: {
          effect: 'rollIn'
        },
        out: {
            effect: 'fadeOutLeft',
            delayScale: 1.5,
            delay: 80,
            sync: false,
            shuffle: false,
            reverse: false,
            callback: function () {}
                },
                loop: true
      });
    });

// 太陽轉圈
$(document).ready(function(){
  var angle = 0;
    setInterval(function(){
      angle+=0.5;
     $("#sun").rotate(angle);
},50);
});














