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
    <section class="second-hands">
        <div class="second-hands__bg-container" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>); "></div>
        <div class="second-hands__offer ">
            <div class="second-hands__offer__left ">
                <p class="sub-title "><?php the_field('under_image_title');?></p>
                <?php the_content();?>
                <div class="counter__box ">
                    <?php $counter = get_field('counter');?>
                    <div class="counter ">
                        <span><?php echo $counter['number'];?>+</span>
                    </div>
                    <p class="counter-text ">
                        <span><?php echo $counter['bold'];?></span>
                        <span><?php echo $counter['regular'];?></span>
                    </p>
                </div>
            </div>
            <div class="second-hands__offer__right" style="background-image: url(<?php the_field('counter_image');?>);"></div>
        </div>
    </section>
    <div class="brands-slider">
        <div class="brands-slider__main-container">
            <span class="brands-slider-arrow-left">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                </svg>
            </span>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach(get_field('logo_slider', get_option('page_on_front')) as $logo_slider):?>
                        <div class="swiper-slide"><img src="<?php echo $logo_slider['img']; ?>" alt=""></div>
                    <?endforeach; ?>
                </div>
            </div>
            <span class="brands-slider-arrow-right">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                </svg>
            </span>
        </div>
    </div>
    <?php if (have_rows('grid')) { ?>
    <section class="second-hands-grid">
        <div class="second-hands-grid__container">
            <?php $class = ['desc', 'low-km', 'checked', 'discount', 'profits-1', 'profits-2'];
            $k = 0;
            while (have_rows('grid')) : the_row();
                $style = (get_sub_field('image'))?'style="background-image: url('.get_sub_field('image').');"':'';
                ?>
                <div class="second-hands-grid__container__<?php echo $class[$k];?>" <?php echo $style;?>>
                    <?php if(get_sub_field('hover_title')) { ?>
                        <h2 class="second-hands-grid__container__desc__title"><?php the_sub_field('hover_title');?></h2>
                    <?php } ?>
                    <?php if(get_sub_field('content')) { ?>
                        <p class="second-hands-grid__container__desc__text"><?php the_sub_field('content', false);?></p>
                    <?php } ?>
                    <?php if(get_sub_field('phone')) { ?>
                        <span class="second-hands-grid__container__desc__tel"><?php echo the_sub_field('phone');?></span>
                    <?php } ?>
                    <?php if(get_sub_field('title_bold') && get_sub_field('title_regular')) { ?>
                        <p class="strong-light"><span><?php the_sub_field('title_bold');?></span><span><?php the_sub_field('title_regular');?></span></p>
                    <?php } ?>
                </div>

            <?php $k++; endwhile; ?>
        </div>
    </section>
    <?php } ?>
<?php
get_sidebar();
get_footer();
