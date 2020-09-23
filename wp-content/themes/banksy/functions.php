<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajouter page style et script
function custom_enqueue_scripts() {
        if(!is_admin()){ //pour ne pas appliquer les styles et charger inutillement du style dans le BO
            //Ajout des JS (appelés dans le footer)
            // wp_enqueue_script('scripts', get_template_directory_uri() . '/monfichier.js', array( 'jquery' ), NULL, true);
            
            //Ajout des CSS
            wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array(), NULL, NULL);
        }
    }
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 101);

// Ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menu('location: header-menu', __('Menu Header'));
}

add_action('init', 'register_menu');