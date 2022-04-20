<?php
/**************************
*
* Gestion de la création de page descriptive d'un article (cour)
*
***************************/

?>

<?php get_header(); ?>
<main class="site__main">
  <!--  <h1>------- single-post.php -------</h1> -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article>
            
            <h1 class="cours__titre">
                <?php the_title(); ?>
            </h1>
            
               <section class="cours__details">
                  <img src="" alt="" class="thumbnail" <?php the_post_thumbnail() ?>>
                  <p class="cours__details__description"><?php echo get_the_content(); ?></p> 
               </section> 
        </article>

    <?php endwhile; ?>
    <?php endif; ?>

</main>


<?php get_footer();?>