<?php 

get_header(); 

global $themename; global $shortname; 

?>

<!-- #Container Area -->

<div id="container" class="clearfix">

	<!--<div class="container_24 clearfix" id = "man_slide">-->
		
		<div id="man_features">
		
			<div id="features_box1" class="features_box">
				<a href="<?php bloginfo('url')?>/?page_id=7"><p class="features_box2_texte">
					FORMATIONS ET DIPLOMES
				</p></a>
				<p>
					Découvrez mes formations et diplomes.<br />
				</p>
				<p class="readmorelink">
					<a href="<?php bloginfo('url')?>/?page_id=7"> > Plus </a>
				</p>
			</div>
			
			<div id="features_box2" class="features_box">
				<a href="<?php bloginfo('url')?>/?page_id=39"><p class="features_box2_texte">
					EXPERIENCES PROFESSIONNELLES
				</p></a>
				<p>
					Mes aventures professionnelles.<br />
					Les acquis professionnels.
				</p>
				<p class="readmorelink">
					<a href="<?php bloginfo('url')?>/?page_id=39"> > Plus </a>
				</p>
			</div>
			
			<div id="features_box3" class="features_box">
				<a href="<?php bloginfo('url')?>/?page_id=42"><p class="features_box2_texte">
					PROJETS SCOLAIRES ET PERSONELS
				</p></a>
				<p>
					L'amour du code.<br />
					Préparation de ma carrière.
				</p>
				<p class="readmorelink">
					<a href="<?php bloginfo('url')?>/?page_id=42"> > Plus </a>
				</p>
				
			</div>
			
			<div id="features_box4" class="features_box">
				<a href="<?php bloginfo('url')?>/?page_id=44"><p class="features_box2_texte">
					COMPETENCES TECHNIQUES
				</p></a>
				<p>
					Mes savoirs.<br />
					Mon Savoir-faire.
				</p>
				<p class="readmorelink">
					<a href="<?php bloginfo('url')?>/?page_id=44"> > Plus </a>
				</p>
			</div>
			
			<div id="features_box5" class="features_box" >
				<a href="<?php bloginfo('url')?>/?page_id=46"><p class="features_box2_texte">
					VIE SOCIALE
				</p></a>
				<p>
					<br />
					Mes Kifs.<br />
					Mes Passions.
				</p>
				<p class="readmorelink">
					<a href="<?php bloginfo('url')?>/?page_id=42"> > Plus </a>
				</p>
			</div>
		</div>
		
		<div id="man_projets_titre">
			<img src="<?php bloginfo('template_directory') ?>/images/projet_icone.jpg" alt="icone" />Mes Dernières Réalisations	
		</div>
		
		<div id="defil">
			<img id="next" src="<?php bloginfo('template_directory') ?>/images/next.jpg" alt="icone" />
			<img id="prev" src="<?php bloginfo('template_directory') ?>/images/prev.jpg" alt="icone" />
		</div>
		
		<div id = "man_projet">
	
			<div class="man_projectbox">
				<p>Projets Scolaires</p>
				<a href="<?php bloginfo('url')?>/?page_id=42"><div id="slideshow1" class="slideshow">
					<img id="img1" src="<?php bloginfo('template_directory') ?>/images/logo_gestform.png" alt="photo1" /> <img
						id="img2" src="<?php bloginfo('template_directory') ?>/images/logo_rkf.jpg" alt="photo2" onMouseOver="this.'" /> <img
						id="img3" src="<?php bloginfo('template_directory') ?>/images/img3.jpg" alt="photo3" />
				</div></a>
				<p class="readmorelink">
					<a href="https://github.com/ulrick" target="_blank"> > Je partage mes codes sources </a>
				</p>
			</div>
			
			<div class="man_projectbox">
				<p>Projets Personnels</p>
				<a href="<?php bloginfo('url')?>/?page_id=42"><div id="slideshow2" class="slideshow">
					<img id="img1" src="<?php bloginfo('template_directory') ?>/images/portfolio.png" alt="photo1" /> <img
						id="img2" src="<?php bloginfo('template_directory') ?>/images/img2.jpg" alt="photo2" /> <img
						id="img3" src="<?php bloginfo('template_directory') ?>/images/img3.jpg" alt="photo3" />
				</div></a>
				<p class="readmorelink">
					<a href="https://github.com/ulrick" target="_blank"> > Je partage mes codes sources </a>
				</p>
			</div>
			
			<div class="man_projectbox">
				<p>Autres</p>
				<a href="<?php bloginfo('url')?>/?page_id=42"><div id="slideshow3" class="slideshow">
					<img id="img1" src="<?php bloginfo('template_directory') ?>/images/img1.jpg" alt="photo1" /> <img
						id="img2" src="<?php bloginfo('template_directory') ?>/images/img2.jpg" alt="photo2" /> <img
						id="img3" src="<?php bloginfo('template_directory') ?>/images/img3.jpg" alt="photo3" />
				</div></a>
				<p class="readmorelink">
					<a href="https://github.com/ulrick" target="_blank"> > Je partage mes codes sources </a>
				</p>
			</div>
		</div>

</div>

<!-- #Container Area -->

<?php get_footer(); ?>