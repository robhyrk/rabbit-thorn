<?php

//Adds script and stylesheets
function rabbit_thorn_files() {
    wp_enqueue_style('rabbit_styles', get_stylesheet_uri('css/style.css'), NULL, microtime());
    wp_enqueue_style('font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('bootsrap_styles', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400");
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,700,300,400");
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400");
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main_js', get_theme_file_uri('/js/main.js'), array('jquery'), microtime(), true);
    wp_enqueue_script('config_js', get_theme_file_uri('/js/config.js'), array('jquery'), microtime(), true);
    wp_enqueue_script('common_js', get_theme_file_uri('/js/common.js'), array('jquery'), microtime(), true);
    wp_enqueue_script('bootsrap_js', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", microtime(), true);
    


}

add_action('wp_enqueue_scripts', 'rabbit_thorn_files');

//Adds theme support - ex: title tag
function rabbit_thorn_feats() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('category');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_post_type_support( 'page', 'excerpt' );
}

add_action('after_setup_theme', 'rabbit_thorn_feats');

function rabbit_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'rabbit_menus' );


// Artist Post Type
register_post_type('artist', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
        'name' => 'Artists',
        'add_new_item' => 'Add New Artist',
        'edit_item' => 'Edit Artist',
        'all_items' => 'All Artists',
        'singular_name' => 'Artist'
    ),
    'menu_icon' => 'dashicons-art'
));

function rabbit_widgets_init() {

	register_sidebar( array(
		'name'          => 'Contact Us',
		'id'            => 'contact-us',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'rabbit_widgets_init' );

;?>