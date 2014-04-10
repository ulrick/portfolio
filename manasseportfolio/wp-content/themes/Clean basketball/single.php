<?php get_header(); ?>
<link href="style.css" rel="stylesheet" type="text/css" />

<div id="wrapper">

	<div id="content">
				
  <?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="post navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
	
		<div class="post" id="post-<?php the_ID(); ?>">
	        <div class="post_date">
                	<?php the_time('M d') ?><br />
                	<?php the_time('Y') ?>
            </div>
            <div class="post_content">
			<div class="post_top">&nbsp;</div>
			<div class="post_title">
				<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
	
			<div class="post_body">
				<div class="entrytext">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
		
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				</div>
		
					<p class="postmetadata alt">
						<small>
							This entry was posted
							
							on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
							and is filed under <?php the_category(', ') ?>.
							You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
							
							<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Both Comments and Pings are open ?>
								You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
							
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Only Pings are Open ?>
								Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
							
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Comments are open, Pings are not ?>
								You can skip to the end and leave a response. Pinging is currently not allowed.
				
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Neither Comments, nor Pings are open ?>
								Both comments and pings are currently closed.			
							
							<?php } edit_post_link('Edit this entry.','',''); ?>
							
						</small>
					</p>
			<?php comments_template(); ?>
			</div>
		
			<div class="post_bottom">&nbsp;</div>
		</div>
		
	</div> <!-- post content -->
	<?php endwhile; else: ?>
	
		<p>Sorry, no posts matched your criteria.</p>
	
<?php endif; ?>
	
	</div>
	
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
