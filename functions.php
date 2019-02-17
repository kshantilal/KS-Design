<?php


// Add Scripts

function customScripts(){

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/KSDesign.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/KSDesign.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'customScripts');
