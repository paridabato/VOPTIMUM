var swiper = new Swiper(".banner-swiper", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    navigation: {
        nextEl: ".banner-arrows-left",
        prevEl: ".banner-arrows-right",
    },
});