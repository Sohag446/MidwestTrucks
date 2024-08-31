<?php
function midwesttrucks_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'midwesttrucks_setup');

function midwesttrucks_enqueue_styles() {
    wp_enqueue_style('midwesttrucks-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'midwesttrucks_enqueue_styles');
?>
