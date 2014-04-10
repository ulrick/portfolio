<?php get_header(); ?>
<link href="style.css" rel="stylesheet" type="text/css" />

<div id="wrapper">
	<div id="content">

	<?php 
		if (have_posts()) : ?>
		<div class="post_body navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
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
							Filed under : <?php the_category(', ') ?>
							<strong>|</strong> By <?php the_author() ?>
							<?php edit_post_link('Edit','<strong>|</strong> ',''); ?>
						    <?php the_excerpt() ?>
					  </p>
				  </div>
					<div class="post_bottom">&nbsp;</div>
                </div> <!-- post_content -->
	  </div>
	
		<?php endwhile; ?>

		
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
