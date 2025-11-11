<?php
/**
 * Template Name: About
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section" style="padding-top: 120px;">
        <div class="container-narrow">
            <div class="text-center mb-lg">
                <h1><?php _e('Sobre Mí', 'mv-braids'); ?></h1>
            </div>

            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>

            <div style="margin-top: var(--spacing-xl);">
                <h2 class="text-center mb-md"><?php _e('Mi Historia', 'mv-braids'); ?></h2>
                <p class="intro-text text-center">
                    <?php _e('Desde niña, siempre me ha fascinado el arte de las trenzas. Lo que comenzó como un pasatiempo se convirtió en mi pasión y ahora en mi profesión. Cada trenza que creo es única, elaborada con dedicación y amor por el detalle.', 'mv-braids'); ?>
                </p>
            </div>
            
            <!-- About Vanessa profile block -->
            <div class="about-vanessa-section" style="margin-top: var(--spacing-xxl);">
                <div class="about-vanessa-content container-narrow">
                    <div class="vanessa-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profilepickture.jpg" alt="Vanessa - Estilista de Trenzas" class="vanessa-profile-image">
                        <div class="vanessa-decoration"></div>
                    </div>
                    <div class="vanessa-text">
                        <h2 class="section-title"><?php _e('Conoce a Vanessa', 'mv-braids'); ?></h2>
                        <p class="vanessa-subtitle"><?php _e('Creadora y Estilista de MV Trenzas', 'mv-braids'); ?></p>
                        <div class="vanessa-description">
                            <p><?php _e('¡Hola! Soy Vanessa, la creadora detrás de cada trenza única que ves en MV Trenzas. Con pasión por el arte del trenzado y dedicación a cada detalle, transformo el cabello en verdaderas obras de arte.', 'mv-braids'); ?></p>
                            <p><?php _e('Como única estilista de MV Trenzas, me aseguro de que cada cliente reciba atención personalizada y un estilo que refleje su personalidad única.', 'mv-braids'); ?></p>
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
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <h2 class="text-center mb-lg"><?php _e('¿Por qué elegir MV Braids?', 'mv-braids'); ?></h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3><?php _e('Diseños Únicos', 'mv-braids'); ?></h3>
                    <p><?php _e('Cada trenza es creada especialmente para ti, adaptada a tu estilo personal y tipo de cabello.', 'mv-braids'); ?></p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3><?php _e('Atención al Detalle', 'mv-braids'); ?></h3>
                    <p><?php _e('Me tomo el tiempo necesario para asegurar que cada trenza sea perfecta y duradera.', 'mv-braids'); ?></p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <h3><?php _e('Experiencia Relajante', 'mv-braids'); ?></h3>
                    <p><?php _e('Mi estudio es un espacio acogedor donde puedes relajarte mientras transformo tu cabello.', 'mv-braids'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container-narrow text-center">
            <h2><?php _e('¿Lista para tu transformación?', 'mv-braids'); ?></h2>
            <p class="intro-text">
                <?php _e('Reserva tu cita hoy y descubre el arte de las trenzas', 'mv-braids'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-large">
                <?php _e('Reserva Ahora', 'mv-braids'); ?>
            </a>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
