<div class="section-container background-color-container white-text-container">
    <div class="container">
        
    <?php 

      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        ?>

        <div class="row">
          <div class="col-md-6">
            <h2><?php the_title(); ?></h2>
                    <img class="img-responsive" src="<?php get_stylesheet_uri() ?>/assets/images/page.jpg"><br>
            <p><?php the_content(); ?></p>
          </div>
        </div>
          
    <?php
    
      endwhile;
    endif;

      ?>


    </div>
</div>