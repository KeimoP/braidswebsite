<?php
/**
 * The template for displaying all pages
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container-narrow" style="padding-top: 120px; padding-bottom: var(--spacing-xxl);">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header text-center">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail" style="margin: var(--spacing-lg) 0;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: var(--radius-lg);')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'mv-braids'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>

            <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
