<?php /**

     * Template Name: atelier

     * @package WordPress

     * @subpackage cidw-4w4

     */ ?>

<?php get_header(); ?>
<main class="site__main-type2">
    <article class="atelier">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
   <h1><?php the_title(); ?></h1>
    <div class="site__main-type2__content">  
            <section class="atelier__desc">
                <?php the_field('description'); ?>
            </section>
            <div class="atelier__infos">
                <p class="atelier__endroit">
                    <?php the_field('animateur'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('date_debut'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('date_fin'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('jours'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('heure_debut'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('heure_fin'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('duree'); ?>
                </p>
                <p class="atelier__endroit">
                    <?php the_field('local'); ?>
                </p>
            </div>
            <h2>Venez en grand nombre!</h2>

            
                
    </div>   
    </article>
    <?php endwhile; ?>
    <?php endif; ?>

</main>


<?php get_footer();?>