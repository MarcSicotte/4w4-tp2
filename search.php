<?php

/**
 * 
 * mon modèle search.php
 * 
 * 
 * Permet d'afficher les résultats recherche
 * 
 * 
 * 
 * @link 
 * 
 * @package cid-4w4
 */
?>
<?php get_header()?>
<main class="site__main">
    <?php if(have_posts()): ?>
    <?php while (have_posts()) : the_post();?>
        <article class="site__main__recherche">
            <h3>
                <a href="<?php echo get_permalink() ?>"><?php the_title()?></a>
            </h3>
            <p><?php echo wp_trim_words(get_the_content(), 20); // afficher le contenu limiter à 20 charactères ?></p>
            <hr>

        </article>

    <?php endwhile ?>

    <?php endif ?>

</main>

<?php get_footer()?>