<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage ffw
 */
?>
<?php get_header(); ?>			
	<div class="row-fluid">
		<?php get_sidebar(); ?>
		<div class="span8 content-container">	
			<div class="content">
				<div class="row-fluid">
					<div class="span12">
						<?php the_post(); ?>
						
						<div class="title"><h3><?php the_title(); ?><span class="float-right" style="font-size:12px;"><?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?></span></h3></div>
						
						<div class="inner-page">
							<span class="breadcrumb-cata">
								<?php the_breadcrumb(); ?>
							</span>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>	
<?php get_footer(); ?>

