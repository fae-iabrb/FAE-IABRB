<?php
/*
 * Template Name: Page
 * Template Post Type: post, page
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-header">
  <h1><?php the_title();?></h1>
</div>


  <div class="page container">

    <div class="page-content">



    <?php the_content();



endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>




<?php endif; ?>

</div>
  </div>


<?php get_footer(); ?>