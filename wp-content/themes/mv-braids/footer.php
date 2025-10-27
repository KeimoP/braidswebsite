    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php _e('MV Braids', 'mv-braids'); ?></h3>
                    <p><?php _e('Unique and Detailed Braid Creations', 'mv-braids'); ?></p>
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        <?php _e('A Coruña, España', 'mv-braids'); ?>
                    </p>
                    <div class="social-links">
                        <a href="https://instagram.com/mv__braids" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/34123456789" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="mailto:info@mvbraids.com" class="social-link" aria-label="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3><?php _e('Enlaces Rápidos', 'mv-braids'); ?></h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_id' => 'footer-menu',
                        'menu_class' => 'footer-links',
                        'container' => false,
                        'fallback_cb' => 'mv_braids_footer_default_menu',
                    ));
                    ?>
                </div>

                <div class="footer-section">
                    <h3><?php _e('Horario', 'mv-braids'); ?></h3>
                    <p><?php _e('Lunes - Sábado: 9:00 - 20:00', 'mv-braids'); ?></p>
                    <p><?php _e('Domingo: Cerrado', 'mv-braids'); ?></p>
                    <p class="mt-md">
                        <strong><?php _e('Citas solo con reserva previa', 'mv-braids'); ?></strong>
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                    <?php _e('Todos los derechos reservados.', 'mv-braids'); ?>
                </p>
                <p>
                    <a href="<?php echo esc_url(home_url('/politica-de-privacidad')); ?>">
                        <?php _e('Política de Privacidad', 'mv-braids'); ?>
                    </a>
                    |
                    <a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>">
                        <?php _e('Términos y Condiciones', 'mv-braids'); ?>
                    </a>
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
