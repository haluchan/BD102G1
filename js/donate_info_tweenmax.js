$(function() {
	

	// new一個scrollmagic物件
	var controller = new ScrollMagic.Controller();
	//tweenmax.fromto(目標物件,時間)用法
	var tween_1 = TweenMax.staggerFromTo( '.donate_info .case_content .content_txt' , 1 , {
	    opacity : 0,
	 }, {
	    opacity : 1,
	});
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger1',
		duration:300,
		offset:-200
	})
	.setTween(tween_1)
	.addIndicators({
		name:'scene 01'
	})
	.addTo(controller);





	var tween_2 = TweenMax.staggerFromTo( '.food_item' , 0.5 , {
	    opacity : 0,
	    y:-200
	 }, {
	    opacity : 1,
	    y:0
	    // ease :  Bounce.easeOut
	},.25);
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger2',
		duration:0,
		offset:-100
	})
	.setTween(tween_2)
	.addIndicators({
		name:'scene 02'
	})
	.addTo(controller);



	var tween_3 = TweenMax.staggerFromTo( '.progress_return .type' , 0.5 , {
	    opacity : 0,
	    y:0
	 }, {
	    opacity : 1,
	    y:0
	    // ease :  Bounce.easeOut
	},.5);
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'.trigger3',
		duration:2000,
		offset:-100
	})
	.setTween(tween_3)
	.addIndicators({
		name:'scene 03'
	})
	.addTo(controller);








})