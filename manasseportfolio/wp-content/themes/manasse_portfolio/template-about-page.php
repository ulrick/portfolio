 <?php 

 get_header(); global $themename; global $shortname;

/*Template name: About page */

?>

<div id="full_Width" class="container_24 clearfix"> <!-- Content -->

  <div id="content" class="grid_24">

   <div class="skt-breadcrumb grid_11">

		<?php if ((class_exists('biznez_breadcrumb_class'))) {$biznez_breadcumb->custom_breadcrumb();} ?>

	</div>

	<?php if(have_posts()) : ?>

    <?php while(have_posts()) : the_post(); ?>

	<div class="pagetitle-wrap clearfix">

			<div class="page-title grid_11">

				<?php the_title(); ?>

			</div>

	</div><!--pagetitle-warp-->

    <div class="post" id="post-<?php the_ID(); ?>">

      <div class="entry clearfix">

        <?php the_content();?>
		<?php
			echo'<p style="text-align: justify;">J\'adore coder et je possède des compétences en programmation, notamment le développement  d\'applications Web. Je possède aussi des connaissances en matière d\'administration de Base de Données et du Réseaux.</p>';
			echo'<p style="text-align: justify;">Autodidacte, j\'aime beaucoup apprendre de nouvelles choses. J\'aime travailler et j\'ai une facilité d\'intégration professionnelle. Je fais preuve d\'autonomie et sais prendre des initiatives lorsque cela s\'avère nécessaire.  Mes précédents stages et la réalisation des projets scolaires m\'ont permis de développer mon sens de l\'analyse, du relationnel et de travailler aussi bien en équipe que de façon autonome.</p>';
			echo'<p style="text-align: justify;">Au cours de mes formations et mes réalisations (scolaires ou personnelles), J\'ai déjà touché du doigts les technologies suivantes : JAVA EE, JSP, MAVEN, HIBERNATE, PHP, JAVASCRIPT, JQUERY, AJAX,  SQL, GOOGLE JUICE, GOOGLE MAP API, WORDPRESS... Je maîtrise le HTML5 et le CSS3.</p>';
			
			echo'<h3 style="text-align: justify;"><span style="color: #3366ff;"><em>Je mets à votre disposition mes compétences aquises lors de mes études mais également mes techniques aquises en autodidacte grâce à ma soif d\'apprendre et mon envie constante d\'évoluer :</em></span></h3>';
			echo'<p style="text-align: justify;"><strong><a href="#">Conception et Développement de site ou d\'application Web...</a></strong></p>';
			echo'<p style="text-align: justify; border-left:30px;"><strong><a href="#">Vous Concevez ? Je CODE!...</a></strong></p>';

			echo'<p class="about-content" style="text-align: justify;"><strong><a href=" http://localhost/portfolio/manasseportfolio/?page_id=60">Je PARTAGE! je Reçois!</a></strong></p>';

			echo'<p style="text-align: justify;"><strong><a href="https://github.com/ulrick" target="_blank">Je partage mes codes sources.</a></strong></p>';

			echo'<p style="text-align: justify;"><strong><a href="https://github.com/ulrick" target="_blank">Développons ensemble...</a></strong></p>';
		?>

      </div>

    </div>

    <?php endwhile; ?>

    <?php else :  ?>

    <div class="post">

      <h2>

        <?php _e('Not Found','biznez'); ?>

      </h2>

    </div>

    <?php endif; ?>

    <div class="clear"></div>

 

<div class="our_team_member container_24">

  <h2 class="member_head"><?php if(sketch_get_option($shortname.'_about_teamhead')){ echo sketch_get_option($shortname.'_about_teamhead','biznez'); } else { _e('Our Team Member','biznez'); } ?></h2>



  <div class="row-member clearfix">
	<!--team-container1-->
	<div class="team-container grid_7">

                <div class="member-avatar">
				  <a href="javascript:void(0);" class="teammember-wrap">
					 <img class="memberimg" alt="teammember" src="<?php if(sketch_get_option($shortname.'_tm_img1')){ echo sketch_get_option($shortname.'_tm_img1','biznez'); } ?>" width="180" height="180" />
				  </a>		 
				</div>
				<div class="member-data" style="text_align:center;">
                      <div class="member-name">
                      		<a href="<?php if(sketch_get_option($shortname.'_tm_weblink1')){ echo esc_url(sketch_get_option($shortname.'_tm_weblink1','biznez')); } ?>"><?php if(sketch_get_option($shortname.'_tm_name1')){ echo sketch_get_option($shortname.'_tm_name1','biznez'); } ?></a>
                       </div>
   						<div class="member-position"><?php if(sketch_get_option($shortname.'_tm_job1')){ echo sketch_get_option($shortname.'_tm_job1','biznez'); } ?></div>
						<?php if(sketch_get_option($shortname.'_tm_content1')){ $content1 = sketch_get_option($shortname.'_tm_content1','biznez'); } ?>
						<p><?php echo biznez_slider_limit_words($content1, '20'); ?></p>
						<ul class="teamsocial">
							<?php if(sketch_get_option($shortname.'_tm_fb1')){ $fb_url1 = esc_url(sketch_get_option($shortname.'_tm_fb1','biznez')); } ?>
							<?php if(sketch_get_option($shortname.'_tm_tw1')){ $tw_url1 = esc_url(sketch_get_option($shortname.'_tm_tw1','biznez')); } ?>
							<?php if(sketch_get_option($shortname.'_tm_drd1')){ $drb_url1 = esc_url(sketch_get_option($shortname.'_tm_drd1','biznez')); } ?>
							<?php if( $fb_url1) { ?><li><a class="tooltip" title="Facebook" href="<?php echo $fb_url1; ?>"><span class="team-fb"></span></a></li><?php } ?>
							<?php if( $tw_url1) { ?><li><a class="tooltip" title="Twitter" href="<?php echo $tw_url1; ?>"><span class="team-tw"></span></a></li><?php } ?>
							<?php if( $drb_url1) { ?><li><a class="tooltip" title="Dribble" href="<?php echo $drb_url1; ?>"><span class="team-drb"></span></a></li><?php } ?>
						</ul>
				</div>
	  </div><!--team-container1-->
	  
	  <div id="sider-bar" class="grid_7 omega"> 

		<?php get_sidebar(); ?>

	</div>
	 

  </div><!--row-member-->



 </div><!-- our_team_member -->
 

 </div>

  <div class="clear"></div>

</div>

<!-- content -->
<



<?php get_footer(); ?>