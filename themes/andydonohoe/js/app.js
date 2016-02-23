var andy = {};

andy.menuPop = {
  init: function () {
    this.attach();
  },
  attach: function () {
    var $button = $('.header__menu-button');
    var $menu = $('.menu-pop');
    $button.on('click', function () {
      if ($menu.hasClass('menu-pop--hidden')) {
        $(this).removeClass('header__menu-button--pop');
        $(this).addClass('header__menu-button--close');
        $menu.removeClass('menu-pop--hidden');
        $menu.addClass('menu-pop--show');
      } else {
        $(this).removeClass('header__menu-button--close');
        $(this).addClass('header__menu-button--pop');
        $menu.removeClass('menu-pop--show');
        $menu.addClass('menu-pop--hidden');
      }
    });
  },
};

$(document).ready(function () {
  andy.menuPop.init();
});
