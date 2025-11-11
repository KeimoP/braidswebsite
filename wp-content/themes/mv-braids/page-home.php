<?php
/**
 * Template Name: Homepage
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section with Animated Logo -->
    <section class="hero-section hero-modern">
        <div class="hero-background-video">
            <!-- You can add stock GIF or video here -->
            <div class="animated-background"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="logo-container animate-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="MV Braids Logo" class="hero-logo-image">
            </div>
            <h1 class="hero-title animate-fade-in"><?php _e('MV Trenzas', 'mv-braids'); ?></h1>
            <p class="hero-tagline animate-fade-in-delay"><?php _e('Creado por Vanessa • A Coruña', 'mv-braids'); ?></p>
            <div class="hero-buttons animate-fade-in-delay-2">
                <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                    <i class="fas fa-calendar-check"></i>
                    <?php _e('Reserva Tu Cita', 'mv-braids'); ?>
                </a>
                <a href="https://instagram.com/mv__trenzas" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-large">
                    <i class="fab fa-instagram"></i>
                    <?php _e('Ver en Instagram', 'mv-braids'); ?>
                </a>
            </div>
        </div>
        <div class="scroll-indicator">
            <span></span>
        </div>
    </section>

    <!-- Instagram Photo Slideshow Section -->
    <section id="trabajos" class="instagram-slideshow-section section">
        <div class="container">
            <div class="text-center mb-lg">
                <h2 class="section-title"><?php _e('Mis Últimos Trabajos', 'mv-braids'); ?></h2>
                <p class="section-subtitle"><?php _e('Directamente desde mi Instagram @mv__trenzas', 'mv-braids'); ?></p>
            </div>
            
            <div class="slideshow-container">
                <div class="slideshow-wrapper">
                    <!-- Slideshow images - Add your Instagram photos here -->
                    <div class="slide active">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/slide-1.jpg" alt="Trabajo 1" class="slide-image">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/slide-2.jpg" alt="Trabajo 2" class="slide-image">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/slide-3.jpg" alt="Trabajo 3" class="slide-image">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/slide-4.jpg" alt="Trabajo 4" class="slide-image">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/slide-5.jpg" alt="Trabajo 5" class="slide-image">
                    </div>
                </div>
                
                <!-- Slideshow Controls -->
                <button class="slide-arrow slide-prev" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slide-arrow slide-next" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
                <!-- Slideshow Dots -->
                <div class="slide-dots">
                    <button class="dot active" data-slide="0"></button>
                    <button class="dot" data-slide="1"></button>
                    <button class="dot" data-slide="2"></button>
                    <button class="dot" data-slide="3"></button>
                    <button class="dot" data-slide="4"></button>
                </div>
            </div>
            
            <div class="text-center mt-lg">
                <a href="https://instagram.com/mv__trenzas" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-large">
                    <i class="fab fa-instagram"></i>
                    <?php _e('Sígueme en Instagram', 'mv-braids'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Meet Vanessa Section -->
    <section id="vanessa" class="about-vanessa-section section">
        <div class="container">
            <div class="about-vanessa-content">
                <div class="vanessa-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profilepickture.jpg" alt="Vanessa - Estilista de Trenzas" class="vanessa-profile-image">
                    <div class="vanessa-decoration"></div>
                </div>
                <div class="vanessa-text">
                    <h2 class="section-title"><?php _e('Conoce a Vanessa', 'mv-braids'); ?></h2>
                    <p class="vanessa-subtitle"><?php _e('Creadora y Estilista de MV Trenzas', 'mv-braids'); ?></p>
                    <div class="vanessa-description">
                        <p><?php _e('¡Hola! Soy Vanessa, la creadora detrás de cada trenza única que ves en MV Trenzas. Con pasión por el arte del trenzado y dedicación a cada detalle, transformo el cabello en verdaderas obras de arte.', 'mv-braids'); ?></p>
                        <p><?php _e('Como única estilista de MV Trenzas, me aseguro de que cada cliente reciba atención personalizada y un estilo que refleje su personalidad única. Cada trenza es creada con amor, precisión y años de experiencia.', 'mv-braids'); ?></p>
                        <p><?php _e('Mi objetivo es que te sientas hermosa y confiada con un estilo que dure y luzca impecable.', 'mv-braids'); ?></p>
                    </div>
                    <div class="vanessa-cta">
                        <a href="https://instagram.com/mv__trenzas" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                            <i class="fab fa-instagram"></i>
                            <?php _e('Sígueme en Instagram', 'mv-braids'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-secondary">
                            <i class="fas fa-calendar-check"></i>
                            <?php _e('Reserva con Vanessa', 'mv-braids'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video/GIF Style Showcase Section -->
    <section class="video-showcase-section section section-alt">
        <div class="container">
            <div class="text-center mb-xl">
                <h2 class="section-title"><?php _e('El Proceso Creativo', 'mv-braids'); ?></h2>
                <p class="section-subtitle"><?php _e('Mira cómo transformo el cabello en arte', 'mv-braids'); ?></p>
            </div>
            
            <div class="video-grid">
                <!-- Video/GIF Box 1 -->
                <div class="video-box scroll-animate">
                    <div class="video-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Creativo/1.jpg" alt="Proceso de trenzado" class="video-gif">
                    </div>
                    <div class="video-caption">
                        <h3><?php _e('Técnica Detallada', 'mv-braids'); ?></h3>
                        <p><?php _e('Cada trenza hecha con precisión', 'mv-braids'); ?></p>
                    </div>
                </div>
                
                <!-- Video/GIF Box 2 -->
                <div class="video-box scroll-animate">
                    <div class="video-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Creativo/2.jpg" alt="Estilo único" class="video-gif">
                    </div>
                    <div class="video-caption">
                        <h3><?php _e('Estilo Personalizado', 'mv-braids'); ?></h3>
                        <p><?php _e('Diseños adaptados a tu personalidad', 'mv-braids'); ?></p>
                    </div>
                </div>
                
                <!-- Video/GIF Box 3 -->
                <div class="video-box scroll-animate">
                    <div class="video-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Creativo/3.jpg" alt="Resultado final" class="video-gif">
                    </div>
                    <div class="video-caption">
                        <h3><?php _e('Resultado Impecable', 'mv-braids'); ?></h3>
                        <p><?php _e('Trenzas que duran y lucen perfectas', 'mv-braids'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section id="servicios" class="services-preview-section section">
        <div class="container">
            <div class="text-center mb-xl">
                <h2 class="section-title"><?php _e('Servicios', 'mv-braids'); ?></h2>
                <p class="section-subtitle"><?php _e('Estilos de trenzas que ofrezco', 'mv-braids'); ?></p>
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
                            <p class="service-duration">
                                <i class="far fa-clock"></i> <?php echo esc_html($duration); ?>
                            </p>
                        <?php endif; ?>
                        <div class="service-description">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary">
                            <?php _e('Reservar', 'mv-braids'); ?>
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    // Default services if none are created yet
                    $default_services = array(
                        array('title' => 'Box Braids', 'price' => 'Desde 80€', 'duration' => '4-6 horas'),
                        array('title' => 'Knotless Braids', 'price' => 'Desde 100€', 'duration' => '5-7 horas'),
                        array('title' => 'Cornrows', 'price' => 'Desde 60€', 'duration' => '2-4 horas'),
                    );
                    foreach ($default_services as $service) :
                ?>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
                        <p class="service-price"><?php echo esc_html($service['price']); ?></p>
                        <p class="service-duration">
                            <i class="far fa-clock"></i> <?php echo esc_html($service['duration']); ?>
                        </p>
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary">
                            <?php _e('Reservar', 'mv-braids'); ?>
                        </a>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Vanessa Section -->
    <section id="ubicacion" class="location-section section section-alt">
        <div class="container">
            <div class="text-center mb-xl">
                <h2 class="section-title"><?php _e('¿Por Qué MV Trenzas?', 'mv-braids'); ?></h2>
                <p class="section-subtitle"><?php _e('Calidad, atención personalizada y ubicación perfecta en A Coruña', 'mv-braids'); ?></p>
            </div>
            
            <div class="location-content">
                <div class="location-info">
                    <div class="location-features">
                        <div class="location-feature">
                            <div class="feature-icon-small">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h3><?php _e('Calidad Premium', 'mv-braids'); ?></h3>
                                <p><?php _e('Trabajo detallado y cuidadoso en cada trenza', 'mv-braids'); ?></p>
                            </div>
                        </div>
                        
                        <div class="location-feature">
                            <div class="feature-icon-small">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div>
                                <h3><?php _e('Atención Personalizada', 'mv-braids'); ?></h3>
                                <p><?php _e('Vanessa te atenderá personalmente en cada cita', 'mv-braids'); ?></p>
                            </div>
                        </div>
                        
                        <div class="location-feature">
                            <div class="feature-icon-small">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3><?php _e('Horarios Flexibles', 'mv-braids'); ?></h3>
                                <p><?php _e('Adaptados a tu disponibilidad', 'mv-braids'); ?></p>
                            </div>
                        </div>
                        
                        <div class="location-feature">
                            <div class="feature-icon-small">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3><?php _e('Ubicación en A Coruña', 'mv-braids'); ?></h3>
                                <p><?php _e('Céntrica y accesible', 'mv-braids'); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="location-details">
                        <h3><i class="fas fa-map-marker-alt"></i> <?php _e('Visítame', 'mv-braids'); ?></h3>
                        <p class="address"><strong>MV Trenzas</strong><br>
                        Rúa Plá y Cancela, 43<br>
                        15005 A Coruña</p>
                        
                        <div class="hours-info">
                            <p><strong><?php _e('Horario:', 'mv-braids'); ?></strong></p>
                            <p>Lunes: Cerrado<br>
                            Martes - Viernes: 10:00 - 20:30<br>
                            Sábado - Domingo: Cerrado</p>
                        </div>
                        
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary">
                            <i class="fas fa-calendar-check"></i>
                            <?php _e('Reservar Cita', 'mv-braids'); ?>
                        </a>
                        </a>
                    </div>
                </div>
                
                <div class="location-map">
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.0976543210123!2d-8.412345!3d43.369789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2e7cfcf3b0c6c3%3A0x1234567890abcdef!2sRua%20Pl%C3%A1%20y%20Cancela%2C%2043%2C%2015005%20A%20Coru%C3%B1a!5e0!3m2!1ses!2ses!4v1730000000000!5m2!1ses!2ses"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="cta-section section">
        <div class="container-narrow text-center">
            <div class="cta-content">
                <div class="cta-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h2 class="section-title"><?php _e('¿Lista para tu Nuevo Look?', 'mv-braids'); ?></h2>
                <p class="section-subtitle">
                    <?php _e('Reserva tu cita ahora y transforma tu estilo con trenzas únicas y detalladas.', 'mv-braids'); ?>
                </p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                        <i class="fas fa-calendar-check"></i>
                        <?php _e('Reservar Ahora', 'mv-braids'); ?>
                    </a>
                    <a href="https://instagram.com/mv__trenzas" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-large">
                        <i class="fab fa-instagram"></i>
                        <?php _e('Contáctame en Instagram', 'mv-braids'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
