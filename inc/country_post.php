<?php
/*
* Creating a function to create our Country
*/

function country_custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Country', 'Post Type General Name', 'trackhat' ),
		'singular_name'       => _x( 'Country', 'Post Type Singular Name', 'trackhat' ),
		'menu_name'           => __( 'Country', 'trackhat' ),
		'parent_item_colon'   => __( 'Parent Country', 'trackhat' ),
		'all_items'           => __( 'All Country', 'trackhat' ),
		'view_item'           => __( 'View Country', 'trackhat' ),
		'add_new_item'        => __( 'Add New Country', 'trackhat' ),
		'add_new'             => __( 'Add New', 'trackhat' ),
		'edit_item'           => __( 'Edit Country', 'trackhat' ),
		'update_item'         => __( 'Update Country', 'trackhat' ),
		'search_items'        => __( 'Search Country', 'trackhat' ),
		'not_found'           => __( 'Not Found', 'trackhat' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'trackhat' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Country', 'trackhat' ),
		'description'         => __( 'Country news and reviews', 'trackhat' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'country_ct' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'country', $args );
	register_taxonomy('country_for',array('country'), array(
    'hierarchical' => true,
    'labels' => $labels_ct,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'project_for' ),
  ));

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'country_custom_post_type', 0 );
