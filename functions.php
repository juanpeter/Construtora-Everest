<?php
    //Theme  Supports
    add_theme_support( 'post-thumbnails' );
    
    // Header Styles
    function recurring_stylesheets() {
        wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), null, 'all');
        wp_register_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );
        wp_register_style( 'gfonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:300,700&display=swap', array(), null, 'all' );
        wp_enqueue_style( 'bootstrap');
        wp_enqueue_style( 'aos');
        wp_enqueue_style( 'gfonts');

        // maybe does not belong here
        wp_register_style( 'main', get_template_directory_uri() . '/css/index.css', array(), null, 'all');
        // maybe does not belong here
        wp_enqueue_style( 'main');
    }
    add_action('wp_enqueue_scripts','recurring_stylesheets');
    
    // Footer Scripts
    function recurring_scripts() {
        wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/7b66cba164.js', array(), null, 'all', true );
        wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, 'all', true );
        // Maybe not needed
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, 'all', true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/index.js', array(), null, 'all', true );
    }
    add_action('wp_enqueue_scripts','recurring_scripts');

?>