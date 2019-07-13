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





<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $post_id = get_the_ID(); ?> 
<?php $post_parent_id = wp_get_post_parent_id( get_the_ID() ); ?> 
<?php $post_parent = get_post($post_parent_id); ?>

<div class="page-header">
  <div class="container">
  
    <?php if($post_parent_id != 0): ?>
      <h5><a href="<?php echo $post_parent->guid; ?>"><?php echo $post_parent->post_title; ?></a></h5>
    <?php endif;?>
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


      <?php the_content();



        endwhile; else: ?>
        <p class="text-center">Nenhum conteúdo encontrado!</p>




      <?php endif; ?>

    </div>
  
    
  </div>


<?php get_footer(); ?>

