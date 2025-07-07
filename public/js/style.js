var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});

var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 2,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
    }
});

var swiperNewProduct = new Swiper(".mySwiperNewProduct", {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: ".mySwiperNewProduct .swiper-button-next",
        prevEl: ".mySwiperNewProduct .swiper-button-prev",
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        576: { slidesPerView: 2 },
        992: { slidesPerView: 4 }
    }
});

