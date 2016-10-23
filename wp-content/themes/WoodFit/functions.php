<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

function enqueue_parent_theme_style() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'slick-carousel-css', get_stylesheet_directory_uri() . '/includes/slick/slick.css' );
    wp_enqueue_script('slick-carousel-js', get_stylesheet_directory_uri() . '/includes/slick/slick.min.js');
    wp_enqueue_script('slick-settings-js', get_stylesheet_directory_uri() . '/js/slick-settings.js');


    if ( is_front_page() ) {
    	wp_enqueue_style('css-menu-customisation', get_stylesheet_directory_uri() . '/css/homepage-custom-menu.css');
    	wp_enqueue_script('js-menu-customisation', get_stylesheet_directory_uri() . '/js/custom-menu.js');
    }

}

function my_et_builder_post_types( $post_types ) {
    $post_types[] = 'text-blocks';
     
    return $post_types;
}
add_filter( 'et_builder_post_types', 'my_et_builder_post_types' );
