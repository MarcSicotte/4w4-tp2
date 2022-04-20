<?php /**

     * Template Name: evenement

     * @package WordPress

     * @subpackage cidw-4w4

     */ ?>

<?php get_header(); ?>
<main class="site__main-type2">
    <!--<h1>------- template-evenement -------</h1>-->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_post_thumbnail();?>    
    <h1><?php the_title(); ?></h1> 
    <div class="site__main-type2__content">  
           
            <?php echo get_the_content(); ?>
                
    </div>   

    <?php endwhile; ?>
    <?php endif; ?>

</main>


<?php get_footer();?>