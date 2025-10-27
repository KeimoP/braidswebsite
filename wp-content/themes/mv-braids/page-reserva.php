<?php
/**
 * Template Name: Booking
 * 
 * @package MV_Braids
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section" style="padding-top: 120px;">
        <div class="container">
            <div class="text-center mb-lg">
                <h1><?php _e('Reserva tu Cita', 'mv-braids'); ?></h1>
                <p><?php _e('Completa el formulario y me pondré en contacto contigo en 24-48 horas', 'mv-braids'); ?></p>
            </div>

            <div class="booking-container">
                <!-- Booking Form -->
                <div class="booking-form">
                    <form id="booking-form" enctype="multipart/form-data">
                        <?php wp_nonce_field('mv-braids-booking', 'booking_nonce'); ?>
                        
                        <div class="form-group">
                            <label for="name" class="form-label">
                                <?php _e('Nombre Completo', 'mv-braids'); ?> 
                                <span class="form-required">*</span>
                            </label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">
                                <?php _e('Correo Electrónico', 'mv-braids'); ?> 
                                <span class="form-required">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">
                                <?php _e('Teléfono', 'mv-braids'); ?> 
                                <span class="form-required">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" class="form-input" required>
                            <p class="form-help-text">
                                <?php _e('Incluye el código de país (ej: +34)', 'mv-braids'); ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="service" class="form-label">
                                <?php _e('Servicio de Interés', 'mv-braids'); ?> 
                                <span class="form-required">*</span>
                            </label>
                            <select id="service" name="service" class="form-select" required>
                                <option value=""><?php _e('Selecciona un servicio...', 'mv-braids'); ?></option>
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
                                        $selected = (isset($_GET['service']) && $_GET['service'] == get_the_title()) ? 'selected' : '';
                                ?>
                                    <option value="<?php echo esc_attr(get_the_title()); ?>" <?php echo $selected; ?>>
                                        <?php the_title(); ?>
                                        <?php if ($price) : ?>
                                            - <?php echo esc_html($price); ?>
                                        <?php endif; ?>
                                    </option>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date" class="form-label">
                                <?php _e('Fecha Preferida', 'mv-braids'); ?> 
                                <span class="form-required">*</span>
                            </label>
                            <input type="date" id="date" name="date" class="form-input" required
                                   min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                            <p class="form-help-text">
                                <?php _e('Selecciona tu fecha preferida. Te confirmaré la disponibilidad.', 'mv-braids'); ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">
                                <?php _e('Mensaje / Detalles Adicionales', 'mv-braids'); ?>
                            </label>
                            <textarea id="message" name="message" class="form-textarea" rows="4"
                                placeholder="<?php _e('Por favor, describe el estilo que deseas o cualquier detalle relevante...', 'mv-braids'); ?>"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="current_hair" class="form-label">
                                <?php _e('Foto de tu Cabello Actual', 'mv-braids'); ?> 
                                <span class="form-required">*</span>
                            </label>
                            <div class="file-upload">
                                <input type="file" id="current_hair" name="current_hair" 
                                       class="file-upload-input" accept="image/*" required>
                                <label for="current_hair" class="file-upload-label">
                                    <div>
                                        <div class="file-upload-icon">📷</div>
                                        <strong><?php _e('Haz clic para subir una foto', 'mv-braids'); ?></strong>
                                        <p class="form-help-text">
                                            <?php _e('Para prepararme mejor, adjunta una foto de tu cabello actual (color, largo, condición)', 'mv-braids'); ?>
                                        </p>
                                    </div>
                                </label>
                                <div id="current-hair-preview" class="file-preview"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reference_photo" class="form-label">
                                <?php _e('Foto de Referencia', 'mv-braids'); ?>
                                <span style="color: var(--medium-grey); font-weight: normal;">
                                    (<?php _e('Opcional', 'mv-braids'); ?>)
                                </span>
                            </label>
                            <div class="file-upload">
                                <input type="file" id="reference_photo" name="reference_photo" 
                                       class="file-upload-input" accept="image/*">
                                <label for="reference_photo" class="file-upload-label">
                                    <div>
                                        <div class="file-upload-icon">🖼️</div>
                                        <strong><?php _e('Haz clic para subir una foto', 'mv-braids'); ?></strong>
                                        <p class="form-help-text">
                                            <?php _e('¿Tienes una foto de la trenza o estilo que te gustaría? ¡Adjúntala aquí!', 'mv-braids'); ?>
                                        </p>
                                    </div>
                                </label>
                                <div id="reference-photo-preview" class="file-preview"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-checkbox">
                                <input type="checkbox" id="privacy" name="privacy" required>
                                <label for="privacy">
                                    <?php _e('Acepto la', 'mv-braids'); ?> 
                                    <a href="<?php echo esc_url(home_url('/politica-de-privacidad')); ?>" target="_blank">
                                        <?php _e('Política de Privacidad', 'mv-braids'); ?>
                                    </a> 
                                    <?php _e('y autorizo el uso de mis datos solo para el propósito de esta reserva.', 'mv-braids'); ?>
                                    <span class="form-required">*</span>
                                </label>
                            </div>
                        </div>

                        <div id="form-message" style="display: none; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;"></div>

                        <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i>
                            <?php _e('Enviar Solicitud de Reserva', 'mv-braids'); ?>
                        </button>
                    </form>
                </div>

                <!-- Booking Sidebar -->
                <div class="booking-sidebar">
                    <div class="booking-info">
                        <h3><?php _e('MV Braids', 'mv-braids'); ?></h3>
                        <p><?php _e('Unique and Detailed Braid Creations', 'mv-braids'); ?></p>
                    </div>

                    <div class="booking-info">
                        <div class="booking-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong><?php _e('Ubicación', 'mv-braids'); ?></strong>
                                <p><?php _e('Estudio en A Coruña, España', 'mv-braids'); ?></p>
                            </div>
                        </div>

                        <div class="booking-info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong><?php _e('Horario', 'mv-braids'); ?></strong>
                                <p><?php _e('Lun - Sáb: 9:00 - 20:00', 'mv-braids'); ?><br>
                                   <?php _e('Dom: Cerrado', 'mv-braids'); ?></p>
                            </div>
                        </div>

                        <div class="booking-info-item">
                            <i class="fab fa-instagram"></i>
                            <div>
                                <strong><?php _e('Instagram', 'mv-braids'); ?></strong>
                                <p>
                                    <a href="https://instagram.com/mv__trenzas" target="_blank" rel="noopener noreferrer">
                                        @mv__trenzas
                                    </a>
                                </p>
                                <p style="font-size: 0.9rem; color: var(--medium-grey);">
                                    <?php _e('También puedes contactarme vía DM', 'mv-braids'); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="map-container">
                        <!-- Replace with actual coordinates for A Coruña studio -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23302.207892583467!2d-8.411540249999999!3d43.3623436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2e7cfcf174574d%3A0x6a47350d095cdfee!2sA%20Coru%C3%B1a%2C%20Spain!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="booking-info" style="background: white; padding: 1rem; border-radius: 8px;">
                        <h4 style="color: var(--primary-gold); margin-bottom: 0.5rem;">
                            <i class="fas fa-info-circle"></i>
                            <?php _e('Nota Importante', 'mv-braids'); ?>
                        </h4>
                        <p style="font-size: 0.9rem; margin: 0;">
                            <?php _e('Te contactaré en 24-48 horas para confirmar tu cita. La fecha seleccionada está sujeta a disponibilidad.', 'mv-braids'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<script>
jQuery(document).ready(function($) {
    // File upload preview for current hair photo
    $('#current_hair').on('change', function() {
        const file = this.files[0];
        const preview = $('#current-hair-preview');
        preview.empty();
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.html('<img src="' + e.target.result + '" alt="Current hair preview">');
            }
            reader.readAsDataURL(file);
            
            // Update label
            $(this).siblings('.file-upload-label').find('strong').text(file.name);
        }
    });
    
    // File upload preview for reference photo
    $('#reference_photo').on('change', function() {
        const file = this.files[0];
        const preview = $('#reference-photo-preview');
        preview.empty();
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.html('<img src="' + e.target.result + '" alt="Reference photo preview">');
            }
            reader.readAsDataURL(file);
            
            // Update label
            $(this).siblings('.file-upload-label').find('strong').text(file.name);
        }
    });
    
    // Handle form submission
    $('#booking-form').on('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        formData.append('action', 'mv_braids_booking');
        formData.append('nonce', mvBraidsAjax.nonce);
        
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.html();
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> <?php _e("Enviando...", "mv-braids"); ?>').prop('disabled', true);
        
        $.ajax({
            url: mvBraidsAjax.ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                const messageDiv = $('#form-message');
                
                if (response.success) {
                    messageDiv.css({
                        'display': 'block',
                        'background-color': '#d4edda',
                        'color': '#155724',
                        'border': '1px solid #c3e6cb'
                    }).html('<i class="fas fa-check-circle"></i> ' + response.data.message);
                    
                    // Reset form
                    $('#booking-form')[0].reset();
                    $('#current-hair-preview, #reference-photo-preview').empty();
                    
                    // Scroll to message
                    $('html, body').animate({
                        scrollTop: messageDiv.offset().top - 100
                    }, 500);
                } else {
                    messageDiv.css({
                        'display': 'block',
                        'background-color': '#f8d7da',
                        'color': '#721c24',
                        'border': '1px solid #f5c6cb'
                    }).html('<i class="fas fa-exclamation-circle"></i> ' + response.data.message);
                }
                
                submitBtn.html(originalText).prop('disabled', false);
            },
            error: function() {
                $('#form-message').css({
                    'display': 'block',
                    'background-color': '#f8d7da',
                    'color': '#721c24',
                    'border': '1px solid #f5c6cb'
                }).html('<i class="fas fa-exclamation-circle"></i> <?php _e("Hubo un error. Por favor, inténtalo de nuevo.", "mv-braids"); ?>');
                
                submitBtn.html(originalText).prop('disabled', false);
            }
        });
    });
});
</script>

<?php
get_footer();
