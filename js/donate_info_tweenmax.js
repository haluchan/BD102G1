$(function() {
	//progress_bar
	// var now_money = parseInt($('.now_money').text());//累績金額
	// var target_money = parseInt($('.target_money').text()); //核準金額

	//  var bar =(now_money/target_money)*100; //%
	var bar =  $("input[name='bar']").val();
	var bar_run =new TimelineMax();
	bar_run.staggerFromTo('.bar',5,{
		width:0,
	},{
		width:bar.toString()+'%',
		ease:Expo.easeOut
	});

	// var man_run =new TimelineMax();
	// man_run.staggerFromTo('.running_man',3,{
	// 	x:0,
	// },{
	// 	x:(bar),
	// 	ease:Expo.easeOut
	// });









	// new一個scrollmagic物件
	var controller = new ScrollMagic.Controller();
	//tweenmax.fromto(目標物件,時間)用法
	var tween_1 = TweenMax.staggerFromTo( '.donate_info .case_content .content_txt' , 3 , {
	    opacity : 0,
	 }, {
	    opacity : 1,
	});
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#trigger1',
		// duration:300,
		offset:-100
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
		duration:300,
		offset:-100
	})
	.setTween(tween_3)
	.addIndicators({
		name:'scene 03'
	})
	.addTo(controller);


	// nav_fixed========================
	var tween_nav = TweenMax.staggerFromTo( '.donate_nav' , 1 , {
	    opacity : 0,
	    x:300

	 }, {
	    opacity : 1,
	    x:0
	});
	var scene_t = new ScrollMagic.Scene({
		triggerElement:'#nav'
		,offset:300
	})
	.setTween(tween_nav)
	.addIndicators({
		name:'nav'
	})
	.addTo(controller);
	
	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > 675) {
	        $('.main-nav').addClass('fixed');
	        $("header").css({
	        	"display":"none"
	        });

	    }
	    else{
	    	$('.main-nav').removeClass('fixed');
	    	 $("header").css({
	        	"display":"block"
	        });
	    }
	});








})