$(function(){
	 var scence = document.getElementById('background');
     var parallax = new Parallax(scence);

     TweenMax.fromTo(".title_info .h1",2.5,{
		y: -500,
		opacity: 0,
	},{
		y: 0,
		opacity: 1,
		delay:1,
		ease:  Bounce.easeOut
	});
	TweenMax.fromTo(".title_info .h3",1,{
		x: -100,
		opacity: 0,
	},{
		x: 0,
		opacity: 1,
		ease: Strong.easeInOut
	});


	// new一個scrollmagic物件
	var controller = new ScrollMagic.Controller();
	//tweenmax.fromto(目標物件,時間)用法
	var tween_1 = TweenMax.staggerFromTo( '.donate_title .title' , 1 , {
	    opacity : 0,
	    y:-150
	 }, {
	    opacity : 1,
	    y:0,
	    ease: Strong.easeInOut
	});
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger1',
		duration:0,
		offset:100
	})
	.setTween(tween_1)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);



// activity_title==========================================================================

	var tween_2 = TweenMax.staggerFromTo( '.activity_title h1' ,1,{
	    opacity : 0,
	    y:-150
	 }, {
	    opacity : 1,
	    y:0,
	    ease: Strong.easeInOut
	});
	var tween_3 = TweenMax.staggerFromTo(".activity_title .h2_1",1,{
		y: -150,
		opacity: 0,
	},{
		y: 0,
		opacity: 1,
		delay:1,
		ease: Strong.easeInOut
	});
	var tween_4 = TweenMax.staggerFromTo(".activity_title .h2_2",1,{
		y: -150,
		opacity: 0,
	},{
		y: 0,
		opacity: 1,
		delay:2,
		ease: Strong.easeInOut
	});
	var tween_5 = TweenMax.staggerFromTo(".activity_title .p_3",1,{
		y: -150,
		opacity: 0,
	},{
		y: 0,
		opacity: 1,
		delay:3,
		ease: Strong.easeInOut
	});
	var tween_6 = TweenMax.staggerFromTo(".activity_info",1,{
		y: -150,
		opacity: 0,
	},{
		y: 0,
		opacity: 1,
		delay:4,
		ease: Strong.easeInOut
	});

	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger4',
		duration:0,
		offset:100
	})
	.setTween(tween_2)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger4',
		duration:0,
		offset:100
	})
	.setTween(tween_3)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger4',
		duration:0,
		offset:100
	})
	.setTween(tween_4)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger4',
		duration:0,
		offset:100
	})
	.setTween(tween_5)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger4',
		duration:0,
		offset:100
	})
	.setTween(tween_6)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);


	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() < 675) {
	        $('header').addClass('db');
	    }
	    else{
	    	$('header').removeClass('db');
	    }
	});












	
})