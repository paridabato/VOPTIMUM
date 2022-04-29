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
        <p class="main-second-title__sub">location longue durée</p>
        <h1 class="main-second-title__title">LLD entreprises</h1>
    </div>
    <section class="lld-first">
        <div class="lld-first__bg-container" style="background-image: url( './assets/img/obi-pixel6propix-aZKJEvydrNM-unsplash.jpg'); "></div>
        <div class="lld-first__offer ">
            <div class="lld-first__offer__left ">
                <p class="sub-title ">pour les entreprises</p>
                <h2 class="title ">Les offres sur-mesure de location longue durée</h2>
                <div class="descs">
                    <p class="descs__desc ">VLa Location Longue Durée (ou LLD) d'<span>auto</span>noveo s'adresse à toues entreprises souhaitant <span>remplacer leur véhicule professionnels ou renouveler leur
                                flotte automobile</span> pour répondre à leurs besoins spécifiques.</p>
                    <p class="descs__desc">Une offre sur-mesure dédiées aux entreprises n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without </p>
                    <a href="# " class="descs__about-us">En savoir plus sur auto noveo</a>
                </div>
            </div>
            <div class="lld-first__offer__right">
                <div class="lld-first__offer__right__line">
                    <p class="lld-first__offer__right__line__1">une offre de lld sur-mesure</p>
                    <p class="lld-first__offer__right__line__2">Et dédiée aux entreprises</p>
                </div>
                <div class="lld-first__offer__right__line">
                    <p class="lld-first__offer__right__line__1">une solution de financement</p>
                    <p class="lld-first__offer__right__line__2">Pour un budget maîtrisé</p>
                </div>
                <div class="lld-first__offer__right__line">
                    <p class="lld-first__offer__right__line__1">un outil de gestion</p>
                    <p class="lld-first__offer__right__line__2">Pour votre parc automobile</p>
                </div>
                <div class="lld-first__offer__right__line">
                    <p class="lld-first__offer__right__line__1">le renouvellement</p>
                    <p class="lld-first__offer__right__line__2">de vos véhicules de société</p>
                </div>
            </div>
    </section>
    <section class="works works-bg-grey">
        <div class="title-block">
            <p class="title-block__sub-title">la location sur-mesure</p>
            <h2 class="title-block__title">Comment fonctionne <span>la LLD pour les entreprises</span> ?</h2>
        </div>
        <div class="cards">
            <div class="cards__card">

                <p class="cards__card__desc">Etude personnalisée de vos besoins pour votre véhicule ou votre flotte lorem ipsum</p>
            </div>
            <div class="cards__card">

                <p class="cards__card__desc">Etude personnalisée de vos besoins pour votre véhicule ou votre flotte lorem ipsum</p>
            </div>
            <div class="cards__card">

                <p class="cards__card__desc">Etude personnalisée de vos besoins pour votre véhicule ou votre flotte lorem ipsum</p>
            </div>
            <div class="cards__card">

                <p class="cards__card__desc">Etude personnalisée de vos besoins pour votre véhicule ou votre flotte lorem ipsum</p>
            </div>
        </div>
    </section>
    <section class="optimisation">
        <div class="optimisation__container">
            <div class="optimisation__container__speedometer" style="background-image: url('./assets/img/chuttersnap-hmWcrTxvAk0-unsplash.jpg');"></div>
            <div class="optimisation__container__title-core">
                <h2 class="optimisation__container__title-core__h">Optimisons ensemble, la gestion de vos véhicules
                </h2>
                <a href="#" class="optimisation__container__title-core__contact-us">Découvrir autonoveo</a>
            </div>
            <div class="optimisation__container__good-choice">
                <div class="optimisation__container__good-choice__top">
                    <h4 class="optimisation__container__good-choice__top__title">LLD pour Entreprises</h4>
                    <p class="optimisation__container__good-choice__top_desc">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte défi</p>
                </div>
                <div class="optimisation__container__good-choice__bot">
                    <h4 class="optimisation__container__good-choice__bot__title">Faire le bon choix automobile</h4>
                    <p class="optimisation__container__good-choice__bot_desc">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte défi</p>
                </div>
            </div>
            <div class="optimisation__container__3-lines" style="background-image: url('./assets/img/jose-carbajal-8xyki0bqvgw-unsplash.jpg');">
                <p class="optimisation__container__3-lines__line">professions libérales</p>
                <p class="optimisation__container__3-lines__line">tpe, pme & artisans</p>
                <p class="optimisation__container__3-lines__line">professionnels de l'automobile</p>
            </div>
            <div class="optimisation__container__needs-priority">
                <h2 class="optimisation__container__needs-priority__h">Vos besoins en LLD, notre priorité.
                </h2>
                <p class="optimisation__container__needs-priority__desc">Financement de vos véhicules de société ou gestion de votre flotte professionnelle, notre équipe vous aide à faire le bon choix automobile !</p>
            </div>
            <div class="optimisation__container__guy" style="background-image: url('./assets/img/bruce-mars-8YG31Xn4dSw-unsplash.jpg');"></div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
