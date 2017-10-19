/**
 * 
 * @authors halu (you@example.org)
 * @date    2017-10-10 22:28:39
 * @version $Id$
 */

$(document).ready(function(){







//slick

        $('.slides').slick({
          // setting-name: setting-value
          infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
          autoplay: true,
          mobileFirst: true,
          pauseOnFocus: true,
          arrows:false,
          dots: true,
          centerPadding: '0px',
          // centerMode: true,
          responsive: [
            // {
            //   breakpoint: 1024,
            //   settings: {
            //     slidesToShow: 3,
            //     slidesToScroll: 3,
            //     infinite: true,
            //     dots: true
            //   }
            // },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });

     


//ScrollMagic


var controller = new ScrollMagic.Controller();//寫一個共用就可，不然會重複出現
//tween
    var tween_1 = TweenMax.staggerFromTo('.event-ins-item1', .8, {
        //做事情
        opacity: 0, //開始
        // y: -20
    }, {
        opacity: 1, //結束
        // y: 0
    }, .3);

     var tween_2 = TweenMax.staggerFromTo('.event-ins-item2', .8, {
        //做事情
        opacity: 0, //開始
        // y: -20
    }, {
        opacity: 1, //結束
        // y: 0
    }, .3);

      var tween_3 = TweenMax.staggerFromTo('.event-ins-item3', .8, {
        //做事情
        opacity: 0, //開始
        // y: -20
    }, {
        opacity: 1, //結束
        // y: 0
    }, .3);
       var tween_4 = TweenMax.staggerFromTo('.event-ins-item4', .8, {
        //做事情
        opacity: 0, //開始
        // y: -20
    }, {
        opacity: 1, //結束
        // y: 0
    }, .3);

var scene_1 = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger1",//標示點 畫面才看得到作用範圍，做完可隱藏
      duration: 300, //開始到結束範圍
      offset: 100,     //觸發點往下推
      reverse:false,    //是否要復原 往回滾動效果反向

    })
    .setTween(tween_1)
    .addIndicators({ //標示點 畫面才看得到作用範圍，做完可隱藏名字
           name: 'scene 01'
        })  
   .addTo(controller);

var scene_2 = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger2",//標示點 畫面才看得到作用範圍，做完可隱藏
      duration: 300, //開始到結束範圍
      offset: 100,     //觸發點往下推
      reverse:false,    //是否要復原 往回滾動效果反向

    })
    .setTween(tween_2)
    .addIndicators({ //標示點 畫面才看得到作用範圍，做完可隱藏名字
           name: 'scene 02'
        })  
   .addTo(controller);


 var scene_3 = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger3",//標示點 畫面才看得到作用範圍，做完可隱藏
      duration: 300, //開始到結束範圍
      offset: 100,     //觸發點往下推
      reverse:false,    //是否要復原 往回滾動效果反向

    })
    .setTween(tween_3)
    .addIndicators({ //標示點 畫面才看得到作用範圍，做完可隱藏名字
           name: 'scene 03'
        })  
   .addTo(controller);

  var scene_4 = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger3",//標示點 畫面才看得到作用範圍，做完可隱藏
      duration: 300, //開始到結束範圍
      offset: 100,     //觸發點往下推
      reverse:false,    //是否要復原 往回滾動效果反向

    })
    .setTween(tween_4)
    .addIndicators({ //標示點 畫面才看得到作用範圍，做完可隱藏名字
           name: 'scene 03'
        })  
   .addTo(controller);

 });
