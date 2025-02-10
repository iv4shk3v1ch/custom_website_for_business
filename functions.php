<?php
// Connect styles and scripts


function business_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri()); // Connects style.css
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'business_theme_scripts');


// Connect header, logo and menu
function business_theme_setup() {
    add_theme_support('custom-logo');  // Logo
    add_theme_support('post-thumbnails'); // Post's Miniatures 
    register_nav_menus(array(
        'primary' => __('Main menu', 'business-theme'),
    ));
}
add_action('after_setup_theme', 'business_theme_setup');

function business_theme_sidebar() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'business_theme_sidebar');

function business_theme_customizer($wp_customize) {
    $wp_customize->add_section('theme_colors', array(
        'title' => __('Theme Colour', 'business-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('primary_color', array(
        'default' => '#007bff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color_control', array(
        'label' => __('Main Color', 'business-theme'),
        'section' => 'theme_colors',
        'settings' => 'primary_color',
    )));
}
add_action('customize_register', 'business_theme_customizer');


function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/custom-style.php');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_script('jquery'); // Ensure jQuery is loaded
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');


?>