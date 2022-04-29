<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package voptimum
 */

?>

<footer id="footer">
    <div class="footer-top">
        <ul class="footer-top__left">
            <li class="footer-top__left__logo-autonoveo">
                <span style="background-image: url(<?php the_field('logo-autonoveo', 'option'); ?>);"></span>
                <p class="footer-top__left__logo-autonoveo__under-logo"><?php _e('marque du groupe voptimum');?></p>
            </li>
            <li class="footer-top__left__adress">
                <p class="footer-top__left__adress__line-1"><?php the_field('address_line_1', 'option'); ?></p>
                <p class="footer-top__left__adress__line-2"><?php the_field('address_line_2', 'option'); ?></p>
            </li>
            <li class="footer-top__left__contact-us">
                <a href="<?php the_field('contactez-nous', 'option'); ?>" class="footer-top__left__contact-us__link"><?php _e('contactez-nous');?></a>
                <a href="tel:<?php echo str_replace(' ', '', get_field('tel', 'option')); ?>" class="footer-top__left__contact-us__phone"><?php the_field('tel', 'option'); ?></a>
            </li>
        </ul>
        <ul class="footer-top__right">
            <li class="footer-top__right__logo-voptimum" style="background-image: url(<?php the_field('logo-voptimum', 'option'); ?>);"></li>
            <li class="footer-top__right__logo-autonoveo" style="background-image: url(<?php the_field('logo-autonoveo', 'option'); ?>);"></li>
            <li class="footer-top__right__logo-avis" style="background-image: url(<?php the_field('logo-avis', 'option'); ?>)"></li>
            <li class="footer-top__right__logo-speedy" style="background-image: url(<?php the_field('logo-speedy', 'option'); ?>)"></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p class="footer-bottom__logo-autonoveo">© <span>auto</span>noveo</p>
        <a href="<?php the_field('mention_legales', 'option'); ?>" class="footer-bottom__ment-leg"><?php _e('mention légales');?></a>
        <a href="<?php the_field('politique_de_confidentialite', 'option'); ?>" class="footer-bottom__pol-conf"><?php _e('politique de confidentialité');?></a>
        <p class="footer-bottom__eanet">création <span>eanet</span></p>
    </div>

</footer>
</main>

<?php wp_footer(); ?>

</body>
</html>
