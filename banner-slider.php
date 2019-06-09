<section class="banner-slider">

  <div id="banner-carousel" class="carousel slide" data-ride="carousel">
    
    <!-- The slideshow -->
  <div class="carousel-inner">

    <?php

    $args = array( 
      'post_type'		=> 'Banner'
    );

    $banners = get_posts($args);    

    ?>

    <?php 

    if($banners):
     
    foreach ($banners as $banner): 
     
    $i++

    ?>

    <div class="carousel-item <?php if ($i == 1): echo ' active'; endif;?>">
      
      <?php echo $content = $banner->post_content; ?> 
      
    </div>   

    
      
    <?php endforeach; ?>
    <?php endif; ?>
   
     
  </div>
    
    <!-- Left and right controls -->
    <div class="container">      
        <a class="carousel-control-prev" href="#banner-carousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#banner-carousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>           
    </div>

  </div>

</section>
