

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
                $(".scrollNavi li").removeClass();
                $(".scrollNavi li").eq(i).addClass("on");
                $(".move-box > article").removeClass();				
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

    //.home__img-4 클릭하면 다음페이지 이동
    $(".home__img-4").on("click",function(){
        Page__onDownScroll();
    });	

    //화면에서 마우스 무브 시 박스안의 콘텐츠 움직이기
    $("body").on("mousemove",function(e){
        var posX = e.pageX/100;
        var posY = e.pageY/150;		

        $(".home__img-6").css({"left":60-posX , "bottom":50-posY });	
    });

    
});

