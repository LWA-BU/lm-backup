
displayHeaderMainMenu();
toggleButtonSubMenu();



function displayHeaderMainMenu() {
  const burgerMenu = document.querySelector('div.header__btn');
  const headerMenu = document.querySelector('nav.header__menu');

  // Ajout de la gestion de l'événement 'click'
  burgerMenu.addEventListener('click', function(event) {
    toggleMenu();
    event.preventDefault();
  });

  // Ajout de la gestion des événements clavier (Enter et Espace)
  burgerMenu.addEventListener('keydown', function(event) {
    if (event.key === 'Enter' || event.key === ' ') { // Espace ou Entrée
      toggleMenu();
      event.preventDefault();
    }
  });

  // Fonction pour basculer la visibilité du menu et mettre à jour les attributs ARIA
  function toggleMenu() {
    // Basculer la classe 'active' sur burgerMenu
    burgerMenu.classList.toggle('active');
    headerMenu.classList.toggle('active');
    
    // Vérifie si le burgerMenu a la classe 'active'
    if (burgerMenu.classList.contains('active')) {
      // Affiche le menu et met à jour aria-expanded
      headerMenu.style.visibility = 'visible';
      burgerMenu.setAttribute('aria-expanded', 'true');
      burgerMenu.setAttribute('aria-pressed', 'true');
      burgerMenu.style.background= '#f25e23';
    } else {
      // Cache le menu et met à jour aria-expanded
      headerMenu.style.visibility = 'hidden';
      burgerMenu.setAttribute('aria-expanded', 'false');
      burgerMenu.setAttribute('aria-pressed', 'false');
      burgerMenu.style.background= '#37372F';
    }
  }
}

function toggleButtonSubMenu(){
  /** @type {HTMLElement[]} */
  /**
   * @param {HTMLElement} el
   * @param {string}      attr
   * @param {any}         value
   */
  const menuItems = Array.from( document.querySelectorAll( 'li.menu-item-has-children' ) );
  // const subMenuHeader = document.querySelector('li#menu-item-120');
  // const subMenuFooter = document.querySelector('li#menu-item-128');

  const setAttr = ( el, attr, value ) => el.setAttribute( attr, value );

  menuItems.forEach( ( el ) => {
    const button = el.querySelector( 'button' );
      const ariaControls = button.getAttribute('aria-controls');

      if ( ariaControls === 'sub-menu-120' || ariaControls === 'sub-menu-128') {
        button
        .addEventListener( 'click', function( event ) {
          const parent = this.parentNode;
          const iconeMenu = parent.querySelector('img.toggle-button-img');
          const subMenu = parent.lastElementChild;
          /**
           * Si le sous-menu est ouvert :
           * - on retire la classe "open" au sous-menu
           * - on passe l'attribut "aria-expanded" à false
           * - On indique visuellement que le bouton est fermé
           */
          if ( parent && parent.classList.contains( 'open' ) ) {
            parent.classList.remove( 'open' );
            setAttr( parent.querySelector( 'button' ), 'aria-expanded', 'false');
            iconeMenu.src = 'http://localhost:8888/lm-menuisier/wp-content/themes/lawebavenue/assets/img/down-arrow.png';
            subMenu.style.visibility= 'hidden';
            subMenu.style.opacity= '0';
            subMenu.style.transition="all 0.3s ease-in-out";
            subMenu.style.height="10px";

            } else if ( parent ) {
              /**
               * Si le sous-menu est fermé :
               * - on ajoute la classe "open" au sous-menu
               * - on passe l'attribut "aria-expanded" à true
               * - On indique visuellement que le bouton est ouvert
               */
                parent.classList.add( 'open' );
                setAttr( parent.querySelector( 'button' ), 'aria-expanded', 'true' );
                iconeMenu.src = 'http://localhost:8888/lm-menuisier/wp-content/themes/lawebavenue/assets/img/up-arrow.png';
                subMenu.style.visibility= 'visible';
                subMenu.style.opacity= '1';
                subMenu.style.transition="all 0.3s ease-in-out";
                subMenu.style.height="218px";
            }
    
              event.preventDefault();
  
        });
      }
  }); 
}




