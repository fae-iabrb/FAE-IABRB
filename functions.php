<?php

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Menu Principal' ),
      'bottom-menu' => __( 'Menu Secundario' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

?>