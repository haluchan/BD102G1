$(function(){
// 　$(window).load(function(){

　　$(window).bind('scroll resize', function(){
　　var $this = $(this);
　　var $this_Top=$this.scrollTop();

　　//當高度小於100時，關閉區塊 
　　if($this_Top < 110){

　　　$('#top-bar').stop().animate({top:"-200px"},.3);

	$('#header_none').stop().animate({opacity: 1},.3);
　　　}
　　　　if($this_Top > 110){
　　　　$('#top-bar').stop().animate({top:"0px"},1);

	$('#header_none').stop().animate({opacity: 0},0.3);
　　　 }
　　}).scroll();
// 　});
});



$(document).ready(function(){
	$('#nav01 , #fix_nav01').mouseover(function(){
				
		$('#bg01 , #fix_bg01').attr('src','src/image/heatfooter/H-farm_1.png');
				
		$('#nav01, #fix_nav01 ').mouseout(function(){
		$('#bg01 , #fix_bg01').attr('src','src/image/heatfooter/farm.png');
		
		});		
	});

	$('#nav02').mouseover(function(){
				
		$('#bg02').attr('src','src/image/heatfooter/H-active_1.png');
				
		$('#nav02').mouseout(function(){
		$('#bg02').attr('src','src/image/heatfooter/active.png');
		
		});		
	});

	$('#nav03').mouseover(function(){
				
		$('#bg03').attr('src','src/image/heatfooter/H-city_1.png');
				
		$('#nav03').mouseout(function(){
		$('#bg03').attr('src','src/image/heatfooter/city.png');
		
		});		
	});

	$('#nav04').mousemove(function(){
		$('#bg04').attr('src','src/image/heatfooter/H-donate_1.png');

		$('#nav04').mouseout(function(){
		$('#bg04').attr('src','src/image/heatfooter/donate.png');	
		});
	});
});			
// fix_navbar
// var bodyClass = document.body.classList,
//     lastScrollY = 0;
// window.addEventListener('scroll', function(){
//   var st = this.scrollY;
//   // 判斷是向上捲動，而且捲軸超過 200px
//   if( st < lastScrollY) {
//     bodyClass.remove('hideUp');
//   }else{
//     bodyClass.add('hideUp');
//   }
//   lastScrollY = st;
// });

// $(function(){
// 　$(window).load(function(){
// 　　$(window).bind('scroll resize', function(){
// 　　var $this = $(this);
// 　　var $this_Top=$this.scrollTop();

// 　　//當高度小於100時，關閉區塊 
// 　　if($this_Top < 100){

// 　　　$('#top-bar').stop().animate({top:"-650px"});
// 　　　}
// 　　　　if($this_Top > 100){
// 　　　　$('#top-bar').stop().animate({top:"0px"});
// 　　　 }
// 　　}).scroll();
// 　});
// });
// hamberger
$(document).ready(function(){
        $('.btn-sidebar').click(function(){
            $('.sidebar').toggleClass('active')
            $('.btn-sidebar').toggleClass('toggle')
        })
})


