<?php

$content_width = 800; /* pixels */

function theme_setup() {

    load_theme_textdomain('textdomain', get_template_directory() . '/languages');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

//    add_theme_support( 'title-tag' ); //4.1



    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
    ));

    add_theme_support("post-thumbnails");

    add_image_size("newsize",400,800);
    add_image_size("newlargesize",1200,999999);
}

add_action('after_setup_theme', 'theme_setup');

function theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'theme'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'theme_widgets_init');

function theme_scripts() {


    wp_enqueue_style('skel-css', get_template_directory_uri() . '/css/skel.css');
    wp_enqueue_style('skel-style-css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style-xlarge-css', get_template_directory_uri() . '/css/style-xlarge.css');
    wp_enqueue_style('style-xsmall-css', get_template_directory_uri() . '/style.css');



    wp_enqueue_script('jquery-min.js', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '20120206', true);
    wp_enqueue_script('jquery-poptrox-min', get_template_directory_uri() . '/js/jquery.poptrox.min.js', array('jquery'), '20120206', true);
    wp_enqueue_script('skel-jquery', get_template_directory_uri() . '/js/skel.min.js', array('jquery'), '20120206', true);
    wp_enqueue_script('init-js', get_template_directory_uri() . '/js/init.js', array('jquery'), '20120206', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
