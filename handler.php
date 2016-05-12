<?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../../wp-load.php');
 
if (isset($_POST['tax']))       {$tax_query       = $_POST['tax'];}      else{$tax_query='';}
$tax_query = $this->convertPostToTaxQuery($tax_query);
 
//do loop
 
 
            $args = array(
                'posts_per_page' => 9,
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'paged'          => get_query_var( 'paged' ),
                'tax_query'      => $tax_query
            );
 
global $wp_query;
$wp_query = new WP_Query( $args );
 
if( $wp_query->have_posts() )
        {
            // Output your post here
 
}else
   {echo "Please try another search!";}
   wp_reset_query();
 
exit;
