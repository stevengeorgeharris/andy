<?php

if ( ! function_exists('nebula_init') ) :
  function nebula_init() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
  }
endif;
add_action( 'after_setup_theme', 'nebula_init' );


function nebula_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nebula_resources' );

?>
