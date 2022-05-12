<?php get_header(); ?>
<main class="site__main-type2">
    <div class="site__main-typ2__titre">
        <h1 class="bienvenu">Bienvenu</h1>
        <h1 class="welcome">Welcome</h1>
        <h1 class="mandarin">欢迎</h1>
    </div>
    
    
    <h2>Activités en TIM<h2>
    <?php wp_nav_menu(array(
        "menu" => "menu_accueil",
        "container" => "nav" ));
    
    ?>
    <h2>Les événements importants pour l'année<h2>
    <?php wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav" ));
    
    ?>

    <?php if (have_posts()): the_post();?>
        <div class="galerieImg">
            <?php the_title()?>
            <?php the_content()?>
        </div>
    <?php endif ?>



    
</main>
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>