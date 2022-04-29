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
    <section class="banner">
        <?php
        if (have_rows('hero_slider')): ?>
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('hero_slider')): the_row();
                        if (have_rows('slide')):
                            while (have_rows('slide')) : the_row();
                                ?>
                                <div class="swiper-slide">
                                    <div class="slider-bg"
                                         style="background-image: url(<?php the_sub_field('img'); ?>);">
                                    </div>
                                    <h2 class="slide-title">
                                        <?php the_sub_field('text', false); ?>
                                    </h2>
                                </div>
                            <?php
                            endwhile;
                        endif;
                    endwhile;
                    ?>
                    <div class="banner-arrows">
                    <span class="banner-arrows-left"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                          fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                        </svg></span>
                        <span class="banner-arrows-right"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                               fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                        </svg></span>
                    </div>
                </div>
            </div>
        <?php
        endif;

        if (have_rows('logo_slider')): ?>
            <div class="brands-slider">
                <div class="brands-slider__main-container">
                    <span class="brands-slider-arrow-left"><svg width="24" height="24"
                                                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                            <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                        </svg></span>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            while (have_rows('logo_slider')) : the_row();
                                ?>
                                <div class="swiper-slide"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
                            <?php
                            endwhile; ?>
                        </div>
                    </div>
                    <span class="brands-slider-arrow-right"><svg width="24" height="24"
                                                                 xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                                 clip-rule="evenodd">
                            <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                        </svg></span>
                </div>
            </div>
        <?php
        endif;
        ?>
    </section>
    <section class="why-autonoveo">
        <?php
        if (have_rows('counter')) { ?>
            <div class="nb-boxes">
                <?php
                $counter = get_field('counter');
                $books1 = array_slice($counter, 0, count($counter) / 2); ?>
                <div class="nb-boxes__left">
                    <?php
                    foreach (array_slice($counter, 0, count($counter) / 2) as $k=>$left) { ?>
                        <div class="nb-boxes__left__box">
                            <div class="counter">
                                <span class="number" data-max="<?php echo $left['number']; ?>">0</span>
                                <?php if($k){ ?><span>+</span><?php } ?>
                            </div>
                            <p class="counter-text">
                                <span><?php echo $left['first']; ?></span>
                                <span><?php echo $left['second']; ?></span>
                            </p>
                        </div>
                        <?php } ?>
                </div>
                <div class="nb-boxes__right">
                    <?php
                    foreach (array_slice($counter, count($counter) / 2) as $k=>$right) { ?>
                        <div class="nb-boxes__right__box">
                            <div class="counter">
                                <span class="number" data-max="<?php echo $right['number']; ?>">0</span>
                                <?php if($k){ ?><span>+</span><?php } ?>
                            </div>
                            <p class="counter-text">
                                <span><?php echo $right['first']; ?></span>
                                <span><?php echo $right['second']; ?></span>
                            </p>
                        </div>
                        <?php } ?>
                </div>
            </div>
            <?php } ?>
        <div class="title-block">
            <p class="title-block__lld"><?php the_field('location_title'); ?></p>
            <h2 class="title-block__why"><?php the_field('location_subtitle', false, false); ?></h2>
        </div>
        <div class="why-cards">
            <?php
            foreach (get_field('column') as $k=>$column) { ?>
                <div class="why-cards__why-card">
                    <h2 class="why-cards__why-card__number">0<?php echo $k+1;?>.</h2>
                    <h3 class="why-cards__why-card__title"><?php echo $column['title'];?></h3>
                    <p class="why-cards__why-card__desc"><?php echo $column['text'];?></p>
                </div>
            <?php }
            ?>
        </div>
    </section>
    <section class="lld">
        <div class="container">
            <div class="grid-title-block">
                <p class="grid-title-block__service"><?php the_field('service_title'); ?></p>
                <h2 class="grid-title-block__title"><?php the_field('service_subtitle', false, false); ?></h2>
            </div>
            <div class="autos"
                 style="background-image: url(<?php the_field('service_image_left'); ?>);"></div>
            <div class="desc-block">
                <?php the_field('service_block_1'); ?>
            </div>
            <div class="driver" style="background-image: url(<?php the_field('service_image_right'); ?>);"></div>
            <div class="lld-entreprises">
                <?php the_field('service_block2'); ?>
            </div>
        </div>
    </section>
    <section class="works">
        <div class="title-block">
            <p class="title-block__sub-title"><?php the_field('comment_title'); ?></p>
            <h2 class="title-block__title"><?php the_field('comment_subtitle'); ?></h2>
        </div>
        <div class="cards">
            <?php foreach (get_field('comments') as $comments) { ?>
                <div class="cards__card">
                    <p class="cards__card__desc"><?php echo $comments['comment'];?></p>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="contact-offer">
        <div class="contact-offer__right"
             style="background-image: url(<?php the_field('entreprise_image'); ?>);">
            <div class="contact-offer__right__company">
                <p class="sub-title"><?php the_field('entreprise_title'); ?></p>
                <div class="advices">
                    <?php the_field('entreprise_text', false, false); ?>
                </div>
                <a href="<?php the_field('entreprise_link'); ?>" class="contact-us"><?php the_field('entreprise_link_text'); ?>s</a>
            </div>
        </div>
        <div class="contact-offer__left"
             style="background-image: url(<?php the_field('vente_image'); ?>);">
            <div class="contact-offer__left__second-hand">
                <p class="sub-title"><?php the_field('vente_title'); ?></p>
                <h3 class="title"><?php the_field('vente_text'); ?></h3>
                <a href="<?php the_field('vente_link'); ?>" class="contact-us"><?php the_field('vente_link_text'); ?></a>
            </div>
        </div>
    </section>
    <section class="showroom"
             style="background-image: url(<?php the_field('services_background'); ?>);">
        <div class="showroom__blur">
            <h3 class="text"><?php the_field('services_text',false, false); ?></h3>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
