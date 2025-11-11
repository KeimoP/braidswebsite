<?php
/**
 * MV Braids Theme Functions
 * 
 * @package MV_Braids
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function mv_braids_setup() {
    // Load text domain for translations
    load_theme_textdomain('mv-braids', get_template_directory() . '/languages');
    
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 800, true);
    
    // Add custom image sizes
    add_image_size('mv-braids-hero', 1920, 1080, true);
    add_image_size('mv-braids-gallery', 800, 800, true);
    add_image_size('mv-braids-thumbnail', 400, 400, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mv-braids'),
        'footer' => __('Footer Menu', 'mv-braids'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    // Add support for custom header
    add_theme_support('custom-header', array(
        'default-image' => '',
        'width' => 1920,
        'height' => 1080,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for align wide and full
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'mv_braids_setup');

/**
 * Remove post type support - disable blog functionality
 */
function mv_braids_remove_post_type_support() {
    // Remove default post type
    unregister_taxonomy_for_object_type('category', 'post');
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'mv_braids_remove_post_type_support');

/**
 * Hide posts from admin menu
 */
function mv_braids_remove_menus() {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('edit-comments.php'); // Comments
}
add_action('admin_menu', 'mv_braids_remove_menus');

/**
 * Disable posts from appearing in admin bar
 */
function mv_braids_remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('new-post');
}
add_action('wp_before_admin_bar_render', 'mv_braids_remove_admin_bar_links');

/**
 * Redirect posts list if accessed directly
 */
function mv_braids_redirect_post_pages() {
    global $pagenow;
    if ($pagenow === 'edit.php' && !isset($_GET['post_type'])) {
        wp_redirect(admin_url('index.php'));
        exit;
    }
}
add_action('admin_init', 'mv_braids_redirect_post_pages');

/**
 * Enqueue scripts and styles
 */
function mv_braids_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'mv-braids-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap',
        array(),
        null
    );
    
    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    
    // Theme stylesheet
    wp_enqueue_style('mv-braids-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Theme JavaScript
    wp_enqueue_script(
        'mv-braids-script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Scroll animations JavaScript
    wp_enqueue_script(
        'mv-braids-scroll-animations',
        get_template_directory_uri() . '/js/scroll-animations.js',
        array(),
        '1.0.0',
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('mv-braids-script', 'mvBraidsAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('mv-braids-nonce')
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'mv_braids_scripts');

/**
 * Register widget areas
 */
function mv_braids_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'mv-braids'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'mv-braids'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 1', 'mv-braids'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in footer column 1.', 'mv-braids'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 2', 'mv-braids'),
        'id' => 'footer-2',
        'description' => __('Add widgets here to appear in footer column 2.', 'mv-braids'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 3', 'mv-braids'),
        'id' => 'footer-3',
        'description' => __('Add widgets here to appear in footer column 3.', 'mv-braids'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'mv_braids_widgets_init');

/**
 * Custom excerpt length
 */
function mv_braids_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'mv_braids_excerpt_length');

/**
 * Custom excerpt more
 */
function mv_braids_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'mv_braids_excerpt_more');

/**
 * Handle booking form submission
 */
function mv_braids_handle_booking() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'mv-braids-nonce')) {
        wp_send_json_error(array('message' => __('Security check failed', 'mv-braids')));
        wp_die();
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $date = sanitize_text_field($_POST['date']);
    $message = sanitize_textarea_field($_POST['message']);
    $privacy = isset($_POST['privacy']) ? true : false;
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($service) || empty($date)) {
        wp_send_json_error(array('message' => __('Please fill in all required fields', 'mv-braids')));
        wp_die();
    }
    
    if (!$privacy) {
        wp_send_json_error(array('message' => __('You must accept the privacy policy', 'mv-braids')));
        wp_die();
    }
    
    // Handle file uploads
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    
    $current_hair_photo = '';
    $reference_photo = '';
    
    if (!empty($_FILES['current_hair']['name'])) {
        $current_hair_id = media_handle_upload('current_hair', 0);
        if (!is_wp_error($current_hair_id)) {
            $current_hair_photo = wp_get_attachment_url($current_hair_id);
        }
    }
    
    if (!empty($_FILES['reference_photo']['name'])) {
        $reference_id = media_handle_upload('reference_photo', 0);
        if (!is_wp_error($reference_id)) {
            $reference_photo = wp_get_attachment_url($reference_id);
        }
    }
    
    // Create booking post
    $booking_data = array(
        'post_title' => sprintf(__('Booking from %s', 'mv-braids'), $name),
        'post_content' => $message,
        'post_status' => 'publish',
        'post_type' => 'booking',
    );
    
    $booking_id = wp_insert_post($booking_data);
    
    if ($booking_id) {
        // Save booking meta
        update_post_meta($booking_id, '_booking_name', $name);
        update_post_meta($booking_id, '_booking_email', $email);
        update_post_meta($booking_id, '_booking_phone', $phone);
        update_post_meta($booking_id, '_booking_service', $service);
        update_post_meta($booking_id, '_booking_date', $date);
        update_post_meta($booking_id, '_booking_current_hair_photo', $current_hair_photo);
        update_post_meta($booking_id, '_booking_reference_photo', $reference_photo);
        
        // Send email to admin
        $admin_email = get_option('admin_email');
        $subject = sprintf(__('New Booking Request from %s', 'mv-braids'), $name);
        $body = "New booking request:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Service: $service\n";
        $body .= "Preferred Date: $date\n";
        $body .= "Message: $message\n\n";
        
        if ($current_hair_photo) {
            $body .= "Current Hair Photo: $current_hair_photo\n";
        }
        
        if ($reference_photo) {
            $body .= "Reference Photo: $reference_photo\n";
        }
        
        wp_mail($admin_email, $subject, $body);
        
        // Send confirmation email to client
        $client_subject = __('Booking Request Received - MV Braids', 'mv-braids');
        $client_body = sprintf(__('Hi %s,', 'mv-braids'), $name) . "\n\n";
        $client_body .= __('Thank you for your booking request! I have received your information and will contact you within 24-48 hours to confirm your appointment.', 'mv-braids') . "\n\n";
        $client_body .= __('Booking Details:', 'mv-braids') . "\n";
        $client_body .= sprintf(__('Service: %s', 'mv-braids'), $service) . "\n";
        $client_body .= sprintf(__('Preferred Date: %s', 'mv-braids'), $date) . "\n\n";
        $client_body .= __('Best regards,', 'mv-braids') . "\n";
        $client_body .= __('MV Braids', 'mv-braids') . "\n";
        $client_body .= __('A Coruña, Spain', 'mv-braids');
        
        wp_mail($email, $client_subject, $client_body);
        
        wp_send_json_success(array('message' => __('Your booking request has been sent successfully!', 'mv-braids')));
    } else {
        wp_send_json_error(array('message' => __('There was an error processing your request. Please try again.', 'mv-braids')));
    }
    
    wp_die();
}
add_action('wp_ajax_mv_braids_booking', 'mv_braids_handle_booking');
add_action('wp_ajax_nopriv_mv_braids_booking', 'mv_braids_handle_booking');

