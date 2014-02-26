<?php 

get_header(); 

global $themename; global $shortname; 

?>

<!-- #Container Area -->

<div id="container" class="clearfix">
		
	<header id="identite-accueil">
		
		<div id="voeux-accueil" class="description-accueil">
		
			<div id="voeuxs-accueil">
				
				<p class="description_image-accueil">
					 <img src="<?php bloginfo('template_directory') ?>/images/biznez-lite.jpg" alt="photo1" /> 
				</p>
				
				<p class="description_image-accueil">
					 <img src="<?php bloginfo('template_directory') ?>/images/biznez-lite1.jpg" alt="photo2" /> 
				</p>
				
				
				
			</div>
			
			<div id="voeux-infos-accueil">
				<a href="#"><p class="voeux-info">Vous Concevez! Je Code!</p></a>
				<a href="<?php bloginfo('url')?>/?page_id=60"><p class="voeux-info">Je Partage !... Je Reçois!!</p></a>
				<a href="#"><p class="voeux-info">Faites concevoir vos sites Web</p></a>
				<a href="https://github.com/ulrick" target="_blank"><p class="voeux-info">Je partage mes codes sources</p></a>
				<a href="#"><p class="voeux-info">Développement d'applications Web</p></a>
				<a href="<?php bloginfo('url')?>/?page_id=442"><p class="voeux-info">Me connaître davantage...</p></a>
				<a href="<?php bloginfo('url')?>/?page_id=60"><p class="voeux-info">Partageons nos connaissances...</p></a>
				<a  href="https://github.com/ulrick" target="_blank"><p class="voeux-info">Développons ensemble...</p></a>
			</div>
		</div>
	</header>

</div>

<!-- #Container Area -->

<?php get_footer(); ?>