<?php
/**
 * Template Name: FAQ
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section" style="padding-top: 120px;">
        <div class="container-narrow">
            <div class="text-center mb-lg">
                <h1><?php _e('Preguntas Frecuentes', 'mv-braids'); ?></h1>
                <p><?php _e('Encuentra respuestas a las preguntas más comunes sobre mis servicios', 'mv-braids'); ?></p>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Cuánto tiempo dura una cita?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('El tiempo varía según el estilo elegido, pero generalmente las citas duran entre 3 y 6 horas. Te daré una estimación específica cuando reserves tu cita.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Cuánto tiempo duran las trenzas?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Con el cuidado adecuado, las trenzas pueden durar entre 4 y 8 semanas, dependiendo del estilo y el tipo de cabello.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Necesito lavar mi cabello antes de venir?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Sí, por favor lava tu cabello 1-2 días antes de la cita. Asegúrate de que esté completamente seco y desenredado cuando llegues.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Cuánto cuesta el servicio?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Los precios varían según el estilo y la longitud del cabello. Puedes ver los precios estimados en nuestra', 'mv-braids'); ?> 
                        <a href="<?php echo esc_url(home_url('/servicios')); ?>"><?php _e('página de servicios', 'mv-braids'); ?></a>.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Necesito pagar un depósito?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Sí, se requiere un depósito para confirmar tu cita. El monto del depósito se deducirá del precio total del servicio.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Puedo traer mi propio cabello para extensiones?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Sí, puedes traer tu propio cabello sintético o natural. Sin embargo, asegúrate de que sea de buena calidad. También puedo proporcionar extensiones por un costo adicional.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Trabajas con todo tipo de cabello?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('¡Por supuesto! Trabajo con todos los tipos de cabello: liso, ondulado, rizado o afro. Cada cabello es único y adapto mis técnicas según sea necesario.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Cómo cuido mis trenzas?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Te daré instrucciones detalladas de cuidado después de tu cita. En general: usa un gorro de seda para dormir, hidrata tu cuero cabelludo regularmente, y evita productos pesados.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Puedo cancelar o reprogramar mi cita?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Sí, pero por favor notifícame con al menos 24 horas de anticipación. Las cancelaciones de último momento pueden resultar en la pérdida del depósito.', 'mv-braids'); ?></p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">
                        <i class="fas fa-question-circle" style="color: var(--primary-gold);"></i>
                        <?php _e('¿Dónde está ubicado tu estudio?', 'mv-braids'); ?>
                    </h3>
                    <div class="faq-answer">
                        <p><?php _e('Mi estudio está en A Coruña, España. Te enviaré la dirección exacta cuando confirmes tu cita.', 'mv-braids'); ?></p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-xl" style="background: var(--cream); padding: var(--spacing-lg); border-radius: var(--radius-lg);">
                <h2><?php _e('¿Tienes más preguntas?', 'mv-braids'); ?></h2>
                <p><?php _e('No dudes en contactarme a través de Instagram o el formulario de reserva', 'mv-braids'); ?></p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 1rem;">
                    <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-primary">
                        <?php _e('Hacer una Reserva', 'mv-braids'); ?>
                    </a>
                    <a href="https://instagram.com/mv__braids" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        <i class="fab fa-instagram"></i> <?php _e('Instagram', 'mv-braids'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<style>
.faq-container {
    max-width: 100%;
}

.faq-item {
    background: white;
    border-radius: var(--radius-lg);
    padding: var(--spacing-md);
    margin-bottom: var(--spacing-md);
    box-shadow: var(--shadow-sm);
    transition: var(--transition-smooth);
    cursor: pointer;
}

.faq-item:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.faq-question {
    margin: 0;
    color: var(--soft-black);
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    font-size: 1.1rem;
}

.faq-question i {
    margin-top: 0.25rem;
    flex-shrink: 0;
}

.faq-answer {
    margin-top: var(--spacing-sm);
    padding-left: calc(var(--spacing-sm) + 1.5rem);
    color: var(--dark-charcoal);
}

.faq-answer p {
    margin: 0;
    line-height: 1.7;
}

.faq-answer a {
    color: var(--primary-gold);
    text-decoration: underline;
}

@media (max-width: 768px) {
    .faq-question {
        font-size: 1rem;
    }
    
    .faq-answer {
        padding-left: calc(var(--spacing-sm) + 1.25rem);
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    $('.faq-item').each(function() {
        $(this).find('.faq-answer').hide();
    });
    
    $('.faq-item').on('click', function() {
        $(this).find('.faq-answer').slideToggle(300);
        $(this).toggleClass('active');
    });
});
</script>

<?php
get_footer();
