<?php
/**
 * Template Name: Services
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section" style="padding-top: 120px;">
        <div class="container">
            <div class="text-center mb-lg">
                <h1><?php _e('Servicios y Precios', 'mv-braids'); ?></h1>
                <p><?php _e('Descubre nuestros estilos de trenzas y encuentra el perfecto para ti', 'mv-braids'); ?></p>
            </div>

            <div class="services-grid">
                <?php
                $services_args = array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $services_query = new WP_Query($services_args);
                
                if ($services_query->have_posts()) :
                    while ($services_query->have_posts()) : $services_query->the_post();
                        $price = get_post_meta(get_the_ID(), '_service_price', true);
                        $duration = get_post_meta(get_the_ID(), '_service_duration', true);
                        $features = get_post_meta(get_the_ID(), '_service_features', true);
                        $features_array = !empty($features) ? explode("\n", $features) : array();
                ?>
                    <div class="service-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" 
                                 alt="<?php the_title_attribute(); ?>"
                                 style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem;">
                        <?php endif; ?>
                        
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
                            <?php the_content(); ?>
                        </div>
                        
                        <?php if (!empty($features_array)) : ?>
                            <ul class="service-features">
                                <?php foreach ($features_array as $feature) : ?>
                                    <?php if (!empty(trim($feature))) : ?>
                                        <li><?php echo esc_html(trim($feature)); ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>?service=<?php echo urlencode(get_the_title()); ?>" 
                           class="btn btn-primary">
                            <?php _e('Seleccionar', 'mv-braids'); ?>
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="container-narrow text-center">
                        <p><?php _e('No hay servicios disponibles en este momento.', 'mv-braids'); ?></p>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Additional Information Section -->
    <section class="section section-alt">
        <div class="container-narrow">
            <h2 class="text-center mb-md"><?php _e('Información Importante', 'mv-braids'); ?></h2>
            
            <div style="background: white; padding: 2rem; border-radius: 16px; box-shadow: var(--shadow-md);">
                <h3><i class="fas fa-info-circle" style="color: var(--primary-gold);"></i> 
                    <?php _e('Antes de tu cita', 'mv-braids'); ?>
                </h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-gold);"></i>
                        <?php _e('Lava tu cabello 1-2 días antes de la cita', 'mv-braids'); ?>
                    </li>
                    <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-gold);"></i>
                        <?php _e('Llega con el cabello seco y desenredado', 'mv-braids'); ?>
                    </li>
                    <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-gold);"></i>
                        <?php _e('Trae fotos de referencia si tienes un estilo específico en mente', 'mv-braids'); ?>
                    </li>
                    <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-gold);"></i>
                        <?php _e('Se requiere un depósito para confirmar tu cita', 'mv-braids'); ?>
                    </li>
                </ul>
                
                <h3 class="mt-lg">
                    <i class="fas fa-calendar-times" style="color: var(--dusty-rose);"></i>
                    <?php _e('Política de Cancelación', 'mv-braids'); ?>
                </h3>
                <p><?php _e('Por favor, notifica con al menos 24 horas de anticipación si necesitas cancelar o reprogramar tu cita. Las cancelaciones de último momento pueden resultar en la pérdida del depósito.', 'mv-braids'); ?></p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container-narrow text-center">
            <h2><?php _e('¿Lista para reservar?', 'mv-braids'); ?></h2>
            <p class="intro-text">
                <?php _e('Completa el formulario de reserva y me pondré en contacto contigo en 24-48 horas', 'mv-braids'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                <?php _e('Hacer Reserva', 'mv-braids'); ?>
            </a>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
