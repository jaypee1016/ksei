<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage ffw
 */
?>
<?php get_header(); ?>		
	<div id="content" class="wrapper">
		<div class="inner-page">			
			<h2><?php _e( 'Not Found', 'your-theme' ); ?></h2>
			<p><?php _e( 'Apologies, but we were unable to find what you were looking for.', 'your-theme' ); ?></p>				
		</div>
	</div>
<?php get_sidebar(); ?>	
<?php get_footer(); ?>