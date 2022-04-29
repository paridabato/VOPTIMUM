<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package voptimum
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="main-second-title">
        <p class="main-second-title__sub"><?php _e('AUTONOVEO');?></p>
        <?php the_title( '<h1 class="main-second-title__title">', '</h1>' ); ?>
    </div>
    <?php voptimum_post_thumbnail(); ?>
    <div class="legal-container">
        <?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voptimum' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div>
    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Edit <span class="screen-reader-text">%s</span>', 'voptimum' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article>
