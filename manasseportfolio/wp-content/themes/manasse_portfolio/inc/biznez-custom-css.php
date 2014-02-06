<?php global $shortname; global $themename; ?>
<?php  if(sketch_get_option($shortname.'_colorpicker')){ $bg_color = sketch_get_option($shortname.'_colorpicker','biznez'); } ?>
<?php if(sketch_get_option($shortname.'_headerbackground')){ $headerbg_color = sketch_get_option($shortname.'_headerbackground','biznez'); } ?>
<?php if(sketch_get_option($shortname.'_breadcrumb')){ $skt_breadcrumb  = sketch_get_option($shortname.'_breadcrumb'); } ?>
<?php if(sketch_get_option($shortname.'_bdcrumb_simg')){ $skt_bdcrumb_simg = sketch_get_option($shortname.'_bdcrumb_simg'); } ?>
<style>
	.skin-bg,div.next,div.prev,.filter .current a,.filter a:hover,.post-image span,.feature_image span,div.slider-nav span.left:hover,div.slider-nav span.right:hover,#respond .form-submit input,.filter li .selected,.widget_tag_cloud a:hover,.lightbox span,.front-icon-wrap,.front-img-wrap,.skt-slide-controls a.skt-prev-slide,.skt-slide-controls a.skt-next-slide,.woocommerce-info:before,.contactmailusform input[type="submit"]{	background-color:<?php if(isset($bg_color)){ echo $bg_color; } ?>; }
	.CallToActionbtn,#content #contact-page form input[type="submit"],#mainnav,.slider-link-box .over-color,a#backtop,thead th{ background:<?php if(isset($bg_color)){ echo $bg_color; } ?>;}
	.widget-title .title-border,#footer .widget-title > span,.menu ul li.item_hover > a,.menu ul li.current_page_item > a,.menu ul li.current-menu-ancestor > a, .menu ul li.current-menu-parent > a,.author-name,.menu ul li a:hover,.jcarousel-clip ul li,.skin-border,.post-image img,#content input:focus, #content textarea:focus,.CallToActionbtn,#respond .form-submit input,.ske_tab_h ul.ske_tabs li.active,.ske_tab_v ul.ske_tabs li.active,.slider-attach,#content .fullwidthmap #map,#content .project_wrap .isotope-item img,#content #contact-page form textarea:focus,#content #contact-page form textarea.error:focus,#content #contact-page form input[type="text"]:focus,#content #contact-page form input[type="email"]:focus,
#content #contact-page form input[type="url"]:focus,#content #contact-page form input[type="tel"]:focus,
#content #contact-page form input[type="number"]:focus,#content #contact-page form input[type="range"]:focus,
#content #contact-page form input[type="date"]:focus,#content #contact-page form input[type="file"]:focus,#content .mapwrap,#content #contact-page form input[type="submit"],.skt-slide,.front-icon-wrap,.front-img-wrap,.widget-container.flickrimg li:hover,.widget-container.sktmultisocialstream li:hover,.widget-container .skt-portfolio-widget li:hover,.woocommerce-info,.contactmailusform input[type="text"]:focus,.contactmailusform textarea:focus,.contactmailusform textarea.error:focus,#content .contact-add iframe{border-color:<?php if(isset($bg_color)){ echo $bg_color; } ?> ;}
	.menu ul li a:hover,.menu ul li.current_page_item > a,a:hover,.readmorebtn a,.skin-color,.entry-title a:hover,.breadcrumb a,.widget-container li:hover,.social li a:hover:before,.teamsocial li span:hover:before,.reply a:hover,#site_map li:hover:before,#mini-menu li a:hover,.menu ul li.current_page_item li a:hover,.pagenavi span.current,.pagenavi a:hover, span.current:hover,.menu ul ul li.current_page_item a,.testmonial-icon.titleimg:before,#clients .clients-right .client-icon.titleimg:before,.latest-icon.titleimg:before,.readmore a,.entry-meta a:hover, .entry-utility a:hover{color:<?php if(isset($bg_color)){ echo $bg_color; } ?> ;}
	#header-area .header-nav-full{background-color:<?php if(isset($headerbg_color)){ echo $headerbg_color; } ?>}
	.menu ul li ul{border-bottom-color:<?php if(isset($bg_color)){ echo $bg_color; } ?>;}
	.skt-breadcrumb{<?php if($skt_breadcrumb ==="hide"){ echo "display:none"; } ?>}
	.skt-breadcrumb span.brd_arr{background:url(<?php if($skt_bdcrumb_simg){ echo $skt_bdcrumb_simg; }  ?>) no-repeat scroll center center transparent;}
</style>