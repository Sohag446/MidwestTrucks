<?php

// Sidebar Register Function

function sohag_widgets_register(){

    register_sidebar( array(

        'name' => __('Main Widgets Area', 'sohag-hossen'),
        'id' => 'sidebar-1',
        'description' => 'Apperas in the sidebar','sohag-hossen',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',  
    ));

    register_sidebar( array(
        'name' => __('Footer Widgets Area Left', 'sohag-hossen'),
        'id' => 'footer-1',
        'description' => 'Apperas in the sidebar','sohag-hossen',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',    
    ));

    register_sidebar( array(
        'name' => __('Footer Widgets Area Right', 'sohag-hossen'),
        'id' => 'footer-2',
        'description' => 'Apperas in the sidebar','sohag-hossen',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'sohag_widgets_register');