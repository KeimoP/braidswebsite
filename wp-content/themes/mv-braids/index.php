<?php
/**
 * The main template file
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;

        the_posts_navigation();

    else :
        get_template_part('template-parts/content', 'none');
    endif;
    ?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
