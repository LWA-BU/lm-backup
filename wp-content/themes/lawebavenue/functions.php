<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );




function lwa_register_assets() {
    
    // Déclarer le JS
	wp_enqueue_script( 
        'lwa', 
        get_template_directory_uri() . '/js/script.js', 
        array(), 
        '1.0', 
        true
    );
    

    // // Déclarer le fichier style.css à la racine du thème
    // wp_enqueue_style( 
    //     'lwa',
    //     get_stylesheet_uri(), 
    //     array(), 
    //     '1.0'
    // );

  	
    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style( 
        'lwa', 
        get_template_directory_uri() . '/assets/css/main.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );

    if(is_front_page()){
        wp_enqueue_style( 'front-page-styles', get_template_directory_uri() . '/assets/css/front-page.css' );
    }

}
add_action( 'wp_enqueue_scripts', 'lwa_register_assets' );


// Déclaration menu
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
));

get_template_part('parts/Custom_Walker_Nav_Menu'); 

