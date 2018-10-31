<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage ffw
 * @since ffw 1.0
 */
?>
<?php get_header(); ?>	
			<div class="row-fluid">
				<?php get_sidebar(); ?>
				<div class="span8 content-container">	
					<div class="content">
						<div class="row-fluid">
							<div class="span12">
								<div class="title"><h3><?php single_cat_title(); ?><span class="float-right" style="font-size:12px;"><?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?></span></h3></div>
								<?php if (have_posts()) : ?>
									<div class="inner-page category-page">
									<?php query_posts($query_string . '&order=DESC'); ?>
									<?php while ( have_posts() ) : the_post(); ?>				
											<div class="post-image-container">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
											</div>
											<div class="post-content-container">
											<a class="cat-link" href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
											<?php remove_filter ('the_excerpt', 'wpautop'); ?>
											<p><?php the_excerpt(); ?>... <a href="<?php the_permalink() ?>" class="sublink" id="readmore">read more &raquo;</a></p>
											
											</div>
											
											<div class="clear"></div>
											<hr />
															
									<?php endwhile; ?>
									</div>	
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<?php get_footer(); ?>

