
$(function(){
  var controller = new ScrollMagic.Controller();
 
  //tweenmax.fromto(目標物件,時間)用法
  //Title飛入
   var title= TweenMax.fromTo( ".fish_universeTitle" , 1.5, {
        x : -300,     
        opacity : 0,
    }, {
       x : 0,
       opacity : 1,
       ease :  Bounce.easeOut
    });



  //找到parallax  newParallax
  var scene_star = document.getElementById('star')
  var parallax = new Parallax(scene_star)


  //觸發地球變大
    var scene_big = new ScrollMagic.Scene({
              
              triggerElement: "#trigger1",
              offset: -450
            
          })
          .setClassToggle(' #earth','big' )
          // .addIndicators({
          //     name: 'big'
          // })
          .addTo(controller);





})









