<?php get_header(); ?>
<link href="style.css" rel="stylesheet" type="text/css" />

<div id="wrapper">

	<div id="content">

		<?php
			if (have_posts()) : ?>
		<div class="post">
		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>


			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
			</div>
		</div>

		<?php
			while (have_posts()) : the_post(); ?>
			<div class="post">
            	<div class="post_date">
                	<?php the_time('M d') ?><br />
                	<?php the_time('Y') ?>
                </div>
                
                <div class="post_content">
				<div class="post_top">&nbsp;</div>
				<div class="post_title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="post_body">
					<p class="postmetadata">
						Posted in <?php the_category(', ') ?>
						<strong>|</strong> By <?php the_author() ?>
						<?php edit_post_link('Edit','<strong>|</strong> ',''); ?>
					</p>
					<?php the_excerpt() ?>
				</div>
				<div class="post_bottom">&nbsp;</div>
			</div>
            
            </div> <!-- post content -->
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	
	<?php else : ?>

		<div class="post">
			<div class="post_top">&nbsp;</div>
			<div class="post_title">
			<h2>Not Found</h2>
			</div>
			<div class="post_body">
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
			</div>
			<div class="post_bottom">&nbsp;</div>
		</div>

	<?php endif; ?>
		
	</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>