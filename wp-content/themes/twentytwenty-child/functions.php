<?php
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    function enqueue_parent_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    }

    function my_twentytwenty_sidebar() {
        register_sidebar(
        array (
        'name' => __( 'My Twenty Twenty sidebar', 'Twenty_Twenty' ),
        'id' => 'twenty-twenty-side-bar',
        'description' => __( 'Custom Twenty Twenty sidebar', 'Twenty_Twenty' ),
        'before_widget' => '<div>',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        )
        );
    }
    add_action( 'widgets_init', 'my_twentytwenty_sidebar' );
?>