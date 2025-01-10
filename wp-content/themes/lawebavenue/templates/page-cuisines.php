<?php
/*
Template Name: Page Cuisines
*/

get_header(); ?>
    <main class="cuisines">
      
            <div class="cuisines-header">
                <p class="cuisines-header__subtitle section-subtitle">Trouvez votre style</p>
                <h1 class="cuisines-header__title section-title">Les cuisines</h1>
                <p class="cuisines-header__p paragraphe"> 
                    « Au fil du temps, la cuisine est devenue  le cœur de la maison, un véritable espace de convivialité et de socialisation.  
                    Elle évoque l’idée d’un lieu harmonieux où se tissent des liens forts, d’autant plus si elle est crée sur mesure,  
                    à votre image. »
                </p>
            </div>

            <div class="cuisines-section">
                <img class="cuisines-section__img-large" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-moderne.jpg" alt="Cuisine moderne laquée blanche avec plan de travail en marbre noir" >
                <div class="cuisines-section__content">
                    <div class="cuisines-modernes__content cuisines-txt">
                        <h2 class="cuisines-modernes__content-title cuisines-title-beige">Moderne</h2>
                        <p class="cuisines-modernes__content-txt cuisines-paragraphe paragraphe">
                            « Cette cuisine incarne la modernité. Ses meubles blancs épurés agrandissent visuellement l’espace. 
                            Le plan de travail en marbre anthracite veiné de gris clair ajoute une touche de caractère pour
                            un ensemble sophistiqué et harmonieux... »
                        </p>
                    </div>
                    <img class="cuisines-section__img-small cuisines__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-moderne-s.jpg" alt="Cuisine moderne laquée blanche avec plan de travail en marbre noir" >
                </div>
            </div>

            <div class="cuisines-elegantes cuisines-section ">
                <img class="cuisines-section__img-large cuisines-section__img-large-r" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-elegante.webp" alt="Cuisine moderne laquée blanche avec plan de travail en marbre noir" >
                <div class="cuisines-section__content-right cuisines-content">
                    <div class="cuisines-elegantes__content cuisines-txt">
                        <h2 class="cuisines-elegantes__content-title cuisines-title-black">Elegante</h2>
                        <p class="cuisines-elegantes__content-txt cuisines-paragraphe paragraphe">
                            « Cette cuisine allie élégance et fonctionnalité avec des meubles noirs au design épuré qui 
                            apportent un côté sophistiqué à l’espace. Le style contemporain est accentué par le contraste 
                            saisissant entre le noir profond des meubles et le plan de travail en marbre gris. 
                            Ce dernier ajoute une touche  de caractère avec ses motifs naturels et subtils qui illuminent l’espace. 
                            L’éclairage LED, met en valeur la texture du marbre et ajoute une atmosphère chaleureuse à cette cuisine résolument élégante. »
                        </p>
                    </div>
                    <img class="cuisines-section__img-small cuisines__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-elegante-s.webp" alt="Cuisine moderne laquée blanche avec plan de travail en marbre noir" >
                </div>

            </div>
         

            <div class="cuisines-minimalistes cuisines-section ">
                <img class="cuisines-minimalistes__img cuisines__img-first cuisines__img-left" src="" alt="" >
                <div class="cuisines-minimalistes__main cuisines-content">
                        <div class="cuisines-minimalistes__content cuisines-txt">
                            <h2 class="cuisines-minimalistes__content-title">Minimaliste</h2>
                            <p class="cuisines-minimalistes__content-txt cuisines-paragraphe paragraphe">
                                « Le mélange de bois et de mélaminé blanc brillant donne à cette cuisine un style simple et épuré. 
                                La note de taupe apportée par l’élément latéral ajoute une touche de chaleur et d’élégance tout en démarquant l’espace.  »
                            </p>
                        </div>                       
                        <img class="cuisines-minimalistes__main-img cuisines__img-second" src="" alt="">
                    </div>
                </div>
            </div>

            <div class="cuisines-natures cuisines-section ">
                <img class="cuisines-natures__img cuisines__img-first cuisines__img-right" src="" alt="" >
                <div class="cuisines-natures__main">
                        <div class="cuisines-natures__content cuisines-content cuisines-txt">
                            <h2 class="cuisines-natures__content-title">Nature</h2>
                            <p class="cuisines-natures__content-txt cuisines-paragraphe paragraphe">
                                « Cette cuisine aux teintes douces invite à un retour aux sources avec des couleurs apaisantes inspirées par la nature. 
                                Les meubles aux tons vert doux rappellent la fraîcheur des feuillages, tandis que les touches de beige évoquent la chaleur du bois et de la terre. 
                                Quelques accents orangés apportent un éclat chaleureux. Les angles arrondis  adoucissent l’espace, créant une ambiance organique et accueillante, comme un cocon naturel. 
                                Le mariage de ces couleurs et des formes douces procure un véritable sentiment de bien-être, où chaque élément rappelle la tranquillité et l’harmonie de la nature »
                            </p>
                        </div>                        
                        <img class="cuisines-natures__main-img cuisines__img-second" src="" alt="">
                    </div>
                </div>
            </div>

            <div class="cuisines-chaleureuses cuisines-section ">
                <img class="cuisines-chaleureuses__img cuisines__img-first cuisines__img-left" src="" alt="" >
                <div class="cuisines-chaleureuses__main cuisines-content">
                        <div class="cuisines-chaleureuses__content cuisines-txt">
                            <h2 class="cuisines-chaleureuses__content-title">Chaleureuse</h2>
                            <p class="cuisines-chaleureuses__content-txt paragraphe">
                                « Cette cuisine incarne la modernité. Ses meubles blancs épurés  
                                apportent une sensation de clarté et de modernité à l’espace. 
                                Le plan de travail en marbre anthracite veiné de gris clair ajoute une touche sophistiquée, 
                                avec ses motifs subtils qui apportent du caractère tout en restant discrets. 
                                L’ensemble est harmonieux et lumineux, créant une atmosphère apaisante, idéale pour cuisiner 
                                et partager des moments en toute simplicité... »
                            </p>
                        </div>                        
                        <img class="cuisines-chaleureuses__main-img cuisines__img-second" src="" alt="">
                    </div>
                </div>
            </div>



       
    
      
        
    </main>
<?php get_footer(); ?>






