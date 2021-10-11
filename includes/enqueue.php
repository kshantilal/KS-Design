<?php

global $uri;
function customScripts(){

    $uri = get_template_directory_uri();

    // CSS scripts
    wp_enqueue_style( 'bootstrap_css', $uri . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '4.6.0');
    wp_enqueue_style( 'ksdesign_css', $uri . '/public/css/master.min.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'jquery' );
    

    // JS scripts
    wp_enqueue_script( 'bootstrap_bundle', $uri . '/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array(), '4.6.0');
    wp_enqueue_script( 'boostrap_js', $uri . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '4.6.0', true );
    wp_enqueue_script( 'ksdesign_js', $uri . '/public/js/master.min.js', array(), '1.0.0', true);
    
}