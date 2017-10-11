
$(function(){
  var controller = new ScrollMagic.Controller();
 
  //tweenmax.fromto(目標物件,時間)用法
   //火箭飛入
   var rocket= TweenMax.fromTo("#rocket", 1, {
    x : 500,     
        opacity : 0,
    }, {
       x : 0,
       opacity : 1,
       ease : Elastic.easeOut
    });




  //Title煙霧飛入
 //   var title= TweenMax.fromTo( ".fish_universeTitle" , 2, {
 //        // transformOrigin:"right 5%",
 //        scaleX: 0.2,
 //        scaleY: 0.2,
 //        x :500, 
 //        y:-100,    
 //        opacity : 0
 //    }, {
 //       scaleX: 1,
 //       scaleY: 1,
 //       x : 0,
 //       y:0,
 //       opacity : 1,
 //       ease :  Bounce.easeOut
 //    });

 // title.delay(0.5)





//parallax  
var scene_star = document.getElementById('star')
var parallax = new Parallax(scene_star)



// //選購流程1-scrollMagic
// var stepl = TweenMax.staggerFromTo(['.stepFlowLeft #one','.stepFlowLeft #two','.stepFlowLeft #three'] ,1,{
//   y : -500,
//   opacity : 0,
// },{
//    y : 0,
//   opacity:1
// },0.5);

// var scene = new ScrollMagic.Scene({
      
//       triggerElement: "#trigger1",
//       duration: 300,
//       offset: 10,
//       reverse: false
//     })

//     .setTween(stepl)
//     .addIndicators({
//             name: 'scene 01'
//         })
// .addTo(controller);





//選購流程2-scrollMagic
var stepr = TweenMax.staggerFromTo(['.stepFlowRight #arrow1','.stepFlowRight #arrow2','.stepFlowRight #arrow3'],0.5,{
  opacity:0
},{
  opacity:1
},0.5);

var scene = new ScrollMagic.Scene({
      
      triggerElement: "#trigger2",
      duration: 300,
      offset: 10,
      reverse: false
      
    })

    .setTween(stepr)
    .addIndicators({
            name: 'scene 02'
        })
.addTo(controller);












})





