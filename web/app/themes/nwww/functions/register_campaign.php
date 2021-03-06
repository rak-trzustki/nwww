<?php


$labels = [
    'name' => _x('Kampanie', 'Post Type General Name', 'nwww'),
    'singular_name' => _x('Kampania', 'Post Type Singular Name', 'nwww'),
    'menu_name' => __('Kampanie', 'nwww'),
    'name_admin_bar' => __('Kampanie', 'nwww'),
    'archives' => __('Kampanie', 'nwww'),
    'attributes' => __('Kampanie', 'nwww'),
    'parent_item_colon' => __('Atka:', 'nwww'),
    'all_items' => __('Wszystkie', 'nwww'),
    'add_new_item' => __('Dodaj nową', 'nwww'),
    'add_new' => __('Dodaj nową', 'nwww'),
    'new_item' => __('Nowa kampania', 'nwww'),
    'edit_item' => __('Edytuj', 'nwww'),
    'update_item' => __('Zapisz', 'nwww'),
    'view_item' => __('Pokaż kampanię', 'nwww'),
    'view_items' => __('Pokaż kampanie', 'nwww'),
    'search_items' => __('Szukaj', 'nwww'),
    'not_found' => __('Not found', 'nwww'),
    'not_found_in_trash' => __('Not found in Trash', 'nwww'),
    'featured_image' => __('Featured Image', 'nwww'),
    'set_featured_image' => __('Set featured image', 'nwww'),
    'remove_featured_image' => __('Remove featured image', 'nwww'),
    'use_featured_image' => __('Use as featured image', 'nwww'),
    'insert_into_item' => __('Insert into item', 'nwww'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'nwww'),
    'items_list' => __('Items list', 'nwww'),
    'items_list_navigation' => __('Items list navigation', 'nwww'),
    'filter_items_list' => __('Filter items list', 'nwww'),];
$args = [
    'label' => __('Kampania', 'nwww'),
    'description' => __('Post Type', 'nwww'),
    'labels' => $labels,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes',],
    'taxonomies' => ['category'],
    'hierarchical' => true,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => 'kampanie',
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page'
];
register_post_type('kampania', $args);


