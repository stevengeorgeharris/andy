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
  wp_enqueue_script( 'grid', get_template_directory_uri() . '/js/vendors/masonry.js', array(), '', true );
  wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/vendors/slick.min.js', array(), '', true );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'nebula_resources' );

// Register Custom Post Type
function project_posts() {
	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Projects',
		'archives'              => 'Project Archive',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add New Project',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'search_items'          => 'Search Project',
		'not_found'             => 'Project not found',
		'not_found_in_trash'    => 'Project not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Project',
		'description'           => 'A collection of Projects',
		'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'projects' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
    'show_in_rest'          => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );
}
add_action( 'init', 'project_posts', 0 );

if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
		'page_title' 	=> 'Details for pop-up',
		'menu_title'	=> 'About',
		'menu_slug' 	=> 'details',
		'redirect'		=> false
	));
}

?>
