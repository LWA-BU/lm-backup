<?php
/*
Template Name: Page Personnalisée
*/

get_header(); ?>
    <main class="prestations">
        <section class="section-prestation">

            <div class="section-prestation__content">
                <p class="section-prestation__txt section-subtitle">Vous le pensez, nous le créons...</p>
                <h1 class="section-prestation__title section-title">Nos prestations</h1>
                <p class="section-prestation__p paragraphe">
                    « Nous concevons, réalisons et installons votre projet d’agencement intérieur. 
                    Découvrez l’éventail de nos prestations, allant de la création de cuisines modernes et fonctionnelles à l’aménagement de dressings. 
                    Nous posons également des revêtements de sol ainsi que des portes intérieures. 
                    En outre, nous proposons la création de meubles personnalisés qui s’adaptent parfaitement à votre espace et à vos besoins. 
                    Nous complétons notre offre en proposant de réaliser de petites interventions de menuiserie. <br>
                    L’étude de votre demande et l’établissement du devis sont offerts. » 
                </p>
            </div>

           <ul class="section-prestation__list">
                <li class="section-prestation__list-item list-design"><label for="modal1" >Agencement intérieur</label></li>
                <li class="section-prestation__list-item list-floor"><label for="modal2" >Revêtement de sol</label></li>
                <li class="section-prestation__list-item list-furniture"><label for="modal3" >Mobilier</label></li>
                <li class="section-prestation__list-item list-door"><label for="modal4" >Porte / Cloison / Habillage mural</label></li>
                <li class="section-prestation__list-item list-staircase"><label for="modal5" >Escalier intérieur</label></li>
           </ul>

            <!-- <input type="checkbox" id="modal1" class="modal-toggle">
            <input type="checkbox" id="modal2" class="modal-toggle">
            <input type="checkbox" id="modal3" class="modal-toggle">
            <input type="checkbox" id="modal4" class="modal-toggle">
            <input type="checkbox" id="modal5" class="modal-toggle"> -->

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


            <a class="section-concept__button btn-transparent-beige"  href="votre-lien.html" aria-label="Voir nos inspirations">
                <span>voir nos inspirations</span>
                <span class="section-concept__button-icon icone" aria-hidden="true"></span>
            </a>

        </section>
        
        
    </main>
<?php get_footer(); ?>