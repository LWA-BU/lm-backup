<?php
/*
Template Name: Page Agencement intérieur
*/

get_header(); ?>

    <main class="agencement">
        
        <div class="agencement__header">
            <p class="agencement__header-subtitle section-subtitle">Concevoir et optimiser l'espace</p>
            <h1 class="agencement__header-title section-title">Agencement intérieur</h1>
            <p class="agencement__header-p paragraphe">
                « L’agencement intérieur va  généralement créer un sentiment d’ordre. 
                Celui que nous créons pour vous s’intègre au centimètre près à l’endroit auquel il est destiné. 
                Chaque meuble a sa fonction. » 
            </p>
        </div>

        <section class="agencement-etagere">

            <div class="agencement-etagere__main">

                    <h1 class="agencement-etagere__title agencement-title">étagère & bibliothèque</h1>

                    <div class="agencement-etagere__img">
                        <picture class="agencement-etagere__img-small">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/bibliotheque-etagere-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/bibliotheque-etagere.jpg" alt="Bibliothèque en mélaminé blanc sur bureau avec tiroirs et plan en marbre" width="375" 
                            height="440">
                        </picture>    

                        <picture class="agencement-etagere__img-tall">
                            <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/bibliotheque-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/bibliotheque.jpg" alt="Bibliotheque chic en bois gris anthracite au hauts arrondis et bas avec portes" width="385" 
                            height="600">
                        </picture>    

                        <picture class="agencement-etagere__img-square">
                            <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/etagere-bois-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/etagere-bois.jpg" alt="Tablettes de cuisine en bois de chêne clair" width="375" 
                            height="375">
                        </picture>    
                    </div>

                    <span class="agencement-etagere__banner"></span>

                    <p class="agencement-etagere__content-p paragraphe">
                        Bibliothèque et étagère permettent un rangement pratique et esthétique. Elles optimisent l’espace en libérant les surfaces et apportent un aspect structuré et soigné à la pièces.  
                    </p>
       
            </div>
        </section>

    </main>
<?php get_footer(); ?>