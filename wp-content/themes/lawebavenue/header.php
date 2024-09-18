<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      
    <header class="header">
        <a class= "header_link" href="<?php echo home_url( '/' ); ?>">
            <img class="header_link-logo" src="<?php echo get_template_directory_uri(); ?>/img/LM_Menuisier.svg" alt="Logo"  >
        </a>  
    </header>
