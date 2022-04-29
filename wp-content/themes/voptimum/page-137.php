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
        <p class="main-second-title__sub"><?php the_field('title');?></p>
        <h1 class="main-second-title__title"><?php the_field('subtitle');?></h1>
    </div>
    <section class="lld-first">
        <div class="lld-first__bg-container" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>); "></div>
        <div class="lld-first__offer ">
            <div class="lld-first__offer__left ">
                <p class="sub-title "><?php the_field('under_image_title');?></p>
                <?php the_content();?>
            </div>
            <div class="lld-first__offer__right">
                <?php foreach (get_field('checklist') as $checklist){ ?>
                    <div class="lld-first__offer__right__line">
                        <p class="lld-first__offer__right__line__1"><?php echo $checklist['field'];?></p>
                        <p class="lld-first__offer__right__line__2"><?php echo $checklist['regular'];?></p>
                    </div>
                <?php } ?>
            </div>
    </section>
    <section class="works works-bg-grey">
        <div class="title-block">
            <p class="title-block__sub-title"><?php the_field('sur-mesure_title');?></p>
            <h2 class="title-block__title"><?php the_field('sur-mesure_subtitle', false, false);?></h2>
        </div>
        <div class="cards">
            <?php foreach (get_field('benefits') as $benefits){ ?>
                <div class="cards__card">
                    <p class="cards__card__desc"><?php echo $benefits['benefit'];?></p>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="optimisation">
        <div class="optimisation__container">
            <div class="optimisation__container__speedometer" style="background-image: url(<?php the_field('optimisons_image_left');?>);"></div>
            <div class="optimisation__container__title-core">
                <h2 class="optimisation__container__title-core__h"><?php the_field('optimisons_title');?></h2>
                <?php $optimisons_link = get_field('optimisons_link');?>
                <a href="<?php echo $optimisons_link['url'];?>" target="<?php echo $optimisons_link['target'];?>" class="optimisation__container__title-core__contact-us"><?php echo $optimisons_link['title'];?></a>
            </div>
            <div class="optimisation__container__good-choice">
                <?php the_field('optimisons_text');?>
            </div>
            <div class="optimisation__container__3-lines" style="background-image: url(<?php the_field('optimisons_image_right');?>);">
                <?php foreach (get_field('optimisons_right_text') as $optimisons_right_text){ ?>
                    <p class="optimisation__container__3-lines__line"><?php echo $optimisons_right_text['text'];?></p>
                <?php } ?>
            </div>
            <div class="optimisation__container__needs-priority">
                <h2 class="optimisation__container__needs-priority__h"><?php the_field('slogan_title');?></h2>
                <p class="optimisation__container__needs-priority__desc"><?php the_field('slogan_text');?></p>
            </div>
            <div class="optimisation__container__guy" style="background-image: url(<?php the_field('slogan_image');?>);"></div>
        </div>
    </section>

<style>
    .lld-first__offer__right__line:before{
        background-image: url(<?php echo wp_upload_dir()['baseurl'];?>/2022/04/noun-check-box-858499.png);
    }
</style>

<?php
get_sidebar();
get_footer();
