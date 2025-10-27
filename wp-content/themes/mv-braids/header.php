<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'mv-braids'); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-container container">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" rel="home">
                        MV <span>Braids</span>
                    </a>
                <?php endif; ?>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'menu_class' => 'nav-menu',
                    'container' => false,
                    'fallback_cb' => 'mv_braids_default_menu',
                ));
                ?>
                <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary btn-small">
                    <?php _e('Reserva Ahora', 'mv-braids'); ?>
                </a>
            </nav>

            <button class="mobile-menu-toggle" aria-label="<?php _e('Toggle menu', 'mv-braids'); ?>">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <div id="content" class="site-content">
