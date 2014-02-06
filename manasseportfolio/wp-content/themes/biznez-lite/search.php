<?php get_header(); global $themename; global $shortname; ?> 
<!-- #Container Area -->
<div id="container" class="clearfix">
<div class="container_24 clearfix">
	  <div class="grid_24">
	  <div class="pagetitle-wrap grid_24 clearfix">
			<div class="page-title grid_11">
				<?php printf( __( 'Search Results for: %s', 'biznez' ), '<span>' . get_search_query() . '</span>' ); ?>
			</div>
			<div class="skt-breadcrumb grid_11">
			<?php
					if ((class_exists('biznez_breadcrumb_class'))) {$biznez_breadcumb->custom_breadcrumb();}
			?>
			</div>
		</div><!-- pagetitle-warp -->
		<!-- Content -->
		<div id="content" class="grid_16 alpha">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="post-image">
							<?php
							if(has_post_thumbnail())
								{ ?>
							<?php $thumbsrc = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ,'full'); 
							  
							?>
							<a href="<?php echo $thumbsrc; ?>" class="zoombox" data-rel="prettyPhoto"><img src="<?php echo $thumbsrc;?>" alt="blog-thumbnail" style="height: 270px;" /><span></span></a>
							<?php } ?>
				</div>
				<div class="entry-meta">
						<span class="author-name"> <?php _e('Posted by ','biznez'); the_author_posts_link(); ?> </span><?php _e('|')?>
						<span class="date-time"><?php the_time('l, j F, Y') ?> </span> <?php _e('|')?>	
						<span class="comment"> <?php comments_popup_link(__('No Comments','biznez'), __('1 Comment','biznez'), __('% Comments ','biznez')) ; ?> </span>					
						<span> <?php edit_post_link(' Edit','|','') ; ?></span>
				</div> 
				<div class="entry clearfix">
					<?php the_excerpt(); ?>					<?php wp_link_pages('<p class="clear"><strong>Pages:</strong> ', '</p>', 'number'); ?>					<div class="readmore"><a href="<?php echo get_permalink($post->ID); ?>"><?php _e('Read More &rarr;','biznez'); ?></a></div>
				</div>
			</div>
				
			<?php endwhile; ?>
			<div class="navigation">
				<?php if(function_exists('biznez_pagenavi') && sketch_get_option($shortname.'_show_pagenavi')) { biznez_pagenavi();} else { ?>
							<div class="alignleft"><?php previous_posts_link('&larr;Previous') ?></div>
							<div class="alignright"><?php next_posts_link('Next&rarr;','') ?></div>
				<?php } ?>
			</div>
			<?php else : ?>
			<div class="post"><h2><?php _e('Search Result Not Found','biznez'); ?></h2></div>
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