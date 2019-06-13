<?php /* Template Name: Conteúdo */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="pageHeader">
  <h1><?php the_title();?></h1>
</div>


  <div class="pageMain container">

    <div class="pageContent">



    <?php the_content();



endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>




<?php endif; ?>

</div>
  </div>


<?php get_footer(); ?>