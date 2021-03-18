// a태그가 클릭되어도 페이지 상단으로 가는것 방지
$('a').click(function (e) {

  e.preventDefault();
});

//header 스크롤내려가면 숨기고 스크롤 올리면 나타내기


var $window = $(window);

var windowScrollTop = 0;
var windowHeight = 0;

$window.scroll(function() {
    windowScrollTop = $window.scrollTop();
}).scroll();

$window.resize(function() {
    windowHeight = $window.height();
}).resize();

function HeaderGnb__show() {
    $('html').addClass('header-active');
}

function HeaderGnb__init() {
    $(window).on('wheel', function(event) {
        var scrollTop = $window.scrollTop();

        if ( event.originalEvent.deltaY < 0 ) {
          HeaderGnb__show();
        }
        else {
          HeaderGnb__hide();
        }
    });

    function HeaderGnb__hide() {
        $('html').removeClass('header-active');
    }

    HeaderGnb__show();

    $(window).on('keyup', function(event) {
        if ( event.keyCode == 38 || event.keyCode == 36 || event.keyCode == 33 ) {
          HeaderGnb__show();
        }
        else if ( event.keyCode == 40 || event.keyCode == 35 || event.keyCode == 34 ) {
          HeaderGnb__hide();
        }
    });

    $window.scroll(function() {
        console.log(windowHeight);
        if ( windowScrollTop == 0 ) {
          HeaderGnb__show();
        }
    });
}

HeaderGnb__init();

//header 스크롤내려가면 gnb 스타일 변경

var isScrolled = false;

    $(window).on('scroll', function () {
        var scroll = $(this).scrollTop();
        if (scroll > 0) {
            $('#header').addClass('on');

            if (isScrolled == false) {
                $('#header').css({
                    'background-color': '#fff',
                    'color': 'black'
                }).slideDown();
                $('.header__logo').css({
                  'display': 'none'
                });
                $('.header__logo-color').css({
                  'display': 'block'
                });
                $('.header__icos').css({
                  'display': 'none'
                });
                $('.header__icos-black').css({
                  'display': 'flex'
                });
            }
            isScrolled = $('#header').hasClass('on');
        } else {
            $('#header').removeClass('on');
            $('#header').css({
                'background-color': 'transparent',
                'color': '#fff'
            });
            $('.header__logo').css({
              'display': 'block'
            });
            $('.header__logo-color').css({
              'display': 'none'
            });
            $('.header__icos').css({
              'display': 'flex'
            });
            $('.header__icos-black').css({
              'display': 'none'
            });
            isScrolled = false;
        }
    });

// visual 스와이퍼
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
  
  
  // section-2 스와이퍼
  function Section2__init() {
    $('.section-2__inner-page').click(function() {
      const $clicked = $(this);
      const index = $clicked.index();
  
      $clicked.siblings('.active').removeClass('active');
      $clicked.addClass('active');
    });
  
    $('.section-2__ip-slider-box > .swiper-container').each(function(index, node) {
      const $sliderBox = $(node).parent();
      const swiper = new Swiper(node, {
        simulateTouch: false,
        slidesPerView:5,
        // spaceBetween: -50,
        loop: true,
        navigation: {
          nextEl: $sliderBox.find('.section-2__ip-btn-right').get(0),
          prevEl: $sliderBox.find('.section-2__ip-btn-left').get(0),
        },
      });
    });
  }
  
  Section2__init();