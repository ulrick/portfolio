<?php 

/*

Template Name: Contenu gallerie

*/

global $themename; 

global $shortname; 

get_header(); 

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

        <div class="loisir-img">
			<a href="<?php bloginfo('url')?>/?page_id=309">
				<div class="basket-imgs">
					<img id="img1" src="<?php bloginfo('template_directory') ?>/images/basket1.jpg" alt="photo1" />
					<img id="img2" src="<?php bloginfo('template_directory') ?>/images/basket2.jpg" alt="photo2" />
					<img id="img2" src="<?php bloginfo('template_directory') ?>/images/basket3.jpg" alt="photo2" />
				</div>
				<p class="loisir-img-bask">La Passion du Basket</p>
			</a>
		</div>
		
		<div class="loisir-img">
			<a href="<?php bloginfo('url')?>/?page_id=311">
				<div class="musique-imgs">
					<img id="img1" src="<?php bloginfo('template_directory') ?>/images/music1.jpg" alt="photo1" /> 
					<img id="img2" src="<?php bloginfo('template_directory') ?>/images/music1.jpg" alt="photo2" /> 
				</div>
				<p class="loisir-img-bask">L'Amour de la musique</p>
				
			</a>
		</div>
		
		<div class="loisir-img">
			
			<a href="<?php bloginfo('url')?>/?page_id=321">
				<div class="meskifs-imgs">
					<img id="img1" src="<?php bloginfo('template_directory') ?>/images/meskifs1.jpg" alt="photo1" />  
					<img id="img2" src="<?php bloginfo('template_directory') ?>/images/meskifs2.jpg" alt="photo2" /> 
				</div>
				<p class="loisir-img-bask">Mes Kifs</p>
				
			</a>
		</div>

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



  </div>



  <div class="clear"></div>



</div>



<!-- content -->



<?php get_footer(); ?>