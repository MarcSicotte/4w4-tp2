<?php
function cidw_4w4_enqueue() {
// wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css')
wp_enqueue_style('style_css', 
                get_template_directory_uri() . '/style.css',
                array(),
                filemtime(get_template_directory() . '/style.css'),
                false);

              

                wp_enqueue_style('cidw_4w_police_google',
                "https://fonts.googleapis.com/css2?family=Oxygen&family=Poppins&display=swap",
                false);
               
                wp_enqueue_script('style_css', 
                get_template_directory_uri() . '/javascript/boite-modale.js',
                array(),
                filemtime(get_template_directory() . '/javascript/boite-modale.js'),
                true);
              
} 

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/*************** Enregistrer les menu ********************/

function cidw_4w4_enregistre_mon_menu() {
  register_nav_menus( array(
    'principal'=> __( 'Menu Principal', 'cidw_4w4' ) ,
    'lien_externe'=> __( 'Lien externe', 'cidw_4w4' ) ,
    'menu_categorie_cours'=> __( 'categorie cours', 'cidw_4w4' ) ,
    'menu_accueil' =>__('Menu accueil', 'cidw_4w4'),
    'footer'=> __('Menu secondaire', 'cidw_4w4'))
  );
}
//allo
add_action( 'after_setup_theme', 'cidw_4w4_enregistre_mon_menu' );
/******************************* Ajouter la description du menu *********************/
function prefix_nav_description( $item_output, $item) {
  if ( !empty( $item->description ) ) {
      $item_output = str_replace( '</a>',
      '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
            $item_output );
  }
  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 2 );


/******************************* Filtré chacun des choix du menu *********************/

function cidw_4w4_filtre_le_menu($mon_objet){
        
    foreach($mon_objet as $cle => $valeur){
    
            $valeur->title = wp_trim_words($valeur->title, 4,"...");

        }
        return $mon_objet;
}

add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_le_menu");

/******************************* les supports du thème *********************/
add_theme_support('post-thumbnails');

/******************************* Enregistrement des sidebar *********************/


add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {
  /* Register the 'primary' sidebar. */
  register_sidebar(
    array(
        'id'            => 'entete_1',
        'name'          => __( 'Entete 1' ),
        'description'   => __( 'Entete 1' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )

    );
 
 
  register_sidebar(
      array(
          'id'            => 'pied_page_zone2',
          'name'          => __( 'pied de page zone 2' ),
          'description'   => __( 'A short description of the sidebar.' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="widget-title">',
          'after_title'   => '</h3>',
      )
      );

      register_sidebar(
        array(
            'id'            => 'pied_page_signature',
            'name'          => __( 'pied de page signature' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
        );

        register_sidebar(
          array(
              'id'            => 'logo',
              'name'          => __( 'logo' ),
              'description'   => __( 'A short description of the sidebar.' ),
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          )
          );

}

/*--------------------------------------------------------------------------------- */
function trouve_la_categorie($tableau){
  foreach($tableau as $cle){
      if(is_category($cle)) return($cle);
  }
}

/*----------------------HOOK -----------------------------*/

function cidw_4w4_pre_get_posts(WP_Query $query)
{
    if (is_admin() || !$query->is_main_query() || !$query->is_category(array('cours','web','jeu','design','utilitaire','creation-3d','video'))   )
    {
        return $query;
    }        
    else
    {
        $ordre = get_query_var('ordre', 'asc');
        $cle = get_query_var('cletri', 'title');       
        $query->set('order',  $ordre);
        $query->set('orderby', $cle);

        $query->set('postperpage','-1');
        return $query;
    }
}


function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
/* Le hook «pre_get_posts» nous permet d'alterer les composante de la requête WP_query */
add_filter('query_vars', 'cidw_4w4_query_vars' );
/* Le hook «query_vars» nous permet d'alterer les arguments de l'URL */

add_filter( 'show_admin_bar', '__return_true' );


  
?>