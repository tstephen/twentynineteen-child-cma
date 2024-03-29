<?php
add_action( 'wp_enqueue_scripts', 'cmac_enqueue_styles' );
function cmac_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'twentynineteen-style' for the Twenty Nineteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}


