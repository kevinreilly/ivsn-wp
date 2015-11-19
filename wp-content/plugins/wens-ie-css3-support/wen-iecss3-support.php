<?php 
/*
Plugin Name: WEN's IE CSS3 support
Plugin URI: http://wordpress.org/plugins/wens-ie-css3-support/
Description: Automatically adds CSS3 support for border-radius, box-shadow, linear-gradient and transitions effects to your website/blog in IE old versions (IE7 + higher) 
Version: 1.0
Author: Web Experts Nepal, Bhuwan Roka
Author URI: http://webexpertsnepal.com
License: GPL2
Copyright (C) 2013 Bhuwan Roka
*/
//CSS3 support for IE browsers coded by Web Experts Nepal Team 
//Bhuwan Roka
function wen_ie_8_hack() { ?>
<!-- for IE7+ border-radius -->
<style type="text/css" media="screen">
body, body div, #header div, #footer div, #main div, img, a img, input[type="text"], input[type="submit"], input[type="textarea"], span, h1, h2, h3, ul, li, li a, header, article, footer, section, aside{
	behavior:url(<?php echo plugins_url(); ?>/wens-ie-css3-support/pie/PIE.htc);
	position:relative;
	zoom:1;
}
</style>
<!-- [endif] -->
<?php }
add_filter( 'wp_head' , 'wen_ie_8_hack' );
?>