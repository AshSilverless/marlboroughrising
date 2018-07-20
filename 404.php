<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


	 echo avia_title(array('title' => __('Error 404 - page not found', 'avia_framework')));
	 
	 do_action( 'ava_after_main_title' );
	?>


		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?> fourohfour'>
			
			<div class='container'>

<h1>Oh dear.<br/>Looks like you've taken a wrong turn.</h1>

<p>Best not to look them in the eye and head back to safety by <a href="<?php echo esc_url( home_url( '/' ) ); ?>">clicking here</a></p>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php get_footer(); ?>
