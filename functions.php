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

/* ADD TO HEAD */
add_action('wp_head', 'silverless_head');
function silverless_head(){
?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '190286758053522');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=190286758053522&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119673617-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119673617-1');
</script>






<?php
}; 