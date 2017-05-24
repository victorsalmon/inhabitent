<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function register_products_post_type() {
$name = 'Product';
$name_low_case = 'product';
$name_plural = 'Products';
$name_plural_low_case = 'products';

	$labels = array(
		'name'                  => $name_plural,
		'singular_name'         => $name,
		'menu_name'             => $name_plural,
		'name_admin_bar'        => $name_plural,
		'archives'              => $name . ' Archives',
		'attributes'            => $name . ' Attributes',
		'parent_item_colon'     => 'Parent ' . $name . ':',
		'all_items'             => 'All ' . $name_plural,
	  'add_new_item'          => 'Add New '. $name,
		'add_new'               => 'Add '. $name,
		'new_item'              => 'New '. $name,
		'edit_item'             => 'Edit '. $name,
		'update_item'           => 'Update '. $name,
		'view_item'             => 'View '. $name,
		'view_items'            => 'View ' . $name_plural,
		'search_items'          => 'Search '. $name,
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into ' . $name_low_case,
		'uploaded_to_this_item' => 'Uploaded to this '. $name_low_case,
		'items_list'            => $name_plural . ' list',
		'items_list_navigation' => $name_plural . ' list navigation',
		'filter_items_list'     => 'Filter ' . $name_plural_low_case . ' list',
	);
	$args = array(
		'label'                 => $name,
		'description'           => $name_plural . ' are items sold by Inhabitent',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( $name_low_case, $args );
}
add_action( 'init', 'register_products_post_type', 0 );

function register_adventures_post_type() {
$name = 'Adventure';
$name_low_case = 'adventure';
$name_plural = 'Adventures';
$name_plural_low_case = 'adventures';

	$labels = array(
		'name'                  => $name_plural,
		'singular_name'         => $name,
		'menu_name'             => $name_plural,
		'name_admin_bar'        => $name_plural,
		'archives'              => $name . ' Archives',
		'attributes'            => $name . ' Attributes',
		'parent_item_colon'     => 'Parent ' . $name . ':',
		'all_items'             => 'All ' . $name_plural,
	  'add_new_item'          => 'Add New '. $name,
		'add_new'               => 'Add '. $name,
		'new_item'              => 'New '. $name,
		'edit_item'             => 'Edit '. $name,
		'update_item'           => 'Update '. $name,
		'view_item'             => 'View '. $name,
		'view_items'            => 'View ' . $name_plural,
		'search_items'          => 'Search '. $name,
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into ' . $name_low_case,
		'uploaded_to_this_item' => 'Uploaded to this '. $name_low_case,
		'items_list'            => $name_plural . ' list',
		'items_list_navigation' => $name_plural . ' list navigation',
		'filter_items_list'     => 'Filter ' . $name_plural_low_case . ' list',
	);
	$args = array(
		'label'                 => $name,
		'description'           => $name_plural . ' are blogs encouraging Inhabitent product use',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( $name_low_case, $args );
}
add_action( 'init', 'register_adventures_post_type', 0 );