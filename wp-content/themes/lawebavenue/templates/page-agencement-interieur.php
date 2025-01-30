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

                    <p class="agencement-etagere__p paragraphe">
                        Bibliothèque et étagère permettent un rangement pratique et esthétique. Elles optimisent l’espace en libérant les surfaces et apportent un aspect structuré et soigné à la pièces.  
                    </p>
            </div>
        </section>

        <div class="agencement__icones">
            <span class="agencement__icones-kitchen icone"></span>
            <span class="agencement__icones-bathroom icone"></span>
            <span class="agencement__icones-dressing icone"></span>
            <span class="agencement__icones-library icone"></span>
        </div>

        <section class="agencement__combine">

            <div class="agencement__combine-img">

                <div class="agencement__combine-img-rect">
                    <picture class="agencement__combine-img-small">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/meuble-tv-blanc-480.jpg" media="(max-width: 480px)" type"image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/meuble-tv-blanc.jpg" alt="Bibliothèque en mélaminé blanc sur bureau avec tiroirs et plan en marbre" width="395" 
                        height="273">
                    </picture>    

                    <picture class="agencement__combine-img-square">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/meuble-tv-480.jpg" media="(max-width: 480px)" type"image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/meuble-tv.jpg" alt="Tablettes de cuisine en bois de chêne clair" width="468" 
                        height="345">
                    </picture>    
                </div>

                <picture class="agencement__combine-img-tall">
                    <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/combine-TV-480.jpg" media="(max-width: 767px)" type"image/jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agencement/combine-TV.jpg" alt="Bibliotheque chic en bois gris anthracite au hauts arrondis et bas avec portes" width="400" 
                    height="566">
                </picture>  
            </div>
            
            <div class="agencement__combine-content">
                <span class="agencement__combine-trait"></span>
                <div class="agencment__combine-txt">
                    <p class="agencement__combine-subtitle section-subtitle">Organiser son salon</p>
                    <h1 class="agencement__combine-title agencement-title">Meuble TV & combiné</h1>
                    <p class="agencement__combine-p paragraphe">
                        Les meubles TV combinés sont pratiques et esthétiques : ils offrent un espace de rangement pour organiser les équipements multimédias. 
                        En plus d’être fonctionnels, ils apportent une touche décorative au salon, s’adaptent aux différents styles d’intérieur grâce à une large variété de designs et de matériaux.
                    </p>
                </div>
            </div>
     

        </section>

    </main>
<?php get_footer(); ?>