/**
 * Register custom post type for bookings
 */
function mv_braids_register_booking_post_type() {
    $labels = array(
        'name' => __('Bookings', 'mv-braids'),
        'singular_name' => __('Booking', 'mv-braids'),
        'menu_name' => __('Bookings', 'mv-braids'),
        'add_new' => __('Add New', 'mv-braids'),
        'add_new_item' => __('Add New Booking', 'mv-braids'),
        'edit_item' => __('Edit Booking', 'mv-braids'),
        'new_item' => __('New Booking', 'mv-braids'),
        'view_item' => __('View Booking', 'mv-braids'),
        'search_items' => __('Search Bookings', 'mv-braids'),
        'not_found' => __('No bookings found', 'mv-braids'),
        'not_found_in_trash' => __('No bookings found in Trash', 'mv-braids'),
    );
    
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor'),
        'has_archive' => false,
        'rewrite' => false,
        'query_var' => false,
    );
    
    register_post_type('booking', $args);
}
add_action('init', 'mv_braids_register_booking_post_type');

/**
 * Register custom post type for services
 */
function mv_braids_register_service_post_type() {
    $labels = array(
        'name' => __('Services', 'mv-braids'),
        'singular_name' => __('Service', 'mv-braids'),
        'menu_name' => __('Services', 'mv-braids'),
        'add_new' => __('Add New', 'mv-braids'),
        'add_new_item' => __('Add New Service', 'mv-braids'),
        'edit_item' => __('Edit Service', 'mv-braids'),
        'new_item' => __('New Service', 'mv-braids'),
        'view_item' => __('View Service', 'mv-braids'),
        'search_items' => __('Search Services', 'mv-braids'),
        'not_found' => __('No services found', 'mv-braids'),
        'not_found_in_trash' => __('No services found in Trash', 'mv-braids'),
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
    );
    
    register_post_type('service', $args);
}
add_action('init', 'mv_braids_register_service_post_type');

/**
 * Register custom post type for gallery
 */
function mv_braids_register_gallery_post_type() {
    $labels = array(
        'name' => __('Gallery', 'mv-braids'),
        'singular_name' => __('Gallery Item', 'mv-braids'),
        'menu_name' => __('Gallery', 'mv-braids'),
        'add_new' => __('Add New', 'mv-braids'),
        'add_new_item' => __('Add New Gallery Item', 'mv-braids'),
        'edit_item' => __('Edit Gallery Item', 'mv-braids'),
        'new_item' => __('New Gallery Item', 'mv-braids'),
        'view_item' => __('View Gallery Item', 'mv-braids'),
        'search_items' => __('Search Gallery', 'mv-braids'),
        'not_found' => __('No gallery items found', 'mv-braids'),
        'not_found_in_trash' => __('No gallery items found in Trash', 'mv-braids'),
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'gallery'),
    );
    
    register_post_type('gallery', $args);
}
add_action('init', 'mv_braids_register_gallery_post_type');

