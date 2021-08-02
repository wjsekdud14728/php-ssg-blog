

let Page__nowPageMoving = false;

$(document).ready(function(){
    //페이지 로딩 시 제일 상단으로 스크롤 이동
    $("body,html").stop().animate({"scrollTop" : 0}, 1500, "swing");

    $(window).scroll(function(){

        //변수 scroll에 현재 화면을 스크롤한 거리의 수치를 저장
        var scroll = $(this).scrollTop();		

        for ( var i = 0; i < 5; i++ ) 
        {
            //스크롤값과 박스의 z축 연동	
            $(".move-box>article").eq(i).css({"transform":"translateZ(" + parseInt((-5000 * i) + scroll) +  "px)"});
            
            //특정 스크롤 구간에서 스크롤 네비게이션과 박스 활성화
            if ( scroll >= i * 5000 && scroll < (i + 1) * 5000 )
            {
                $(".scrollNavi li").removeClass("on");
                $(".scrollNavi li").eq(i).addClass("on");
                $(".move-box > article").removeClass("on");				
                $(".move-box > article").eq(i).addClass("on");
            };
        };
    });

    //스크롤 네비게이션 클릭 시 스크롤 이동
    $(".scrollNavi li").on("click",function(){
        if ( Page__nowPageMoving ) return;
        var a = $(this).index();
        
        const duration = 500;
        
        $("body,html").stop().animate({"scrollTop":5000*a},duration,"swing");
        Page__nowPageMoving = true;
        
        setTimeout(function() {
            Page__nowPageMoving = false;
        }, duration);
    });		
    
    // 여기부터 추가됨
    function Page__onDownScroll() {
        const $current = $(".scrollNavi li.on");
        
        if ( $current.length == 0 ) {
            $current = $(".scrollNavi li:first-child");
        }
        
        let $post = $current.next();
        
        if ( $post.length != 0 ) {
            $post.click();
        }
    }

    function Page__onUpScroll() {
        const $current = $(".scrollNavi li.on");
        
        if ( $current.length == 0 ) {
            $current = $(".scrollNavi li:first-child");
        }
        
        let $post = $current.prev();
        
        if ( $post.length != 0 ) {
            $post.click();
        }
    }
    
    $(window).on('wheel', function(event) {
        if ( event.originalEvent.deltaY < 0 ) {
            Page__onUpScroll();
        }
        else {
            Page__onDownScroll();
        }
    });

    $(window).on('keyup', function(event) {
        if ( event.keyCode == 38 || event.keyCode == 36 || event.keyCode == 33 ) {
            Page__onUpScroll();
        }
        else if ( event.keyCode == 40 || event.keyCode == 35 || event.keyCode == 34 ) {
            Page__onDownScroll();
        }
    });
    
    // home 타임라인

    const tl = gsap.timeline();
tl.to(".home__img-2", { duration: 1, opacity:0 })
  .to(".home__img-3", { duration: 2, opacity:1 }, "-=1") 
  .to(".home__img-3", { duration: 1, y:-100 })
  .to(".home__img-4", { duration: 1, opacity:1 });

//   personal 팝업

function Popup__show(no) {
    $('.popup-' + no).addClass('active');
    $('html').addClass('popup-actived');
  }
  
  function Popup__close(no) {
    $('.popup-' + no).removeClass('active');
    
    var isLastPopup = $('.popup.active').length == 0;
    
    if ( isLastPopup ) {
      $('html').removeClass('popup-actived');
    }
  }
  
  function Popup__init(no) {
    $('.btn-show-pop-' + no).click(function() {
      Popup__show(no);
    });
  
    $('.popup-' + no + ' .popup__btn-close, .popup-' + no).click(function() {
      Popup__close(no);
    });
    
    // 부모에게 이벤트 전파 금지
    // 이유, 팝업의 내용부분을 클릭했을 때 꺼지지 않게하기 위해서
    /*
    // v1
    $('.popup-' + no + ' .popup__main').click(function(e) {
      e.stopPropagation();
    });
    */
    
    $('.popup-' + no + ' .popup__main').click(function() {
      return false;
    });
  }
  
  Popup__init(1);
  Popup__init(2);
  Popup__init(3);
  Popup__init(4);
  Popup__init(5);
  Popup__init(6);


    
    
    
});

