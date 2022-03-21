$(function() {
    $(window).on('load', function() {
        sliderVisual();
        sliderStore();
        sliderPremium();
        sliderBanner();
        sliderCategory();
    });

    // 메인 : 비주얼
    var sliderVisual = new Swiper('.slider_visual', {
        effect: "fade",
        allowTouchMove : true,
        loop: true,
        speed: 1000,
        zoom: true,
        autoplay: false,
        pagination: {
            el: '.slider_visual .swiper-pagination',
            type: 'fraction',
            clickable : true,
        },
    });

    // 메인 : 최근본매장 
    var sliderStore = new Swiper('.slider_store', {
		slidesPerView: 2.5,
        spaceBetween: 12,
        nested :true,
    }); 

    // 메인 : 프리미엄샵 
    var sliderPremium = new Swiper('.slider_premium', {
        slidesPerView: 1.8,
        spaceBetween: 24,
        centeredSlides: true,
        loop: true,
        loopAdditionalSlides: 24,
        speed: 800,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.slider_premium .swiper-pagination',
            type: 'fraction',
            clickable : true,
        },
    }); 

    // 메인 : 롤링배너 
    var sliderBanner = new Swiper('.slider_banner', {
        loop: true,
        speed: 800,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.slider_banner .swiper-pagination',
            clickable : true,
        },
    }); 

    // 서브상단 : 내주변 카테고리
    var sliderCategory = new Swiper('.local_category', {
		slidesPerView: 3,
        spaceBetween: 0,
        nested :true,
    }); 

    // 서브 : 내주변 - 지도보기 리스트
    var sliderPremium = new Swiper('.slider_map_list', {
        slidesPerView: 1.2,
        spaceBetween: 12,
        centeredSlides: true,
        loop: true,
        loopAdditionalSlides: 12,
        speed: 800,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    }); 




});


$(function() {
    // 상단 - 검색
    $('.search').on('click', function() {
        //$(this).hide();
        $(".search_btn_close").show();
        $(".search_wrap").fadeIn(300);
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.search_btn_close').on('click', function() {
        $(".search").show();
        $(".search_wrap").fadeOut(300);
        $("body").css({'height':'auto', 'overflow':'auto'});
    });

    // 상단 - 위치지정 클릭시 토스트배너 출력
    $('.location').on('click', function() {
        $(".location_box .btn_close").show();
        $(".location_box").fadeIn(200);
        $(".location_box").find('.location_content').animate({bottom:0}, 200);
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.location_box .btn_close').on('click', function() {
        $(".location").show();
        $(".location_box").fadeOut(300);
        $(".location_box").find('.location_content').animate({bottom:-150}, 300);
        $("body").css({'height':'auto', 'overflow':'auto'});
    });

    // 메인 : 내주변 매장 포트폴리오 탭메뉴
    $(".portfolio_wrap .portfolio_tab li").click(function() {
        $(".portfolio_wrap .portfolio_tab li").removeClass('on');
        $(".portfolio_wrap .content").removeClass('on');
        $(this).addClass('on');
        $("#" + $(this).data('id')).addClass('on');
    });

    // 하단 정보 토글메뉴
    $('.ft_info .info_text').on('click',function(e) {
        e.preventDefault();
        if ($(this).parent().hasClass('on')) {
            $(this).parent().removeClass('on').find('.info_con').slideUp(300);
        } else {
            $(this).parent().addClass('on').find('.info_con').slideDown(300);
        }
    });

    // 삭제 레이어팝업
    $('.btn_del').on('click',function(e) {
        e.preventDefault();
        $('.pop_wrap').addClass('active');
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.pop_wrap .btn_confirm').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.pop_wrap').removeClass('active');
        $("body").css({'height':'auto', 'overflow':'auto'});
    });

	// sns 레이어팝업
    $('.btn_sns').on('click',function(e) {
        e.preventDefault();
        $('.pop_wrap').addClass('active');
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.pop_wrap .btn_confirm').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.pop_wrap').removeClass('active');
        $("body").css({'height':'auto', 'overflow':'auto'});
    });

	// 반려동물 상품선택
    $('.btn_product').on('click',function(e) {
        e.preventDefault();
        $('.pop_wrap2').addClass('active');
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.pop_wrap2 .btn_confirm').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.pop_wrap2').removeClass('active');
        $("body").css({'height':'auto', 'overflow':'auto'});
    });


	// 반려동물 상품선택
    $('.btn_product2').on('click',function(e) {
        e.preventDefault();
        $('.pop_wrap3').addClass('active');
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.pop_wrap3 .btn_confirm').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.pop_wrap3').removeClass('active');
        $("body").css({'height':'auto', 'overflow':'auto'});
    });


	// 반려동물 상품선택 없을때
    $('.btn_product3').on('click',function(e) {
        e.preventDefault();
        $('.pop_wrap4').addClass('active');
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.pop_wrap4 .btn_confirm').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.pop_wrap4').removeClass('active');
        $("body").css({'height':'auto', 'overflow':'auto'});
    });


	// 반려동물 상품선택 없을때
    $('.btn_product4').on('click',function(e) {
        e.preventDefault();
        $('.pop_wrap5').addClass('active');
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.pop_wrap5 .btn_confirm').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.pop_wrap5').removeClass('active');
        $("body").css({'height':'auto', 'overflow':'auto'});
    });

    // 내주변 - 카테고리 클릭시 토스트배너 출력
    $('.btn_cate').on('click', function() {
        $(".category_box .btn_close").show();
        $(".category_box" + $(this).attr("href")).fadeIn(200);
        //$(".category_box" + $(this).attr("href")).css({'display':'block'});
        $(".category_box").find('.category_content').animate({bottom:0}, 200);
        $("body").css({'height':$(window).height(), 'overflow':'hidden'});
    });
    $('.category_box .btn_close').on('click', function() {
        $(".btn_cate").show();
        $(".category_box").fadeOut(300);
        //$(".category_box").css({'display':'none'});
        $(".category_box").find('.category_content').animate({bottom:-150}, 300);
        $("body").css({'height':'auto', 'overflow':'auto'});
    });

    // 주소검색 - 삭제,전체삭제
    $('.recently_search_wrap .btn_alldel').on('click', function() {
        $(".recently_search_wrap").children().remove();
    });
    $('.recently_search_wrap .btn_delete').on('click', function() {
        $(this).parent().remove();
    });


    var lastScrollTop = 0;
    
    $(window).on('load scroll', function() {
        scrollCon();
	});

    function scrollCon() {
        var scrollTop = $(window).scrollTop();

        //상단, 메인퀵메뉴 fixed
        if (scrollTop >= 250) {
            $('.main_header').addClass("fixed");
            $('.header_quickmenu').addClass("fixed");
        } else {
            $('.main_header').removeClass("fixed");
            $('.header_quickmenu').removeClass("fixed");
        }

        //top 버튼 스크롤
        if (scrollTop >= 200) {
            $('.btn_top').fadeIn(200).css({"display":"block"});
        } else {
            $('.btn_top').fadeOut(200);
        }
        if(scrollTop + $(window).height() == $(document).height()) {
            $('.btn_top').addClass("bg");
        } else {
            $('.btn_top').removeClass("bg");
        }

        $('.btn_top_wrap a').on("click", function (e) {
            e.preventDefault();
            $("html, body").stop().animate({ scrollTop: 0 }, 400);
        });
        
        // 하단툴바 스크롤
       /* if (scrollTop >= 0) { 
            if ((scrollTop > lastScrollTop) && (lastScrollTop > 0)) {
                $('.toolbar').addClass('down');
            } else {
                $('.toolbar').removeClass('down');
            }
            lastScrollTop = scrollTop;
        } 

		*/
    }
});




    function phone_check() {
    	 $('#input_phone2').show();
		 $('.fa-times5').show();
		 $('#fa-times4').show();
    }


