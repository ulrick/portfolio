$("document").ready(function(){

	/* défilement des images sur la page d'accueil
	*/
	$("#voeuxs-accueil").cycle({
		fx : 'fade',
		timeout : 1,
		speed : 3500,
		random: 2
	});
	
	$("#voeux-infos-accueil").cycle({
		fx : 'scrollRight',
		timeout : 2,
		speed : 1500,
		random: 1
	});

	/* défilement des images sur la page portfolio
	*/
	$("#cadre_photos").cycle({
		fx : 'fade',
		timeout : 500,
		speed : 5000
	});
	
	$("#info").cycle({
		fx : 'fade',
		timeout : 2,
		speed : 2500,
		
	});
	
	$("#voeuxs").cycle({
		fx : 'scrollLeft',
		timeout : 1,
		speed : 3500,
		next:   '#next', 
		prev:   '#prev',
		random: 2
	});
	
	$("#voeux-infos").cycle({
		fx : 'scrollRight',
		timeout : 2,
		speed : 4500,
		random: 2
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
		fx : 'turnDown',
		timeout : 2,
		speed : 10000,
		/*random: 2*/
	});
	
	
	/* défilement des images sur la page vie sociale et loisirs
	*/
	$(".basket-imgs").cycle({
		fx : 'scrollLeft',
		timeout : 1,
		speed : 4000,
		random: 3
	});
	
	$(".musique-imgs").cycle({
		fx : 'curtainX',
		timeout : 1,
		speed : 3500,
		random: 1
	});
	
	$(".meskifs-imgs").cycle({
		fx : 'scrollRight',
		timeout : 1,
		speed : 7500
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