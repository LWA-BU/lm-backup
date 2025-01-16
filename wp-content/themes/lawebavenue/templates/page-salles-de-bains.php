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

        <div class="sdb__section">
            <img class="sdb__section-img"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-naturelle-480.jpg 480w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-naturelle-768.jpg 768w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-naturelle.jpg 1200w"
                sizes="<?php echo $sizes ?>"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-naturelle.jpg"
                alt="Salle de bain avec meuble en bois naturel couleur chêne foncé et plan de travail en marbre fin" >
            <div class="sdb__section-main  sdb__section-main-left">
                <div class="sdb__section-main-title sdb__section-main-title-left">
                    <span class="sdb__section-main-title-bold">naturelle</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection nature</span>
                </div>
                <p class="sdb__section-main-paragraphe paragraphe">
                    « Les matériaux naturels allient élégance et authenticité. Le meuble sous-vasque, avec ses teintes de bois, 
                    apporte une atmosphère chaleureuse tandis que le plan de toilette en marbre ajoute une touche de raffinement. 
                    Ce mélange harmonieux de bois et de marbre confère à la pièce un style moderne et apaisant, où chaque détail est pensé pour le confort. »
                </p>
            </div>
        </div>

        <div class="sdb__section">
            <img class="sdb__section-img"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-epuree-480.jpg 480w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-epuree-768.jpg 768w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-epuree.jpg 1200w"
                sizes="<?php echo $sizes ?>"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/sdb/salle-de-bain-epuree.jpg"
                alt="Salle de bain avec meuble en bois de chêne clair et plan de travail en marbre veiné gris" >
            <div class="sdb__section-main sdb__section-main-right">
                <div class="sdb__section-main-title sdb__section-main-title-right">
                    <span class="sdb__section-main-title-bold section-title">épurée</span>
                    <span class="sdb__section-main-title-light section-subtitle">Collection sobriété</span>
                </div>
                <p class="sdb__section-main-paragraphe paragraphe">
                    « Les matériaux naturels allient élégance et authenticité. Le meuble sous-vasque, avec ses teintes de bois, 
                    apporte une atmosphère chaleureuse tandis que le plan de toilette en marbre ajoute une touche de raffinement. 
                    Ce mélange harmonieux de bois et de marbre confère à la pièce un style moderne et apaisant, où chaque détail est pensé pour le confort. »
                </p>
            </div>
        </div>
   
    </main>
<?php get_footer(); ?>