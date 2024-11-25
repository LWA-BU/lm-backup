/** @type {HTMLElement[]} */
/**
 * @param {HTMLElement} el
 * @param {string}      attr
 * @param {any}         value
 */


const menuItems = Array.from( document.querySelectorAll( 'li.menu-item-has-children' ) );
const iconeMenu = document.querySelector('img.toggle-button-img');

const setAttr = ( el, attr, value ) => el.setAttribute( attr, value );

menuItems.forEach( ( el ) => {
  const button = el.querySelector( 'button' );
    const ariaControls = button.getAttribute('aria-controls');

    if ( ariaControls === 'sub-menu-120' || ariaControls === 'sub-menu-128') {
            toggleButton(button);
        }
} );


function toggleButton(button){
    button
    .addEventListener( 'click', function( event ) {
      const parent = this.parentNode;
      console.log(parent);
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
        setAttr( parent.querySelector( 'button' ), 'aria-expanded', 'false' );
        iconeMenu.src = 'http://localhost:8888/lm-menuisier/wp-content/themes/lawebavenue/assets/img/down-arrow.png';
        subMenu.style.visibility= 'hidden';

        
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
        }

          event.preventDefault();

      } );
}