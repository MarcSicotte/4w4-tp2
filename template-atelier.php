<?php /**

     * Template Name: atelier

     * @package WordPress

     * @subpackage cidw-4w4

     */ ?>

<?php get_header(); ?>
<main class="site__main-type2">
    <article class="atelier">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
   <h1>Atelier: <?php the_title(); ?></h1>
    <div class="site__main-type2__content">  
            <section class="atelier__desc">
                <h3>Description de l'atelier</h3>
                <?php the_field('description'); ?>
            </section>
            <div class="atelier__infos">
                <p class="atelier__endroit">
                    <h5>L'animateur de l'atelier</h5>
                    <h3><?php the_field('animateur'); ?></h3>
                </p>
                <p class="atelier__endroit">
                    <h5>l'atelier sera donné au local:</h5>
                    <h3><?php the_field('local'); ?><h3>
                </p>
                <p class="atelier__endroit">
                    <h5>Date de début:</h5>
                    <h3><?php the_field('date_debut'); ?></h3>
                </p>
                <p class="atelier__endroit">
                   <h5> Date de fin: </h5>
                    <h3><?php the_field('date_fin'); ?></h3>
                </p>
                <p class="atelier__endroit">
                   <h5> La formation se donnera:</h5>
                    <h3><?php the_field('jours'); ?></h3>
                </p>
                <p class="atelier__endroit">
                    <h5>La durée en nombre d'heure: </h5>
                    <h3><?php the_field('duree'); ?></h3>
                </p>
                <p class="atelier__endroit">
                    <h5>L'horaire: </h5>
                    De <h3><?php the_field('heure_debut'); ?></h3> à <h3><?php the_field('heure_fin'); ?></h3>
                </p>
                
                    
                
                
            </div>
            

            
                
    </div>   
    </article>
    <?php endwhile; ?>
    <?php endif; ?>

</main>


<?php get_footer();?>