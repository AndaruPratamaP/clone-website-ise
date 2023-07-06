import { Swiper, Navigation, Pagination } from 'swiper';
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    allowTouchMove: true,
    modules: [Navigation, Pagination],
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
    // when window width is >= 320px
    320: {
        navigation: {
            enabled: false,
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    },

    // when window width is >= 1024px
    1024: {
        navigation: {
            enabled: true,
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    }
  }
});

window.Swiper = swiper;
