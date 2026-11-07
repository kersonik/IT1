<?php
// Theme Setup
function computer_repair_elementor_theme_setup() {
    // Theme supports
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

    // Block Patterns
    register_block_pattern_category(
        'computer-repair-elementor',
        array('label' => __('Computer Repair Elementor Patterns', 'computer-repair-elementor'))
    );

    // Register navigation menus
    register_nav_menus(array(
        'menu-1' => __('Primary Menu', 'computer-repair-elementor'),
    ));
}
add_action('after_setup_theme', 'computer_repair_elementor_theme_setup');

require get_template_directory() .'/tgm/tgm.php';

// Enqueue Scripts and Styles
function computer_repair_elementor_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.0.0' );
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array('bootstrap-css'), wp_get_theme()->get('Version'));
    wp_enqueue_script('computer-repair-elementor-navigation', get_template_directory_uri() . '/assets/js/navigation.js', FALSE, '1.0', TRUE );
    wp_enqueue_script('computer-repair-elementor-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'computer_repair_elementor_enqueue_scripts');

// Sidebar Registration
function computer_repair_elementor_register_sidebars() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'computer-repair-elementor'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'computer-repair-elementor'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'computer_repair_elementor_register_sidebars');

// Add Editor Style
function computer_repair_elementor_add_editor_styles() {
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'computer_repair_elementor_add_editor_styles');

// Register Block Styles
function computer_repair_elementor_register_block_styles() {
    register_block_style('core/paragraph', array(
        'name'  => 'custom-paragraph',
        'label' => __('Custom Paragraph', 'computer-repair-elementor'),
    ));
}
add_action('init', 'computer_repair_elementor_register_block_styles');

// Add Pagination Support
function computer_repair_elementor_post_pagination() {
    the_posts_pagination(array(
        'prev_text' => __('Previous', 'computer-repair-elementor'),
        'next_text' => __('Next', 'computer-repair-elementor'),
    ));
}
