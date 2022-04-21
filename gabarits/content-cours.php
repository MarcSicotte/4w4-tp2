    <?php 
        $categorie = get_the_category();
        
    
    ?>
    
    <?php
            $mon_titre = get_the_title();
            $mon_titre_filtre = substr($mon_titre,7);
            $_monsigle = substr($mon_titre,0, 3);
            $mon_titre_filtre = substr($mon_titre_filtre,0, strrpos($mon_titre_filtre,'(')); 
            $ma_duree = substr($mon_titre,strrpos($mon_titre,'('));
            $departement = get_field("departement");
            $nbHeures = get_field("nombre_dheures");
            $desCours = get_the_excerpt();
            $desCours = get_the_content();

        ?>
            <section class="carte <?php echo $categorie[1]->slug; ?> ">
        
                    
                    <h3 class="carte__titre">
                        <?php the_post_thumbnail("thumbnail"); ?>
                        <a href="<?php echo get_permalink(); ?>"><?php echo $mon_titre_filtre ?></a> 
                    </h3>
                   
                    <div class="cours__nbre-heure"><?= $nbHeures ?></div>

                    <p class="carte__contenu"><?php echo the_excerpt(); ?></p>
                    <p class="cours__dep"><?= $departement; ?></p>
                    <p class="cours_desc">
                        <? wp_trim_words($desCours,12,"<button class='cours_desc_bouton'>Suite</button>");?>
                    </p>
                
                
            </section>     