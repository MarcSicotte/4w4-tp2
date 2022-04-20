<?php get_header(); ?>
<main class="site__main-type2">
    <div class="site__main-typ2__titre">
        <h1 class="bienvenu">Bienvenu</h1>
        <h1 class="welcome">Welcome</h1>
        <h1 class="mandarin">欢迎</h1>
    </div>
    
    <div class="content">
    <h2>Ma plateforme Web</h2>
    <h3>582-4W4</h3>
    <p class="page__standard__p">Un site réaliser sur WordPress avec la méthode de développement SASS </p>

    <?php wp_nav_menu(array(
        "menu" => "menu_accueil",
        "container" => "nav" ));
    
    ?>

<?php wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav" ));
    
    ?>




    
</main>
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>