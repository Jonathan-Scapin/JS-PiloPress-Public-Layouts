jQuery( document ).ready(
  function ($) {

      var layout_name   = '.menu-contained-seabass';
      var $header       = $( layout_name );
      var $main_menu    = $( layout_name + ' .wrapper-menu-items' );
      var $burger_close = $( layout_name + ' #burger button svg.close' );
      var $burger_open  = $( layout_name + ' #burger button svg.open' );

      $( document ).on(
          'click',
          '#nav-toggle',
          function (ev) {

              ev.preventDefault();

              $burger_close.toggleClass( 'hidden' );
              $burger_open.toggleClass( 'hidden' );

              if ( $main_menu.length ) {
                  $main_menu.toggleClass( 'hidden' );
              }

          },
      );
  },
);
items = document.querySelectorAll('[id ^= "menu-item-"]');

for (let i = 0; i < items.length; i++) {
    let itemsId = items[i];
    itemsId.className += " px-4"
}
