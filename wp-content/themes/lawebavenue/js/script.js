
displayHeaderMainMenu();
displayOrCloseModale();
keyboardNavigation();
openModalWithKeyboard();
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

function displayOrCloseModale(){
    /********** 
   * modale 
   *********/
  // Sélection des éléments nécessaires
  const openModalButtons = document.querySelectorAll('.open-modal');
  const closeModalButtons = document.querySelectorAll('.close-modal');
  const modals = document.querySelectorAll('.modal');
  const body = document.body;
  const overlay = document.querySelector('.overlay');

  // Sauvegarder l'élément précédemment en focus
  let previousFocusElement = null;

  // Gestion des clics sur les boutons pour ouvrir les modales
  openModalButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-modal');
      const modal = document.getElementById(modalId);
      overlay.style.display = 'block'; // Afficher l'overlay
      openModal(modal);
    });
  });

  // Gestion des clics sur les boutons pour fermer les modales
  closeModalButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal');
      overlay.style.display = 'none'; // Cacher l'overlay
      closeModal(modal);
    });
  });

  // Fermer les modales avec la touche Échap
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      modals.forEach((modal) => {
        if (modal.getAttribute('aria-hidden') === 'false') {
            overlay.style.display = 'none'; 
          closeModal(modal);
        }
      });
    }
  });

  // Empêcher le focus en arrière-plan lorsqu'une modale est ouverte
  document.addEventListener('focus', (event) => {
    const activeModal = Array.from(modals).find(
      (modal) => modal.getAttribute('aria-hidden') === 'false'
    );

    if (activeModal && !activeModal.contains(event.target)) {
      event.stopPropagation();
      activeModal.querySelector('.close-modal').focus();
    }
  }, true);


  // Fonction pour fermer une modale
  function closeModal(modal) {
    if (modal) {
      // Cacher la modale
      modal.setAttribute('aria-hidden', 'true');

      // Restaurer le focus sur l'élément précédent
      if (previousFocusElement) {
        previousFocusElement.focus();
      }

      // Réactiver le défilement de l'arrière-plan
      body.classList.remove('no-scroll');

    }
  }

  // Fonction pour ouvrir une modale
  function openModal(modal) {
    if (modal) {
      // Sauvegarder l'élément en focus avant d'ouvrir la modale
      previousFocusElement = document.activeElement;

      // Afficher la modale
      modal.setAttribute('aria-hidden', 'false');
      modal.querySelector('.close-modal').focus();

      // Empêcher le défilement de l'arrière-plan
      body.classList.add('no-scroll');
    
    }
  }

}

function keyboardNavigation(){
  const listItems = document.querySelectorAll('ul li');
  listItems.forEach((item, index) => {
    item.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowDown') {
        const next = listItems[index + 1];
        if (next) next.focus();
      } else if (e.key === 'ArrowUp') {
        const prev = listItems[index - 1];
        if (prev) prev.focus();
      }
    });
  });
}

function openModalWithKeyboard(){
  document.querySelectorAll('.section-prestation__list > li').forEach(li => {
      li.addEventListener('keydown', (event) => {
          if (event.key === 'Enter' || event.key === ' ') {
              event.preventDefault(); // Empêche le comportement par défaut pour éviter le défilement avec la barre d'espace
              const button = li.querySelector('.open-modal'); // Trouve le bouton à l'intérieur de l'élément
              if (button) {
                  const modalId = button.getAttribute('data-modal');
                  const modal = document.getElementById(modalId);

                  if (modal) {
                      // Ouvre le modal
                      modal.classList.add('visible');
                      modal.setAttribute('aria-hidden', 'false');
                      modal.querySelector('.close-modal').focus(); // Place le focus sur le bouton de fermeture
                  }
              }
          }
      });
  });
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




