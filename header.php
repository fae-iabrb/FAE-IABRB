<!DOCTYPE html>

<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  
  
  
 
  <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri() ?>/lib/less/master.less"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/lib/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <script src="<?php echo get_template_directory_uri() ?>/lib/js/less.min.js" ></script>
  <script src="<?php echo get_template_directory_uri() ?>/lib/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/lib/js/popper.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/lib/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>FAE | IABRB</title> 
</head>
<script>
  $(document).ready(function(){
    $('.mobile-menu-button').on('click touchstart', function(e){
      $('html').toggleClass('mobile-menu-active');
        e.preventDefault();
    });
  })
</script>
<body>
<header class="header">
  <div class="top-header">
    <div class="top-header-inside container">
      <div class="portalsMenu">
        <div class="menu" data-toggle="collapse" data-target="#portals">
          <img class="header-arrow" src="<?php echo get_template_directory_uri() ?>/lib/images/icons/view-more-icon.svg" width="16px"height="16px"/>
          <span class="top-header-portals">Portais Web</span>
        </div>
        <div class="collapse" id="portals">
        <?php 

          $menu_name = 'portals';

          if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

              $menu_items = wp_get_nav_menu_items($menu->term_id);

              foreach ( (array) $menu_items as $key => $menu_item ) {        
                  $title = $menu_item->title;
                  $url = $menu_item->url;
                  $menu_list .= '<div><a href="' . $url . '">' . $title . '</a></div>';                                       
                
              }
              
          } else {
              $menu_list = '<div><a>Menu "' . $menu_name . '" not defined.</a></div>';
          }

          echo $menu_list;

          ?> 
                                  
        </div>
        </div>

      <span class="vertical-line"></span>
      <div class="top-header-social-medias">
        <a href="#"
          ><img
            class="top-header-facebook-img"
            src="<?php echo get_template_directory_uri() ?>/lib/images/icons/fb-logo.svg"
            width="22px"
            height="22px"
        /></a>
        <a href="#"
          ><img
            class="top-header-instagram-img"
            src="<?php echo get_template_directory_uri() ?>/lib/images/icons/insta-logo.svg"
            width="22px"
            height="22px"
        /></a>
      </div>
      <span class="vertical-line"></span>
      <img
        class="top-header-phone-img"
        src="<?php echo get_template_directory_uri() ?>/lib/images/icons/phone.png"
        width="20px"
        height="20px"
      />
      <span class="top-header-phone">(54) 2107-7800</span>
    </div>
  </div>
  <div class="main-header">
    <div class="main-header-inside container">
      <div class="logo-barao">
        <img
          src="<?php echo get_template_directory_uri() ?>/lib/images/logos/IABRB-logo.svg"
          alt="Instituto Anglicano Barão do Rio Branco"
        />
        <p>Instituto Anglicano Barão Do Rio Branco</p>
      </div>

      <div class="main-header-inside-middle">
        <div class="top-menus">
          <div class="top-menus-content">
              
              <?php 

                $menu_name = 'main-menu';
 
                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                
                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $menu_list = "";
                
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $i++; 
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $menu_list .= '<div class="menu-item"><a href="' . $url . '">' . $title . '</a></div>';                       
                    }
                    
                } else {
                    $menu_list = '<div><span>Menu "' . $menu_name . '" not defined.</span></div>';
                }

                echo $menu_list;

              ?>
          </div>
        </div>
        
        <div class="middle-search">
        <span class="mobile-menu-button"></span>
        <?php get_search_form(); ?>
        </div>
        <nav class="bottom-menus">

        <?php 

            $menu_name = 'secondary-menu';

            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            
                $menu_items = wp_get_nav_menu_items($menu->term_id);   
                
                $menu_list = "";
                                
                foreach ( (array) $menu_items as $key => $menu_item ) {
                  if ( $menu_item->menu_item_parent == 0 ) :                         
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    $id = $menu_item->ID;  
                    $haveChild = false;                                              
                    $menu_list .= '<div data-toggle="collapse" href="' . "#menu-" . $id  . '">' . $title . '</a>'; 

                      foreach ( (array) $menu_items as $key => $item ) {
                        if ( ($item->menu_item_parent != 0) && ($item->menu_item_parent == $id)) :                     
                          $haveChild = true;
                        endif; 
                      }

                      if ($haveChild):
                      $menu_list .= '<i class="fas fa-angle-down"></i>';
                      endif; 

                    $menu_list .= '</div>';
                    
                  endif; 
                } 
                
            } else {
                $menu_list = '<div><span>Menu "' . $menu_name . '" not defined.</span></div>';
            }

            echo $menu_list;               

        ?>
        
        </nav>
      </div>
      <div class="logo-fae">
        <img
          src="<?php echo get_template_directory_uri() ?>/lib/images/logos/FAE-logo.svg"
          alt="Faculdade Anglicana de Erechim"
        />
        <p>Faculdade Anglicana de Erechim</p>
      </div>
    </div>
  </div>
  <div class="submenu">
    <div class="container" id="bottom-menus">

    <?php

        $menu_name = 'secondary-menu';

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        
            $menu_items = wp_get_nav_menu_items($menu->term_id);   
            
            $menu_list = "";
            $i = 0;
            $lastParent = 0;
            foreach ( (array) $menu_items as $key => $menu_item ) {
              if ( $menu_item->menu_item_parent != 0 ) :  
                $title = $menu_item->title;
                $url = $menu_item->url;
                $parent_id = $menu_item->menu_item_parent;   
                
                if ($lastParent != $parent_id && $i != 0):
                  $menu_list .= '</div>';
                endif;

                if ($lastParent != $parent_id):
                $menu_list .= '<div id='. '"menu-' . $parent_id . '"class="collapse" data-parent="#bottom-menus">';
                endif; 

                if ($i == 0):
                  $lastParent = $parent_id; 
                endif; 

                $menu_list .= '<a href="' . $url . '">' . $title . '</a>';  

                if ($lastParent != $parent_id):
                $menu_list .= '</div>';
                endif;

                $i++; 
                $lastParent = $parent_id;                 
              endif; 
            } 
            
        } else {
            $menu_list = '<div><span>Menu "' . $menu_name . '" not defined.</span></div>';
        }
        
        echo $menu_list;  
    ?>




    </div>
  </div>
