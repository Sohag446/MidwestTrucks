<?php
// Register Custom Post Type: Trucks
function sohag_register_trucks() {
    $args = array(
        'label'                 => __( 'Trucks', 'sohag-hossen' ),
        'description'           => __( 'Post type for trucks', 'sohag-hossen' ),
        'public'                => true,
        'supports'              => array( 'title', 'editor', 'thumbnail' ), // Add 'thumbnail' support
        'has_archive'           => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-car',
        'show_in_rest'          => true, // Enable REST API support for Gutenberg
        'rewrite'               => array('slag' => 'trucks'),
    );
    register_post_type( 'truck', $args );
}
add_action( 'init', 'sohag_register_trucks' );

// Ensure your theme supports post thumbnails globally
add_theme_support( 'post-thumbnails' );