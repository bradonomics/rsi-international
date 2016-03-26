<?php

//* Add Testimonials Post Type
add_action( 'init', 'register_projects_post_type' );
function register_projects_post_type() {
  register_post_type( 'testimonials', array(
      'labels' => array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
      ),
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'genesis-seo',
        'genesis-layouts',
        'genesis-cpt-archives-settings',
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_menu' => true,
      'exclude_from_search' => false,
      'rewrite' => array( 'slug' => 'testimonial' ),
      'query_var' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-format-status',
    )
  );
}

//* Add Jobs Post Type
add_action( 'init', 'register_jobs_post_type' );
function register_jobs_post_type() {
  register_post_type( 'jobs', array(
      'labels' => array(
        'name' => 'Jobs',
        'singular_name' => 'Job',
      ),
      'supports' => array(
        'title',
        'editor',
        'genesis-seo',
        'genesis-layouts',
        'genesis-cpt-archives-settings',
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_menu' => true,
      'exclude_from_search' => false,
      'rewrite' => array( 'slug' => 'job' ),
      'query_var' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-clipboard',
    )
  );
}
