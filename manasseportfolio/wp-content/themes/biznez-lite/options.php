<?php 

/**

 * A unique identifier is defined to store the options in the database and reference them from the theme.

 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.

 * If the identifier changes, it'll appear as if the options have been reset.

 */

function optionsframework_option_name() {

	global $shortname;

	global $themename;

	// This gets the theme name from the stylesheet

	$themename = get_option( 'stylesheet' );

	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );

	$optionsframework_settings['id'] = $themename;

	update_option( 'optionsframework', $optionsframework_settings );
	 
	//setting contact us page
	if(sketch_get_option($shortname.'_contact_page'))
		select_template(sketch_get_option($shortname.'_contact_page'));

}

/**

 * Defines an array of options that will be used to generate the settings page and be saved in the database.

 * When creating the 'id' fields, make sure to use all lowercase and no spaces.

 *

 * If you are making your theme translatable, you should replace 'biznez'

 * with the actual text domain for your theme.  Read more:

 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain

 */

function optionsframework_options() {

	global $shortname;

	global $themename;

	// set  pages

		$options_pages = array();

		$options_pages_obj = get_pages('sort_column=post_parent,menu_order');

		$options_pages[''] = 'Select a page:';

		foreach ($options_pages_obj as $page) {

			$options_pages[$page->ID] = $page->post_title;

		}

	// pagination

	$test_pagiarray = array(

		1 => __('Yes', 'biznez'),

		0 => __('No', 'biznez')

	);

	// site logo img/text

	$site_logo = array(

		'limage' => __('Image', 'biznez'),

		'ltext' => __('Text', 'biznez')

	);

	// Breadcrumb hidw/show

	$breadcrumb = array(

		'show' => __('Show', 'biznez'),

		'hide' => __('Hide', 'biznez')

	);

	

	// Breadcrumb separator type img/text

	$bdcrumb_stype = array(

		'bimage' => __('Image', 'biznez'),

		'btext' => __('Text', 'biznez')

	);
	
	//Front page layout Show/hide

		$frontpagelayout_array = array(

			'true' => __('Static Layout', 'biznez'),

			'false' => __('Custom Layout', 'biznez')

		);

	//Front Content Box Show/hide

		$frontcontentbox_array = array(

			'true' => __('Show', 'biznez'),

			'false' => __('Hide', 'biznez')

		);

	//testimonial and client box Show/hide

		$test_clientbox_array = array(

				'true' => __('Show', 'biznez'),

				'false' => __('Hide', 'biznez')

		);

	//jCarousel radio_array

		$radio_array = array(

				'true' => __('Show', 'biznez'),

				'false' => __('Hide', 'biznez')

		);

	//jCarousel featureradio_array

		$featureradio_array = array(

				'true' => __('Show', 'biznez'),

				'false' => __('Hide', 'biznez')

		);

	//jcnavigation_array

	$jcnavigation_array = array(

			'true' => __('Show', 'biznez'),

			'false' => __('Hide', 'biznez')

		);

	// jCarousel_auto

	$jCarousel_auto = array(

		1 => __('Yes', 'biznez'),

		0 => __('No', 'biznez')

	);

	//jCarousel_hoverpause

	$jCarousel_hoverpause = array(

		1 => __('Yes', 'biznez'),

		0 => __('No', 'biznez')

	);

	//select_slider_type_array

	$select_slider_type_array = array(

		'normal' => __('NormalSlider', 'biznez'),

		'fullwidth' => __('FullWidthSlider', 'biznez')

	);

	//featuredbox_type_array

	$featuredbox_type_array = array(

		'normal' => __('Normal', 'biznez'),

		'centercontent' => __('Center Content', 'biznez')

	);

	//effect_test_array

	$effect_test_array = array(

		'fade' => __('Fade', 'biznez'),

		'horizontal-slide' => __('Horizontal Slide', 'biznez'),

		'vertical-slide' => __('Vertical Slide', 'biznez'),

		'horizontal-push' => __('Horizontal Push', 'biznez'),

	);

  //timer_test_array

   $timer_test_array = array(

		'true' => __('Show', 'biznez'),

		'false' => __('Hide', 'biznez')

	);

  //startclockonmouseout_array

	   $startclockonmouseout_array = array(

		'true' => __('Show', 'biznez'),

		'false' => __('Hide', 'biznez')

	);

	//directionNav_array

      $directionNav_array = array(

		'true' => __('Show', 'biznez'),

		'false' => __('Hide', 'biznez')

	);

	//captions_array

      $captions_array = array(

		'true' => __('Show', 'biznez'),

		'false' => __('Hide', 'biznez')

	);

	//captionanimation_array

	 $captionanimation_array = array(

			'fade' => __('Fade', 'biznez'),

			'slideOpen' => __('Slide Open', 'biznez'),

			'none' => __('None', 'biznez')

		);

	//pauseOnHover_array

	$pauseOnHover_array = array(

		'true' => __('Yes', 'biznez'),

		'false' => __('No', 'biznez')

	);

	//bullets_array

 	$bullets_array = array(

		'true' => __('Show', 'biznez'),

		'false' => __('Hide', 'biznez')

	);

	//blog page layout

	$blogpage_layout = array(

		'bleft_img' => __('Left Image', 'biznez'),

		'bright_img' => __('Right Image', 'biznez'),

		'btop_img' => __('Top Image', 'biznez')

	);

	// cgmap infostatus

	$cgmap_infowin = array(

		'open' => __('Open', 'biznez'),

		'close' => __('Close', 'biznez')

	);

	

	// cgmap marker animation

	$cgmap_markanim = array(

		'BOUNCE' => __('Bounce', 'biznez'),

		'DROP' => __('Drop', 'biznez')

	);

	// If using image radio buttons, define a directory path

	$imagepath =  get_template_directory_uri() . '/images/';

	$gimagepath = get_template_directory_uri() . '/images';
	
	$teamimagepath = get_template_directory_uri() . '/images/team-member/';

	$sktsiteurl = esc_url(home_url('/'));

	$sktsitenm  = get_bloginfo('name');

	

	$options = array();

	//General Settings

	$options[] = array(

		'name' => __('General Settings', 'biznez'),

		'type' => 'heading');

		$options[] = array(

			'name' => __('Set Site-logo Type', 'biznez'),

			'desc' => __('Default ( Image ).', 'biznez'),

			'id' => $shortname.'_site_logo_type',

			'std' => 'limage',

			'type' => 'radio',

			'options' => $site_logo);		

		$options[] = array(

			'name' => __('Logo Image', 'biznez'),

			'desc' => __('This creates a Custom logo that previews the image.', 'biznez'),

			'id' => $shortname.'_logo_img',

			'std' => '',

			'type' => 'upload',

			'class'=>'hidden');

		$options[] = array(

			'name' => __('Logo Text', 'biznez'),

			'desc' => __('Logo Text field.', 'biznez'),

			'id' => $shortname.'_logo_text',

			'std' => '',

			'class' => 'mini',

			'type' => 'text',

			'class'=>'hidden');

		$options[] = array(

			'name' => __('Logo ALT Text', 'biznez'),

			'desc' => __('Logo ALT Text field.', 'biznez'),

			'id' => $shortname.'_logo_alt',

			'std' => '',

			'type' => 'text');

		$options[] = array(

			'name' => __('Change favicon', 'biznez'),

			'desc' => __('This creates a Custom favicon that previews the image.', 'biznez'),

			'id' => $shortname.'_favicon',

			'std' => '',

			'type' => 'upload');

	    $options[] = array(

			'name' => __('Choose color', 'biznez'),

			'desc' => __('No color selected by default.', 'biznez'),

			'id' => $shortname.'_colorpicker',

			'std' => '#30b7ff',

			'type' => 'color' );

	    $options[] = array(

			'name' => __('Change Header Background', 'biznez'),

			'desc' => __('No color selected by default.', 'biznez'),

			'id' => $shortname.'_headerbackground',

			'std' => '#ffffff',

			'type' => 'color' );

		$options[] = array(

			'name' => __('Breadcrumb By Default', 'biznez'),

			'desc' => __('Default ( show ).', 'biznez'),

			'id' => $shortname.'_breadcrumb',

			'std' => 'show',

			'type' => 'radio',

			'options' => $breadcrumb);



		$options[] = array(

			'name' => __('Breadcrumb Separator Type', 'biznez'),

			'desc' => __('Default ( Image ).', 'biznez'),

			'id' => $shortname.'_bdcrumb_stype',

			'std' => 'bimage',

			'type' => 'radio',

			'options' => $bdcrumb_stype);



		$options[] = array(

			'name' => __('Change breadcrumb separator image (16px X 16px)', 'biznez'),

			'desc' => __('This creates a Custom icon that previews the image.', 'biznez'),

			'id' => $shortname.'_bdcrumb_simg',

			'std' => $imagepath.'ber-arrow.png',

			'type' => 'upload',

			'class'=>'hidden');	

			

		$options[] = array(

			'name' => __('Set breadcrumb separator text', 'biznez'),

			'desc' => __('Enter text like "-/" or you want', 'biznez'),

			'id' => $shortname.'_bdcrumb_stxt',

			'std' => '-',

			'class' => 'mini',

			'type' => 'text',

			'class'=>'hidden');

	    $options[] = array(

			'name' => __('Show Custom Pagination', 'biznez'),

			'desc' => __('Show custom pagination on blog page.', 'biznez'),

			'id' => $shortname.'_show_pagenavi',

			'std' => 'yes',

			'type' => 'select',

			'class' => 'mini', //mini, tiny, small

			'options' => $test_pagiarray);

		$options[] = array(

				'name' => __('Check to Enable persistent header navigation menu.', 'biznez'),

				'desc' => __('Enable persistent header navigation menu.', 'biznez'),

				'id' => $shortname.'_skenavfull',

				'type' => 'checkbox');


		//Slider Setting

			$options[] = array(

				'name' => __('Slider Configuration', 'biznez'),

				'type' => 'heading');

			$options[] = array(

						'name' => __('Select Slider Type', 'biznez'),

						'desc' => __('Select Slider Type for Front Page.', 'biznez'),

						'id' => $shortname.'_slider_type',

						'std' => 'normal',

						'type' => 'select',

						'class' => 'mini', //mini, tiny, small

						'options' => $select_slider_type_array);

			 $options[] = array(

				'name' => __('Select Animation', 'biznez'),

				'desc' => __('Select Animation Box.', 'biznez'),

				'id' => $shortname.'_effect_select',

				'std' => 'Animation',

				'type' => 'select',

				'class' => 'mini', //mini, tiny, small

				'options' => $effect_test_array);

			$options[] = array(

				'name' => __('Animation Speed', 'biznez'),

				'desc' => __('how fast animtions are.', 'biznez'),

				'id' => $shortname.'_animation_speed',

				'std' => '800',

				'type' => 'text');	
				
		$options[] = array(

			'name' => __('Enter Slider Title 1.', 'biznez'),

			'desc' => __('Enter slider title 1.', 'biznez'),

			'id' => $shortname.'_slider_title1',

			'std' => 'Title1',

			'class' => 'mini',

			'type' => 'text');

		  $options[] = array(

			'name' => __('Upload Slider Image 1', 'biznez'),

			'desc' => __('Upload Slider Image 1.', 'biznez'),

			'id' => $shortname.'_slider_img1',

			'std' => $imagepath.'Biznez_Slider_Image_1000pxby414px.jpg',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Enter Content For Slide 1 Caption.', 'biznez'),

			'desc' => __('Enter Content For Slide 1 Caption.', 'biznez'),

			'id' => $shortname.'_content_slider1',

			'std' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",

			'type' => 'textarea');
			
	  $options[] = array(

			'name' => __('Enter Slider Link 1.', 'biznez'),

			'desc' => __('Enter slider Link 1.', 'biznez'),

			'id' => $shortname.'_slider_link1',

			'std' => '#',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter Slider Title 2.', 'biznez'),

			'desc' => __('Enter slider title 2.', 'biznez'),

			'id' => $shortname.'_slider_title2',

			'std' => 'Title2',

			'class' => 'mini',

			'type' => 'text');

		  $options[] = array(

			'name' => __('Upload Slider Image 2', 'biznez'),

			'desc' => __('Upload Slider Image 2.', 'biznez'),

			'id' => $shortname.'_slider_img2',

			'std' => $imagepath.'Biznez_Slider_Image_1000pxby414px.jpg',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Enter Content For Slide 2 Caption.', 'biznez'),

			'desc' => __('Enter Content For Slide 2 Caption.', 'biznez'),

			'id' => $shortname.'_content_slider2',

			'std' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",

			'type' => 'textarea');
			
	$options[] = array(

			'name' => __('Enter Slider Link 2.', 'biznez'),

			'desc' => __('Enter slider Link 2.', 'biznez'),

			'id' => $shortname.'_slider_link2',

			'std' => '#',

			'type' => 'text');
			
	$options[] = array(

			'name' => __('Enter Slider Title 3.', 'biznez'),

			'desc' => __('Enter slider title 3.', 'biznez'),

			'id' => $shortname.'_slider_title3',

			'std' => 'Title3',

			'class' => 'mini',

			'type' => 'text');

		  $options[] = array(

			'name' => __('Upload Slider Image 3', 'biznez'),

			'desc' => __('Upload Slider Image 3.', 'biznez'),

			'id' => $shortname.'_slider_img3',

			'std' => $imagepath.'Biznez_Slider_Image_1000pxby414px.jpg',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Enter Content For Slide 3 Caption.', 'biznez'),

			'desc' => __('Enter Content For Slide 3 Caption.', 'biznez'),

			'id' => $shortname.'_content_slider3',

			'std' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",

			'type' => 'textarea');
			
	  $options[] = array(

			'name' => __('Enter Slider Link 3.', 'biznez'),

			'desc' => __('Enter slider Link 3.', 'biznez'),

			'id' => $shortname.'_slider_link3',

			'std' => '#',

			'type' => 'text');

		

		//Footer	

		$options[] = array(

			'name' => __('Footer', 'biznez'),

			'type' => 'heading');

		$options[] = array(

			'name' => __('Copyright Text', 'biznez'),

			'desc' => __('You can use HTML for links etc..', 'biznez'),

			'id' => $shortname.'_copyright',

			'std' => 'Copyright Text Here.',

			'type' => 'textarea');
		

	//About page	

		$options[] = array(

			'name' => __('About page', 'biznez'),

			'type' => 'heading');

		$options[] = array(

				'name' => __('Change Team Member Heading Text', 'biznez'),

				'desc' => __('Change Team Member Heading Text.', 'biznez'),

				'id' => $shortname.'_about_teamhead',

				'std' => 'Our Team Member',

				'type' => 'text');
				
		$options[] = array(

			'name' => __('Enter 1 Team Member Name.', 'biznez'),

			'desc' => __('Enter 1 Team Member Name.', 'biznez'),

			'id' => $shortname.'_tm_name1',

			'std' => 'Scarlett Doe ',

			'type' => 'text');

		  $options[] = array(

			'name' => __('Upload 1 Team Member Avatar.(Recommend width: 180px)', 'biznez'),

			'desc' => __('Upload 1 Team Member Avatar.', 'biznez'),

			'id' => $shortname.'_tm_img1',

			'std' => $teamimagepath.'User-Image_blue.jpg',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Enter 1 Team Member Content.', 'biznez'),

			'desc' => __('Enter 1 Team Member Content.', 'biznez'),

			'id' => $shortname.'_tm_content1',

			'std' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",

			'type' => 'textarea');
			
		$options[] = array(

			'name' => __('Enter 1 Team Member Job Title.', 'biznez'),

			'desc' => __('Enter 1 Team Member Job Title.', 'biznez'),

			'id' => $shortname.'_tm_job1',

			'std' => 'Counselor',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 1 Team Member Website url.', 'biznez'),

			'desc' => __('Enter 1 Team Member Website url.', 'biznez'),

			'id' => $shortname.'_tm_weblink1',

			'std' => '#',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 1 Team Member Facebook url.', 'biznez'),

			'desc' => __('Enter 1 Team Member Facebook url.', 'biznez'),

			'id' => $shortname.'_tm_fb1',

			'std' => 'https://www.facebook.com/',

			'type' => 'text');
			
	  $options[] = array(

			'name' => __('Enter 1 Team Member Twitter url.', 'biznez'),

			'desc' => __('Enter 1 Team Member Twitter url.', 'biznez'),

			'id' => $shortname.'_tm_tw1',

			'std' => 'https://twitter.com/',

			'type' => 'text');
	
	$options[] = array(

			'name' => __('Enter 1 Team Member Dribbble  url.', 'biznez'),

			'desc' => __('Enter 1 Team Member Dribbble  url.', 'biznez'),

			'id' => $shortname.'_tm_drd1',

			'std' => 'http://dribbble.com/',

			'type' => 'text');
		
	$options[] = array(

			'name' => __('Enter 2 Team Member Name.', 'biznez'),

			'desc' => __('Enter 2 Team Member Name.', 'biznez'),

			'id' => $shortname.'_tm_name2',

			'std' => 'Freddie Thomas',

			'type' => 'text');

		  $options[] = array(

			'name' => __('Upload 2 Team Member Avatar.(Recommend width: 180px)', 'biznez'),

			'desc' => __('Upload 2 Team Member Avatar.', 'biznez'),

			'id' => $shortname.'_tm_img2',

			'std' => $teamimagepath.'User-Image_red.jpg',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Enter 2 Team Member Content.', 'biznez'),

			'desc' => __('Enter 2 Team Member Content.', 'biznez'),

			'id' => $shortname.'_tm_content2',

			'std' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",

			'type' => 'textarea');
			
		$options[] = array(

			'name' => __('Enter 2 Team Member Job Title.', 'biznez'),

			'desc' => __('Enter 2 Team Member Job Title.', 'biznez'),

			'id' => $shortname.'_tm_job2',

			'std' => 'Counselor',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 2 Team Member Website url.', 'biznez'),

			'desc' => __('Enter 2 Team Member Website url.', 'biznez'),

			'id' => $shortname.'_tm_weblink2',

			'std' => '#',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 2 Team Member Facebook url.', 'biznez'),

			'desc' => __('Enter 2 Team Member Facebook url.', 'biznez'),

			'id' => $shortname.'_tm_fb2',

			'std' => 'https://www.facebook.com/',

			'type' => 'text');
			
	  $options[] = array(

			'name' => __('Enter 2 Team Member Twitter url.', 'biznez'),

			'desc' => __('Enter 2 Team Member Twitter url.', 'biznez'),

			'id' => $shortname.'_tm_tw2',

			'std' => 'https://twitter.com/',

			'type' => 'text');
	
	$options[] = array(

			'name' => __('Enter 2 Team Member Dribbble  url.', 'biznez'),

			'desc' => __('Enter 2 Team Member Dribbble  url.', 'biznez'),

			'id' => $shortname.'_tm_drd2',

			'std' => 'http://dribbble.com/',

			'type' => 'text');
			
	$options[] = array(

			'name' => __('Enter 3 Team Member Name.', 'biznez'),

			'desc' => __('Enter 3 Team Member Name.', 'biznez'),

			'id' => $shortname.'_tm_name3',

			'std' => 'Maya Beckham',

			'type' => 'text');

		  $options[] = array(

			'name' => __('Upload 3 Team Member Avatar.(Recommend width: 180px)', 'biznez'),

			'desc' => __('Upload 3 Team Member Avatar.', 'biznez'),

			'id' => $shortname.'_tm_img3',

			'std' => $teamimagepath.'User-Image_Yellow.jpg',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Enter 3 Team Member Content.', 'biznez'),

			'desc' => __('Enter 3 Team Member Content.', 'biznez'),

			'id' => $shortname.'_tm_content3',

			'std' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy",

			'type' => 'textarea');
			
		$options[] = array(

			'name' => __('Enter 3 Team Member Job Title.', 'biznez'),

			'desc' => __('Enter 3 Team Member Job Title.', 'biznez'),

			'id' => $shortname.'_tm_job3',

			'std' => 'Counselor',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 3 Team Member Website url.', 'biznez'),

			'desc' => __('Enter 3 Team Member Website url.', 'biznez'),

			'id' => $shortname.'_tm_weblink3',

			'std' => '#',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 3 Team Member Facebook url.', 'biznez'),

			'desc' => __('Enter 3 Team Member Facebook url.', 'biznez'),

			'id' => $shortname.'_tm_fb3',

			'std' => 'https://www.facebook.com/',

			'type' => 'text');
			
		$options[] = array(

			'name' => __('Enter 3 Team Member Twitter url.', 'biznez'),

			'desc' => __('Enter 3 Team Member Twitter url.', 'biznez'),

			'id' => $shortname.'_tm_tw3',

			'std' => 'https://twitter.com/',

			'type' => 'text');
	
		$options[] = array(

			'name' => __('Enter 3 Team Member Dribbble  url.', 'biznez'),

			'desc' => __('Enter 3 Team Member Dribbble  url.', 'biznez'),

			'id' => $shortname.'_tm_drd3',

			'std' => 'http://dribbble.com/',

			'type' => 'text');
			
		//Contact Page Options	

		$options[] = array(

			'name' => __('Contact Page Options', 'biznez'),

			'type' => 'heading');
			
							
		//select contact page template
		$options[] = array(
				'name' => __('Select Contact us page', 'biznez'),
				'desc' => __('Contact us page', 'biznez'),
				'id' => $shortname.'_contact_page',
				'type' => 'select',
				'options' => $options_pages);
				
				$contact_form_7_description = '';
				$contact_form_7 = admin_url('update.php?action=install-plugin&plugin=contact-form-7&_wpnonce=').wp_create_nonce('install-plugin_contact-form-7');
				$config_contact_form_7 = admin_url('admin.php?page=wpcf7');
				$activate_contact_form_7 = admin_url('plugins.php?action=activate&plugin=contact-form-7%2Fwp-contact-form-7.php&_wpnonce=').wp_create_nonce('activate-plugin_contact-form-7/wp-contact-form-7.php');
				
				if(is_dir( WP_PLUGIN_DIR.'/contact-form-7/')){
					include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){ $contact_form_7_description = 'Click <a target="_blank" href="'.$config_contact_form_7.'">Here to Configure Contact Form 7 Plugin</a> to show contact form on your <b>Contact Page</b>.'; }
					else{$contact_form_7_description = 'Click <a target="_blank" href="'.$activate_contact_form_7.'">Here to Activate Contact Form 7 Plugin</a>.'; }
				}
				else{
					$contact_form_7_description = 'Click <a target="_blank" href="'.$contact_form_7.'">Here to Install Contact Form 7 Plugin</a> to add contact form on your <b>Contact Page</b>.';
				}
				
		$options[] = array(
			'name' => __('Contact Form Info', 'options_framework_theme'),
			
			'desc' => $contact_form_7_description,
			
			'type' => 'info');
			
		$options[] = array(
			'name' => __('Phone Number', 'biznez'),
			
			'desc' => __('Put Your Phone Number here to Show in Mobile View in Header.', 'biznez'),
			
			'id' => $shortname.'_header_phone',
			
			'std' => '123-456-7891',
			
			'type' => 'text');
		
		$options[] = array(
			'name' => __('Address Title', 'biznez'),
			
			'desc' => __('Put Your Address Title here.', 'biznez'),
			
			'id' => $shortname.'_add_title',
			
			'std' => 'Office Address',
			
			'type' => 'text');
					
		$options[] = array(
				'name' => __('Address Area (Put Your Address and Map Iframe Here) ', 'biznez'),
				
				'desc' => __('Put Your Address Here.', 'biznez'),
				
				'id' => $shortname.'_contact_address_area',
				
				'std' =>'Biznez<br />
						Forever Street 862<br />
						NSW - 125 - CA<br /><br />
						Phone: 123-456-7891<br />
						Fax: 123-456-7891<br />',
				
				'type' => 'textarea');

		//Front Page Options	

		$options[] = array(

			'name' => __('Front Page Options', 'biznez'),

			'type' => 'heading');
			
		
		$options[] = array(

			'name' => __('Select Your Front Page Layout.', 'biznez'),

			'desc' => __('if you select Static layout for front page your selected page content is show otherwise custom front page layout show.', 'biznez'),

			'id' => $shortname.'_hide_frontlayout',

			'std' => 'true',

			'type' => 'radio',

			'options' => $frontpagelayout_array);

		$options[] = array(

			'name' => __('Hide Feature Box on Front Page', 'biznez'),

			'desc' => __('Radio select with default options "hide".', 'biznez'),

			'id' => $shortname.'_hide_frontboxes',

			'std' => 'false',

			'type' => 'radio',

			'options' => $featureradio_array);

		$options[] = array(

				'name' => __('Select Featured box Type', 'biznez'),

				'desc' => __('Select Featured box for Front Page.', 'biznez'),

				'id' => $shortname.'_feature_type',

				'std' => 'normal',

				'type' => 'select',

				'class' => 'mini', //mini, tiny, small

				'options' => $featuredbox_type_array);

		//Featured Box 1

		$options[] = array(

			'name' => __('Featured Box 1 Heading:', 'biznez'),

			'desc' => __('Enter Featured Box 1 Heading.', 'biznez'),

			'id' => $shortname.'_fb1_heading',

			'std' => 'Heading',

			'type' => 'text');

		$options[] = array(

			'name' => __('Featured Box 1 Icon', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_fb1_icon',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Featured Box 1 Content:', 'biznez'),

			'desc' => __('Enter Featured Box 1 Content.', 'biznez'),

			'id' => $shortname.'_fb1_content',

			'std' => '',

			'type' => 'textarea');

		$options[] = array(

			'name' => __('Featured Box 1 Link:', 'biznez'),

			'desc' => __('Enter Featured Box 1 Link.', 'biznez'),

			'id' => $shortname.'_fb1_link',

			'std' => '#',

			'type' => 'text');

		//Featured Box 2

		$options[] = array(

			'name' => __('Featured Box 2 Heading:', 'biznez'),

			'desc' => __('Enter Featured Box 2 Heading.', 'biznez'),

			'id' => $shortname.'_fb2_heading',

			'std' => 'Heading',

			'type' => 'text');

		$options[] = array(

		'name' => __('Featured Box 2 Icon', 'biznez'),

		'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

		'id' => $shortname.'_fb2_icon',

		'type' => 'upload');

		$options[] = array(

			'name' => __('Featured Box 2 Content:', 'biznez'),

			'desc' => __('Enter Featured Box 2 Content.','biznez'),

			'id' => $shortname.'_fb2_content',

			'std' => '',

			'type' => 'textarea');

		$options[] = array(

			'name' => __('Featured Box 2 Link:', 'biznez'),

			'desc' => __('Enter Featured Box 2 Link.', 'biznez'),

			'id' => $shortname.'_fb2_link',

			'std' => '#',

			'type' => 'text');

		//Featured Box 3

		$options[] = array(

			'name' => __('Featured Box 3 Heading:','biznez'),

			'desc' => __('Enter Featured Box 3 Heading.', 'biznez'),

			'id' => $shortname.'_fb3_heading',

			'std' => 'Heading',

			'type' => 'text');

		$options[] = array(

			'name' => __('Featured Box 3 Icon', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_fb3_icon',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Featured Box 3 Content:', 'biznez'),

			'desc' => __('Enter Featured Box 3 Content.', 'biznez'),

			'id' => $shortname.'_fb3_content',

			'std' => '',

			'type' => 'textarea');

		$options[] = array(

			'name' => __('Featured Box 3 Link:', 'biznez'),

			'desc' => __('Enter Featured Box 3 Link.', 'biznez'),

			'id' => $shortname.'_fb3_link',

			'std' => '#',

			'type' => 'text');

		//Featured Box 4

		$options[] = array(

			'name' => __('Featured Box 4 Heading:','biznez'),

			'desc' => __('Enter Featured Box 4 Heading.', 'biznez'),

			'id' => $shortname.'_fb4_heading',

			'std' => 'Heading',

			'type' => 'text');

		$options[] = array(

			'name' => __('Featured Box 4 Icon', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_fb4_icon',

			'type' => 'upload');

		$options[] = array(

			'name' => __('Featured Box 4 Content:', 'biznez'),

			'desc' => __('Enter Featured Box 4 Content.', 'biznez'),

			'id' => $shortname.'_fb4_content',

			'std' => '',

			'type' => 'textarea');

		$options[] = array(

			'name' => __('Featured Box 4 Link:', 'biznez'),

			'desc' => __('Enter Featured Box 4 Link.', 'biznez'),

			'id' => $shortname.'_fb4_link',

			'std' => '#',

			'type' => 'text');

	//testimonial and client box hide show		

	$options[] = array(

		'name' => __('Hide Testimonial and Client Box.', 'biznez'),

		'desc' => __('Radio select with default options "hide".', 'biznez'),

		'id' => $shortname.'_hide_testclientbox',

		'std' => 'false',

		'type' => 'radio',

		'options' => $test_clientbox_array);

	//testimonial

	$options[] = array(

			'name' => __('Change Testimonial Heading Text', 'biznez'),

			'desc' => __('Change Testimonial Heading Text.', 'biznez'),

			'id' => $shortname.'_front_testmonialheadtxt',

			'std' => 'Testimonials',

			'type' => 'text');

	$options[] = array(

			'name' => __('Testimonial Box 1 Content:', 'biznez'),

			'desc' => __('Enter Testimonial Box 1 Content.', 'biznez'),

			'id' => $shortname.'_testi1_content',

			'std' => '',

			'type' => 'textarea');

	$options[] = array(

			'name' => __('Testimonial 1 author:', 'biznez'),

			'desc' => __('Enter Testimonial 1 author.', 'biznez'),

			'id' => $shortname.'_testau1_name',

			'std' => '',

			'type' => 'text');

	$options[] = array(

			'name' => __('Testimonial 1 author Link:', 'biznez'),

			'desc' => __('Testimonial 1 author Link.', 'biznez'),

			'id' => $shortname.'_testau1_link',

			'std' => '#',

			'type' => 'text');

	$options[] = array(

			'name' => __('Testimonial 1 author Link Text:', 'biznez'),

			'desc' => __('Testimonial 1 author Link text.', 'biznez'),

			'id' => $shortname.'_testau1_link_text',

			'std' => '',

			'type' => 'text');		

	$options[] = array(

			'name' => __('Testimonial Box 2 Content:', 'biznez'),

			'desc' => __('Enter Testimonial Box 2 Content.', 'biznez'),

			'id' => $shortname.'_testi2_content',

			'std' => '',

			'type' => 'textarea');

	$options[] = array(

			'name' => __('Testimonial 2 author:', 'biznez'),

			'desc' => __('Enter Testimonial 2 author.', 'biznez'),

			'id' => $shortname.'_testau2_name',

			'std' => '',

			'type' => 'text');

	$options[] = array(

			'name' => __('Testimonial 2 author Link:', 'biznez'),

			'desc' => __('Testimonial 2 author Link.', 'biznez'),

			'id' => $shortname.'_testau2_link',

			'std' => '#',

			'type' => 'text');

	$options[] = array(

			'name' => __('Testimonial 2 author Link Text:', 'biznez'),

			'desc' => __('Testimonial 2 author Link text.', 'biznez'),

			'id' => $shortname.'_testau2_link_text',

			'std' => '',

			'type' => 'text');		

	

	//Our Client 

	$options[] = array(

			'name' => __('Client Title:', 'biznez'),

			'desc' => __('Enter Client Title.', 'biznez'),

			'id' => $shortname.'_client_title',

			'std' => 'Our Clients',

			'type' => 'text');

	$options[] = array(

			'name' => __('Our Client Image 1', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_ourclient_icon1',

			'type' => 'upload');
			
	$options[] = array(

			'name' => __('Our Client Image 1 Link', 'biznez'),

			'desc' => __('Our Client Image 1 Link', 'biznez'),

			'id' => $shortname.'_ourclient_link1',
			
			'std' => '#',

			'type' => 'text');

     $options[] = array(

			'name' => __('Our Client Image 2', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_ourclient_icon2',

			'type' => 'upload');
			
	$options[] = array(

			'name' => __('Our Client Image 2 Link', 'biznez'),

			'desc' => __('Our Client Image 2 Link', 'biznez'),

			'id' => $shortname.'_ourclient_link2',
			
			'std' => '#',

			'type' => 'text');

	$options[] = array(

			'name' => __('Our Client Image 3', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_ourclient_icon3',

			'type' => 'upload');
			
    $options[] = array(

			'name' => __('Our Client Image 3 Link', 'biznez'),

			'desc' => __('Our Client Image 3 Link', 'biznez'),

			'id' => $shortname.'_ourclient_link3',
			
			'std' => '#',

			'type' => 'text');

	$options[] = array(

			'name' => __('Our Client Image 4', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_ourclient_icon4',

			'type' => 'upload');
			
	$options[] = array(

			'name' => __('Our Client Image 4 Link', 'biznez'),

			'desc' => __('Our Client Image 4 Link', 'biznez'),

			'id' => $shortname.'_ourclient_link4',
			
			'std' => '#',

			'type' => 'text');

	$options[] = array(

			'name' => __('Our Client Image 5', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_ourclient_icon5',

			'type' => 'upload');
			
	$options[] = array(

			'name' => __('Our Client Image 5 Link', 'biznez'),

			'desc' => __('Our Client Image 5 Link', 'biznez'),

			'id' => $shortname.'_ourclient_link5',
			
			'std' => '#',

			'type' => 'text');

	$options[] = array(

			'name' => __('Our Client Image 6', 'biznez'),

			'desc' => __('This creates a full size uploader that previews the image.', 'biznez'),

			'id' => $shortname.'_ourclient_icon6',

			'type' => 'upload');
			
	$options[] = array(

			'name' => __('Our Client Image 6 Link', 'biznez'),

			'desc' => __('Our Client Image 6 Link', 'biznez'),

			'id' => $shortname.'_ourclient_link6',
			
			'std' => '#',

			'type' => 'text');

	//Main Setting

	$options[] = array(

		'name' => __('Hide Front Content Box.', 'biznez'),

		'desc' => __('Radio select with default options "hide".', 'biznez'),

		'id' => $shortname.'_hide_frontcontentbox',

		'std' => 'false',

		'type' => 'radio',

		'options' => $frontcontentbox_array);

		$options[] = array(

			'name' => __('Front Content Box :', 'biznez'),

			'desc' => __('Front Content Box.', 'biznez'),

			'id' => $shortname.'_frontmain_content',

			'std' => '',

			'type' => 'textarea');

	$options[] = array(

			'name' => __('Front Content Box Button Text:', 'biznez'),

			'desc' => __('Front Content Box Button Text.', 'biznez'),

			'id' => $shortname.'_frontmain_buttontext',

			'type' => 'text');

	$options[] = array(

			'name' => __('Front Content Box Button Link:', 'biznez'),

			'desc' => __('Front Content Box Button Link.', 'biznez'),

			'id' => $shortname.'_frontmain_buttonlink',

			'std' => '#',

			'type' => 'text');

	return $options;

}

/*

 * This is an example of how to add custom scripts to the options panel.

 * This example shows/hides an option when a checkbox is clicked.

 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">

jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {

  		$('#section-example_text_hidden').fadeToggle(400);

	});

	if ($('#example_showhidden:checked').val() !== undefined) {

		$('#section-example_text_hidden').show();

	}

var selected_logobtn = jQuery("input[name='biznez_lite[biznez-lite_site_logo_type]']:checked").val();
	if (selected_logobtn == 'limage') {jQuery('#section-biznez-lite_logo_img').show();}
	if (selected_logobtn == 'ltext') {jQuery('#section-biznez-lite_logo_text').show();}
		
	var selected_bredbtn = jQuery("input[name='biznez_lite[biznez-lite_bdcrumb_stype]']:checked").val();
	if (selected_bredbtn == 'bimage') {jQuery('#section-biznez-lite_bdcrumb_simg').show();}
	if (selected_bredbtn == 'btext') {jQuery('#section-biznez-lite_bdcrumb_stxt').show();}	
	
	jQuery("input[type='radio']").change(function()
	{
        var selected_radio = jQuery(this).val();

        if (selected_radio == 'limage') {
            jQuery('#section-biznez-lite_logo_text').hide();
            jQuery('#section-biznez-lite_logo_img').fadeIn();
        }
        if (selected_radio == 'ltext') {
			jQuery('#section-biznez-lite_logo_img').hide();
            jQuery('#section-biznez-lite_logo_text').fadeIn();
        }        
		
		if (selected_radio == 'bimage') {
            jQuery('#section-biznez-lite_bdcrumb_stxt').hide();
            jQuery('#section-biznez-lite_bdcrumb_simg').fadeIn();
        }
        if (selected_radio == 'btext') {
			jQuery('#section-biznez-lite_bdcrumb_simg').hide();
            jQuery('#section-biznez-lite_bdcrumb_stxt').fadeIn();
        }
    });

});

</script>

<?php

}