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



// Déclaration de la fonction is_user_logged avec deux paramètres : $items et $args
function is_user_logged($items, $args){

    $menu ='header';
    // Définition du tableau $add_menu contenant les valeurs 'primary' et 'mobile_menu'
    $add_menu = array('primary', 'mobile_menu');
    // Vérification si un utilisateur est connecté et si la valeur de $args->theme_location est présente dans le tableau $add_menu
    if(is_user_logged_in() && in_array($args->theme_location, $add_menu))  {
    //Définition d'une variable qui stock l'URL du tableau de bord d'administration WP
        $admin_url = admin_url();
        
    // Ajout d'un élément à la variable $items en utilisant la concaténation de chaînes de caractères, ce qui ajoute le lien Admin au lieu de remplacer le menu existant
    // L'élément ajouté est un lien vers la page d'administration avec le texte 'Admin' grâce a esc_url($admin_url) et sécurise l'URL
       $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page admin-link"> <a class="menu-link" href="' . esc_url($admin_url) . '">Admin</a></li>';
    }
    return $items;
}


// Ajout du filtre 'wp_nav_menu_items' qui appelle la fonction is_user_logged
// Le filtre est défini avec une priorité de 10 et 2 arguments (10, 2)
add_filter('wp_nav_menu_items','is_user_logged', 10,2);

?>
