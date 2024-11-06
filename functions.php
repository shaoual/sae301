<?php
// vignettes
add_theme_support( 'post-thumbnails' );

//ajouter une nouvelle zone de menu à mon thème

function register_my_menu(){
     register_nav_menus( array(
         'header-menu' => __( 'Menu De Tete'),
         'footer-menu'  => __( 'Menu De Pied'),
     ) );
 }
 add_action( 'init', 'register_my_menu', 0 );

 function init_my_custom()
{
   register_post_type(
       'recette',
       array(
       'label' => 'recettes',
       'labels' => array(
       'name' => 'Recettes',
       'singular_name' => 'Recette',
       'all_items' => 'Toutes les recettes',
       'add_new_item' => 'Ajouter une recette',
       'edit_item' => 'Éditer la recette',
       'new_item' => 'Nouvelle recette',
       'view_item' => 'Voir la recette',
       'search_items' => 'Rechercher parmi les recettes',
       'not_found' => 'Pas de recette trouvée',
       'not_found_in_trash'=> 'Pas de recette dans la corbeille'
       ),
       'public' => true,
       'capability_type' => 'post',
       'supports' => array(
       'title',
       'editor',
       'thumbnail'
       ),
       'has_archive' => true
       )
   );
}

