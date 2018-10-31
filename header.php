<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package kseicorp
 * @subpackage kseicorp
 */
?>
<!doctype html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			<?php /*display title based on page viewed */?>
			<?php
				if ( is_single() ) { 
					single_post_title(); 
				} elseif ( is_home() || is_front_page() ) { 
					bloginfo('name'); print ' | '; 
					bloginfo('description'); 
					get_page_number(); 
				} elseif ( is_page() ) { 
					bloginfo('name'); print ' | '; 
					single_post_title(''); 
				} elseif ( is_search() ) { 
					bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); 
					get_page_number(); 
				} elseif ( is_404() ) { 
					bloginfo('name'); 
					print ' | Not Found'; 
				} else { 
					bloginfo('name'); 
					wp_title('|'); 
					get_page_number(); 
				}
			?>
		</title>
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/default.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/css/nivo-slider.css" rel="stylesheet" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/Nilland_400-Nilland_700.font.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
		<script type="text/javascript">
		Cufon.replace('h3');
		$(window).load(function() {
			$('#slider').nivoSlider({
				effect:'sliceUpDown',
				pauseTime:5000,
				directionNav:false,
				controlNav:false,
			});
		});
		</script>
		<?php //wp_enqueue_script("jquery"); ?> 
		<?php wp_head(); ?>
	</head>
<body>
<div id="container">
	<div id="header">
		<a class="logo" href="<?php echo home_url('/')?>" title="KSEI"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" class="fleft" alt="KSEI" /></a>
		<div class="header-social fright">
			<div class="twitter-hover social-slide"></div>
			<div class="facebook-hover social-slide"></div>
			<div class="google-hover social-slide"></div>
			<div class="linkedin-hover social-slide"></div>									
		</div>

		<ul id="mainmenu">
			<?php $defaults = array(
				'menu_class'      => 'menu',
				'menu'            => 'Main Navigation',				
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'depth'           => 0,
				); ?>
			<?php wp_nav_menu( $defaults); ?>
		</ul>

	</div>
    <!-- header end -->
		<div id="image">
		<div id="lbox">
			<h3 class="slogan">Slogan here</h3>
		</div>
        <!-- lbox end -->
		<div id="rbox">
			<a href="offer.html"><img class="started" src="<?php bloginfo('template_directory'); ?>/images/y-arrow.jpg" alt="Get started" /></a>
			<ul id="slider">
				<li><img src="<?php bloginfo('template_directory'); ?>/images/img1.jpg" alt="Image 1" /></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/img2.jpg" alt="Image 2" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/img3.jpg" alt="Image 3" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/img4.jpg" alt="Image 4" /></li>
			</ul>
            <!-- slider end -->
		</div>
        <!-- rbox end -->
	</div>
    <!-- image end -->