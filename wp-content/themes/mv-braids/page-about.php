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
