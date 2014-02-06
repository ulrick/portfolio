<?php get_header(); global $themename; global $shortname; ?> 
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
		</div><!-- pagetitle-warp -->
		<!-- Content -->
		<div id="content" class="grid_16 alpha">
			<div class="clearfix <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>
					 <?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				</div>
			</div>			<!--Start Comment box-->				  <?php comments_template(); ?>		    <!--End comment Section-->
			<?php endwhile; ?>
			<?php else : ?>
			<div class="post"><h2><?php _e('Not Found','biznez'); ?></h2></div>
			<?php endif; ?>		
		</div>
		<!-- Content -->
		<!-- Sider-bar -->
		<div id="sider-bar" class="grid_7 omega"> 
			<?php get_sidebar(); ?>
		</div>
		<!-- Sider-bar -->
	</div>
  </div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>