<?php
/*
Template Name: Page Agencement intérieur
*/

get_header(); ?>

    <main class="arrange">
        
        <div class="arrange__header">
            <p class="arrange__header-subtitle section-subtitle">Concevoir et optimiser l'espace</p>
            <h1 class="arrange__header-title section-title">Agencement intérieur</h1>
            <p class="arrange__header-p paragraphe">
                « L’agencement intérieur va  généralement créer un sentiment d’ordre. 
                Celui que nous créons pour vous s’intègre au centimètre près à l’endroit auquel il est destiné. 
                Chaque meuble a sa fonction. » 
            </p>
        </div>

        <section class="arrange-shelf">
            <div class="arrange-shelf__main">

                <h1 class="arrange-shelf__title arrange-title">étagère & bibliothèque</h1>

                <div class="arrange-shelf__img">
                    <picture class="arrange-shelf__img-small img480">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/library-shelf-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/library-shelf.jpg" alt="Bibliothèque en mélaminé blanc sur bureau avec tiroirs et plan en marbre" width="835" 
                        height="925">
                    </picture>    

                    <div class="arrange-shelf__img-txt">
                        <picture class="arrange-shelf__img-tall">
                            <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/library-480.jpg" media="(max-width: 480px)" type="image/jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/library.jpg" alt="Bibliotheque chic en bois gris anthracite au hauts arrondis et bas avec portes" width="600" 
                            height="943">
                        </picture>    
                        <p class="arrange-shelf__p paragraphe">
                            Bibliothèque et étagère permettent un rangement pratique et esthétique. Elles optimisent l’espace en libérant les surfaces et apportent un aspect structuré et soigné à la pièces.  
                        </p>
                    </div>

                    <picture class="arrange-shelf__img-square">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/wooden-shelf-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/wooden-shelf.jpg" alt="Tablettes de cuisine en bois de chêne clair" width="600" 
                        height="624">
                    </picture>    
                </div>

                <span class="arrange-shelf__banner"></span>
            </div>
        </section>

        <div class="arrange__icones">
            <span class="arrange__icones-kitchen icone"></span>
            <span class="arrange__icones-bathroom icone"></span>
            <span class="arrange__icones-dressing icone"></span>
            <span class="arrange__icones-library icone"></span>
        </div>

        <section class="arrange__combined">
            <div class="arrange__combined-img">

                <div class="arrange__combined-img-rect">
                    <picture class="arrange__combined-img-small">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/TV-cabinet-white-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/TV-cabinet-white-768.jpg" media="(max-width: 960px)" type="image/jpg"> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/TV-cabinet-white.jpg" alt="Meuble télé combiné avec meuble surélevé en pin foncé" width="700" 
                        height="526">
                    </picture>    

                    <picture class="arrange__combined-img-square">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/tv-cabinet-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <!-- <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/tv-cabinet-768.jpg" media="(max-width: 960px)" type="image/jpg"> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/tv-cabinet.jpg" alt="Meuble télé blanc combiné avec bibliothèque intégrée surélevée mélaminé et bois foncé" width="700" 
                        height="477">
                    </picture>    
                </div>

                <picture class="arrange__combined-img-tall">
                    <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/combined-tv-480.jpg" media="(max-width: 767px)" type="image/jpg">
                    <!-- <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/combined-tv-768.jpg" media="(max-width: 960px)" type="image/jpg"> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/combined-tv.jpg" alt="Meuble télé blanc avec structure en bois qui relie les deux modules" width="500" 
                    height="750">
                </picture>  

                <span class="arrange-combined__banner"></span>
            </div>
            
            <div class="arrange__combined-content">
                <p class="arrange__combined-subtitle arrange-subtitle section-subtitle">Organiser son salon</p>
                <h1 class="arrange__combined-title arrange-title">Meuble TV & combiné</h1>
                <p class="arrange__combined-p paragraphe">
                    Les meubles TV combinés sont pratiques et esthétiques : ils offrent un espace de rangement pour organiser les équipements multimédias. 
                    En plus d’être fonctionnels, ils apportent une touche décorative au salon, s’adaptent aux différents styles d’intérieur grâce à une large variété de designs et de matériaux.
                </p>
            </div>
        </section>

        <div class="arrange__contact">
            <div class="arrange__contact-title">
                <span class="arrange__icones-projet icone"></span>
                <h2 class="arrange-title">Vous avez un projet ?</h2>
            </div>

            <p class="arrange__contact-p paragraphe">
                Vous souhaitez créer un nouvel espace, ajouter un nouveau meuble sur mesure, chez vous ou dans vos bureaux ? 
                N’hésitez pas à contacter LM Menuisier pour étudier votre projet. 
            </p>

            <a class="arrange__contact-btn btn-transparent-black"  href="votre-lien.html" aria-label="Contactez-nous">
                <span>contactez-nous</span>
                <span class="section-concept__button-icon icone" aria-hidden="true"></span>
            </a>
        </div>

        <section class="arrange__room">
            <div class="arrange__room-txt">
                <div class="arrange__room-main-title">
                    <p class="arrange__room-subtitle section-subtitle">Un espace pour se ressourcer</p>
                    <h1 class="arrange__room-title arrange-title">Chambre & bureau</h1>
                </div>
                <p class="arrange__room-p paragraphe">
                    « Les meubles de room sur mesure répondent à vos habitudes et besoins pratiques. 
                    Leur conception entièrement personnalisable permet d’intégrer des solutions astucieuses pour optimiser le rangement ou améliorer l’ergonomie, 
                    contribuant ainsi à un environnement plus ordonné et apaisant.»
                </p>
            </div>

            <div class="arrange__room-img">
                <div class="arrange__room-img-col1">
                    <picture class="arrange__room-img-tall">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/kids-room-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/kids-room.jpg" alt="room d'enfant avec lits superposés" width="900" 
                        height="1216">
                    </picture>    

                    <picture class="arrange__room-img-small">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/desk-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/desk.jpg" alt="Bureau en mélaminé blanc avec module quatre tiroirs" width="900" 
                        height="620">
                    </picture>   
                </div>

                <div class="arrange__room-img-col2">
                    <picture class="arrange__room-img-rect-1">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/bed-and-desk-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/bed-and-desk.jpg" alt="Lit d'adolescent surélevé sur tiroir avec bureau intégré" width="940" 
                        height="529">
                    </picture>    

                    <picture class="arrange__room-img-rect-2">
                        <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/bed-480.jpg" media="(max-width: 480px)" type="image/jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/bed.jpg" alt="Bureau et bibliothèque en mélaminé blanc dans room d'enfant" width="940" 
                        height="694">
                    </picture>   
                </div>
            </div>
        </section>

        <section class="arrange__laundry">
            <div class="arrange__laundry-txt">
                <div class="arrange__laundry-main-title">
                    <p class="arrange__laundry-subtitle section-subtitle">Les pièces dédiées</p>
                    <h1 class="arrange__laundry-title arrange-title">Buanderie & cave</h1>
                </div>
                <p class="arrange__laundry-p paragraphe">
                    « Optimisez chaque espace de votre maison avec une buanderie fonctionnelle ou une cave à vin. La buanderie, pensée pour maximiser le rangement et simplifier les tâches ménagères, 
                    peut être aménagée avec des solutions ergonomiques. 
                    Pour les amateurs de vins, une cave sur mesure assure une conservation optimale. Nous vous accompagnons dans la création d’espaces à la fois pratiques et esthétiques, 
                    alliant design et fonctionnalité pour répondre à vos besoins quotidiens. »
                </p>
                <p class="arrange__laundry-txt-second">Optimiser les espaces</p>
            </div>

            <div class="arrange__laundry-img">
                <picture class="arrange__laundry-img-tall">
                    <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/buanderie-480.jpg" media="(max-width: 480px)" type="image/jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/buanderie.jpg" alt="Buanderie sur mesure meubles couleurs chêne et bois" width="700" 
                    height="900">
                </picture>    

                <picture class="arrange__laundry-img-tall">
                    <source  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/wine-cellar-480.jpg" media="(max-width: 480px)" type="image/jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrange/wine-cellar.jpg" alt="Cave à vin sur mesure en bois de chêne foncé" width="680" 
                    height="916">
                </picture>   
            </div>
        </section>

    </main>
<?php get_footer(); ?>