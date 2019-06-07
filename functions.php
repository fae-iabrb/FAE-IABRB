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

add_action( 'init', 'post_type_artigo' );
function post_type_artigo() {
  register_post_type( 'bl_artigo',
    array(
      'labels' => array(
        'name' => 'Banners',
        'singular_name' => 'banner-media'
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

$labels = array(
  'name'               => 'Banner',
  'singular_name'      => 'Banner',
  'add_new'            => 'Adicionar novo',
  'add_new_item'       => 'Adicionar novo artigo',
  'edit_item'          => 'Editar artigo',
  'new_item'           => 'Novo artigo',
  'all_items'          => 'Todos os artigos',
  'view_item'          => 'Visualizar artigo',
  'search_items'       => 'Buscar artigos',
  'not_found'          => 'Nenhum artigo encontrado',
  'not_found_in_trash' => 'Nenhum artigo encontrado na lixeira',
  'menu_name'          => 'Artigos'
);



?>

