<?php
/**
 * Template part for displaying posts
 * 
 * @package MV_Braids
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-lg'); ?> style="background: white; padding: var(--spacing-lg); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;
        ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta" style="color: var(--medium-grey); margin-bottom: var(--spacing-md); font-size: 0.9rem;">
                <span class="posted-on">
                    <i class="far fa-calendar"></i>
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                </span>
                <span class="byline" style="margin-left: var(--spacing-sm);">
                    <i class="far fa-user"></i>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <?php echo esc_html(get_the_author()); ?>
                    </a>
                </span>
                <?php if (has_category()) : ?>
                    <span class="cat-links" style="margin-left: var(--spacing-sm);">
                        <i class="fas fa-folder"></i>
                        <?php the_category(', '); ?>
                    </span>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </header>

    <?php if (has_post_thumbnail() && !is_singular()) : ?>
        <div class="entry-thumbnail" style="margin-bottom: var(--spacing-md);">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('mv-braids-gallery', array('style' => 'width: 100%; height: auto; border-radius: var(--radius-md);')); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if (is_singular()) {
            the_content();
        } else {
            the_excerpt();
        }

        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'mv-braids'),
            'after'  => '</div>',
        ));
        ?>
    </div>

    <?php if (!is_singular()) : ?>
        <footer class="entry-footer" style="margin-top: var(--spacing-md);">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-small">
                <?php _e('Leer Más', 'mv-braids'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </footer>
    <?php endif; ?>
</article>
