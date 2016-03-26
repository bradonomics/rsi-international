<?php

//* Add Position Type Category for Jobs Post Type
add_action( 'init', 'rsi_job_position_type_taxonomy', 0 );
function rsi_job_position_type_taxonomy() {
  register_taxonomy( 'job_position', 'jobs', array(
      'labels' => array(
        'name' => _x( 'Position Type', 'taxonomy general name' ),
        'singular_name' => _x( 'Position Type', 'taxonomy singular name' ),
        'search_items' => __( 'Search Position Types' ),
        'all_items' => __( 'All Position Types' ),
        'parent_item' => __( 'Parent Position Type' ),
        'parent_item_colon' => __( 'Parent Position Type:' ),
        'update_item' => __( 'Update Position Type' ),
        'edit_item' => __( 'Edit Position Type' ),
        'add_new_item' => __( 'Add New Position Type' ),
        'new_item_name' => __( 'New Position Type' ),
        'menu_name' => __( 'Position Types' ),
      ),
      'rewrite' => array(
        'slug' => 'position-type'
      ),
      'hierarchical' => true,
    )
  );
}

//* Add Role Taxonomy for Jobs Post Type
add_action( 'init', 'rsi_job_role_type_taxonomy', 0 );
function rsi_job_role_type_taxonomy() {
  register_taxonomy( 'job_role', 'jobs', array(
      'labels' => array(
        'name' => _x( 'Role Type', 'taxonomy general name' ),
        'singular_name' => _x( 'Role Type', 'taxonomy singular name' ),
        'search_items' => __( 'Search Role Types' ),
        'all_items' => __( 'All Role Types' ),
        'parent_item' => __( 'Parent Role Type' ),
        'parent_item_colon' => __( 'Parent Role Type:' ),
        'update_item' => __( 'Update Role Type' ),
        'edit_item' => __( 'Edit Role Type' ),
        'add_new_item' => __( 'Add New Role Type' ),
        'new_item_name' => __( 'New Role Type' ),
        'menu_name' => __( 'Role Types' ),
      ),
      'rewrite' => array(
        'slug' => 'role-type'
      ),
      'hierarchical' => true,
    )
  );
}
