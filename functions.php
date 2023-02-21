<?php
// enregistrer le menu
register_nav_menus(array(
'menu' => 'principal'
));
// fin

// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin

function monstyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'monstyle' );



//ajouter une taille à l'image à la une
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
add_image_size( 'home', 1280, 744, false );
add_image_size( 'blogpage_thumb', 300, 300, false );
add_image_size( 'singleposthumbnail', 500, 500, false );
add_image_size( 'singleposthumbnail2', 500, 500, true );// L'image sera tronquée exactement à la dimension indiquée
add_image_size( 'recentpost-thumb', 200, 200, false );
add_image_size( 'couv', 1536, 1536, false );
}
//fin


function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}