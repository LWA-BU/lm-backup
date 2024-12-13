<?php get_header(); ?>
    <main>
        <section class="section-about">

            <div class="section-about__img" aria-hidden="true"></div>

            <p class="section-about__artisanat">artisanat</p>
            <div class="section-about__content">
                <p class="section-about__txt section-subtitle">L'excellence, reflet de notre société</p>
                <h1 class="section-about__title section-title">Qui sommes-nous ?</h1>
                <p class="section-about__p paragraphe">
                    Mickaël, fondateur de la société, est un artisan issu des Compagnons du Devoir. <br>
                    Cette dernière est reconnue pour cultiver des valeurs éthiques d’excellence, de la richesse de l’expérience pratique et de la transmission des savoir-faire. <br>  
                    C’est avec passion que Mickaël exerce son métier depuis 1998. <br>
                    Il a fait ses classes dans plusieurs structures en France et pratique au Luxembourg depuis près de vingt ans.<br>
                    Il a occupé différents postes, de la conception, à la réalisation, en passant par l’installation, jusqu’à la gestion de projets conséquents faisant intervenir différents corps de métier.   
                    C’est après s’être forgé une solide expérience, qu’il décide, en 2022, de créer sa société.<br>
                    LM MENUISIER collabore avec différents partenaires situés au Luxembourg, en Allemagne, en France et en Belgique. 
                </p>
            </div>

        </section>

        <section class="section-interiorDesign">
            <div class= "section-interiorDesign__img" aria-hidden="true"></div>
            <div class="section-interiorDesign__img-decorative" aria-hidden="true"></div>
            <div class="section-interiorDesign__content">
                <p class="section-interiorDesign__txt section-subtitle">Pour professionnels et particuliers</p>
                <h1 class="section-interiorDesign__title section-title">Agencement intérieur</h1>
                <p class="section-interiorDesign__p paragraphe">
                    « Nous proposons des solutions d’agencement intérieur sur mesure, adaptées aussi bien aux professionnels qu’aux particuliers. <br>
                    Que ce soit pour l’aménagement de bureaux, de boutiques, ou la création de mobiliers et rangements  pour votre maison, chaque projet est réalisé avec soin,
                    dans le respect des matériaux et des finitions. Notre expertise  nous permet de répondre à vos besoins spécifiques, 
                    alliant esthétisme, fonctionnalité et durabilité pour des espaces optimisés et harmonieux. »
                </p>
                <a class="section-interiorDesign__link btn-transparent-beige"  href="votre-lien.html" aria-label="Voir nos prestations">
                    <span>voir nos prestations</span>
                    <span class="icone" aria-hidden="true"></span>
                </a>
            </div>
        </section>

        <section class="section-customMade">
            <span class="section-customMade__icone" aria-hidden="true"></span>
            <p class="section-customMade__txt section-subtitle">Notre spécialité,</p>
            <h1 class="section-customMade__title section-title">Le sur mesure</h1>
            <p class="section-customMade__p paragraphe">
                « LM Menuisier met son savoir-faire à votre service et vous garantit que  
                l’intégration des éléments sera effectuée dans une recherche d’harmonie avec l’existant 
                et dans le respect des règles de l’art, au moyen d’une conception réalisée sur mesure.<br>
                Que ce soit pour des placards, des meubles ou la pose de portes, notre expertise artisanale vous garantit 
                des réalisations de qualité, adaptées à vos goûts et à votre style de vie. En choisissant du sur-mesure, 
                vous optez pour des créations qui se distinguent par leur originalité, leur précision et des finitions 
                irréprochables. <br>
                Chaque projet est conçu avec soin pour apporter du caractère à votre espace, tout en répondant à vos attentes esthétiques et pratiques. »
            </p>
        </section>

        <section class="section-concept">

            <figure class="section-concept__content-img">
                <img class="section-concept__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil/conception_projet.webp" alt="Dressing ouvert" >
                <figcaption class="visuallyhidden">Dressing en bois blanc ouvert sur l'espace chambre</figcaption>
            </figure>

            <div class="section-concept__main">
                <div class="section-concept__title">
                    <span class="section-concept__title-icone" aria-hidden="true" ></span>
                    <h1 class="section-concept__title-title section-title">Concevoir le projet</h1>
                </div>

                <p class="section-concept__p paragraphe">« La conception d’un projet est une étape cruciale pour garantir sa réussite. Elle permet de définir clairement les objectifs, les moyens nécessaires et les étapes à suivre pour atteindre les résultats souhaités. » <br><br>
                Les six étapes principales d’un projet : </p>
                <ul class="section-concept__list">
                    <li class="section-concept__list-item list-definition">Définition des besoins</li>
                    <li class="section-concept__list-item list-measure">Prise de mesures</li>
                    <li class="section-concept__list-item list-feasibility">Etude de faisabilité</li>
                    <li class="section-concept__list-item list-choice">Choix des matériaux et du design</li>
                    <li class="section-concept__list-item list-conception">Conception et production</li>
                    <li class="section-concept__list-item list-finition">Montage et finitions</li>
                </ul>

                <a class="section-concept__button btn-transparent-black"  href="votre-lien.html" aria-label="Voir nos inspirations">
                    <span>voir nos inspirations</span>
                    <span class="section-concept__button-icon icone" aria-hidden="true"></span>
                </a>

            </div>
        </section>

    </main>
<?php get_footer(); ?>