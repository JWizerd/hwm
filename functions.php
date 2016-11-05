<?php

// THEME SUPPORT
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5');
add_theme_support( 'menus' );
// different ways of showing post content
// add_theme_support( 'post-formats', array('video', 'aside', 'gallery', 'image'));

//register navigations
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary Navigation', 'wordpress-tutorial' ) );
						register_nav_menu( 'posts', __( 'Posts', 'wordpress-tutorial' ) );
						register_nav_menu( 'categories', __( 'Categories', 'wordpress-tutorial' ) );
        } endif;

// styles and scripts
function theme_styles() {
	wp_enqueue_style( 'wpb-fa', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/styles.css' );
	wp_enqueue_style('print_css', get_template_directory_uri() . '/assets/css/print.css' );
}

add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );

	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js' );


// custom post type
add_action('init', 'create_events_post_type');
function create_events_post_type() {
  register_post_type(
    'events',
    array(
      'labels'      => array(
        'name'          => __('Events'),
        'singular_name' => __('Event')
      ),
      'public'      => true,
      'has_archive' => true,
      'supports'    => array('title', 'custom-fields')
    )
  );
}

// custom post type
add_action('init', 'create_sermons_post_type');
function create_sermons_post_type() {
  register_post_type(
    'sermons',
    array(
      'labels'      => array(
        'name'          => __('Sermons'),
        'singular_name' => __('Sermon')
      ),
      'public'      => true,
      'has_archive' => true,
      'taxonomies'  => array('category', 'post_tag'),
      'supports'    => array('title', 'custom-fields')
    )
  );
}
