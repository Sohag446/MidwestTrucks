<?php


function sohag_css_js_file_calling(){
    wp_enqueue_style( 'sohag-style',get_stylesheet_uri() );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom',get_stylesheet_uri() );

    //jQuery

    wp_enqueue_script('jquery');
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', 'true');
    wp_enqueue_script( 'custom-script');
}
add_action('wp_enqueue_scripts','sohag_css_js_file_calling');