var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 1000,
    },
    slidesPerView: 8,
    centeredSlides: false,
    spaceBetween: 0,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".brands-slider-arrow-left",
        prevEl: ".brands-slider-arrow-right",
    },
    breakpoints: {
        // when window width is >= 480px
        100: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        // when window width is >= 640px
        800: {
            slidesPerView: 5,
            spaceBetween: 40
        },
        // when window width is >= 640px
        1160: {
            slidesPerView: 8,
            spaceBetween: 40
        }
    }
});

// var appendNumber = 4;
// var prependNumber = 1;
// document
//     .querySelector(".prepend-2-slides")
//     .addEventListener("click", function(e) {
//         e.preventDefault();
//         swiper.prependSlide([
//             '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
//             '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
//         ]);
//     });
// document
//     .querySelector(".prepend-slide")
//     .addEventListener("click", function(e) {
//         e.preventDefault();
//         swiper.prependSlide(
//             '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
//         );
//     });
// document
//     .querySelector(".append-slide")
//     .addEventListener("click", function(e) {
//         e.preventDefault();
//         swiper.appendSlide(
//             '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
//         );
//     });
// document
//     .querySelector(".append-2-slides")
//     .addEventListener("click", function(e) {
//         e.preventDefault();
//         swiper.appendSlide([
//             '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
//             '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
//         ]);
//     });