
$(function(){
  var controller = new ScrollMagic.Controller();
 
  //tweenmax.fromto(目標物件,時間)用法



  //Title飛入
   var title= TweenMax.fromTo( ".fish_first #title",1,{ 
        y:-500,    
        opacity:0
    },{
       y:0,
       opacity : 1,
       ease :  Bounce.easeOut
    });

  title.delay(0.1)



//選購流程-scrollMagic
var step = TweenMax.staggerFromTo(['.stepFlowRight #arrow1','.stepFlowRight #arrow2','.stepFlowRight #arrow3'],0.5,{
  opacity:0
},{
  opacity:1
},0.5);

var scene = new ScrollMagic.Scene({
      
      triggerElement: "#trigger2",
      duration: 300,
      offset: -300,
      reverse: false
      
    })

    .setTween(step)
    // .addIndicators({
    //         name: 'scene 02'
    //     })
.addTo(controller);


//必備元素-內容文字浮現
var role = TweenMax.staggerFromTo(['.role #role1','.role #role2','.role #role3'],1,{
  y:-2000,
  opacity:0
  },{
  y:0,
  opacity:1
},0.5);

var scene = new ScrollMagic.Scene({    
      triggerElement: "#trigger3",
      duration: 300,
      offset: 150,
      reverse: false     
    })
    .setTween(role)
    // .addIndicators({
    //         name: 'scene role'
    //     })
.addTo(controller);









})





