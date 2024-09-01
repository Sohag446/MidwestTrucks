<?php
// Register Custom Post Type Track
function midwesttrucks_register_track_post_type() {
    $labels = array(
        'name'                  => _x('Tracks', 'Post Type General Name', 'sohag-hossen'),
        'singular_name'         => _x('Track', 'Post Type Singular Name', 'sohag-hossen'),
        'menu_name'             => __('Tracks', 'sohag-hossen'),
        'name_admin_bar'        => __('Track', 'sohag-hossen'),
        'archives'              => __('Track Archives', 'sohag-hossen'),
        'attributes'            => __('Track Attributes', 'sohag-hossen'),
        'parent_item_colon'     => __('Parent Track:', 'sohag-hossen'),
        'all_items'             => __('All Tracks', 'sohag-hossen'),
        'add_new_item'          => __('Add New Track', 'sohag-hossen'),
        'add_new'               => __('Add New', 'sohag-hossen'),
        'new_item'              => __('New Track', 'sohag-hossen'),
        'edit_item'             => __('Edit Track', 'sohag-hossen'),
        'update_item'           => __('Update Track', 'sohag-hossen'),
        'view_item'             => __('View Track', 'sohag-hossen'),
        'view_items'            => __('View Tracks', 'sohag-hossen'),
        'search_items'          => __('Search Track', 'sohag-hossen'),
        'not_found'             => __('Not found', 'sohag-hossen'),
        'not_found_in_trash'    => __('Not found in Trash', 'sohag-hossen'),
        'featured_image'        => __('Featured Image', 'sohag-hossen'),
        'set_featured_image'    => __('Set featured image', 'sohag-hossen'),
        'remove_featured_image' => __('Remove featured image', 'sohag-hossen'),
        'use_featured_image'    => __('Use as featured image', 'sohag-hossen'),
        'insert_into_item'      => __('Insert into track', 'sohag-hossen'),
        'uploaded_to_this_item' => __('Uploaded to this track', 'sohag-hossen'),
        'items_list'            => __('Tracks list', 'sohag-hossen'),
        'items_list_navigation' => __('Tracks list navigation', 'sohag-hossen'),
        'filter_items_list'     => __('Filter tracks list', 'sohag-hossen'),
    );
    $args = array(
        'label'                 => __('Track', 'sohag-hossen'),
        'description'           => __('Post Type for tracks', 'sohag-hossen'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true, 
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-car',
    );
    register_post_type('track', $args);
}

add_action('init', 'midwesttrucks_register_track_post_type');
?>
