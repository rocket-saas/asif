<?php
/*
* Creating a function to create our Asifteam
*/

function asifteam_custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Asifteam', 'Post Type General Name', 'trackhat' ),
		'singular_name'       => _x( 'Asifteam', 'Post Type Singular Name', 'trackhat' ),
		'menu_name'           => __( 'Asifteam', 'trackhat' ),
		'parent_item_colon'   => __( 'Parent Asifteam', 'trackhat' ),
		'all_items'           => __( 'All Asifteam', 'trackhat' ),
		'view_item'           => __( 'View Asifteam', 'trackhat' ),
		'add_new_item'        => __( 'Add New Asifteam', 'trackhat' ),
		'add_new'             => __( 'Add New', 'trackhat' ),
		'edit_item'           => __( 'Edit Asifteam', 'trackhat' ),
		'update_item'         => __( 'Update Asifteam', 'trackhat' ),
		'search_items'        => __( 'Search Asifteam', 'trackhat' ),
		'not_found'           => __( 'Not Found', 'trackhat' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'trackhat' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Asifteam', 'trackhat' ),
		'description'         => __( 'Asifteam news and reviews', 'trackhat' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'testimonial_ct' ),
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
	register_post_type( 'asifteam', $args );
	register_taxonomy('testimonial_for',array('asifteam'), array(
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

add_action( 'init', 'asifteam_custom_post_type', 0 );
