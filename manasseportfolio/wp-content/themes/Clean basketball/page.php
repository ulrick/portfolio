<?php get_header(); ?>
<div id="wrapper">

	<div id="content">

    <?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post_top">&nbsp;</div>
				<div class="post_title">
					<h2><?php the_title(); ?></h2>
					&nbsp;
				</div>
				<div class="post_body">
					<div class="entrytext">
						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	
						<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</div>
				<div class="post_bottom">&nbsp;</div>
			</div>
	  <?php endwhile; endif; ?>
	</div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>