function lo_check()
{
    if($('#input_text').val() == "")
    {
        $('.fa-times').show();
		$('.fa-times2').hide();
    }
    else
    {
        $('.fa-times2').show();
		$('.fa-times').hide();
    }

	if($('#input_phone').val() == "")
    {
        $('.fa-times3').show();
		$('.fa-times4').hide();

    }
    else
    {
        $('.fa-times4').show();
		$('.fa-times3').hide();

    }



    if($('#input_pw').val() == "")
    {
        $('#pass_i').hide();
    }
    else
    {
        $('#pass_i').show();
    }

	if($('#input_pw2').val() == "")
    {
        $('#pass_i2').hide();
    }
    else
    {
        $('#pass_i2').show();
    }

    if($('#input_text').val() != "" && $('#input_name').val() != "" && $('#input_phone').val() != "" )
    {
        $('#TestBtn').addClass('btn_login_on');
        $('#TestBtn').removeClass('btn_login');
        $('#TestBtn').removeAttr('disabled');
    }
    else
    {
        $('#TestBtn').addClass('btn_login');
        $('#TestBtn').removeClass('btn_login_on');
        $('#TestBtn').attr('disabled', 'disabled');
    }
}
function click_id()
{
    $('#input_text').val('');
    lo_check();
}
function click_pass()
{
    if($('#input_pw').attr('type') == "password")
    {
        $('#input_pw').attr('type', 'text');
        $('#pass_i').addClass('fa-eye-slash');
        $('#pass_i').removeClass('fa-eye');
    }
    else
    {
        $('#input_pw').attr('type', 'password');
        $('#pass_i').addClass('fa-eye');
        $('#pass_i').removeClass('fa-eye-slash');
    }
    lo_check();
}

function click_pass2()
{
    if($('#input_pw2').attr('type') == "password")
    {
        $('#input_pw2').attr('type', 'text');
        $('#pass_i2').addClass('fa-eye-slash');
        $('#pass_i2').removeClass('fa-eye');
    }
    else
    {
        $('#input_pw2').attr('type', 'password');
        $('#pass_i2').addClass('fa-eye');
        $('#pass_i2').removeClass('fa-eye-slash');
    }
    lo_check();
}

