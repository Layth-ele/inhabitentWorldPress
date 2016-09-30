<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type
function inhabitent_adventure_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventure', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventure', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventure', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Adventure:', 'text_domain' ),
		'all_items'             => __( 'All Adventures', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adventure', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Adventure', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure', 'text_domain' ),
		'update_item'           => __( 'Update Adventure', 'text_domain' ),
		'view_item'             => __( 'View Adventure', 'text_domain' ),
		'search_items'          => __( 'Search Adventure', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into adventure', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this adventure', 'text_domain' ),
		'items_list'            => __( 'Adventures list', 'text_domain' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter adventures list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventure', 'text_domain' ),
		'description'           => __( 'Adventure', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'Adventures',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'inhabitent_adventure_post_type', 0 );


// Register Custom Post Type
function products() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Products', 'text_domain' ),
		'archives'              => __( 'products Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent products:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New product', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'search_items'          => __( 'Search Product', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'text_domain' ),
		'items_list'            => __( 'products list', 'text_domain' ),
		'items_list_navigation' => __( 'Products list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Products list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'Products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'products', 0 );
