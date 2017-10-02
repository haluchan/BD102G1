$(document).ready(function(){
	$('#nav01').mouseover(function(){
				
		$('#bg01').attr('src','src/image/heatfooter/H-farm_1.png');
				
		$('#nav01').mouseout(function(){
		$('#bg01').attr('src','src/image/heatfooter/farm.png');
		
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

