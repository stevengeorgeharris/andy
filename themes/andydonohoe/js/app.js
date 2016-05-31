var andy = {};

// Lets make the menu poppable.
andy.menuPop = {
  init: function () {
    this.attach();
  },
  attach: function () {
    var $button = $('.header__menu-button');
    var $menu = $('.menu-pop');
    var rootUrl = window.location;

    $button.on('click', function () {
      if ($(this).hasClass('header__menu-button--project')) {
        $(this).removeClass('header__menu-button--close');
        $(this).removeClass('header__menu-button--project');
        $(this).addClass('header__menu-button--pop');
        $('.project-slider-container').remove();
        if (history) {
          history.pushState(null, null, rootUrl.origin);
        }
        $('.project').removeClass('project--active');
        $('body').css('overflow', 'scroll');
      } else if (! $menu.hasClass('menu-pop--show') ) {
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
    var $maintenance = $('.maintenance');
    var $maintenanceBranding = $('.maintenance-branding__main');
    var $maintenanceBrandingSub = $('.maintenance-branding__sub');
    var $maintenanceBrandingSoon = $('.maintenance-branding__soon');
    var $branding = $('.welcome-branding');
    var $brandingSub = $('.welcome-branding__sub');
    var $brandingMain = $('.welcome-branding__main');
    var $projects = $('.portfolio');

    if ($maintenance.length > 0) {
      setTimeout(function () {
        $maintenanceBranding.addClass('maintenance-branding__main--animate');
        $maintenanceBrandingSub.addClass('maintenance-branding__sub--animate');
      }, 1000);
      setTimeout(function () {
        $maintenanceBrandingSoon.addClass('maintenance-branding__soon--animate');
      }, 1600);
    }

    setTimeout(function () {
      $brandingSub.addClass('welcome-branding__sub--animate');
      $brandingMain.addClass('welcome-branding__main--animate');
    }, 1000);
    setTimeout(function () {
      $branding.addClass('welcome-branding--hidden');
      $welcome.addClass('welcome--hidden');
    }, 2600);
    setTimeout(function() {
      $projects.addClass('portfolio--loaded');
    }, 2800);
  }
};

andy.grid = {
  init: function() {
    $('.projects').masonry({
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.projects__card',
      // use element for option
      columnWidth: '.projects__measure',
      percentPosition: true
    });
  }
};

andy.getPost = {
  init: function() {
    this.attach();
  },
  attach: function() {
    $('.projects__card a').on('click', function(e) {
      e.preventDefault();

      var postId = $(this).data('id');
      var title = $(this).data('title');
      var titleNoSpace = title.split(' ').join('-').toLowerCase();

      $.ajax({
    		url: app.ajaxurl,
    		type: 'post',
    		data: {
    			action: 'ajax_post',
          post_id: postId
    		},
    		success: function(result) {
    			$('.project').append(result);
          andy.slider.init();
          $('.project').addClass('project--active');
          $('body').css('overflow', 'hidden');
          if (history) {
            history.pushState(null, null, 'projects/' + titleNoSpace);
          }
          $('.header__menu-button').removeClass('header__menu-button--pop');
          $('.header__menu-button').addClass('header__menu-button--close header__menu-button--project');
    		}
    	});
    });
  }
}

andy.slider = {
  init: function() {
    this.attach();
    this.setCount();
    if (Modernizr.touchevents) {
      this.touch();
    }
  },
  touch: function() {
    $('.project-slider__next').hide();
    $('.project-slider__prev').hide();
  },
  setCount: function() {
    var $current = $('.project-slider__current');
    var $total = $('.project-slider__total');
    var count = $('.slick-slide').length;
    console.log(count);
    var current = $('.project-slider').slick('slickCurrentSlide');
    $current.text(current + 1);
    if (count === 1) {
      $total.text(count);
    } else {
      $total.text(count - 2);
    }
  },
  attach: function() {
    var $target = $('.project-slider');

    if ($target.length > 0) {
      $target.slick({
        nextArrow: $('.project-slider__next'),
        prevArrow: $('.project-slider__prev'),
        cssEase: 'ease-in-out',
        cssTransform: true,
        swipe: true
      });
      $target.on('afterChange', function(event, slick, currentSlide, nextSlide){
        andy.slider.setCount();
      });
    }
  }
};

andy.initialise = function() {
  andy.menuPop.init();
  andy.welcome.init();
  andy.grid.init();
  andy.slider.init();
  andy.getPost.init();
};

window.onload = andy.initialise;
