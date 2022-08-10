<?php

function add_theme_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets//css/bootstrap.css', array(), '1.1', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), 1.1, true);

    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
