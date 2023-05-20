<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );




function is_user_logged($items, $args){

    $menu ='header';
    $add_menu = array('primary', 'mobile_menu');
    if(is_user_logged_in() && in_array($args->theme_location, $add_menu))  {
        
       $items .= '<li class="lien-admin"> <a href="http://localhost/planty/wp-admin/">Admin </a></li>';
    }
    return $items;
}



add_filter('wp_nav_menu_items','is_user_logged', 10,2);

?>
