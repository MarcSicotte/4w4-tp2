<?php /**

     * Template Name: evenement

     * @package WordPress

     * @subpackage cidw-4w4

     */ ?>

<?php get_header(); ?>
<main class="site__main-type2">
    <article class="evenement">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
   <h1><?php the_title(); ?></h1>
    <div class="site__main-type2__content">  
            <section class="evenement__resume">
                <?php the_field('resume'); ?>
            </section>
            <div class="evenement__infos">
                <p class="evenement__endroit">
                    <?php the_field('endroit'); ?>
                </p>
                <p class="evenement__endroit">
                    <?php the_field('date'); ?>
                </p>
            </div>

            <div class="evenement__img">
            <?php 
                $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <h2>Venez en grand nombre!</h2>

            
                
    </div>   
    </article>
    <?php endwhile; ?>
    <?php endif; ?>

</main>


<?php get_footer();?>