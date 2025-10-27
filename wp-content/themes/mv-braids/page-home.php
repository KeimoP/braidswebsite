<?php
/**
 * Template Name: Homepage
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <?php if (has_header_image()) : ?>
            <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" class="hero-background">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero-default.jpg" alt="MV Braids" class="hero-background">
        <?php endif; ?>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-logo">MV Braids</h1>
            <p class="hero-tagline"><?php _e('Unique and Detailed Braid Creations', 'mv-braids'); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                    <?php _e('Reserva Ahora', 'mv-braids'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="btn btn-outline btn-large">
                    <?php _e('Ver Galería', 'mv-braids'); ?>
                </a>
            </div>
        </div>
        <div class="scroll-indicator"></div>
    </section>

    <!-- Introduction Section -->
    <section class="intro-section section">
        <div class="container-narrow">
            <h2 class="intro-title text-center"><?php _e('Bienvenida a MV Braids', 'mv-braids'); ?></h2>
            <p class="intro-text text-center">
                <?php _e('Bienvenida a mi estudio de trenzas en A Coruña, donde tu estilo se transforma en arte. Cada trenza es única, detallada y creada especialmente para ti.', 'mv-braids'); ?>
            </p>
        </div>
        
        <div class="container">
            <div class="featured-styles">
                <?php
                // Query featured gallery items
                $featured_args = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => 4,
                    'orderby' => 'rand',
                );
                $featured_query = new WP_Query($featured_args);
                
                if ($featured_query->have_posts()) :
                    while ($featured_query->have_posts()) : $featured_query->the_post();
                ?>
                    <div class="style-card">
                        <a href="<?php echo esc_url(home_url('/galeria')); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('mv-braids-gallery'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="style-card-overlay">
                                <h3 class="style-card-title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="section section-alt">
        <div class="container">
            <div class="text-center mb-lg">
                <h2><?php _e('Servicios Destacados', 'mv-braids'); ?></h2>
                <p><?php _e('Explora nuestros estilos más populares', 'mv-braids'); ?></p>
            </div>
            
            <div class="services-grid">
                <?php
                // Query services
                $services_args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 3,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $services_query = new WP_Query($services_args);
                
                if ($services_query->have_posts()) :
                    while ($services_query->have_posts()) : $services_query->the_post();
                        $price = get_post_meta(get_the_ID(), '_service_price', true);
                        $duration = get_post_meta(get_the_ID(), '_service_duration', true);
                ?>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3 class="service-title"><?php the_title(); ?></h3>
                        <?php if ($price) : ?>
                            <p class="service-price"><?php echo esc_html($price); ?></p>
                        <?php endif; ?>
                        <?php if ($duration) : ?>
                            <p class="service-duration"><?php echo esc_html($duration); ?></p>
                        <?php endif; ?>
                        <div class="service-description">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary">
                            <?php _e('Seleccionar', 'mv-braids'); ?>
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            
            <div class="text-center mt-lg">
                <a href="<?php echo esc_url(home_url('/servicios')); ?>" class="btn btn-secondary btn-large">
                    <?php _e('Ver Todos los Servicios', 'mv-braids'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="social-section section">
        <div class="container">
            <h2 class="social-title"><?php _e('Sígueme en Instagram', 'mv-braids'); ?></h2>
            <p class="instagram-handle">@mv__braids</p>
            <p class="text-center mb-lg">
                <?php _e('Descubre mis últimos trabajos y encuentra inspiración para tu próximo look', 'mv-braids'); ?>
            </p>
            
            <div class="instagram-feed">
                <!-- Instagram feed will be populated by JavaScript or plugin -->
                <div class="instagram-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-1.jpg" alt="Instagram post">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-2.jpg" alt="Instagram post">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-3.jpg" alt="Instagram post">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-4.jpg" alt="Instagram post">
                </div>
            </div>
            
            <div class="text-center mt-lg">
                <a href="https://instagram.com/mv__braids" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-large">
                    <i class="fab fa-instagram"></i> <?php _e('Seguir en Instagram', 'mv-braids'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="section section-alt">
        <div class="container-narrow text-center">
            <h2><?php _e('¿Lista para tu nuevo look?', 'mv-braids'); ?></h2>
            <p class="intro-text">
                <?php _e('Reserva tu cita ahora y transforma tu estilo con mis trenzas únicas y detalladas.', 'mv-braids'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                <?php _e('Solicitar Reserva', 'mv-braids'); ?>
            </a>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
