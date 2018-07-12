<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions.
*/

add_theme_support('avia_template_builder_custom_css');

add_filter( 'wc_empty_cart_message', 'custom_wc_empty_cart_message' );

function custom_wc_empty_cart_message() {
	
	?>
</div></div></div></div>


	<div class="empty-cart-wrapper">

<div class="container">
	
	<h1>Testing, testing. One, two...</h1>
	<?php
  return "Oh dear!  You don't have any tickets in your cart.";
  ?>
  
	</div>
	</div>

	<?php
 
}

add_filter('woocommerce_sale_flash', 'vs_change_sale_content', 10, 3);
function vs_change_sale_content($content, $post, $product){
   $content = '<div class="early-bird"><span class="onsale">'.__( 'Early Bird Prices', 'woocommerce' ).'</span><span>*</span></div>';
   return $content;
}