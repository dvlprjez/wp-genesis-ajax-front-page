<?php

/*

Plugin Name: Ajax Front Page
Plugin URI: http://www.blogercise.com/genesis-ajax-powered-front-page/
Description:
Author: Jez
Version: 0.1
Author URI: http://www.blogercise.com


*/


global $wpdb;

if(!class_exists('AjaxPoweredFrontPage'))
{
class CPT_AjaxPoweredFrontPage{
 
        function __construct() {

 
		 remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_loop', array($this,'my_custom_loop');

        }
//--END CONSTRUCTOR
 
	function my_custom_loop(){
		 global $wp_query, $post;
		 while( $wp_query->have_posts() ): $wp_query->the_post();
		  $post_id      = get_the_id();
		  $classes      = ' one-third';
		  if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 3 )
		   {$classes .= ' first';}
		  echo '<div id="product-' . $wp_query->current_post . '" class="' . $classes . '">';
		   echo "<a href='".get_permalink()."'>".get_the_title()."</a>";
		   the_excerpt();
		  echo "</div>";
		endwhile;
		}

}   //END CLASS
}//END EXISTS CHECK



//INITIALISE THE PLUGIN
if (class_exists ('AjaxPoweredFrontPage')){

    // instantiate the plugin class
    global $AjaxPoweredFrontPage;
    $customPostType = new AjaxPoweredFrontPage();

}
