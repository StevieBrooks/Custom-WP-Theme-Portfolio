<?php 

function brookscode_load_scripts() {
    wp_enqueue_style( 'brookscode-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'brookscode_load_scripts' );

function brookscode_config() {
    register_nav_menus(
        array (
            'brookscode_main_menu' => 'Main Menu',
            'brookscode_footer_menu' => 'Footer Menu'
        )
        );

        $headerArgs = array(
            'width' => 1280,
            'height' => 250
        );

        $logoArgs = array(
            'width' => 50,
            'height' => 50,
            'flex-width' => true,
            'flex-height' => true
        );

        add_theme_support( 'custom-header', $headerArgs );
        add_theme_support( 'custom-logo', $logoArgs );
        add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'brookscode_config', 0 );
