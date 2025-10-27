<?php
/**
 * Template Name: Privacy Policy
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container-narrow" style="padding-top: 120px; padding-bottom: var(--spacing-xxl);">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header text-center mb-lg">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <p style="color: var(--medium-grey);">
                        <i class="far fa-calendar"></i>
                        <?php _e('Última actualización:', 'mv-braids'); ?>
                        <?php echo get_the_modified_date(); ?>
                    </p>
                </header>

                <div class="entry-content" style="line-height: 1.8;">
                    <?php if (empty(get_the_content())) : ?>
                        
                        <div style="background: var(--cream); padding: var(--spacing-lg); border-radius: var(--radius-lg); border-left: 4px solid var(--primary-gold); margin-bottom: var(--spacing-lg);">
                            <h3 style="margin-top: 0;">
                                <i class="fas fa-info-circle" style="color: var(--primary-gold);"></i>
                                <?php _e('Resumen de Privacidad', 'mv-braids'); ?>
                            </h3>
                            <p><?php _e('En MV Braids, respetamos tu privacidad y estamos comprometidos con la protección de tus datos personales.', 'mv-braids'); ?></p>
                        </div>

                        <h2>1. <?php _e('Información que Recopilamos', 'mv-braids'); ?></h2>
                        <p><?php _e('Cuando utilizas nuestro formulario de reserva, recopilamos la siguiente información:', 'mv-braids'); ?></p>
                        <ul>
                            <li><?php _e('Nombre completo', 'mv-braids'); ?></li>
                            <li><?php _e('Dirección de correo electrónico', 'mv-braids'); ?></li>
                            <li><?php _e('Número de teléfono', 'mv-braids'); ?></li>
                            <li><?php _e('Servicio de interés y fecha preferida', 'mv-braids'); ?></li>
                            <li><?php _e('Fotografías de tu cabello actual y referencias de estilo (si las proporcionas)', 'mv-braids'); ?></li>
                            <li><?php _e('Cualquier mensaje o detalle adicional que nos compartas', 'mv-braids'); ?></li>
                        </ul>

                        <h2>2. <?php _e('Cómo Usamos tu Información', 'mv-braids'); ?></h2>
                        <p><?php _e('Usamos la información recopilada únicamente para los siguientes propósitos:', 'mv-braids'); ?></p>
                        <ul>
                            <li><?php _e('Procesar y confirmar tu reserva de cita', 'mv-braids'); ?></li>
                            <li><?php _e('Comunicarnos contigo sobre tu cita', 'mv-braids'); ?></li>
                            <li><?php _e('Preparar adecuadamente los materiales y técnicas para tu servicio', 'mv-braids'); ?></li>
                            <li><?php _e('Enviarte recordatorios de cita', 'mv-braids'); ?></li>
                            <li><?php _e('Mejorar nuestros servicios', 'mv-braids'); ?></li>
                        </ul>

                        <h2>3. <?php _e('Compartir tu Información', 'mv-braids'); ?></h2>
                        <p><?php _e('No vendemos, comercializamos ni compartimos tu información personal con terceros. Tu información permanece privada y se utiliza exclusivamente para proporcionar nuestros servicios de trenzado.', 'mv-braids'); ?></p>

                        <h2>4. <?php _e('Almacenamiento de Datos', 'mv-braids'); ?></h2>
                        <p><?php _e('Tus datos personales se almacenan de forma segura en nuestro sistema. Las fotografías que nos envías se utilizan únicamente para fines de preparación y consulta de tu servicio.', 'mv-braids'); ?></p>
                        <p><?php _e('Conservamos tu información durante el tiempo necesario para proporcionar el servicio solicitado y cumplir con las obligaciones legales.', 'mv-braids'); ?></p>

                        <h2>5. <?php _e('Tus Derechos', 'mv-braids'); ?></h2>
                        <p><?php _e('De acuerdo con el RGPD (Reglamento General de Protección de Datos), tienes derecho a:', 'mv-braids'); ?></p>
                        <ul>
                            <li><?php _e('Acceder a tus datos personales', 'mv-braids'); ?></li>
                            <li><?php _e('Rectificar datos inexactos o incompletos', 'mv-braids'); ?></li>
                            <li><?php _e('Solicitar la eliminación de tus datos', 'mv-braids'); ?></li>
                            <li><?php _e('Oponerte al procesamiento de tus datos', 'mv-braids'); ?></li>
                            <li><?php _e('Solicitar la portabilidad de tus datos', 'mv-braids'); ?></li>
                            <li><?php _e('Retirar tu consentimiento en cualquier momento', 'mv-braids'); ?></li>
                        </ul>
                        <p><?php _e('Para ejercer cualquiera de estos derechos, por favor contáctanos a través de Instagram (@mv__trenzas) o por correo electrónico.', 'mv-braids'); ?></p>

                        <h2>6. <?php _e('Cookies', 'mv-braids'); ?></h2>
                        <p><?php _e('Este sitio web utiliza cookies esenciales para su correcto funcionamiento. No utilizamos cookies de seguimiento de terceros ni cookies publicitarias.', 'mv-braids'); ?></p>

                        <h2>7. <?php _e('Seguridad', 'mv-braids'); ?></h2>
                        <p><?php _e('Implementamos medidas de seguridad técnicas y organizativas apropiadas para proteger tus datos personales contra acceso no autorizado, alteración, divulgación o destrucción.', 'mv-braids'); ?></p>

                        <h2>8. <?php _e('Menores de Edad', 'mv-braids'); ?></h2>
                        <p><?php _e('Nuestros servicios están dirigidos a personas mayores de 16 años. Si eres menor de 16 años, por favor solicita el consentimiento de tus padres o tutores antes de proporcionar información personal.', 'mv-braids'); ?></p>

                        <h2>9. <?php _e('Cambios a esta Política', 'mv-braids'); ?></h2>
                        <p><?php _e('Nos reservamos el derecho de actualizar esta política de privacidad en cualquier momento. Los cambios se publicarán en esta página con la fecha de actualización correspondiente.', 'mv-braids'); ?></p>

                        <h2>10. <?php _e('Contacto', 'mv-braids'); ?></h2>
                        <p><?php _e('Si tienes preguntas sobre esta política de privacidad o sobre cómo manejamos tus datos personales, por favor contáctanos:', 'mv-braids'); ?></p>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><strong>Instagram:</strong> <a href="https://instagram.com/mv__trenzas" target="_blank">@mv__trenzas</a></li>
                            <li><strong><?php _e('Ubicación:', 'mv-braids'); ?></strong> A Coruña, España</li>
                        </ul>

                        <div style="background: var(--primary-gold-light); padding: var(--spacing-lg); border-radius: var(--radius-lg); margin-top: var(--spacing-xl);">
                            <h3 style="margin-top: 0;">
                                <i class="fas fa-shield-alt" style="color: var(--soft-black);"></i>
                                <?php _e('Tu Privacidad es Importante', 'mv-braids'); ?>
                            </h3>
                            <p style="margin-bottom: 0;"><?php _e('En MV Braids, nos tomamos muy en serio la protección de tu información personal. Si tienes alguna preocupación sobre tu privacidad, no dudes en contactarnos directamente.', 'mv-braids'); ?></p>
                        </div>

                    <?php else : ?>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="text-center mt-xl">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i>
                <?php _e('Volver al Inicio', 'mv-braids'); ?>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
