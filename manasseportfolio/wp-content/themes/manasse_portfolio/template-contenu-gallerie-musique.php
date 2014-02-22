<?php
/*
Template Name: Contenu gallerie musique
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

						<?php the_content(); ?>
						<?php wp_link_pages('<p class="clear"><strong>Pages:</strong> ', '</p>', 'number'); ?>

					</div>

				</div>	

				<?php endwhile; ?>

				<?php else : ?>

				<div class="post"><h2><?php _e('Not Found','biznez'); ?></h2></div>

				<?php endif; ?>		

			</div>

			<!-- Content -->

		</div>

		</div>

	</div>

</div>

<!-- #Container Area -->

<?php get_footer(); ?>