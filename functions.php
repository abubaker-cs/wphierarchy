<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

///////////////////////////////
// Function to Load CSS
///////////////////////////////
function wphierarchy_enqueue_styles()
{
    // Font: Varela Round
    wp_enqueue_style('varela-font-css', 'https://fonts.googleapis.com/css2?family=Varela+Round&display=swap', [], '', 'all');

    // change time(), to '' once development will be completed
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', ['varela-font-css'], time(), 'all');
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', ['main-css'], time(), 'all');
}

// Load CSS
add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');


///////////////////////////////
// Function to Load JavaScript
///////////////////////////////
function wphierarchy_enqueue_scripts()
{
    // wp_enqueue_script($handle, $src, $dep, $ver, $in_footer);
    // wp_enqueue_script('theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true);

    // Handle | jquery: // https://developer.wordpress.org/reference/functions/wp_enqueue_script/

    wp_enqueue_script('jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', ['jquery'], time(), true);
}

// Load JavaScript
add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_scripts');


// Register Menu Locations
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'wphierarchy'),
]);

// Setup Widget Areas: Main (for Blog)
function wphierarchy_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Main Sidebar', 'wphierarchy'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Add widgets for main sidebar here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => esc_html__('Page Sidebar', 'wphierarchy'),
        'id' => 'page-sidebar',
        'description' => esc_html__('Add widgets for page sidebar here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => esc_html__('Front Page Sidebar', 'wphierarchy'),
        'id' => 'front-page',
        'description' => esc_html__('Add widgets for front page here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}

add_action('widgets_init', 'wphierarchy_widgets_init');



?>
