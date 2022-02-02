<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom-style/style.css' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@300;500;700;800&display=swap', false );
}


// function google_fonts() {
//     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@300;500;700;800&display=swap', false );
// }
// add_action( 'wp_enqueue_scripts', 'google_fonts' );