<?php
/*
Template Name: Page Cuisines
*/

get_header(); ?>
    <?php
        $sizes="(max-width: 480px) 100vw, 
                (max-width: 1960px) 1200px, 
                1200px"
    ?>
    <main class="cuisines">
        <div class="cuisines-header">
            <p class="cuisines-header__subtitle section-subtitle">Trouvez votre style</p>
            <h1 class="cuisines-header__title section-title">Les cuisines</h1>
            <p class="cuisines-header__p paragraphe">
                « Au fil du temps, la cuisine est devenue le cœur de la maison, un véritable espace de convivialité et de socialisation.
                Elle évoque l’idée d’un lieu harmonieux où se tissent des liens forts, d’autant plus si elle est créée sur mesure,
                à votre image. »
            </p>
        </div>

        <div class="cuisines-section">
            <img class="cuisines-section__img-large"   
                src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-moderne-1200.webp "
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-moderne-768.webp 768w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-moderne-1200.webp 1200w"
                sizes="<?php echo $sizes ?>"
                alt="Cuisine moderne laquée blanche avec plan de travail en marbre noir" >
            <div class="cuisines-section__content">
                <div class="cuisines-modernes__content cuisines-txt">
                    <h2 class="cuisines-modernes__content-title cuisines-title-beige">Moderne</h2>
                    <p class="cuisines-modernes__content-txt cuisines-paragraphe paragraphe">
                        « Cette cuisine incarne la modernité. Ses meubles blancs épurés agrandissent visuellement l’espace.
                        Le plan de travail en marbre anthracite veiné de gris clair ajoute une touche de caractère pour
                        un ensemble sophistiqué et harmonieux... »
                    </p>
                </div>
                <img class="cuisines-section__img-small cuisines__img-second" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-moderne-s.webp" 
                    alt="Cuisine moderne laquée blanche avec plan de travail en marbre noir">
            </div>
        </div>

        <div class="cuisines-elegantes cuisines-section ">
            <img class="cuisines-section__img-large cuisines-section__img-large-r" 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-elegante-1200.webp" 
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-elegante-768.webp 768w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-elegante-1200.webp 1200w"
                sizes="<?php echo $sizes ?>"
                alt="Cuisine élégante en bois noir et son plan de travail en marbre gris">
            <div class="cuisines-section__content-right cuisines-content">
                <div class="cuisines-elegantes__content cuisines-txt">
                    <h2 class="cuisines-elegantes__content-title cuisines-title-black">Elegante</h2>
                    <p class="cuisines-elegantes__content-txt cuisines-paragraphe paragraphe">
                        « Cette cuisine allie élégance et fonctionnalité avec des meubles noirs au design épuré qui 
                        apportent un côté sophistiqué à l’espace. Le style contemporain est accentué par le contraste 
                        saisissant entre le noir profond des meubles et le plan de travail en marbre gris. 
                        Ce dernier ajoute une touche  de caractère avec ses motifs naturels et subtils qui illuminent l’espace. 
                        L’éclairage LED, met en valeur la texture du marbre et ajoute une touche chaleureuse à cette cuisine résolument élégante. »
                    </p>
                </div>
                <img class="cuisines-section__img-small cuisines__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-elegante-s.webp" alt="Cuisine élégante en bois noir et son plan de travail en marbre gris">
            </div>
        </div>
        
        <div class="cuisines-minimalistes cuisines-section ">
            <img class="cuisines-section__img-large cuisines__img-first cuisines__img-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-minimaliste.jpg" alt="Cuisine minimaliste bois blanc mat et beige, niche en bois couleur chêne">
            <div class="cuisines-section__content cuisines-content">
                <div class="cuisines-minimalistes__content cuisines-txt">
                    <h2 class="cuisines-minimalistes__content-title cuisines-title-beige">Minimaliste</h2>
                    <p class="cuisines-minimalistes__content-txt cuisines-paragraphe paragraphe">
                        « Le mélange de bois et de mélaminé blanc satiné donne à cette cuisine minimaliste un style simple et épuré. 
                        La note de taupe apportée par l’élément latéral ajoute une touche de chaleur et d’élégance tout en démarquant l’espace. »
                    </p>
                </div>                       
                <img class="cuisines-section__img-small  cuisines__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-minimaliste-s.jpg" alt="Cuisine minimaliste bois blanc mat et beige, niche en bois couleur chêne">
            </div>
        </div>
        
        <div class="cuisines-natures cuisines-section ">
            <img class="cuisines-section__img-large cuisines-section__img-large-r" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-nature.webp" alt="Cuisine aux couleurs nature beige, vert d'eau et son plan de travail blanc cassé ">
            <div class="cuisines-section__content-right cuisines-content">
                <div class="cuisines-natures__content cuisines-txt">
                    <h2 class="cuisines-natures__content-title">Nature</h2>
                    <p class="cuisines-natures__content-txt cuisines-paragraphe paragraphe">
                        « Cette cuisine aux teintes douces invite à un retour aux sources avec des couleurs apaisantes inspirées par la nature. 
                        Les meubles aux tons vert doux rappellent la fraîcheur des feuillages, tandis que les touches de beige évoquent la chaleur du bois et de la terre. 
                        Quelques accents orangés apportent un éclat chaleureux. Les angles arrondis  adoucissent l’espace,comme un cocon naturel. 
                        Le mariage de ces couleurs et des formes douces procure un véritable sentiment de bien-être, où chaque élément rappelle la tranquillité et l’harmonie de la nature »
                    </p>
                </div>                        
                <img class="cuisines-section__img-small  cuisines__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-nature-s.jpg" alt="Cuisine aux couleurs nature beige, vert d'eau et son plan de travail blanc cassé ">
            </div>
        </div>

        <div class="cuisines-chaleureuses cuisines-section ">
            <img class="cuisines-section__img-large cuisines__img-first cuisines__img-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-chaleureuse.webp" alt="Cuisine aux couleurs nature beige, vert d'eau et son plan de travail blanc cassé ">
            <div class="cuisines-section__content cuisines-content">
                <div class="cuisines-chaleureuses__content cuisines-txt">
                    <h2 class="cuisines-chaleureuses__content-title cuisines-title-beige">Chaleureuse</h2>
                    <p class="cuisines-chaleureuses__content-txt cuisines-paragraphe paragraphe">
                        « Cette cuisine chaleureuse marie avec élégance le bois et le blanc, créant un espace à la fois lumineux et accueillant. 
                        Les meubles en bois, aux nuances naturelles et veinures visibles, apportent une touche rustique et authentique, renforçant le caractère apaisant de la pièce. 
                        Les surfaces blanches, des meubles et du plan de travail, illuminent l’ensemble et offrent un joli contraste avec la chaleur du bois. 
                        La combinaison de ces matériaux crée une atmosphère conviviale donnant envie de s’y attarder et partager des moments en famille ou entre amis. »
                    </p>
                </div>                        
                <img class="cuisines-section__img-small cuisines__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/img/cuisines/cuisine-chaleureuse-s.jpg" alt="Cuisine aux couleurs nature beige, vert d'eau et son plan de travail blanc cassé ">
            </div>
        </div>
     
    </main>
<?php get_footer(); ?>






