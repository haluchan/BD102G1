$(document).ready(function(){
$('.t1').click(function(){
		$('.mark_title li').removeClass('active01');
		$('.t1 ').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c1').addClass('active01');
		
	})

	$('.t2').click(function(){
		$('.mark_title li').removeClass('active01');
		$('.t2').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c2').addClass('active01');
		
	})

	$('.t3').click(function(){
		$('.mark_title li').removeClass('active01');
		$('.t3').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c3').addClass('active01');
		
	})

	$('.t4').click(function(){
		$('mark_title li').removeClass('active01');
		$('.t4').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c4').addClass('active01');
		
	})

	// RWD
	$('.t4').click(function(){
		$('.hopefarmrwd-select li').removeClass('active01');
		$('.t4').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c4').addClass('active01');

		
		
	})

	$('.t1').click(function(){
		$('.hopefarmrwd-select li').removeClass('active01');
		$('.t1 ').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c1').addClass('active01');
		
	})

	$('.t2').click(function(){
		$('.hopefarmrwd-select li').removeClass('active01');
		$('.t2').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c2').addClass('active01');
		
	})


	$('.t3').click(function(){
		$('.hopefarmrwd-select li').removeClass('active01');
		$('.t3').addClass('active01');

		$('.mark_container ').removeClass('active01');
		$('.c3').addClass('active01');
		
	})


	$('.hopefarmrwd-select a').click(function(){
		$('html ,body').animate({
			scrollTop:$($.attr(this,'href')).offset().top-120
		},700);//速度
	})
	

});

