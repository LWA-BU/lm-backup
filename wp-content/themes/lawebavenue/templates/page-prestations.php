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
                    Nous complétons notre offre en proposant de réaliser de petites interventions de menuiserie. »<br><br>
                    L’étude de votre demande et l’établissement du devis sont offerts.  
                </p>
            </div>

            <ul class="section-prestation__list">
                <li tabindex="0"> 
                    <button class="open-modal section-prestation__list-item list-design" data-modal="modal1"  aria-controls="modal1" aria-label="Voir nos prestations d'agencements intérieurs">
                        Agencement intérieur
                        <span class="section-prestation__list-icon icone" aria-hidden="true"></span>
                    </button>
                </li>

                <li tabindex="0">
                    <button class="open-modal section-prestation__list-item list-floor" data-modal="modal2" aria-controls="modal2" aria-label="Voir nos prestations revêtements de sol">
                        Revêtement de sol
                        <span class="section-prestation__list-icon" aria-hidden="true"></span>
                    </button>
                </li>

                <li tabindex="0">
                    <button class="open-modal section-prestation__list-item list-furniture" data-modal="modal3"  aria-controls="modal3" aria-label="Voir nos prestations mobilier">
                        Mobilier
                        <span class="section-prestation__list-icon" aria-hidden="true"></span>
                    </button>
                </li>

                <li tabindex="0">
                    <button class="open-modal section-prestation__list-item list-door" data-modal="modal4"  aria-controls="modal4" aria-label="Voir nos prestations porte, cloison et habillage mural">
                        Porte  |  Cloison  |  Habillage mural
                        <span class="section-prestation__list-icon" aria-hidden="true"></span>
                    </button>
                </li>

                <li tabindex="0">
                    <button class="open-modal section-prestation__list-item list-staircase" data-modal="modal5"  aria-controls="modal5" aria-label="Voir nos prestations escalier intérieur">
                        Escalier intérieur
                        <span class="section-prestation__list-icon" aria-hidden="true"></span>
                    </button>
                </li>
            </ul>
            
            <?php get_template_part('parts/modales'); ?>

        </section>


        <section id="section-projet" class="section-project" >
            
            <div class="section-projet__content">
                <h1 class="section-project__title section-title">Vous manquez d’inspiration pour votre intérieur ?</h1>
                <p class="section-project__p paragraphe">
                    Vous avez un projet d’aménagement mais vous ne savez pas quel style adopter  ? <br>
                    N’hésitez pas à consulter notre page d’inspiration qui pourra vous orienter. 
                    Vous y trouverez différents styles, du moderne au contemporain, différents coloris et différentes textures.  
                </p>
            </div>
      
            <a class="section-project__button btn-transparent-beige"  href="votre-lien.html" aria-label="Voir nos inspirations">
                <span>voir nos inspirations</span>
                <span class="section-project__button-section-prestation__list-icon icone" aria-hidden="true"></span>
            </a>

        </section>
        
    </main>
<?php get_footer(); ?>