/**
 * Register taxonomy for gallery categories
 */
function mv_braids_register_gallery_taxonomy() {
    $labels = array(
        'name' => __('Gallery Categories', 'mv-braids'),
        'singular_name' => __('Gallery Category', 'mv-braids'),
        'search_items' => __('Search Categories', 'mv-braids'),
        'all_items' => __('All Categories', 'mv-braids'),
        'edit_item' => __('Edit Category', 'mv-braids'),
        'update_item' => __('Update Category', 'mv-braids'),
        'add_new_item' => __('Add New Category', 'mv-braids'),
        'new_item_name' => __('New Category Name', 'mv-braids'),
        'menu_name' => __('Categories', 'mv-braids'),
    );
    
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'gallery-category'),
    );
    
    register_taxonomy('gallery_category', array('gallery'), $args);
}
add_action('init', 'mv_braids_register_gallery_taxonomy');

/**
 * Add meta boxes for service custom fields
 */
function mv_braids_add_service_meta_boxes() {
    add_meta_box(
        'mv_braids_service_details',
        __('Service Details', 'mv-braids'),
        'mv_braids_service_details_callback',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mv_braids_add_service_meta_boxes');

/**
 * Service details meta box callback
 */
function mv_braids_service_details_callback($post) {
    wp_nonce_field('mv_braids_service_details', 'mv_braids_service_details_nonce');
    
    $price = get_post_meta($post->ID, '_service_price', true);
    $duration = get_post_meta($post->ID, '_service_duration', true);
    $features = get_post_meta($post->ID, '_service_features', true);
    ?>
    <p>
        <label for="service_price"><?php _e('Price (e.g., "Desde €120")', 'mv-braids'); ?></label><br>
        <input type="text" id="service_price" name="service_price" value="<?php echo esc_attr($price); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="service_duration"><?php _e('Duration (e.g., "~3-4 horas")', 'mv-braids'); ?></label><br>
        <input type="text" id="service_duration" name="service_duration" value="<?php echo esc_attr($duration); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="service_features"><?php _e('Features (one per line)', 'mv-braids'); ?></label><br>
        <textarea id="service_features" name="service_features" rows="5" style="width: 100%;"><?php echo esc_textarea($features); ?></textarea>
    </p>
    <?php
}

/**
 * Save service meta box data
 */
function mv_braids_save_service_meta($post_id) {
    if (!isset($_POST['mv_braids_service_details_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['mv_braids_service_details_nonce'], 'mv_braids_service_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['service_price'])) {
        update_post_meta($post_id, '_service_price', sanitize_text_field($_POST['service_price']));
    }
    
    if (isset($_POST['service_duration'])) {
        update_post_meta($post_id, '_service_duration', sanitize_text_field($_POST['service_duration']));
    }
    
    if (isset($_POST['service_features'])) {
        update_post_meta($post_id, '_service_features', sanitize_textarea_field($_POST['service_features']));
    }
}
add_action('save_post_service', 'mv_braids_save_service_meta');

/**
 * Custom body classes
 */
function mv_braids_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    
    if (is_page_template('page-gallery.php')) {
        $classes[] = 'gallery-page';
    }
    
    if (is_page_template('page-booking.php')) {
        $classes[] = 'booking-page';
    }
    
    if (is_page_template('page-services.php')) {
        $classes[] = 'services-page';
    }
    
    return $classes;
}
add_filter('body_class', 'mv_braids_body_classes');

/**
 * Allow SVG uploads
 */
function mv_braids_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'mv_braids_mime_types');

/**
 * Default menu fallback
 */
function mv_braids_default_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/#trabajos')) . '">' . __('Trabajos', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#vanessa')) . '">' . __('Sobre Mí', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#servicios')) . '">' . __('Servicios', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#ubicacion')) . '">' . __('Ubicación', 'mv-braids') . '</a></li>';
    echo '</ul>';
}

/**
 * Footer menu fallback
 */
function mv_braids_footer_default_menu() {
    echo '<ul class="footer-links">';
    echo '<li><a href="' . esc_url(home_url('/#trabajos')) . '">' . __('Trabajos', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#vanessa')) . '">' . __('Sobre Mí', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#servicios')) . '">' . __('Servicios', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#ubicacion')) . '">' . __('Ubicación', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/reserva')) . '">' . __('Reserva', 'mv-braids') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/politica-de-privacidad')) . '">' . __('Privacidad', 'mv-braids') . '</a></li>';
    echo '</ul>';
}
