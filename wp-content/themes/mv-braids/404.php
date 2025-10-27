<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found" style="padding-top: 120px; padding-bottom: var(--spacing-xxl); text-align: center;">
        <div class="container-narrow">
            <div style="font-size: 8rem; color: var(--primary-gold); font-weight: 700; line-height: 1; margin-bottom: var(--spacing-md);">
                404
            </div>
            
            <header class="page-header">
                <h1 class="page-title"><?php _e('¡Ups! Página no encontrada', 'mv-braids'); ?></h1>
            </header>

            <div class="page-content">
                <p style="font-size: 1.25rem; margin-bottom: var(--spacing-lg);">
                    <?php _e('Lo sentimos, pero la página que buscas no existe o ha sido movida.', 'mv-braids'); ?>
                </p>

                <div style="max-width: 500px; margin: 0 auto var(--spacing-xl);">
                    <h3><?php _e('¿Buscas algo específico?', 'mv-braids'); ?></h3>
                    <?php get_search_form(); ?>
                </div>

                <div style="background: var(--cream); padding: var(--spacing-lg); border-radius: var(--radius-lg); margin-bottom: var(--spacing-xl);">
                    <h3><?php _e('Enlaces Rápidos', 'mv-braids'); ?></h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--spacing-sm); margin-top: var(--spacing-md);">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">
                            <i class="fas fa-home"></i> <?php _e('Inicio', 'mv-braids'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="btn btn-secondary">
                            <i class="fas fa-images"></i> <?php _e('Galería', 'mv-braids'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/servicios')); ?>" class="btn btn-secondary">
                            <i class="fas fa-cut"></i> <?php _e('Servicios', 'mv-braids'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary">
                            <i class="fas fa-calendar"></i> <?php _e('Reserva', 'mv-braids'); ?>
                        </a>
                    </div>
                </div>

                <div>
                    <h3><?php _e('¿Necesitas ayuda?', 'mv-braids'); ?></h3>
                    <p><?php _e('Contáctame a través de Instagram', 'mv-braids'); ?></p>
                    <a href="https://instagram.com/mv__trenzas" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-large">
                        <i class="fab fa-instagram"></i> @mv__trenzas
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
