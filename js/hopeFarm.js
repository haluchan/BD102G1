$(document).ready(function(){
$('.t1').click(function(){
		$('.section05-g1 li').removeClass('active01');
		$('.t1').addClass('active01');

		$('.section05-g2-i1 ').removeClass('active01');
		$('.c1').addClass('active01');
	})

	$('.t2').click(function(){
		$('.section05-g1 li').removeClass('active01');
		$('.t2').addClass('active01');

		$('.section05-g2-i1 ').removeClass('active01');
		$('.c2').addClass('active01');
	})

	$('.t3').click(function(){
		$('.section05-g1 li').removeClass('active01');
		$('.t3').addClass('active01');

		$('.section05-g2-i1 ').removeClass('active01');
		$('.c3').addClass('active01');
	})




	var scence = document.getElementById('scenes');
    var parallax = new Parallax(scence);
});

