
//Navbar scroll

//navbar scroll

$(document).ready(function(){
    $(window).on('scroll',function(){
        if ($(window).scrollTop()){
            $(".page-wrap").addClass('scroller');
        }else{
            $(".page-wrap").removeClass('scroller');
        }
    });
});





//acordian dropdown 

const accos = document.querySelectorAll(".accordion-main-title");


accos.forEach(acco => {
    acco.addEventListener("click",event =>{
        acco.classList.toggle("active");

        const accoBodey=acco.nextElementSibling;
        if(acco.classList.contains("active")){
            accoBodey.style.maxHeight = accoBodey.scrollHeight + "px";
        }
        else{
           accoBodey.style.maxHeight =0; 
        }
    });
});



/*const accordionItemHeaders=document.querySelectorAll(".");


accordionItemHeaders.forEach((faq)=>{
    accordionItemHeader.addEventListener("click",()=>{
        accordionItemHeader.classList.toggle("active");
    });
});*/






//search bar


$(document).ready(function(){
  $(".fa-search").click(function(){
    $(".search-icon").toggleClass("active");
    $("input[type='text']").toggleClass("active");
  });

});








(function($) {
    "use strict";

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 56)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });


    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });


    $('body').scrollspy({
        target: '#mainNav',
        offset: 56
    });

    $(window).on("load scroll", function(e) {
        if ($(".navbar").offset().top > 100) {
            $(".navbar").addClass("top-nav-collapse");
        } else {
            $(".navbar").removeClass("top-nav-collapse");
        }

    });


    
    
    jQuery(function($) {
        if ($(window).width() < 991) {


            $('.navbar .dropdown > a').click(function() {
                location.href = this.href;
            });

        }
    });

    $(document).ready(function() {
        $('.menu-btn button').click(function() {
            $(".navbar-collapse").toggleClass("navbar250");
            $(".c-hamburger").toggleClass("is-active");
            $(".dark-overly").toggleClass("active");
        });
        $('.menu-btn-close').click(function() {
            $(".navbar-collapse").removeClass("navbar250");
            $(".menu-btn").removeClass("active");
            $(".dark-overly").removeClass("active");

        });
        $('.navbar-nav li a').click(function() {
            var windowWidth = $(window).width();
            if (windowWidth < 768) {
                $(".navbar-collapse").removeClass("navbar250");
                $(".c-hamburger").removeClass("is-active");
                $(".dark-overly").removeClass("active");
            }
        });
    });

    $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });



   


    $(window).on("load scroll", function(e) {
        if ($(window).scrollTop() > 500) {
            $(".to-top img").show(100);


        } else {
            $(".to-top img").hide(100);

        }
    });
    $(".to-top").click(function() {

        $("html, body").animate({ scrollTop: 0 }, 800, 'easeInOutExpo');
    });


})(jQuery);

