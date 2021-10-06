'use strict';
var windowW,windowH,mobileMode;



Vue.component('product-item', {
    props: ['product'], 
    template: '#productItem'
})

/*=============================================
  session storage
 =============================================*/
// spotlight
// let showSpotlight = sessionStorage.getItem('showSpotlight');
// if ( showSpotlight === 'false' ) {
//   $('.spotlight').remove();
// }



$(function (){
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    //tool事件
    $("header .tool").hover(function(){$(this).addClass("hoverMode");},function(){$(this).removeClass("hoverMode");});
    //滾動事件
    $(window).scroll(function () {  
        $(window).scrollTop() > 400?$(".side-menu").addClass("show"): $(".side-menu").removeClass("show");  
        // $(window).scrollTop() > 0 ? $('.spotlight').slideUp() : $('.spotlight').slideDown();
        // if(mobileMode){
        //     if($(window).scrollTop() > 0){
        //         calcMenuWrapperPaddingTop("noSpotlight")
        //     }
        //     else{
        //         setTimeout(function(){
        //             calcMenuWrapperPaddingTop();
        //         },300);
        //     }
        // }
    });
    //遮罩事件
    $(".header-mask").click(function(){
        $(this).fadeOut();
        $("header .search").stop().slideUp();
        $('html').removeClass('menuOpen');
    });
    //spotlight事件
    $('.spotlight .close').click(function() {
        $('.spotlight').slideUp(300, function() {
            $(this).remove();
        });
        mobileMode? calcMenuWrapperPaddingTop("noSpotlight"):"";
        calcMainPaddingTop(0)
        // sessionStorage.setItem('showSpotlight', 'false');
    });
    //search事件
    $("#search-toggle").click(function(){
        $('html').removeClass('menuOpen').toggleClass('seachOpen');
        $("header .search").stop().slideToggle();
        $('html').hasClass('seachOpen') ? $('.header-mask').fadeIn() : $('.header-mask').fadeOut();
    });
    //menuToggle事件
    $(".menu-toggle").click(function(){
        $('html').removeClass('seachOpen').toggleClass('menuOpen');
        $("header .search").stop().slideUp();
        $('html').hasClass('menuOpen') ? $('.header-mask').fadeIn() : $('.header-mask').fadeOut();
    });
    //右側fixed選單
    //$(".side-menu .help-btn,.side-menu .helps").hover(function(){$(this).parents(".side-menu").addClass("active")},function(){$(this).parents(".side-menu").removeClass("active")});
    $(".side-menu .help-btn").click(function(){
        $(this).parents(".side-menu").toggleClass("active");
    });
    //ads觸發
    new bootstrap.Modal(document.getElementById('ads-modal'), {}).show()
    /* ==========================================================================
		[page]
     ==========================================================================*/
    imgFill();
    
    /* ==========================================================================
		[common]
     ==========================================================================*/
    $(window).resize(function(){
        resize();
    }).trigger('resize');
    /* ==========================================================================
		[resize]
     ==========================================================================*/
    function resize(){
        windowW=$(window).innerWidth();
        mobileMode=windowW<1199?true:false;
        $(".scrollbarY").mCustomScrollbar({axis: "y",});
        mobileMode? calcMenuWrapperPaddingTop():"";
        calcMainPaddingTop();
        windowW<1200?$("[data-aos-delay]").removeAttr("data-aos-delay"):"";
    }
})
window.onload = function() {
    aosInit();
}



