<?php

/*

Plugin Name: Custom Post Types
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


        }
//--END CONSTRUCTOR
 

}   //END CLASS
}//END EXISTS CHECK



//INITIALISE THE PLUGIN
if (class_exists ('AjaxPoweredFrontPage')){

    // instantiate the plugin class
    global $AjaxPoweredFrontPage;
    $customPostType = new AjaxPoweredFrontPage();

}
