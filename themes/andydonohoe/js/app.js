var andy = {};

// Lets make the menu poppable.
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

andy.welcome = {
  init: function () {
    this.animations();
  },
  animations: function () {
    var $welcome = $('.welcome');
    var $branding = $('.welcome-branding');
    var $brandingSub = $('.welcome-branding__sub');
    var $brandingMain = $('.welcome-branding__main');

    setTimeout(function () {
      $brandingSub.addClass('welcome-branding__sub--animate');
      $brandingMain.addClass('welcome-branding__main--animate');
    }, 1000);
    setTimeout(function () {
      $branding.addClass('welcome-branding--hidden');
      $welcome.addClass('welcome--hidden');
    }, 2300);
  }
};

$(document).ready(function () {
  andy.menuPop.init();
  andy.welcome.init();
});
