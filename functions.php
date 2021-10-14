<?php


// Includes
include( get_theme_file_path('/includes/enqueue.php') );

// Ability to add featured image to posts
add_theme_support( 'post-thumbnails' );

// Hooks
add_action('wp_enqueue_scripts', 'customScripts');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function customMenuSetup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'This is the main navigation located at the top of the page');
}
add_action('init', 'customMenuSetup');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'KS Design' ),
) );
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


function bootstrap_nav(){
    wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse w-100 flex-grow-1 text-right',
        'container_id'    => 'myNavbar',
        'menu_class'      => 'navbar-nav ml-auto flex-nowrap',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
}
