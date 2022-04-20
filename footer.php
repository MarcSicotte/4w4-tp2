
<footer class="site__footer">
<!--<div class="site__footer_colonne">
    <section class="footer__adresse">3800, rue Sherbrooke Est Montréal</section>
    <section class="footer__article"></section>
    <section class="footer__lien">
        
    </section>
    
<div class="site__footer_ligne">
    <section class="footer__description">4w4-Conception d'interfaces et développement Web</section>
    <section class="footer__copyright">&copy; Collège de Maisonneuve - Tout droit réserver</section>
    <section class="footer__menu">
        <?php /*
             $icone = '<svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array("menu"=>"footer",
                                    "container"=>"nav",
                                    "container_class" =>"footer__menu__nav",
                                    "menu_class"=>"site__footer__menu__nav__ul",
                                    "link_after"=> $icone));
                                    
        */?>
    </section>
    <section class="footer__recherche"> <?php /* get_search_form(); */?></section>
    <section class="footer__Auteur">Marc-Antoine Sicotte</section>
    
</div> -->

 <div class="site__footer__zone1">
    <ul class="infos">
        <li> <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ececec"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>3800, rue Sherbrooke Est Montréal</li>
        <li><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ececec"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg> 514 254-7131</li>
        <li><svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ececec"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838l-2.727 1.17 1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zm5.99 7.176A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>Intégration Multimédia</li>
    </ul>


    <div class="menu3">
        <?php
            wp_nav_menu(array("menu"=>"lien_externe"));
        ?>
        
    </div>
    
    


   

    <p class="text">
        <?php get_sidebar( 'pied_page_zone2' ); ?>
    </p>
    </div> 

    <div class="site__footer__zone2">
    <?php 
             $icone = '<svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array("menu"=>"secondaire",
                                    "container"=>"nav",
                                    "container_class" =>"site__footer__menu",
                                    "menu_class"=>"site__footer__menu__ul",
                                    "link_after"=> $icone));
                                    
        ?> 
     
       <div class="recherche">
            <?php get_search_form(); ?>
            <?php get_sidebar( 'pied_page_signature' ); ?>
            <p>Marc-Antoine Sicotte, tout droit réserver &copy;</p>
       </div>     
   
    </div>
    

        
</footer>
<?php wp_footer();?>



