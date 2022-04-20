<?php get_header(); ?>
<main class="site__main">
   <!-- <h1>-------------------------------------Category-------------------------------------</h1> -->
  
   <?php 

        $url_categorie_slug = trouve_la_categorie(array('web','jeu','design', 'utilitaire', 'creation-3d', 'video', 'cours'));
        $ma_categorie = get_category_by_slug($url_categorie_slug);
        echo "<h1>" . $ma_categorie->description . "</h1>"
       
    ?>
    
   <?php
        wp_nav_menu(array(
            "menu" => "categorie_cours",
            "container" => "nav"
        ));


    ?>
    <div class="filtre">
    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
        <a href="?cletri=title&ordre=asc">Ascendant</a>
        <a href="?cletri=title&ordre=desc">Descendant</a>
    </div>
   
    


    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
        <?php get_template_part("gabarits/content","cours"); ?>

        
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>