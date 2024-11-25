<nav class="footer__menu" role="navigation" aria-label="<?php _e('Footer', 'LMMenuisier'); ?>">
    <?php wp_nav_menu( array( 
        'theme_location' => 'footer',
        'container' => false, // supprimer la div autour du menu'
        'walker'         => new Custom_Walker_Nav_Menu()
    ) ); ?>
</nav>