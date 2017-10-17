$(function(){

	$(".pay_way_radio").on("click",function(){
		$('.pay_way_radio').removeClass("pay_way_click");
		$(this).addClass("pay_way_click");
		$('.donate_detail').slideDown();
		if ($(this).val() == 1) {
			$('.pay_for_atm').css({
				'display':'none'
			});
			$('.pay_for_card').css({
				'display':'block'
			});
		}else{
			$('.pay_for_card').css({
				'display':'none'
			});
			$('.pay_for_atm').css({
				'display':'block'
			});
		}
	});


})