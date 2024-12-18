<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="overlay"></div>
    <?php wp_body_open(); ?>
      
    <header class="header">

        <div class="header__navbar">
            <a class= "header__link" href="<?php echo home_url( '/' ); ?>">
                <img class="header_link-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/LM_Menuisier.svg" alt="Logo"  >
            </a> 

            <div class="header__btn" type="a" aria-label="Afficher ou masquer la navigation" aria-controls="menu" aria-expanded="false" aria-pressed="false" tabindex="0">
                <span class="header__btn-ligne"></span>
                <span class="visuallyhidden">Afficher ou masquer le menu de navigation</span>
            </div>

            <?php get_template_part('parts/nav_header'); ?>

        </div>
   

        <?php if(is_front_page()){ ?>

            <div class="header__banner">

                <h1 class="header__banner-title">artisan créateur d'espaces intérieurs <span class="header__banner-subtitle">sur mesure</span></h1>

                <?php get_template_part('parts/contact_banner'); ?>

                <div class="header__cta">
                    <a class="header__cta-link header__cta-link-cuisines btn-transparent"  href="votre-lien.html" aria-label="Voir nos cuisines">
                        <span>Cuisines</span>
                        <span class="icone"></span>
                    </a>

                    <a class="header__cta-link header__cta-link-sdb btn-transparent" href="votre-lien.html" aria-label="Voir nos salles de bain">
                        <span>Salles de bain</span>
                        <span class="icone"></span>
                    </a>

                    <a class="header__cta-link header__cta-link-dressings btn-transparent" href="votre-lien.html" aria-label="Voir nos dressings">
                        <span>Dressings</span>
                        <span class="icone" >
                    </a>
                </div>     

            </div>

        <?php } ?>


        <?php if(is_page('prestations')){ ?>

            <div class="headerPrestations__banner">
                
                <h1 class="headerPrestations__banner-title">De la conception à l'installation <span class="header__banner-subtitle">Projet clé en main</span></h1>

                <?php get_template_part('parts/contact_banner'); ?>

            </div>

        <?php } ?>

        

    </header>
