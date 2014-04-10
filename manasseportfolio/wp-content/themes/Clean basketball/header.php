<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="page">

<div id="header">
	<div id="company_name">
    	COMPANY NAME</div>
    <div class="search_form">
    	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </div>
  	<div class="header_title">
   		<div id="small_title">
    		<?php bloginfo('description'); ?>
   		</div>
    	<div id="big_title">
    		<?php bloginfo('name'); ?>
       </div>   
    </div>
</div>
<div id="menu_bar">
    	<ul>
        	<li> <a href="."> Home Page </a> | </li>
            <li> <a href="#"> About Us </a> | </li>
            <li> <a href="#"> Link One </a> | </li>
            <li> <a href="#"> Link Two </a> | </li>
            <li> <a href="#"> Contact Us</a></li>
        </ul>
</div>
