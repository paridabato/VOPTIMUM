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
    <section class="contact">
        <div class="contact__bg-container" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>); "></div>
        <div class="contact__container">
            <div class="contact__container__left ">
                <p class="contact__container__left__sub-title "><?php _e('groupe voptimum');?></p>
                <h2 class="contact__container__left__title "><span><?php _e('auto');?></span><?php _e('noveo');?></h2>
                <div class="contact__container__left__cordonates">
                    <p class="contact__container__left__cordonates__p"><?php _e('nos coordonnées');?></p>
                    <h3 class="contact__container__left__cordonates__adress">
                        <span><?php the_field('address_line_1', 'option'); ?></span>
                        <span><?php the_field('address_line_2', 'option'); ?></span>
                    </h3>
                </div>
                <?php the_content();?>
            </div>
            <div class="contact__container__right">
                <div class="contact__container__right__phone">
                    <a href="tel:<?php echo str_replace(' ', '', get_field('tel', 'option')); ?>"><span><?php the_field('tel', 'option'); ?></span></a>
                </div>
                <p class="contact__container__right__mail">
                    <a href="mailto:<?php the_field('mail', 'option'); ?>"><span><?php the_field('mail', 'option'); ?></span></a>
                </p>
            </div>
        </div>
    </section>
<?php
get_sidebar();
get_footer();
