$(document).ready(function(){
$('.t1').click(function(){
		$('.section05-g1 li').removeClass('active');
		$('.t1').addClass('active');

		$('.section05-g2 li').removeClass('active');
		$('.c1').addClass('active');
	})

	$('.t2').click(function(){
		$('.section05-g1 li').removeClass('active');
		$('.t2').addClass('active');

		$('.section05-g2 li').removeClass('active');
		$('.c2').addClass('active');
	})

	$('.t3').click(function(){
		$('.section05-g1 li').removeClass('active');
		$('.t3').addClass('active');

		$('.section05-g2 li').removeClass('active');
		$('.c3').addClass('active');
	})
});