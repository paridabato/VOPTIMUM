<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package voptimum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;400;500;600&family=Palanquin:wght@300;400;500;600&family=Quicksand:wght@500&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main>
    <header id="header">
        <div class="sub-header">
            <p class="sub-header__item"><a href="tel:<?php echo str_replace(' ', '', get_field('tel', 'option')); ?>"><?php the_field('tel', 'option'); ?></a></p>
            <p class="sub-header__item"><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></p>
            <p class="sub-header__item"><?php the_field('address_line_1', 'option'); ?>, <?php the_field('address_line_2', 'option'); ?></p>
        </div>
        <div class="header-menu">
            <?php
            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" style="background-image: url(<?php echo $custom_logo__url[0]; ?>)"></a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container_class' => 'header-menu__items',
                    'container' => 'nav',
                    'items_wrap' => '%3$s',
                    'depth' => 1
                )
            );
            ?>
            <div class="burger">
                <div class="burger__btn"></div>
            </div>
        </div>
    </header>
