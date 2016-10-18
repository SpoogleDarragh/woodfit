<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

function enqueue_parent_theme_style() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    if ( is_front_page() ) {
    	wp_enqueue_style('css-menu-customisation', get_stylesheet_directory_uri() . '/css/homepage-custom-menu.css');
    	wp_enqueue_script('js-menu-customisation', get_stylesheet_directory_uri() . '/js/custom-menu.js');
    }
    

}