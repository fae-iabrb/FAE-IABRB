<div class="container">
  <div class="quick-menu">

  <?php

$the_query = new WP_Query( $args ); 

$args = array( 
  'post_type'		=> 'QuickMenus',  
  'orderby'    => 'menu_order',
  'order'    => 'ASC'
   
);

$quickmenus = get_posts($args);    

?>

<?php 

if($quickmenus):
 
foreach ($quickmenus as $menu):   

  $featured_img_url = get_the_post_thumbnail_url($menu->ID, 'full');
  $page_link = home_url() . "/" . $menu->post_content;
?>

<a href="<?php echo $page_link ?>">
<div class="box">
  <div class="title"><?php echo $menu->post_title ?></div>
  <div class="over-img"></div>
  <img src="<?php echo $featured_img_url ?>">      
</div>
</a> 



  
<?php endforeach; ?>
<?php endif; ?>


     
  </div>
</div>
