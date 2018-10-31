<?php
/**
 * The template for displaying all pages.
 *
 * @package ffw
 * @since ffw 1.0
 */
?>
<?php get_header(); ?>
	<div id="content">
		<?php get_sidebar(); ?>
		<div id="col5">
			<?php the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<p class="text">
				<?php remove_filter ('the_content', 'wpautop'); ?>
				<?php the_content(); ?>
			</p>
			<!--<p class="comment">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit<br />
				
			</p>
			<ul class="text">
				<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</li>
				<li>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</li>
				<li>neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</li>
				<li class="last">ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
			</ul>
			<p class="text">
				TO PROVIDE THE CUSTOMERS THE OUTMOST
				QUALITY OF CONSTRUCTION SERVICE WITHIN
				INTERNATIONAL STANDARD
			</p>
			<p class="comment">
				Mission
			</p>
			<ul class="text">
				<li>ENVISIONS THAT THIS COMPANY SHALL BECOME HIGHLY COMPETITIVE WITH OTHER KNOWN
					CONSTRUCTION COMPANIES IN THE PHILIPPINES. </li>
				<li>BELIEVES THAT THE SUCCESS IN BUSINESS COULD BE ATTAINED THROUGH INDUSTRY EQUITY.</li>
				<li>PRIMARILY AIMS TO PROVIDE THE DEVELOPMENT OF ENGINEERING AND CONSTRUCTION WORKS,
					MECHANICAL ENGINEERING WORKS, ELECTRICAL ENGINEERING WORKS, SHOP FABRICATION AND
					FIELD INSTALLATIONS AND GENERAL SERVICES. IT AIMS TO PROVIDE A COMPLETE SPECTRUM OF
					MODERN ENGINEERING AND CONSTRUCTION TECHNOLOGY IN DESIGN, SITE DEVELOPMENT,
					CONSTRUCTION, INSTALLATION, STEEL FABRICATION AND ERECTION. </li>
				<li>AIMS TO PROVIDE AN INTEGRATED CUSTOMER SERVICE APPROACH. IT AIMS TO YIELD TO ITS CLIENTS
					SPECIFIC NEEDS AND OBJECTIVES. IT AIMS TO PROVIDE ITS CUSTOMERS SAFETY STANDARDS. IT AIMS
					TO PROVIDE ITS CUSTOMERS WITH OUTMOST COURTESY.</li>
				<li class="last">AIMS TO MAINTAIN ITS FINANCIAL VAIBILITY AND MARKET COMPETITIVENESS.</li>
			</ul>
			<p class="comment">
				Vision
			</p>-->
		</div>
        <!-- col5 end -->
	</div>
    <!-- content end -->			
<?php get_footer(); ?>
