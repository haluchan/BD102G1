// work
//new一個場景

$(function(){
var controller = new ScrollMagic.Controller();
  //tweenmax.fromto(目標物件,時間)用法

  TweenMax.fromTo( ".container .title" , 1 , {
      y : 500,
      opacity : 0,
  }, {
     y : 100,
     opacity : 1,
     ease :  Bounce.easeOut
  });

  TweenMax.fromTo( ".container .content" , 1 , {
      x : -300,
      y: 200,
      opacity : 0,
  }, {
     x : 0,
     opacity : 1,
     delay : 1,
     ease : Quad.easeOut
  });

//單物件
// TweenMax.staggerFromTo('.pic_content .pic',0.5,{
//   opacity:0,width:20
// },{
//   opacity:1,width:200
// },0.5)


//多物件
// TweenMax.staggerFromTo(['.multi_2','.multi_1'],2,
//   {opacity:0,y:-100},{opacity:1,y:0,ease : Quad.easeOut},1)

// })


  //TimelineMax
  var timeline= new TimelineMax()
  timeline.staggerFromTo(['.multi_2','.multi_1'],2,{
    opacity:0,
    width:20
  },{
    opacity:1,
    width:200,
    ease : Quad.easeOut
  },1);



//scrollMagic
var tween_4 = TweenMax.staggerFromTo('.pic_content .pic',0.5,{
  opacity:0,width:20
},{
  opacity:1,width:200
},0.5);

var scene_t = new ScrollMagic.Scene({
      //
      triggerElement: "#trigger1",
      duration: 600,
      offset: 10
      // reverse: false
    })

    .setTween(tween_4)
    .addIndicators({
            name: 'scene 01'
        })
.addTo(controller);


  


//parallax
//設定item scroll出現動畫
var parallax_scroll = TweenMax.staggerFromTo(['.parallax .item1', '.parallax .item2'], 5, {
       opacity: 0,
        width:0
    }, {
        opacity: 1,
        width:300,
        delay: .5,
        ease: Expo.easeOut
    }, 1)


//建立scroll場景 
var scene_p = new ScrollMagic.Scene({
      
      triggerElement: "#trigger2",
      duration: 200,
      offset: -100,
      reverse: true
    })
    .setTween(parallax_scroll)
    .addIndicators({
            name: 'parallax'
        })
   .addTo(controller);


//找到parallax  newParallax
var scene = document.getElementById('scenes')
var parallax = new Parallax(scene)



//scroll add class
  var scene_bg = new ScrollMagic.Scene({
            
            triggerElement: "#trigger3",
            offset: 50
        })

        .setClassToggle('.logo','change' )
        .addIndicators({
            name: 'add_class'
        })
        .addTo(controller);
//圖片變小觸發

  var scene_small = new ScrollMagic.Scene({
            
            triggerElement: "#trigger4",
            offset: 50
        })
        .setClassToggle('.section_5','big' )
        .addIndicators({
            name: 'add_class'
        })
        .addTo(controller);



//固定物件
var scene_sticky = new ScrollMagic.Scene({
            //做事情
            triggerElement: "#trigger5",
            offset: 100,
            duration: 300
        })
        .setPin('#sticky')
        .addIndicators({
            name: 'sticky'
        })
        .addTo(controller);




})









