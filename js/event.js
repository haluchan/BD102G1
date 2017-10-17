
$(function () {
// new scrollmagic 物件
var controller = new ScrollMagic.Controller();
//tween
    var tween_1 = TweenMax.staggerFromTo('.show', 1, {
        //做事情
        opacity: 0,
        y: -200
    }, {
        opacity: 1,
        y: 0
    },.2);



    var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger1",
      duration: 0,
      offset: -100,
      reverse: false
    
    })
    .setTween(tween_1)
    // .addIndicators({
    //         name: 'scene 01'
    //     })
   .addTo(controller);

  var tween_1 = TweenMax.staggerFromTo('.eventreco', 1, {
        //做事情
        opacity: 0,
        y: 0
    }, {
        opacity: 1,
        y: 0
    },.2);



    var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger2",
      duration: 0,
      offset: -100,
      reverse: false
    
    })
    .setTween(tween_1)
    // .addIndicators({
    //         name: 'scene 01'
    //     })
   .addTo(controller);
     
  });