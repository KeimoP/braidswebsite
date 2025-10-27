<?php
/**
 * The template for displaying all single posts
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
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    
                    <div class="entry-meta" style="color: var(--medium-grey); margin-bottom: var(--spacing-md);">
                        <span class="posted-on">
                            <i class="far fa-calendar"></i>
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date()); ?>
                            </time>
                        </span>
                        <span class="byline">
                            <i class="far fa-user"></i>
                            <?php the_author(); ?>
                        </span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail" style="margin-bottom: var(--spacing-lg);">
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

                <footer class="entry-footer" style="margin-top: var(--spacing-lg); padding-top: var(--spacing-md); border-top: 1px solid var(--light-grey);">
                    <?php
                    $categories_list = get_the_category_list(', ');
                    if ($categories_list) {
                        printf('<span class="cat-links"><i class="fas fa-folder"></i> %s</span>', $categories_list);
                    }

                    $tags_list = get_the_tag_list('', ', ');
                    if ($tags_list) {
                        printf('<span class="tags-links"><i class="fas fa-tags"></i> %s</span>', $tags_list);
                    }
                    ?>
                </footer>
            </article>

            <?php
            the_post_navigation(array(
                'prev_text' => '<span class="nav-subtitle">' . __('Previous:', 'mv-braids') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . __('Next:', 'mv-braids') . '</span> <span class="nav-title">%title</span>',
            ));

            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
