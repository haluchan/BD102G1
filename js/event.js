

// new scrollmagic 物件
var controller = new ScrollMagic.Controller();
//tween
    var tween_4 = TweenMax.staggerFromTo('.show', .8, {
        //做事情
        opacity: 0,
        y: -500
    }, {
        opacity: 1,
        y: 0
    },.2);

//scrollmagic

    var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger1",
      duration: 350,
      offset: 90
    //   reverse: false,
    })
    .setTween(tween_4)
    .addIndicators({
            name: 'scene 01'
        })
   .addTo(controller);