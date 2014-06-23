<?php

add_theme_support( 'post-thumbnails' ); 

// Register Portfolio Post Type
function Portfolio() {

	$labels = array(
		'name'                => _x( 'Items', 'Post Type General Name', 'ammarath' ),
		'singular_name'       => _x( 'Item', 'Post Type Singular Name', 'ammarath' ),
		'menu_name'           => __( 'Portfolio', 'ammarath' ),
		'parent_item_colon'   => __( 'Parent Item:', 'ammarath' ),
		'all_items'           => __( 'All Items', 'ammarath' ),
		'view_item'           => __( 'View Item', 'ammarath' ),
		'add_new_item'        => __( 'Add New Item', 'ammarath' ),
		'add_new'             => __( 'Add New', 'ammarath' ),
		'edit_item'           => __( 'Edit Item', 'ammarath' ),
		'update_item'         => __( 'Update Item', 'ammarath' ),
		'search_items'        => __( 'Search Item', 'ammarath' ),
		'not_found'           => __( 'Not found', 'ammarath' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ammarath' ),
	);
	$args = array(
		'label'               => __( 'portfolio', 'ammarath' ),
		'description'         => __( 'Portfolio', 'ammarath' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-pressthis',
		'can_export'          => false,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'portfolio', $args );

}

add_action( 'init', 'Portfolio', 0 );