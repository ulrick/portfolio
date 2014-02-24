<?php
/*
Template Name: Contenu compétence technique
*/
?>

<?php 

	get_header(); 

	global $themename;  

	global $shortname;  

?>

<!-- #Container Area -->

<div id="container" class="clearfix">

	<div class="container_24 clearfix">

		<div class="grid_24">

			<div class="skt-breadcrumb grid_11">

				<?php if ((class_exists('biznez_breadcrumb_class'))) {$biznez_breadcumb->custom_breadcrumb();} ?>

			</div>

			<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>

				<div class="pagetitle-wrap clearfix">

					<div class="page-title grid_11">

						<?php the_title(); ?>

					</div>

				</div>

			<!--pagetitle-warp-->

			<!-- Content -->
			
			<div id="content" class="grid_16 alpha">

				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				
					<?php  if(has_post_thumbnail()){ ?>
						<div class="post-image clearfix">
							<?php the_post_thumbnail('full'); ?>
						</div>
					<?php } ?>
					
					<div class="clear"></div>

					<div class="entry clearfix">

						<?php //the_content(); ?>
						<?php //wp_link_pages('<p class="clear"><strong>Pages:</strong> ', '</p>', 'number'); ?>
						<div class="cv-skills">
							<span class="cv-skills-title"><strong>Outils d'analyses</strong></span>
							<p class="cv-skills-content">UML</p>
							
							<progress max="100" value="50" class="html5">
								<div class="progress-bar">
									<span style="width: 50%">50%</span>
								</div>
							</progress> 
							
							<p class="cv-skills-content">MERISE</p>
							
							<progress max="100" value="50" class="html5">
								<div class="progress-bar">
									<span style="width: 50%">50%</span>
								</div>
							</progress> 
							
						</div>

						<div class="cv-skills-bis">
							<span class="cv-skills-title"><strong>Bases de données</strong></span>
							
							<p class="cv-skills-content">MySQL</p>
							<progress max="100" value="80" class="html5">
								<div class="progress-bar">
									<span style="width: 80%">80%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">ORACLE 10G, ORACLE 11G</p>
							<progress max="100" value="60" class="html5">
								<div class="progress-bar">
									<span style="width: 60%">60%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">SQL-Server 2008R2</p>
							<progress max="100" value="50" class="html5">
								<div class="progress-bar">
									<span style="width: 50%">50%</span>
								</div>
							</progress>
						
						</div>

						<div class="cv-skills">
							<span class="cv-skills-title"><strong>Langages de programmation </strong></span>
							<p class="cv-skills-content">JAVASCRIPT, JSP, JQUERY, HIBERNATE, SQL, MAVEN</p>
						
							<p class="cv-skills-content">JAVA SWING</p>
							<progress max="100" value="70" class="html5">
								<div class="progress-bar">
									<span style="width: 70%">70%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">JAVA EE</p>
							<progress max="100" value="60" class="html5">
								<div class="progress-bar">
									<span style="width: 60%">60%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">PHP</p>
							<progress max="100" value="80" class="html5">
								<div class="progress-bar">
									<span style="width: 80%">80%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">HTML5</p>
							<progress max="100" value="90" class="html5">
								<div class="progress-bar">
									<span style="width: 90%">90%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">CSS3</p>
							<progress max="100" value="90" class="html5">
								<div class="progress-bar">
									<span style="width: 90%">90%</span>
								</div>
							</progress>
							
							<p class="cv-skills-content">JAVASCRIPT</p>
							<progress max="100" value="60" class="html5">
								<div class="progress-bar">
									<span style="width: 60%">60%</span>
								</div>
							</progress>
							
						</div>

						<div class="cv-skills-bis">
							<span class="cv-skills-title"><strong> Réseaux et Systèmes </strong></span>
							<p class="cv-skills-content">Certification CISCO CCNA1, CCNA2, CCNA3.</p>
							<p class="cv-skills-content">Windows, Linux (CentOS, Ubuntu)</p>
						</div>

						<div class="cv-skills">
							<span class="cv-skills-title"><strong> Anglais </strong></span>
							<p class="cv-skills-content">Bonne maîtrise de l’écrit et assez bonne maîtrise de l’oral.</p>
						</div>
					
					</div>

				</div>	

				<?php endwhile; ?>

				<?php else : ?>

				<div class="post"><h2><?php _e('Not Found','biznez'); ?></h2></div>

				<?php endif; ?>		

			</div>

			<!-- Content -->
			
			<div id="sider-bar" class="grid_7 omega"> 

				<?php get_sidebar(); ?>

			</div>

		</div>

		</div>

	</div>

</div>

<!-- #Container Area -->

<?php get_footer(); ?>