<?php

function add_theme_scripts() {

    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css',array(),'1.0.0','all'); 
    wp_enqueue_style( 'mystyle', get_template_directory_uri().'/css/style.css',false,'2.0.0','all');

     wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function hs_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
    }
    add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );
