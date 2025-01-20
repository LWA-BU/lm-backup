<?php
/*
Template Name: Page Dressings
*/

get_header(); ?>

    <main class="dressings">
        
        <div class="dressings__header">
            <p class="dressings__header-subtitle section-subtitle">Trouvez votre style</p>
            <h1 class="dressings__header-title section-title">Les dressings</h1>
            <p class="dressings__header-p paragraphe">
                « Le dressing  que nous concevons pour vous sur mesure, apporte une véritable plus-value en termes de rangement et d’organisation. 
                Il permet d’optimiser l’espace en regroupant vêtements, chaussures et accessoires en un seul endroit. 
                Bien aménagé, il ajoute une touche esthétique à la chambre, surtout s’il est conçu sur mesure. 
                Avec des solutions adaptées comme des tiroirs, des étagères et des penderies, il devient plus facile de maintenir un intérieur harmonieux et agréable au quotidien. » 
            </p>
        </div>

        <section>
            <article class="dressings__section dressing__section-ouvert">
                <div class="dressings__section-bg-img-subtitle">
                    <span class="dressings__section-bg bg-top"></span>
                    <div class="dressings__section-img-subtitle">
                        <span class="dressings__section-subtitle">Sensation d'espace</span>
                        <picture class="dressings__section-img">
                            <source class="dressings__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-ouvert-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img class="dressings__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-ouvert.jpg" alt="Dressing moderne ouvert sur chambre à coucher"  width="480" 
                            height="700">
                        </picture>
                    </div>
                </div>

                <div class="dressings__section-main  dressings__section-main-left">
                    <h2 class="dressings__section-main-title-light section-title">Dressing ouvert</h2>
                    <p class="dressings__section-main-paragraphe-right dressings-paragraphe paragraphe">
                        « Les matériaux naturels allient élégance et authenticité. Le meuble sous-vasque, avec ses teintes de bois, 
                        apporte une atmosphère chaleureuse tandis que le plan de toilette en marbre ajoute une touche de raffinement. 
                        Ce mélange harmonieux de bois et de marbre confère à la pièce un style naturel. »
                    </p>
                </div>
            </article>

         
        </section>

    </main>
<?php get_footer(); ?>