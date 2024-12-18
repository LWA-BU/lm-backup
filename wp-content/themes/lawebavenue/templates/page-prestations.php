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
                <li> 
                    <button class="open-modal section-prestation__list-item list-design" data-modal="modal1">
                        Agencement intérieur
                        <span class="icon" aria-hidden="true">
                            <!-- Icône SVG décorative -->
                            <svg fill="#965634" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 330 330" xml:space="preserve">
                                <g id="XMLID_2_">
                                    <path id="XMLID_4_" d="M145.606,74.393c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l69.393,69.392
                                        l-69.393,69.395c-5.858,5.858-5.858,15.355,0,21.213C127.322,258.536,131.161,260,135,260s7.678-1.464,10.606-4.394l80-80.002
                                        c2.814-2.813,4.394-6.628,4.394-10.607c0-3.979-1.58-7.794-4.394-10.607L145.606,74.393z"/>
                                    <path id="XMLID_5_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300
                                        c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
                                </g>
                            </svg>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="open-modal section-prestation__list-item list-floor" data-modal="modal2">
                        Revêtement de sol
                        <span class="icon" aria-hidden="true">
                            <!-- Icône SVG décorative -->
                            <svg fill="#965634" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 330 330" xml:space="preserve">
                                <g id="XMLID_2_">
                                    <path id="XMLID_4_" d="M145.606,74.393c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l69.393,69.392
                                        l-69.393,69.395c-5.858,5.858-5.858,15.355,0,21.213C127.322,258.536,131.161,260,135,260s7.678-1.464,10.606-4.394l80-80.002
                                        c2.814-2.813,4.394-6.628,4.394-10.607c0-3.979-1.58-7.794-4.394-10.607L145.606,74.393z"/>
                                    <path id="XMLID_5_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300
                                        c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
                                </g>
                            </svg>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="open-modal section-prestation__list-item list-furniture" data-modal="modal3">
                        Mobilier
                        <span class="icon" aria-hidden="true">
                            <!-- Icône SVG décorative -->
                            <svg fill="#965634" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 330 330" xml:space="preserve">
                                <g id="XMLID_2_">
                                    <path id="XMLID_4_" d="M145.606,74.393c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l69.393,69.392
                                        l-69.393,69.395c-5.858,5.858-5.858,15.355,0,21.213C127.322,258.536,131.161,260,135,260s7.678-1.464,10.606-4.394l80-80.002
                                        c2.814-2.813,4.394-6.628,4.394-10.607c0-3.979-1.58-7.794-4.394-10.607L145.606,74.393z"/>
                                    <path id="XMLID_5_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300
                                        c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
                                </g>
                            </svg>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="open-modal section-prestation__list-item list-door" data-modal="modal4">
                        Porte / Cloison / Habillage mural
                        <span class="icon" aria-hidden="true">
                            <!-- Icône SVG décorative -->
                            <svg fill="#965634" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 330 330" xml:space="preserve">
                                <g id="XMLID_2_">
                                    <path id="XMLID_4_" d="M145.606,74.393c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l69.393,69.392
                                        l-69.393,69.395c-5.858,5.858-5.858,15.355,0,21.213C127.322,258.536,131.161,260,135,260s7.678-1.464,10.606-4.394l80-80.002
                                        c2.814-2.813,4.394-6.628,4.394-10.607c0-3.979-1.58-7.794-4.394-10.607L145.606,74.393z"/>
                                    <path id="XMLID_5_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300
                                        c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
                                </g>
                            </svg>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="open-modal section-prestation__list-item list-staircase" data-modal="modal5">
                        Escalier intérieur
                        <span class="icon" aria-hidden="true">
                            <!-- Icône SVG décorative -->
                            <svg fill="#965634" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 330 330" xml:space="preserve">
                                <g id="XMLID_2_">
                                    <path id="XMLID_4_" d="M145.606,74.393c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l69.393,69.392
                                        l-69.393,69.395c-5.858,5.858-5.858,15.355,0,21.213C127.322,258.536,131.161,260,135,260s7.678-1.464,10.606-4.394l80-80.002
                                        c2.814-2.813,4.394-6.628,4.394-10.607c0-3.979-1.58-7.794-4.394-10.607L145.606,74.393z"/>
                                    <path id="XMLID_5_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300
                                        c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
                                </g>
                            </svg>
                        </span>
                    </button>
                </li>
            </ul>
            
            <?php get_template_part('parts/modales'); ?>

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