<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <?php wp_head(); ?>
    <!--Cette page gère la crétion de l'entête et du menu principal du site -->
</head>
<body <?php body_class("site"); ?> >
<header class="site__header">
    <section class="site__header__titres">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>  " rel="home">
            <?php get_sidebar('logo'); ?>
        </a>
        
        <h2><?php echo get_bloginfo( 'description'); ?></h2>
    </section>
    <section class="site__header__util">
        
            <?php 
                get_sidebar('entete_1');
            ?>
        
        <?php get_search_form(); ?>

    </section>
</header>
<section class="site__barre">
<input  type="checkbox" id="chk-burger">
<label for="chk-burger" id="burger">
    <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</label>

    <?php 
        //Génération dynamique du nav 
        $icone = '<svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        wp_nav_menu(array("menu" => "principal",
                            "container" => "nav",
                            "link_before"=> $icone));
                            
    ?>
    

</section>
    
