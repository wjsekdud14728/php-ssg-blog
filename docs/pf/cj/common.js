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


  // 인디케이터 content 부분에서만 fixed

  const containerBoxBorderTopWidth = parseInt($('#content').css('border-top-width'));
const containerBoxBorderBottomWidth = parseInt($('#content').css('border-bottom-width'));

ScrollTrigger.create({
  trigger:'#content',
  pin:'.indicator',
  start: containerBoxBorderTopWidth + "px 0",
  end: () => "bottom " + ($('.indicator').outerHeight() + containerBoxBorderBottomWidth) + "px",
})

  // one_page_link

  console.clear();
var OnePageMenu__data = [];
var OnePageMenu__currentLinkNo = 0;
var OnePageMenu__initialNo = window.location.hash.replace('#page', '') * 1;
if ( isNaN(OnePageMenu__initialNo) ) { OnePageMenu__initialNo = 0; }
var scrollTop = $(window).scrollTop();
var windowHeight = $(window).height();

function OnePageMenu__changeLinkNo(linkNo) {
  if ( OnePageMenu__currentLinkNo !== linkNo ) {

    $('a.one-page-link[href="#page' + OnePageMenu__currentLinkNo + '"]').removeClass('active');
    OnePageMenu__currentLinkNo = linkNo;

    $('a.one-page-link[href="#page' + OnePageMenu__currentLinkNo + '"]').addClass('active');

    window.location.hash = 'page' + OnePageMenu__currentLinkNo;
  }
}

function OnePageMenu__init() {
  $('[data-one-page-link]').addClass('one-page-menu-target');

  $(window).scroll(_.debounce(OnePageMenu__checkAndActive, 50));

  $(window).resize(_.debounce(OnePageMenu__initOffset, 500));
  OnePageMenu__initOffset();

  $('a.one-page-link').click(function() {
    var $el = $(this);

    var href = $el.attr('href');

    var no = href.replace('#page', '');

    var top = $('[data-one-page-link="page' + no + '"]').offset().top;

    $('html,body').stop().animate({scrollTop:top}, 300);

    return false;
  });

  if ( OnePageMenu__initialNo > 0 ) {
    if ( OnePageMenu__initialNo <= OnePageMenu__data.length ) {
      $('a.one-page-link[href="#page' + OnePageMenu__initialNo + '"]').click();
    }
  }
}

function OnePageMenu__initOffset() {
  OnePageMenu__data = [];

  $('.one-page-menu-target').each(function(index, node) {
    var $node = $(node);

    var offsetTop = $node.offset().top;
    
    var matrix = $node.css('transform').replace(/[^0-9\-.,]/g, '').split(',')
    var translateX = matrix[12] || matrix[4];
    var translateY = matrix[13] || matrix[5];

    if ( translateY ) {
      offsetTop -= translateY;
    }

    $node.data('data-one-page-menu-target-offsetTop', offsetTop);
    $node.attr('data-one-page-menu-target-offsetTop', offsetTop);

    if ( !$node.attr('data-one-page-menu-target-diff-y') ) {
      $node.attr('data-one-page-menu-target-diff-y', '0');
    }

    var diffY = $node.attr('data-one-page-menu-target-diff-y');

    if ( diffY.substr(-2, 2) == 'vh' ) {
      diffY = parseInt(diffY);

      diffY = diffY * $(window).height() / 100;
    }
    else if ( diffY.substr(-1, 1) == '%' ) {
      diffY = parseInt(diffY);

      diffY = diffY * $node.height() / 100;
    }
    else {
      diffY = parseInt(diffY);
    }

    $node.data('data-one-page-menu-target-diff-y', diffY);

    var link = $node.attr('data-one-page-link');

    OnePageMenu__data.push({
      link: link,
      offsetTop: offsetTop,
      diffY: diffY,
      linkNo: index + 1
    });
  });

  OnePageMenu__checkAndActive();
}

function OnePageMenu__checkAndActive() {
  scrollTop = $(window).scrollTop();
  windowHeight = $(window).height();

  var linkNo = 0;

  for ( var i = OnePageMenu__data.length - 1; i >= 0; i-- ) {
    var row = OnePageMenu__data[i];

    if ( scrollTop + windowHeight + row.diffY > row.offsetTop ) {
      linkNo = row.linkNo;

      if ( i > 0 && scrollTop + OnePageMenu__data[i - 1].diffY <= OnePageMenu__data[i - 1].offsetTop ) {
        linkNo--;
      }

      break;
    }
  }

  OnePageMenu__changeLinkNo(linkNo);

  $('.one-page-menu-target').each(function(index, node) {
    var $node = $(node);

    var offsetTop = $node.data('data-one-page-menu-target-offsetTop') * 1;
    var diffY = parseInt($node.data('data-one-page-menu-target-diff-y'));

    var nodeHeight = $node.height();

    if ( scrollTop + windowHeight + diffY > offsetTop ) {
      if ( $node.hasClass('active') == false ) {
        $node.addClass('active');
      }
    }
    else {
      if ( $node.hasClass('active') ) {
        $node.removeClass('active');
      }
    }
  });
}

$(function() {
  OnePageMenu__init();
});

  
  
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
        loop: true,
        navigation: {
          nextEl: $sliderBox.find('.section-2__ip-btn-right').get(0),
          prevEl: $sliderBox.find('.section-2__ip-btn-left').get(0),
        },
      });
    });
  }
  
  Section2__init();




  // slider-box > .swiper-container').each(function(index, node) {
  //   const $sliderBox = $(node).parent();
  //   const swiper = new Swiper(node, {
  //     slidesPerView:3.5,
  //     spaceBetween:0,
  //     loop: true,
  //     navigation: {
  //       nextEl: $sliderBox.find('.section-3__ip-btn-right').get(0),
  //       prevEl: $sliderBox.find('.section-3__ip-btn-left').get(0),
  //     },
  //   });
  // });