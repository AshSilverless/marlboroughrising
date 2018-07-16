<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post, $product;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

 if ( $product->is_on_sale() ) : ?>

<div class="ticket-price">
	
	<h3>
<?php echo $product->get_price_html(); ?>		
<strong>Early Bird Price*</strong>		
	</h3>
	
	
</div>


<?php endif;?>

<div class="woocommerce-product-details__short-description">
	<p class="event-time"><?php the_field('time'); ?></p>
	<p class="event-date"><?php the_field('date'); ?></p>	
	<p class="event-location"><?php the_field('location'); ?></p>	
	<p class="event-info"><?php the_field('info'); ?></p>
		
</div>









