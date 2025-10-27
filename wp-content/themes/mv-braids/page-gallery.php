<?php
/**
 * Template Name: Gallery
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section" style="padding-top: 120px;">
        <div class="container">
            <div class="text-center mb-lg">
                <h1><?php _e('Galería de Estilos', 'mv-braids'); ?></h1>
                <p><?php _e('Explora mi portfolio de trenzas únicas y detalladas', 'mv-braids'); ?></p>
            </div>

            <!-- Gallery Filters -->
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">
                    <?php _e('Todos', 'mv-braids'); ?>
                </button>
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'gallery_category',
                    'hide_empty' => true,
                ));
                
                if (!empty($categories) && !is_wp_error($categories)) :
                    foreach ($categories as $category) :
                ?>
                    <button class="filter-btn" data-filter="<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </button>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid" id="gallery-grid">
                <?php
                $gallery_args = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $gallery_query = new WP_Query($gallery_args);
                
                if ($gallery_query->have_posts()) :
                    while ($gallery_query->have_posts()) : $gallery_query->the_post();
                        $terms = get_the_terms(get_the_ID(), 'gallery_category');
                        $categories_list = array();
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                $categories_list[] = $term->slug;
                            }
                        }
                        $data_category = !empty($categories_list) ? implode(' ', $categories_list) : 'all';
                ?>
                    <div class="gallery-item" data-category="<?php echo esc_attr($data_category); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('mv-braids-gallery'); ?>" 
                                 alt="<?php the_title_attribute(); ?>"
                                 data-full="<?php the_post_thumbnail_url('large'); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" 
                                 alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                        <div class="gallery-item-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="text-center"><?php _e('No hay elementos en la galería todavía.', 'mv-braids'); ?></p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section section-alt">
        <div class="container-narrow text-center">
            <h2><?php _e('¿Te gusta lo que ves?', 'mv-braids'); ?></h2>
            <p class="intro-text">
                <?php _e('Reserva tu cita y consigue el look perfecto para ti', 'mv-braids'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                <?php _e('Reserva Ahora', 'mv-braids'); ?>
            </a>
        </div>
    </section>

</main><!-- #primary -->

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox" style="display: none;">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
    <div class="lightbox-caption" id="lightbox-caption"></div>
</div>

<style>
.lightbox {
    display: none;
    position: fixed;
    z-index: 9999;
    padding-top: 60px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.95);
}

.lightbox-content {
    margin: auto;
    display: block;
    max-width: 90%;
    max-height: 80vh;
    object-fit: contain;
}

.lightbox-close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
}

.lightbox-close:hover,
.lightbox-close:focus {
    color: var(--primary-gold);
}

.lightbox-caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
}
</style>

<?php
get_footer();
