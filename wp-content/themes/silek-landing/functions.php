<?php

function silek_landing_assets() {
    wp_enqueue_style(
        'silek-landing-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'silek_landing_assets');

function silek_landing_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'silek_landing_setup');
