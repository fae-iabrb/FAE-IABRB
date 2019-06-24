<?php

$the_query = new WP_Query( $args ); 

$args = array( 
  'post_type'		=> 'Event',  
  'orderby'          => 'date',
	'order'            => 'DESC',
  'posts_per_page'   => 3
);

$events = get_posts($args);    

?>

<section class="event-subscriber">
  <div class="container">

    <div class="title">
      Inscrições de eventos
    </div>

    <div class="events-container">

      <?php  if($events):
      
      foreach ($events as $event):    
        $link = get_post_meta($event->ID, "link", true);
        $data = get_post_meta($event->ID, "data", true);
      ?>

      
      <a class="event-box" href="<?php echo $link ?>">
        <div class="event-title"><?php echo $event->post_title ?></div>
        <div class="event-info"> <?php echo $event->post_content ?> </div>
        <div class="event-data"><?php echo $data ?></div>
      </a>
      
      
      <?php endforeach; ?>
      <?php endif; ?>

    </div>

  </div>  
  
</section>