</header>

<menu class="mobile-menu">

<li data-toggle='collapse' data-target='#main-menus-mobile' >
  <span>Portais</span>
  <i class='fas fa-angle-down'></i>
  <ul id="main-menus-mobile" class='panel-collapse collapse'>

<?php 

$menu_name = 'main-menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    foreach ( (array) $menu_items as $key => $menu_item ) {
        $i++; 
        $title = $menu_item->title;
        $url = $menu_item->url;
        echo '<li><a href="' . $url . '">' . $title . '</a></li>';
        if ($i != count($menu_items)) {
          $menu_list .= $separetor;
        }  
    }
    
} 

?>

</ul>
</li>


<?php 

$menu_name = 'secondary-menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id); 

    $mobileMenus = array();
    
                    
    foreach ( (array) $menu_items as $key => $menu_item ) {
      if ( $menu_item->menu_item_parent == 0 ) :
        $i++;      
        $j = 0;                   
        $title = $menu_item->title;
        $url = $menu_item->url;
        $id = $menu_item->ID;  
        $mobileMenus[$i] = $menu_item;
                                                  

          foreach ( (array) $menu_items as $key => $item ) {
            if ( ($item->menu_item_parent != 0) && ($item->menu_item_parent == $id)) :
              if (!$mobileMenus[$i]->subMenus):
                $mobileMenus[$i]->subMenus = array();
              endif;
                $mobileMenus[$i]->subMenus[$j] = $item;
              $j++;
            endif; 
          }
        
      endif; 
    } 
    
}            

?>

<?php 


if ($mobileMenus) {    

    foreach ( (array) $mobileMenus as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $id = $menu_item->ID;

        echo "<li data-toggle='collapse' data-target='#submenu-mobile-". $id ."'>";
        
        if(!$menu_item->subMenus): 
          echo "<a href='" . $url . "'>" . $title . "</a>";
        endif;

        if($menu_item->subMenus): 
          echo "<span>" . $title . "</span>";
          echo "<i class='fas fa-angle-down'></i>";
          echo "<ul id='submenu-mobile-". $id ."' class='panel-collapse collapse'>";
          foreach ((array) $menu_item->subMenus as $key => $submenu_item) {
            $sTitle = $submenu_item->title;
            $sUrl = $submenu_item->url;
            echo "<li><a href='" . $sUrl . "'>" . $sTitle . "</a></li>";
          }
          echo "</ul>";
        endif;

        echo "</li>";
        
    }
    
} 

?>  

<li data-toggle='collapse' data-target='#portals-mobile' >
  <span>Portais</span>
  <i class='fas fa-angle-down'></i>
  <ul id="portals-mobile" class='panel-collapse collapse'>
  <?php 

$menu_name = 'portals';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    foreach ( (array) $menu_items as $key => $menu_item ) {        
        $title = $menu_item->title;
        $url = $menu_item->url;
        echo '<li><a href="' . $url . '">' . $title . '</a></li>'; 
    }
    
} 

?> 
  </ul>
</li>

</menu>


