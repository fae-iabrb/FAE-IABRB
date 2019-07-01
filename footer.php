<footer class="footer">
  <div class="container">
    <div class="contain">
      <div class="col">
        <h1>Geral</h1>
        <ul>

        <?php 

$menu_name = 'main-menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    foreach ( (array) $menu_items as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>'; 
    }

    echo $menu_list;
} 

?>
         
        </ul>
      </div>
      

      <?php 

$menu_name = 'secondary-menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id); 

    $refractedMenus = array();
    
                    
    foreach ( (array) $menu_items as $key => $menu_item ) {
      if ( $menu_item->menu_item_parent == 0 ) :
        $i++;      
        $j = 0;                   
        $title = $menu_item->title;
        $url = $menu_item->url;
        $id = $menu_item->ID;  
        $refractedMenus[$i] = $menu_item;
                                                  

          foreach ( (array) $menu_items as $key => $item ) {
            if ( ($item->menu_item_parent != 0) && ($item->menu_item_parent == $id)) :
              if (!$refractedMenus[$i]->subMenus):
                $refractedMenus[$i]->subMenus = array();
              endif;
                $refractedMenus[$i]->subMenus[$j] = $item;
              $j++;
            endif; 
          }
        
      endif; 
    } 
    
}            

?>


<?php 



if ($refractedMenus) {    

    foreach ( (array) $refractedMenus as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        echo "<div class='col'>";        
        echo "<h1>". $title . "</h1>"; 

        if($menu_item->subMenus): 
          echo "<ul>";
          foreach ((array) $menu_item->subMenus as $key => $submenu_item) {
            $sTitle = $submenu_item->title;
            $sUrl = $submenu_item->url;
            echo "<li><a href='" . $sUrl . "'>" . $sTitle . "</a></li>";
          }
          echo "</ul>";
        endif;

        echo "</div>";

    }

    
} 

?>      

      <div class="clearfix"></div>
    </div>
  </div>
</footer>

</body>

</html>
