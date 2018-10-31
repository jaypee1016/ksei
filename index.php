<?php get_header(); ?>
	<div id="content">
		<div id="col1">
			<div class="icon"><span class="about-icon"></span></div>
			<h3>Who <span class="color">we are?</span></h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<a href="<?php echo get_permalink_by_title('About'); ?>"><img class="more" src="<?php bloginfo('template_directory'); ?>/images/arrow.jpg" alt="Read more" /></a>
			</p>
		</div>
        <!-- col1 end -->
		<div id="col2">
			<div class="icon"><span class="choose-icon"></span></div>
			<h3>Why <span class="color">choose us?</span></h3>
			<p>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<a href="<?php echo get_permalink_by_title('Mission and Vision'); ?>"><img class="more" src="<?php bloginfo('template_directory'); ?>/images/arrow.jpg" alt="Read more" /></a>
			</p>
		</div>
        <!-- col2 end -->
		<div id="col3">
			<div class="icon"><span class="works-icon"></span></div>
			<h3>Our <span class="color">ideas</span></h3>
			<p>
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<a href="<?php echo get_permalink_by_title('Ideas'); ?>"><img class="more" src="<?php bloginfo('template_directory'); ?>/images/arrow.jpg" alt="Read more" /></a>
			</p>
		</div>
        <!-- col3 end -->
		<div id="col4">
			<div class="icon"><span class="services-icon"></span></div>
			<h3>Our <span class="color">services</span></h3>
			<p>
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="<?php echo get_permalink_by_title('Services'); ?>"><img class="more" src="<?php bloginfo('template_directory'); ?>/images/arrow.jpg" alt="Read more" /></a>
			</p>
		</div>
        <!-- col4 end -->
	</div>
    <!-- content end -->
<?php get_footer(); ?>