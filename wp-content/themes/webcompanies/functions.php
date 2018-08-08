<?php

/**
 * Bootstrap enqueue
 *
 */

function bootstrap_enqueue_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('bootstrap-style', get_stylesheet_uri(), $dependencies);
}

function bootstrap_enqueue_scripts()
{
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '4.1.3', true);
}

add_action('wp_enqueue_scripts', 'bootstrap_enqueue_styles');
add_action('wp_enqueue_scripts', 'bootstrap_enqueue_scripts');

function bootstrap_wp_setup()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'bootstrap_wp_setup');
