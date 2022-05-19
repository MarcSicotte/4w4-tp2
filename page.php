<?php get_header(); ?>
<main class="site__main-type2">
  <!--  <h1>------- page.php -------</h1> -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
      <h1><?php the_title(); ?></h1> 
    <div class="site__main-type2__content">  
           
             <?php the_content(); ?>
                
    </div>   

    <?php endwhile; ?>
    <?php endif; ?>

</main>


<?php get_footer();?>