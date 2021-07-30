$(document).ready(function () {

    // a태그가 클릭되어도 페이지 상단으로 가는것 방지
    $('a').click(function (e) {

        e.preventDefault();
    });

    //    .top-bar-left>.languge 마우스오버 효과
    $('.top-bar-left>.languge').on("mouseover", function () {
        $(this).children(".sub-menu").stop().slideDown();
        $(this).find('>a>div:last-child').removeClass('active');
        $(this).find('>a>div:first-child').addClass('active');
    })

    $('.top-bar-left>.languge').on("mouseleave", function () {
        $(this).children(".sub-menu").stop().slideUp();
        $(this).find('>a>div:first-child').removeClass('active');
        $(this).find('>a>div:last-child').addClass('active');
    })

    //    서치박스
    $searchOpen = $('#header>.menu-bar-1 .menu-1>ul>li:last-child');
    $searchClose = $('#header .search>form>.search-close');

    $searchOpen.click(function () {
        $('#header .search').addClass('active');
    });

    $searchClose.click(function () {
        $('#header .search').removeClass('active');
    });


    //    메뉴바 폴다운
    $('#header>.menu-bar-1 .depth-1>li').on("mouseover", function () {
        $(this).children(".sub-gnb").stop().slideDown();
    });

    $('#header>.menu-bar-1 .depth-1>li').on("mouseleave", function () {
        $(this).children(".sub-gnb").stop().slideUp();
    });

    //스크롤내려갔을때 #menu-bar-1 fixed로 변환

    var isScrolled = false;

    $(window).on('scroll', function () {
        var scroll = $(this).scrollTop();
        if (scroll > 0) {
            $('#header').addClass('on');

            if (isScrolled == false) {
                $('.menu-bar-1').css({
                    'position': 'fixed',
                    'display': 'none'
                }).slideDown();
            }
            isScrolled = $('#header').hasClass('on');
        } else {
            $('#header').removeClass('on');
            $('.menu-bar-1').css({
                'position': 'relative',
                'display': 'block'
            });
            isScrolled = false;
        }
    });

    //    모바일메뉴 토글바 버튼
    $('#header>.mobile-menu-bar-1>.toggle-side-bar-btn').click(function () {
        var nowAnimating = $(this).attr('data-ico-now-animating');

        if (nowAnimating == 'Y') {
            return;
        }

        $(this).toggleClass('active');
//                $(this).attr('data-ico-now-animating', 'Y');
//                
//                setTimeout(function(){
//                    $(this).attr('data-ico-now-animating','N');
//                }, 600);

        if ($(this).hasClass('active')) {
            showRightSideBar();

        } else {
            hideRightSideBar();
        }

        function showRightSideBar() {
            $('#header>.right-side-bar-box').addClass('active');
        }

        function hideRightSideBar() {
            $('#header>.right-side-bar-box').removeClass('active');
        }

        $('#header>.right-side-bar-box').click(function () {
            $('#header>.mobile-menu-bar-1>.toggle-side-bar-btn').click();
        });

        $('#header>.right-side-bar').click(function (e) {
            e.stopPropagation();
        });

        //모바일 메뉴바뜨면 전체 세로스크롤 사라짐

        function showRightSideBar() {
            // html, body에 세로 스크롤 바가 사라진다.
            $('html').addClass('hide-y-scroll-bar-on-sm-down');
            $('.right-side-bar-box').addClass('active');
        }

        function hideRightSideBar() {
            // html, body에 세로 스크롤 바가 다시 보여진다.
            $('html').removeClass('hide-y-scroll-bar-on-sm-down');
            $('.right-side-bar-box').removeClass('active');

            $('.right-side-bar .menu-1 ul > li.active').removeClass('active');
        }
    });

    //    우측 하위메뉴
    $('#header>.right-side-bar-box>.right-side-bar>.menu-1 ul>li').click(function (e) {

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).siblings('.active').removeClass('active');
            $(this).find('.active').removeClass('active');
            $(this).addClass('active');
        }

        e.stopPropagation();
    });




    //    모바일 서치박스

    $('#header>.mobile-menu-bar-1>.search-open>a').click(function () {
        $('#header>.mobile-menu-bar-1>.search-close').addClass('active');
        $('#header>.mobile-menu-bar-1>.search-box').addClass('active');
    });

    $('#header>.mobile-menu-bar-1>.search-close').click(function () {
        $('#header>.mobile-menu-bar-1>.search-close').removeClass('active');
        $('#header>.mobile-menu-bar-1>.search-box').removeClass('active');
    });



    // .page-btns 누르면 비주얼 이미지 변경
    $('#visual > .page-btns > li').click(function () {
        $(this).addClass('active');
        $(this).siblings('.active').removeClass('active');

        var index = $(this).index();

        var $slider = $(this).closest('#visual');

        $slider.find(' > .slides > div.active').removeClass('active');
        $slider.find(' > .slides > div').eq(index).addClass('active');
    });

     //비주얼이미지 자동변경
    setInterval(function () {
        $('#visual> .page-btns > li.active').each(function (index, node) {
            var $current = $(node);
            var $slider = $current.closest('#visual');

            if ($slider.attr('data-visual') !== 'N') {
                var $post = $current.next();

                if ($post.length == 0) {
                    $post = $current.siblings().eq(0);
                }

                $post.click();
            }
        });
    }, 3000);

    // 비주얼에 마우스올렸을때 자동넘김 멈춤 마우스땟을때 다시 실행
    $('#visual').mouseover(function () {

        $(this).attr('data-visual', 'N');
    });

    $('#visual').mouseleave(function () {

        $(this).attr('data-visual', 'Y');
    });

    // .visual>.side-btns 눌렀을때

    $('#visual>.side-btns>a').click(function () {

        var $this = $(this);
        var $slider = $this.closest('#visual');
        var isLeft = $this.index() == 0;
        var $currnet = $slider.find('>.slides > .active');
        var $post = null;
        var $page = $slider.find('>.page-btns>.active');
        var $postPage = null;

        if (isLeft) {
            $post = $currnet.prev();
            $postPage = $page.prev();
        } else {
            $post = $currnet.next();
            $postPage = $page.next();
        }

        if ($post.length == 0) {
            if (isLeft) {
                $post = $slider.find('>.slides > div:last-child');
            } else {
                $post = $slider.find('>.slides > div:first-child');
            }
        }

        if ($postPage.length == 0) {
            if (isLeft) {
                $postPage = $slider.find('>.page-btns > li:last-child');
            } else {
                $postPage = $slider.find('>.page-btns > li:first-child');
            }
        }

        $currnet.removeClass('active');
        $post.addClass('active');
        $page.removeClass('active');
        $postPage.addClass('active');
    });

    //    노티스 탭메뉴
    $('.hb-media .notice>.tab-menu>li').click(function () {

        $(this).addClass('active');
        $(this).siblings('.active').removeClass('active');

        var index = $(this).index();
        var $notice = $(this.closest('.notice'));

        $notice.find('>.tab-content>li.active').removeClass('active');
        $notice.find('>.tab-content>li').eq(index).addClass('active');
    });

    //    학사일정 탭메뉴
    $('.hb-media .schedule>.month-info>.month-list>li').click(function () {

        var index = $(this).index();
        var $schedule = $(this.closest('.schedule'));

        $schedule.find('>.year-month>.month>.active').removeClass('active');
        $schedule.find('>.year-month>.month>span').eq(index).addClass('active');

        $schedule.find('>.month-info>.month-schedule>.active').removeClass('active');
        $schedule.find('>.month-info>.month-schedule>ul').eq(index).addClass('active');
    });

    //    .calender-btns 버튼
    $('.schedule>.year-month>.calender-btns>a').click(function () {

        var $this = $(this);
        var $schedule = $this.closest('.schedule');
        var isLeft = $this.index() == 0;
        var $currnet = $schedule.find('>.year-month>.month > .active');
        var $post = null;
        var $content = $schedule.find('>.month-info>.month-schedule>.active');
        var $postContent = null;

        if (isLeft) {
            $post = $currnet.prev();
            $postContent = $content.prev();
        } else {
            $post = $currnet.next();
            $postContent = $content.next();
        }

        if ($post.length == 0) {
            if (isLeft) {
                $post = $schedule.find('>.year-month>.month > span:last-child');
            } else {
                $post = $schedule.find('>.year-month>.month > span:first-child');
            }
        }

        if ($postContent.length == 0) {
            if (isLeft) {
                $postContent = $schedule.find('>.month-info>.month-schedule > ul:last-child');
            } else {
                $postContent = $schedule.find('>.month-info>.month-schedule > ul:first-child');
            }
        }

        $currnet.removeClass('active');
        $post.addClass('active');
        $content.removeClass('active');
        $postContent.addClass('active');
    });

    // sns 아이콘 버튼

    $('#content>.hb-sns .sns-icons>li').click(function () {

        $(this).addClass('active');
        $(this).siblings('.active').removeClass('active')

        var index = $(this).index();
        var $sns = $(this).closest('.hb-sns');

        $sns.find('>div>.sns-wrapper>.sns-view-port>.sns-slide>li.active').removeClass('active');
        $sns.find('>div>.sns-wrapper>.sns-view-port>.sns-slide>li').eq(index).addClass('active');
    });

    $('.hb-sns>div>.sns-wrapper>.side-btns>a').click(function () {

        var $this = $(this);
        var $sns = $this.closest('.hb-sns');
        var isLeft = $this.index() == 0;
        var $icon = $sns.find(' .sns-icons>li.active');
        var $post = null;
        var $slide = $sns.find('>div>.sns-wrapper>.sns-view-port>.sns-slide>li.active');
        var $postSlide = null;

        if (isLeft) {
            $post = $icon.prev();
            $postSlide = $slide.prev();
        } else {
            $post = $icon.next();
            $postSlide = $slide.next();
        }

        if ($post.length == 0) {
            if (isLeft) {
                $post = $sns.find(' .sns-icons>li:last-child');
            } else {
                $post = $sns.find(' .sns-icons>li:first-child');
            }
        }

        if ($postSlide.length == 0) {
            if (isLeft) {
                $postSlide = $sns.find('>div>.sns-wrapper>.sns-view-port>.sns-slide>li:last-child');
            } else {
                $postSlide = $sns.find('>div>.sns-wrapper>.sns-view-port>.sns-slide>li:first-child');
            }
        }

        $icon.removeClass('active');
        $post.addClass('active');
        $slide.removeClass('active');
        $postSlide.addClass('active');
    });
    
    $('#content>.hb-qick-menu>div>.menu-1>ul>li').click(function(){
        $(this).addClass('active');
        $(this).siblings('.active').removeClass('active');
        
        var index = $(this).index();
        var $sns = $(this).closest('.hb-qick-menu');

        $sns.find('>div>.menu-2>ul.active').removeClass('active');
        $sns.find('>div>.menu-2>ul').eq(index).addClass('active');
    })


});
