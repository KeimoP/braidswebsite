<?php
/**
 * The main template file - redirects to homepage
 * 
 * This template is used when WordPress can't find a more specific template.
 * Instead of showing blog posts, we redirect to the homepage.
 *
 * @package MV_Braids
 */

// Redirect to homepage if someone tries to access blog
if (!is_home() || is_front_page()) {
    get_header();
    ?>
    
    <main id="primary" class="site-main">
        <section class="section">
            <div class="container-narrow text-center">
                <h1><?php _e('¡Bienvenida!', 'mv-braids'); ?></h1>
                <p><?php _e('Esta página no está disponible. Por favor, visita nuestra página principal.', 'mv-braids'); ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-large">
                    <i class="fas fa-home"></i>
                    <?php _e('Ir a la Página Principal', 'mv-braids'); ?>
                </a>
            </div>
        </section>
    </main>
    
    <?php
    get_footer();
} else {
    // For blog page, redirect to home
    wp_redirect(home_url('/'));
    exit;
}
