<?php

// Load the theme stylesheet
function morin_metro_enqueue_styles() {
    wp_enqueue_style('morin-metro-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'morin_metro_enqueue_styles');


// Set up theme features
function morin_metro_setup() {

    // Allow WordPress to control the page title
    add_theme_support('title-tag');

    // Enable featured images for posts
    add_theme_support('post-thumbnails');

    // Allow users to upload a custom logo
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu'
    ));

}

add_action('after_setup_theme', 'morin_metro_setup');

?>
