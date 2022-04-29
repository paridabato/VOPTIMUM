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

    <section id="banner">
        <div id="title-box">
            <p><?php the_field('title');?></p>
            <h1><?php the_field('under_image_title');?></h1>
        </div>
        <div id="banner-img" style=" background-image: url(<?php echo get_the_post_thumbnail_url();?>);
        height: 605px;
        background-size: cover;">
        </div>
    </section>
    <section id="container-description">
        <div id="description-big-box">
            <p id="description-title-autonoveo"><?php the_field('under_image_title');?></p>
            <?php the_content();?>
        </div>
        <?php if (have_rows('side_counter')) { ?>
        <div id="description-stats-box">
            <?php $side_counter = get_field('side_counter'); ?>
            <div>
                <?php foreach (array_slice($side_counter, 0, count($side_counter) / 2) as $k=>$left) { ?>
                    <div class="statistique-box">
                        <p class="chiffres"><?php echo $left['number']; ?></p>
                        <p><?php echo $left['regular']; ?> | <span><?php echo $left['bold']; ?></span></p>
                    </div>
                <?php } ?>
            </div>
            <div>
                <?php foreach (array_slice($side_counter, count($side_counter) / 2) as $k=>$right) { ?>
                    <div class="statistique-box">
                        <p class="chiffres"><?php echo $right['number']; ?>+</p>
                        <p><?php echo $right['regular']; ?> | <span><?php echo $right['bold']; ?></span></p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </section>
    <div class="container">
        <div class="first-article-img" style="background-image: url(<?php the_field('longue_image_left');?>);
            background-size: cover;"></div>
        <div class="box-in-articles-lld">
            <div>
                <h2><?php the_field('long_title');?></h2>
            </div>
            <div>
                <?php $longue_link = get_field('longue_link');?>
                <p><a href="<?php echo $longue_link['url'];?>" class="link-in-first-articles"><?php echo $longue_link['title'];?></a></p>
            </div>
        </div>
        <div class="box-in-articles-lld-two-img" style="background-image: url(<?php the_field('longue_image_center');?>);background-size: cover;"></div>
        <div class="content-article-text">
            <div><?php the_field('long_content');?></div>
        </div>
        <div class="box-in-second-articles-lld">
            <div>
                <h2><?php the_field('used_title');?></h2>
            </div>
            <div>
                <?php $used_link = get_field('used_link');?>
                <p><a href="<?php echo $used_link['url'];?>" class="link-in-first-articles"><?php echo $used_link['title'];?></a></p>
            </div>
        </div>
        <div class="content-articles-text-two">
            <div>
                <p><?php the_field('used_content');?></p>
            </div>
        </div>
        <div class="second-article-img" style="background-image: url(<?php the_field('used_image');?>);
            background-size: cover; background-position: center;"></div>
    </div>
    <div class="third-article">
        <div class="third-article-box-contact" style="background-image: url(<?php the_field('address_image');?>);
            background-repeat: no-repeat;
            display: flex;
            justify-content: flex-end;
            background-size: cover;
            align-items: center;">
            <div class="third-article-box-contact-content">
                <div class="third-article-box-contact-text-content">
                    <p><?php the_field('address_title');?></p>
                    <p id="third-article-box-contact-text-content-p"><?php the_field('address_contact');?></p>
                    <?php $address_link = get_field('address_link');?>
                    <p><a href="<?php echo $address_link['url'];?>"><?php echo $address_link['title'];?></a><p>
                </div>
            </div>
        </div>
        <div class="third-article-box-right-title-content">
            <p><?php the_field('pourquoi_title');?></p>
            <h2><?php the_field('pourquoi_subtitle', false, false);?></h2>
        </div>
       <?php $class = ['', '-two', '-three', '-four'];
            $pourquoi_reason = get_field('pourquoi_reason');
            foreach ($pourquoi_reason as $k=>$reason) { ?>
                <div class="four-step-chose-autonoveo<?php echo $class[$k];?>">
                    <p class="four-step-chose-autonoveo-number">0<?php echo $k+1;?>.</p>
                    <p><span><?php echo $reason['bold'];?></span></p>
                    <p><?php echo $reason['text'];?></p>
                </div>
            <?php } ?>
    </div>

<?php
get_sidebar();
get_footer();
