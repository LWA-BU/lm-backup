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
            <article class="dressings__section dressing__section-left">
                <div class="dressings__section-bg-img-subtitle">
                    <span class="dressings__section-bg bg-top"></span>
                    <div class="dressings__section-img-subtitle">
                        <span class="dressings__section-subtitle">Sensation d'espace</span>
                        <picture class="dressings__section-img">
                            <source class="dressings__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-ouvert-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img class="dressings__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-ouvert.jpg" alt="Dressing moderne ouvert sur chambre à coucher"  width="700" 
                            height="525">
                        </picture>
                    </div>
                </div>

                <div class="dressings__section-main  dressings__section-main-left">
                    <h2 class="dressings__section-main-title section-title">Dressing ouvert</h2>
                    <p class="dressings__section-main-paragraphe dressings-paragraphe paragraphe">
                    « Le dressing ouvert offre une sensation d’espace. Pour en tirer le meilleur parti, 
                    il est essentiel de miser sur une organisation impeccable et une esthétique raffinée. 
                    Avec des étagères élégantes et des accessoires de rangement décoratifs, 
                    un dressing ouvert devient une véritable vitrine de votre style personnel. 
                    En choisissant des matériaux harmonieux et des couleurs assorties, ce type d’aménagement s’intègre parfaitement à votre intérieur.
                    Offrez-vous un dressing qui allie praticité et beauté et laissez vos vêtements raconter votre histoire !. »
                    </p>
                </div>
            </article>


            <article class="dressings__section dressing-hdg dressing__section-top">
                <div class="dressings__section-bg-img-subtitle">
                    <span class="dressings__section-bg bg-top"></span>
                    <div class="dressings__section-img-subtitle">
                        <span class="dressings__section-subtitle">Chic & Raffiné</span>
                        <picture class="dressings__section-img">
                            <source class="dressings__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-haut-de-gamme-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img class="dressings__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-haut-de-gamme.jpg" alt="Dressing haut de gamme en chêne clair et porte avec miroir teinté"  width="700" 
                            height="525">
                        </picture>
                    </div>
                </div>

                <div class="dressings__section-main  dressings__section-main-top">
                    <h2 class="dressings__section-main-title section-title">Haut de gamme</h2>
                    <p class="dressings__section-main-paragraphe dressings-paragraphe paragraphe">
                    « Un dressing haut de gamme se distingue par des matériaux nobles — bois précieux, finitions en cuir, miroirs sans défaut — et 
                    par un éclairage doux, idéal pour révéler les textures et couleurs des vêtements et accessoires.
                    Il est généralement aménagé de tiroirs compartimentés, d’étagères modulables, de penderies extensibles et même de présentoirs pour les pièces les plus précieuses. 
                    Il est pensé pour faciliter l’accès à la garde-robe. L’ensemble qui reflète le luxe et l'élégance répond aux exigences d’un goût raffiné.»
                    </p>
                </div>
            </article>


            <article class="dressings__section dressing__section-left">
                <div class="dressings__section-bg-img-subtitle">
                    <span class="dressings__section-bg bg-top"></span>
                    <div class="dressings__section-img-subtitle">
                        <span class="dressings__section-subtitle">Esthétique & Pratique</span>
                        <picture class="dressings__section-img">
                            <source class="dressings__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-entree-480.jpg" media="(max-width: 480px)" type"image/jpg">
                            <img class="dressings__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/dressings/dressing-entree.jpg" alt="Dressing d'entrée noir mat avec niche en bois chêne clair"  width="700" 
                            height="525">
                        </picture>
                    </div>
                </div>

                <div class="dressings__section-main  dressings__section-main-left">
                    <h2 class="dressings__section-main-title section-title">Dressing d'entrée</h2>
                    <p class="dressings__section-main-paragraphe dressings-paragraphe paragraphe">
                    « Le dressing d’entrée est l’élément essentiel pour structurer l’espace de vie et apporter une touche d’organisation dès l’arrivée dans la maison. 
                    Il facilite le quotidien en offrant un espace dédié pour poser et récupérer facilement les effets personnels en partant ou en rentrant chez soi. 
                    Il contribue à garder l’entrée dégagée et ordonnée. Au-delà de son utilité, un dressing d’entrée bien aménagé peut également être un atout esthétique, 
                    créant une première impression accueillante et harmonieuse pour les visiteurs. »
                    </p>
                </div>
            </article>

         
        </section>

    </main>
<?php get_footer(); ?>