<?php

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Menu Principal' ),
      'secondary-menu' => __( 'Menu Secundario' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'post-formats', array( 'image' ) );


/**
 * Register a custom post type called "Banner".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_Banner_init() {
  $labels = array(
      'name'                  => _x( 'Banners', 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( 'Banner', 'Post type singular name', 'textdomain' ),
      'menu_name'             => _x( 'Banners', 'Admin Menu text', 'textdomain' ),
      'name_admin_bar'        => _x( 'Banner', 'Add New on Toolbar', 'textdomain' ),
      'add_new'               => __( 'Add New', 'textdomain' ),
      'add_new_item'          => __( 'Add New Banner', 'textdomain' ),
      'new_item'              => __( 'New Banner', 'textdomain' ),
      'edit_item'             => __( 'Edit Banner', 'textdomain' ),
      'view_item'             => __( 'View Banner', 'textdomain' ),
      'all_items'             => __( 'All Banners', 'textdomain' ),
      'search_items'          => __( 'Search Banners', 'textdomain' ),
      'parent_item_colon'     => __( 'Parent Banners:', 'textdomain' ),
      'not_found'             => __( 'No Banners found.', 'textdomain' ),
      'not_found_in_trash'    => __( 'No Banners found in Trash.', 'textdomain' ),
      'featured_image'        => _x( 'Banner Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'archives'              => _x( 'Banner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
      'insert_into_item'      => _x( 'Insert into Banner', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this Banner', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
      'filter_items_list'     => _x( 'Filter Banners list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
      'items_list_navigation' => _x( 'Banners list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
      'items_list'            => _x( 'Banners list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'Banner' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'author', 'post-formats'),
  );

  register_post_type( 'Banner', $args );
}

add_action( 'init', 'wpdocs_codex_Banner_init' );

?>

