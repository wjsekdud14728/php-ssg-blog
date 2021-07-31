$(document).ready(function () {
    
    // a태그가 클릭되어도 페이지 상단으로 가는것 방지
    $('a').click(function (e) {

        e.preventDefault();
    });


    //    메뉴폴다운
    $('#header>.menu_bar>.gnb>ul>li').on("mouseover", function () {
        $('#header>.menu_bar>.gnb>ul>li>.sub').stop().slideDown(200);
        $('#header>.sub-wrap').stop().slideDown(200);
    });

    $('#header>.sub-wrap').on("mouseleave", function () {
        $('#header>.menu_bar>.gnb>ul>li>.sub').stop().slideUp(200);
        $('#header>.sub-wrap').stop().slideUp(200);
    });

    //    비주얼 아울캐러셀
    $('#visual>.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause:true,
        loop: true,
        margin: 0,
        navText:['<div>prev</div>', '<div>next</div>'],
        responsive: {
            0: {
                items: 1
            }
        }
    });
    
    $('#content>.new_event>.event_slide_wrap>.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        loop: true,
        margin: 0,
        navText:['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 3
            }
        }
    });
    
//    내맘대로커피_mousemove
    var x_now = parseInt($('.balls').css('left'));
    var y_now = parseInt($('.balls').css('top'));
    
    $('.on_the_way_wrap').on("mousemove",function(e){

        var x = e.pageX/50;
        var y = e.pageY/50;

        $('.balls').css({'left':x_now-x , 'top':y_now-y});
    });
    
    $('.on_the_way_wrap').on("mouseleave", function () {
        $('.balls').css({'left':0 , 'top':0});
    });

//    모바일토글바버튼
    
    /*햄버거*/
    $('#header>.mobile_menu_bar>.toggle_side_bar_btn').click(function () {
        var nowAnimating = $(this).attr('data_ico_now_animating');

        if (nowAnimating == 'Y') {
            return;
        }

        $(this).toggleClass('active');

});
    
});
