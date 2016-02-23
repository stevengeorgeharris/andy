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
  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/vendors/jquery-1.12.1.min.js', array(), '1.12.1', true );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'nebula_resources' );

?>
