$("document").ready(function(){

	$("#cadre_photos").cycle({
		fx : 'fade',
		timeout : 500,
		speed : 5000
	});
	
	$(".slideshow").cycle({
		fx : 'fade',
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
});