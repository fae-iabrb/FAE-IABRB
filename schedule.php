<section class="schedule">
  <div class="container">
  
    <div class="title">AGENDA</div>

    <div class="schedule-container">

    

    <?php

$args = array( 
  'post_type'		=> 'schedule'
);

$agenda = get_posts($args);    

?>

<?php 

if($agenda):
 
foreach ($agenda as $item): 
 
$i++

?>

<div class="event-box">

<div class="data-box">
  <div class="data"><?php echo $title = $item->post_title; ?></div>
</div>

<div class="divider"></div>        

<div class="day-events-box">

<div class="event">

<?php echo $content = $item->post_content; ?> 

</div>        

</div>

</div> 


  
<?php endforeach; ?>
<?php endif; ?>

    
      
    </div>

  </div>
</section>