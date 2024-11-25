<nav class="header__menu"  role="navigation" aria-label="<?php _e('Main', 'LMMenuisier'); ?>">
           <?php wp_nav_menu( array( 
                'theme_location' => 'main',
                'container' => false, // supprimer la div autour du menu'
                'walker'         => new Custom_Walker_Nav_Menu()

            ) ); ?>
</nav>



