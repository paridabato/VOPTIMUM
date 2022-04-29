<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package voptimum
 */

get_header();
?>

    <div class="main-second-title">
        <p class="main-second-title__sub">vente de véhicules récents</p>
        <h1 class="main-second-title__title">Véhicules d'occasion</h1>
    </div>
    <section class="second-hands">
        <div class="second-hands__bg-container" style="background-image: url( './assets/img/brydon-mccluskey-vMneecAwo34-unsplash.jpg'); "></div>
        <div class="second-hands__offer ">
            <div class="second-hands__offer__left ">
                <p class="sub-title ">autonoveo</p>
                <h2 class="title ">Nos offres d'occasion récentes au showroom</h2>
                <div class="descs">
                    <p class="descs__desc ">Vous recherchez un véhicule d'occasion récent, découvrez nos meilleures offres en stock visibles dans notre showroom à Port Marly !</p>
                    <p class="descs__desc"><span>auto</span>novéo propose également des <span>offres en véhicules
                                d'occasion récents</span>offres en véhicules d'occasion récents issus de nos agences de location courte durée. novéo propose également des offres en véhicules d'occasion récents issus de nos agences de location courte durée.</p>
                    <a href="# " class="descs__contact-us ">Contactez-nous</a>
                </div>
                <div class="counter__box ">
                    <div class="counter ">
                        <span>0 000+</span>
                    </div>
                    <p class="counter-text ">
                        <span>véhicule d'occasion</span>
                        <span>en vente</span>
                    </p>
                </div>
            </div>
            <div class="second-hands__offer__right" style="background-image: url('./assets/img/jenny-ueberberg-lOeGygMq1r4-unsplash.jpg');"></div>
        </div>
    </section>
    <div class="brands-slider">
        <div class="brands-slider__main-container">
                <span class="brands-slider-arrow-left"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                            fill-rule="evenodd" clip-rule="evenodd">
                        <path
                                d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                    </svg>
                </span>
            <div #swiperRef="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="assets/img/brand_logo_1.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_2.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_3.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_4.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_5.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_6.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_7.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/brand_logo_8.png" alt=""></div>
                </div>
            </div>
            <span class="brands-slider-arrow-right"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                         fill-rule="evenodd" clip-rule="evenodd">
                        <path
                                d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                    </svg>
                </span>
        </div>
        <section class="second-hands-grid">
            <div class="second-hands-grid__container">
                <div class="second-hands-grid__container__desc">
                    <h2 class="second-hands-grid__container__desc__title">Caractéristiques de nos occasions</h2>
                    <p class="second-hands-grid__container__desc__text">Grâce à nos agances de location, bénéficier d'
                        <span>offre de véhicules d'occasion récents</span>, avec un faible kilométrage, contrôlés et préparés, à des prix remisés jusqu'à XX%.
                    </p>
                    <span class="second-hands-grid__container__desc__tel">01 85 39 11 11</span>
                </div>
                <div class="second-hands-grid__container__low-km" style="background-image: url(./assets/img/photo-1610647752706-3bb12232b3ab.avif);">
                    <p class="strong-light"><span>faible kilométrage</span><span>récent</span></p>
                </div>
                <div class="second-hands-grid__container__checked" style="background-image: url(./assets/img/photo-1610647752706-3bb12232b3ab.avif);">
                    <p class="strong-light"><span>contrôlé et préparée</span><span>qualité</span></p>
                </div>
                <div class="second-hands-grid__container__discount" style="background-image: url(./assets/img/photo-1610647752706-3bb12232b3ab.avif);">
                    <p class="strong-light"><span>prix remisé</span><span>budget</span></p>
                </div>
                <div class="second-hands-grid__container__profits-1" style="background-image: url(./assets/img/photo-1610647752706-3bb12232b3ab.avif);">
                    <p class="strong-light"><span>bénéfice XXX</span><span>récent</span></p>
                </div>
                <div class="second-hands-grid__container__profits-2" style="background-image: url(./assets/img/photo-1610647752706-3bb12232b3ab.avif);">
                    <p class="strong-light"><span>bénéfice XXX</span><span>equipement</span></p>
                </div>
            </div>
        </section>
    </div>

<?php
get_sidebar();
get_footer();
