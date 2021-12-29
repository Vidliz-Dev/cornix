$(document).ready(function () { 

    const swiperFeaturedFullwidth = new Swiper(".featured-fullwidth-slider__slider", {
      spaceBetween: 30,
      speed: 600,
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 4000,
      },
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },     
      pagination: {
        el: '.swiper-pagination',
      },     
    });

    var swiperTopArticles = new Swiper(".top-articles__slider", {
        spaceBetween: 30,
        slidesPerView: 2,
        speed: 600,
        loop: true,
        // navigation: {
        //   nextEl: ".swiper-button-next",
        //   prevEl: ".swiper-button-prev",
        // },
        breakpoints: {   
          992: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 30
          }
        }          
      });
      

});