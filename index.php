<?php get_header(); ?>
<main class="site__main">
<h2 class="main__titre">Liste des cours</h2>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
        <?php
            $mon_titre = get_the_title();
            $mon_titre_filtre = substr($mon_titre,8);
            $_monsigle = substr($mon_titre,0,7);
            $mon_titre_filtre = substr($mon_titre_filtre,0, strrpos($mon_titre_filtre,'(')); 
            $ma_duree = substr($mon_titre,strrpos($mon_titre,'('));
        ?>
            <section class="carte">
                <h3 class="carte__titre"><?php echo $mon_titre_filtre ?></h3>
                <p class="carte__contenu"><?php echo the_excerpt(); ?></p>
            </section>     
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>