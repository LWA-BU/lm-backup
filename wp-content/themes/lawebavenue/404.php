
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
    <?php wp_body_open(); ?>

    <main class="error-container">

        <div class="error-container__content">
            <h1>Oups ! Page non trouvée (404)</h1>
            <p>Désolé, la page que vous recherchez semble introuvable.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link" role="button" aria-label="Retourner sur la page d'accueil">
                Retour à l'accueil
            </a>
        </div>

        <img class="footer__img-deco" src="<?php echo get_template_directory_uri(); ?>/assets/img/Arbre_logo.png" alt=""/>
    
    </main>

   
    <?php wp_footer(); ?>
</body>
</html>