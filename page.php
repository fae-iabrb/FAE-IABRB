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

$parent = new WP_Query( $args );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-header">
  <div class="container">
    <h1><?php the_title();?></h1>
  </div>
  
</div>


  <div class="page container">

    <div class="page-menus row">
      <?php if ( $parent->have_posts() ) : ?>

      <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

          <div id="parent-<?php the_ID(); ?>" class="parent-page-menu">

              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>           

          </div>

      <?php endwhile; ?>

      <?php endif; ?>
    </div>

  
    <div class="page-content">


      <?php the_content();



        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>




      <?php endif; ?>

    </div>
  
    
  </div>


<?php get_footer(); ?>