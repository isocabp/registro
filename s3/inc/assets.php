<?php
/**
* Enqueue scripts and styles.
*/
add_action('wp_enqueue_scripts', 's3_enqueue_scripts');
function s3_enqueue_scripts() {
    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0', true);

    wp_enqueue_style('app', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'agencia-s3', get_stylesheet_uri(), array(), '1.0', 'all' );
}