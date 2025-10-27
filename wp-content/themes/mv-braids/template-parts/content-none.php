<?php
/**
 * Template part for displaying a message when no content is found
 * 
 * @package MV_Braids
 */
?>

<section class="no-results not-found" style="text-align: center; padding: var(--spacing-xxl) var(--spacing-md);">
    <header class="page-header">
        <h1 class="page-title"><?php _e('No se encontró contenido', 'mv-braids'); ?></h1>
    </header>

    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>

            <p><?php _e('¿Listo para publicar tu primera entrada?', 'mv-braids'); ?></p>
            <p>
                <a href="<?php echo esc_url(admin_url('post-new.php')); ?>" class="btn btn-primary">
                    <?php _e('Comenzar', 'mv-braids'); ?>
                </a>
            </p>

        <?php elseif (is_search()) : ?>

            <p><?php _e('Lo sentimos, no se encontraron resultados. Por favor, intenta con otras palabras clave.', 'mv-braids'); ?></p>
            <div style="max-width: 500px; margin: var(--spacing-lg) auto;">
                <?php get_search_form(); ?>
            </div>

        <?php else : ?>

            <p><?php _e('Parece que no podemos encontrar lo que buscas. Intenta buscar.', 'mv-braids'); ?></p>
            <div style="max-width: 500px; margin: var(--spacing-lg) auto;">
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>

        <div style="margin-top: var(--spacing-xl);">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">
                <i class="fas fa-home"></i>
                <?php _e('Volver al Inicio', 'mv-braids'); ?>
            </a>
        </div>
    </div>
</section>
