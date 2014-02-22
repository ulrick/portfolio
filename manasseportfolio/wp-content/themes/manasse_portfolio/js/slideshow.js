$("document").ready(function(){

	$("#cadre_photos").cycle({
		fx : 'fade',
		timeout : 500,
		speed : 5000
	});
	
	$(".slideshow").cycle({
		fx : 'scrollRight',
		timeout : 1,
		speed : 2500,
		next:   '#next', 
		prev:   '#prev',
		random: 2
	});
	
	$("#man_projet").cycle({
		fx : 'scrollLeft',
		timeout : 1,
		speed : 2500,
		next:   '#next', 
		prev:   '#prev',
		random: 2
	});
	
	/*$("#slideshow").cycle({
		fx : 'scrollLeft',
		timeout : 20,
		speed : 2500,
		next:   '#next', 
		prev:   '#prev'
	});
	
	$("#slideshow1").cycle({
		fx : 'scrollLeft',
		timeout : 20,
		speed : 2500,
		next:   '#next', 
		prev:   '#prev'
	});*/
	
	$("#info").cycle({
		fx : 'fade',
		timeout : 2,
		speed : 2500,
		
	});
	
	$("#voeux").cycle({
		fx : 'scrollLeft',
		timeout : 2,
		speed : 1500,
		next:   '#next', 
		prev:   '#prev',
		random: 2
	});
	
});