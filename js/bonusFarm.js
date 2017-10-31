 
$( function() {
    $('.seedFirst').click(function(){
       points = $(this).attr('alt')
       // alert(points);
       $('.seedBag').click(function(){
       $(this).attr('src','../src/image/bonusFarm/seed_darkgreen.png');
    });
    });
    $('.seedSecond').click(function(){
       points = $(this).attr('alt')
       // alert(points);
       $('.seedBag').click(function(){
       $(this).attr('src','../src/image/bonusFarm/seed_red.png');
    });
    });
    $('.seedThird').click(function(){
       points = $(this).attr('alt')
       // alert(points);
       $('.seedBag').click(function(){
       $(this).attr('src','../src/image/bonusFarm/seed_yellow.png');
    });
    });
    $( ".seedBag" ).draggable({ revert:"invalid"});
    $( ".land" ).droppable({
      drop: function() {
        $('.carrot1').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.tomato1').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.carrot2').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.tomato2').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.carrot3').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.tomato3').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.carrot4').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.tomato4').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.carrot5').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.tomato5').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.carrot6').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.tomato6').css('height','100px').css('display','inline-block').animate({height: "150px"},1000).fadeOut(4000);
        $('.seedBag').css({'top':100,'left':10});
        $('#circle').text(points).css('color','white');
      }
    });
    
  } );
// windmill
$(document).ready(function(){
  var angle = 0;
    setInterval(function(){
      angle+=3;
     $(".windmill_top").rotate(angle);
},40);
});
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// close the choose bar and let seedbag disappear
$(document).ready(function(){
  $('#btn1').click(function(){
    $('.seedBag').css('display','none');
    $('.land').css('display','none');
  });
  $('.close').click(function(){
      $('.seedBag').css('display','block');
  });
});

// close the choose bar
$(document).ready(function(){
  $('#btn2').click(function(){
    $('#id01').hide(function(){
      $('.seedBag').css('display','block');
      $('.land').css('display','block');
    });
  });
});

// control every scenes
$(document).ready(function(){
  $('.move_cloud').fadeOut( 2000,function(){
    $(this).hide(function(){
      $('.move_balloon').fadeIn( 1800,function(){
        $(this).fadeOut(500,function(){
          $('.container').fadeIn(5000,function(){
            $('.land').show();
          });
        });
      });
    });
  }); 
});
