function MySliderBox1__init() {
    var swiper = new Swiper('.my-slider-box-1 .swiper-container', {
      simulateTouch: false,
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      },
      effect: 'fade',
      pagination: {
        el: ".my-slider-box-1 .swiper-pagination",
        clickable:true,
        renderBullet: function (index, className) {
          const $currentSlide = $('.my-slider-box-1 .swiper-slide[data-index="' + index + '"]');
  
          const bullet = '<span class="' + className + '"><span class="txt">' + $currentSlide.attr('data-title') + '</span></span>';
          return bullet;
        },
      },
      slidesPerView:1,
      spaceBetween:0,
      loop: false,
    });
  
    const $bulletActive = $('.my-slider-box-1 .swiper-pagination-bullet-active');
  
    $bulletActive.removeClass('.swiper-pagination-bullet-active');
    setTimeout(function() {
      $bulletActive.addClass('.swiper-pagination-bullet-active');
    }, 100);
    
    $('.my-slider-box-1 .btn-stop-autoplay').click(function() {
      $('.my-slider-box-1').attr('data-autoplay-stop', 'Y');
      swiper.autoplay.stop();
    });
    
    $('.my-slider-box-1 .btn-start-autoplay').click(function() {
      $('.my-slider-box-1').attr('data-autoplay-stop', '');
      swiper.autoplay.start();
    });
  }
  
  MySliderBox1__init();
  
  function Html__init() {
    setTimeout(function() {
      $('html').addClass('active');
    }, 10);
  }
  
  Html__init();
  
  
  
  function Section2__init() {
    $('.section-2__menu-box > ul > li').click(function() {
      const $clicked = $(this);
      const index = $clicked.index();
  
      $clicked.siblings('.active').removeClass('active');
      $clicked.addClass('active');
  
      $('.section-2__inner-page.active').removeClass('active');
      $('.section-2__inner-page').eq(index).addClass('active');
    });
  
    $('.section-2__ip-slider-box > .swiper-container').each(function(index, node) {
      const $sliderBox = $(node).parent();
      const swiper = new Swiper(node, {
        simulateTouch: false,
        slidesPerView:3.5,
        spaceBetween:20,
        loop: true,
        navigation: {
          nextEl: $sliderBox.find('.section-2__ip-btn-right').get(0),
          prevEl: $sliderBox.find('.section-2__ip-btn-left').get(0),
        },
      });
    });
  }
  
  Section2__init();