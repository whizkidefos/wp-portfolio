<?php

// Load stylesheets and javascript files
function theme_files() {
     // Theme CSS - Fonts
    wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.2', 'false' );
    wp_enqueue_style( 'bulma-css', get_template_directory_uri(). '/css/bulma.min.css' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;900&display=swap' );
    wp_enqueue_style( 'adobefont', 'https://use.typekit.net/ngv0zbh.css' );

    //wp_enqueue_style( 'fontawesome-css', get_template_directory_uri(). '/css/all.min.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri(). '/css/whizkidefos.css', array('normalize', 'googlefonts'), '1.0.0' );

    // JavaScripts
    if ( !is_admin() ) wp_deregister_script('jquery');

    wp_enqueue_script( 'fontawesome-js', get_template_directory_uri(). '/js/all.min.js', array(), '5.14.0', 'true' );
    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.4.1', 'true' );
    wp_enqueue_script( 'main-js', get_template_directory_uri(). '/js/whizkidefos.js', array('jquery'), '1.0.0', 'true' );

}
add_action( 'wp_enqueue_scripts', 'theme_files' );

/*============ Custom Functions ===========*/
function t() {
    echo esc_url( get_template_directory_uri() );
}

/*============ Setup Theme ===========*/
function whizkidefos_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );

    // Register Menus
    function whizkidefos_menus() {
        register_nav_menus( 
            array (
                'main-menu'  => 'Main Menu'
            )
        );
    }
    add_action( 'init', 'whizkidefos_menus' );
    }
add_action( 'after_setup_theme', 'whizkidefos_setup' );

// Custom PostTypes

function register_portfolio() {

	$labels = [
		"name" => __( "Portfolios", "custom-post-type-ui" ),
		"singular_name" => __( "Portfolio", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Portfolios", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-widgets-menus",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "revisions", "page-attributes" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'register_portfolio' );

include('inc/featured-posts.php');


?>