<?php
/**
 * OpenCode Presentation Theme Functions
 */

function opencode_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'opencode'),
    ));
}
add_action('after_setup_theme', 'opencode_setup');

function opencode_scripts() {
    wp_enqueue_style('opencode-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'opencode_scripts');