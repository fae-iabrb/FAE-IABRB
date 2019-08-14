<?php
/*
 * Template Name: Page
 * Template Post Type: post, page
 */
?>


<?php get_header(); ?>

<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$children_pages = new WP_Query( $args );
?>

<?php 

function getAnchorPostParent($value, $class) {  
  $post_parent_id = wp_get_post_parent_id($value);
  $post_parent_permalink = get_permalink($post_parent_id);
  $post_parent_title = get_the_title($post_parent_id);

  if($post_parent_id != 0) {
    $contet = "<a class='" . $class . "' href='" . $post_parent_permalink . "'>" . $post_parent_title . "</a>";
    return $contet;
  } else {
    return false;
  }  
 
}

?>


<?php $post_id = get_the_ID(); ?> 
<?php $current_post_content = get_post_field('post_content', $post_id); ?>


<div class="page-header">
  
<div class="container">

    
  <ul class="custom-breadcrumb text-center">

    <?php if(getAnchorPostParent($post_id, "") != false){
      $last_parent = $post_id;
      $breadcrumb = "";
        while(getAnchorPostParent($last_parent, "") != false){
          $breadcrumb = "<li>" . getAnchorPostParent($last_parent, "") . "</li>" . $breadcrumb;
          $last_parent = wp_get_post_parent_id($last_parent);
        }
      echo $breadcrumb;  
      }        
    ?> 
    
  </ul>      
    
  <h3><?php the_title();?></h3>   
    

  </div>
  
  
</div>


  <div class="page container">

    <div class="page-menus row">
      <?php if ( $children_pages->have_posts() ) : ?>

      <?php while ( $children_pages->have_posts() ) : $children_pages->the_post(); ?>

          <div id="parent-<?php the_ID(); ?>" class="parent-page-menu">

              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>           

          </div>

      <?php endwhile; ?>

      <?php endif; ?>
    </div>

  
    <div class="page-content">


      <?php echo $current_post_content; ?>
        
    </div>
  
    
  </div>


<?php get_footer(); ?>

