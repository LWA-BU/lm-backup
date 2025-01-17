<?php
/*
Template Name: Page Salles de bains
*/

get_header(); ?>
    <?php
        $sizes="(max-width: 480px) 480w, 
                (max-width: 768px) 768w,
                (max-width: 1200px) 1200w
                1200w"
    ?>
    <main class="sdb">
        <div class="sdb__header">
            <p class="sdb__header-subtitle section-subtitle">Le lieu pour se détendre</p>
            <h1 class="sdb__header-title section-title">Les salles de bain</h1>
            <p class="sdb__header-p paragraphe">
                « La salle de bain est bien plus qu’un simple espace utilitaire : c’est un véritable havre de détente pour se ressourcer. 
                Pour bénéficier d'une ambiance apaisante, elle doit être fonctionnelle et chaleureuse. 
                Un agencement ergonomique facilitera les gestes quotidiens. Des matériaux doux, des couleurs apaisantes et un éclairage modulable invitent à la relaxation. 
                Un aménagement bien pensé, avec des rangements discrets et un espace épuré, permet de libérer l’esprit et de profiter pleinement de ce moment de bien-être. »
            </p>
        </div>

        <div class="sdb__section sdb__section-nature">
            <picture class="sdb__section-img">
                <source class="sdb__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-naturelle-480.jpg" media="(max-width: 480px)" type"image/jpg">
                <img class="sdb__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-naturelle.jpg" alt="Salle de bain avec meuble en chêne foncé et plan de travail en marbre fin"  width="480" 
                height="630">
            </picture>

            <div class="sdb__section-main  sdb__section-main-left">
                <div class="sdb__section-main-title sdb__section-main-title-left">
                    <span class="sdb__section-main-title-bold">naturelle</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection nature</span>
                </div>
                <p class="sdb__section-main-paragraphe sdb-paragraphe paragraphe">
                    « Les matériaux naturels allient élégance et authenticité. Le meuble sous-vasque, avec ses teintes de bois, 
                    apporte une atmosphère chaleureuse tandis que le plan de toilette en marbre ajoute une touche de raffinement. 
                    Ce mélange harmonieux de bois et de marbre confère à la pièce un style moderne et apaisant, où chaque détail est pensé pour le confort. »
                </p>
            </div>
        </div>

        <div class="sdb__section sdb__section-epuree">
            <picture class="sdb__section-img">
                <source class="sdb__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-epuree-480.jpg" media="(max-width: 480px)" type"image/jpg">
                <img class="sdb__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-epuree.jpg" alt="Salle de bain avec meuble en chêne clair et plan de travail en marbre veiné gris" width="480" 
                height="630">
            </picture>    
            <div class="sdb__section-main sdb__section-main-right">
                <div class="sdb__section-main-title sdb__section-main-title-right">
                    <span class="sdb__section-main-title-bold section-title">épurée</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection sobriété</span>
                </div>
                <p class="sdb__section-main-paragraphe sdb-paragraphe paragraphe">
                    « Les matériaux naturels allient élégance et authenticité. Le meuble sous-vasque, avec ses teintes de bois, 
                    apporte une atmosphère chaleureuse tandis que le plan de toilette en marbre ajoute une touche de raffinement. 
                    Ce mélange harmonieux de bois et de marbre confère à la pièce un style moderne et apaisant, où chaque détail est pensé pour le confort. »
                </p>
            </div>
        </div>

        <div class="sdb__section sdb__section-elegante">
            <picture class="sdb__section-img">
                <source class="sdb__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-elegante-480.jpg" media="(max-width: 480px)" type"image/jpg">
                <img class="sdb__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-elegante.jpg" alt="Salle de bain avec meuble mélaminé bleu pastel et plan de travail marbre blanc fin"  width="480" 
                height="630">
            </picture>

            <div class="sdb__section-main  sdb__section-main-left">
                <div class="sdb__section-main-title sdb__section-main-title-left">
                    <span class="sdb__section-main-title-bold">élégante</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection élégance</span>
                </div>
                <p class="sdb__section-main-paragraphe sdb-paragraphe paragraphe">
                    « Une salle de bain qui se transforme en un lieu de relaxation chic et élégant grâce à ses meubles aux finitions bleu pastel associées à des nuances de cuivré. 
                    Cette combinaison de couleurs crée une atmosphère apaisante, idéale pour s’évader. Le cuivré ajoute une touche de luxe discret, 
                    tandis que le bleu pastel adoucit l’ensemble et invite à la détente. »
                </p>
            </div>
        </div>

        <div class="sdb__section sdb__section-raffinee">
            <picture class="sdb__section-img">
                <source class="sdb__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-raffinee-480.jpg" media="(max-width: 480px)" type"image/jpg">
                <img class="sdb__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-raffinee.jpg" alt="Salle de bain avec meuble en bois d'ébène et plan de travail en marbre tacheté de gris" width="480" 
                height="630">
            </picture>    
            <div class="sdb__section-main sdb__section-main-right">
                <div class="sdb__section-main-title sdb__section-main-title-right">
                    <span class="sdb__section-main-title-bold section-title">raffinée</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection élégance</span>
                </div>
                <p class="sdb__section-main-paragraphe sdb-paragraphe paragraphe">
                    « Le meuble noir en bois exotique effet lamellé apporte profondeur et caractère à la pièce. 
                    Le plan de travail en marbre fin ajoute une touche de luxe subtil, tandis que le miroir doré illumine l’ensemble tout en élégance. 
                    Cette combinaison de matières nobles et de contrastes raffinés crée une ambiance sophistiquée, propice aux rituels de beauté et 
                    de bien-être dans un cadre résolument chic et intemporel. »
                </p>
            </div>
        </div>

        <div class="sdb__section sdb__section-minimaliste">
            <picture class="sdb__section-img">
                <source class="sdb__section-img-small" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-minimaliste-480.jpg" media="(max-width: 480px)" type"image/jpg">
                <img class="sdb__section-img-big" src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-minimaliste.jpg" alt="Salle de bain avec meuble en chêne foncé et plan de travail en marbre fin"  width="480" 
                height="630">
            </picture>

            <div class="sdb__section-main  sdb__section-main-left">
                <div class="sdb__section-main-title sdb__section-main-title-left">
                    <span class="sdb__section-main-title-bold">minimaliste</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection sobriété</span>
                </div>
                <p class="sdb__section-main-paragraphe sdb-paragraphe paragraphe">
                    « Ces éléments minimalistes, offrent des lignes épurées et un design contemporain. 
                    Le meuble sous-vasque couleur pêche apporte de la fraîcheur tandis que le plan de travail en marbre blanc ajoute une touche de raffinement. 
                    La colonne aux tons pastel créée un contraste pour un ensemble harmonieux. »
                </p>
            </div>
        </div>
   
    </main>
<?php get_footer(); ?>