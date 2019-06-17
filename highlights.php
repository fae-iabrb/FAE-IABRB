<?php $args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'cat'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true,
	'fields'           => '',
);
$posts = get_posts( $args ); ?>

<section class="highlights container">
  <div class="title">Destaques</div>
  
  <div class="highlights-container">

  <?php 
  
  foreach ( $posts as $post ) : setup_postdata( $post ); 
  
  ?>


	<div class="box">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
      <div class="post-title">
        <p><?php the_title(); ?></p>
      </div>
    </a>
	</div>


    <?php endforeach; 
    wp_reset_postdata();?>    
   
  </div>

  <button class="showMore"> 
    <a href="<?php echo get_home_url() . "/noticias/"; ?>">
      Ver mais notícias
      <i class="fas fa-angle-double-right"></i>
    </a>    
  </button>

</section>