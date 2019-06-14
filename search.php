<?php get_header(); ?>


<div class="search-header">
  <h1>Resultados de Busca </h1>
</div>

  <div class="search container">
    <div class="search-content">

    <?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

    <div>    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="item-result">

          <div>
            <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span class="line"></span>
          </div>
          
          <a href="href="<?php the_permalink(); ?>>
          <div class="resume">         
            <?php the_post_thumbnail(); ?>   
            <p>
            <?php the_excerpt(); ?>
            </p>
          </div>
          </a>
          
          
          
          
          
            
              

        </div>   
    <?php endwhile; ?>
    </div>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    </div>

  </div>

  <?php get_footer(); ?>
