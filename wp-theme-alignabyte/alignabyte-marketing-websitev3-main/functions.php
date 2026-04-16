<?php
/**
 * AlignaByte Marketing Theme Functions
 */

// Theme constants
define('THEME_VERSION', '1.0.0');
define('THEME_URI', get_template_directory_uri());
define('THEME_PATH', get_template_directory());

/**
 * Theme setup
 */
function alignabyte_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Load text domain
    load_theme_textdomain('alignabyte-marketing-websitev3-main', THEME_PATH . '/languages');
}
add_action('after_setup_theme', 'alignabyte_theme_setup');

/**
 * Enqueue scripts and styles
 */
function alignabyte_enqueue_assets() {
    // Google Fonts (Inter and Poppins)
    wp_enqueue_style(
        'alignabyte-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet (compiled Tailwind)
    wp_enqueue_style(
        'alignabyte-main',
        THEME_URI . '/assets/css/style.css',
        array(),
        THEME_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'alignabyte-main',
        THEME_URI . '/assets/js/main.js',
        array(),
        THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'alignabyte_enqueue_assets');

/**
 * Helper function to get asset path
 */
function theme_asset($path) {
    return THEME_URI . '/assets/images/' . ltrim($path, '/');
}

/**
 * Include icons
 */
require_once THEME_PATH . '/inc/icons.php';

/**
 * Handle contact form submission
 */
function alignabyte_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['alignabyte_contact_nonce']) || 
        !wp_verify_nonce($_POST['alignabyte_contact_nonce'], 'alignabyte_contact')) {
        wp_redirect(home_url('/contact/?contact=error'));
        exit;
    }

    // Sanitize inputs
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $service_type = sanitize_text_field($_POST['service_type']);
    $service_area = sanitize_text_field($_POST['service_area']);
    $message = sanitize_textarea_field($_POST['message']);

    // Send email (configure your email settings)
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Company: $company\n";
    $body .= "Service Type: $service_type\n";
    $body .= "Service Area: $service_area\n";
    $body .= "Message: $message\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_redirect(home_url('/contact/?contact=success'));
    } else {
        wp_redirect(home_url('/contact/?contact=error'));
    }
    exit;
}
add_action('admin_post_nopriv_alignabyte_contact', 'alignabyte_handle_contact_form');
add_action('admin_post_alignabyte_contact', 'alignabyte_handle_contact_form');

/**
 * Handle booking modal submission
 */
function alignabyte_handle_booking_modal() {
    // Verify nonce
    if (!isset($_POST['alignabyte_booking_nonce']) || 
        !wp_verify_nonce($_POST['alignabyte_booking_nonce'], 'alignabyte_booking')) {
        wp_send_json_error();
    }

    // Sanitize inputs
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);

    // Send email
    $to = get_option('admin_email');
    $subject = 'New Booking Request from ' . $name;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success();
    } else {
        wp_send_json_error();
    }
}
add_action('wp_ajax_nopriv_alignabyte_booking', 'alignabyte_handle_booking_modal');
add_action('wp_ajax_alignabyte_booking', 'alignabyte_handle_booking_modal');

/**
 * Theme activation - create pages
 */
function alignabyte_theme_activation() {
    // Create Services page
    $services_page = array(
        'post_title'    => 'Services',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'services',
    );
    $services_id = wp_insert_post($services_page);
    update_post_meta($services_id, '_wp_page_template', 'page-services.php');

    // Create Case Studies page
    $case_studies_page = array(
        'post_title'    => 'Case Studies',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'case-studies',
    );
    $case_studies_id = wp_insert_post($case_studies_page);
    update_post_meta($case_studies_id, '_wp_page_template', 'page-case-studies.php');

    // Create Contact page
    $contact_page = array(
        'post_title'    => 'Contact',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'contact',
    );
    $contact_id = wp_insert_post($contact_page);
    update_post_meta($contact_id, '_wp_page_template', 'page-contact.php');

    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'alignabyte_theme_activation');

/**
 * Fix 404 errors for known pages
 */
function alignabyte_fix_404() {
    global $wp_query;

    if (is_404()) {
        $request_uri = $_SERVER['REQUEST_URI'];
        $known_pages = array('services', 'case-studies', 'contact');

        foreach ($known_pages as $page_slug) {
            if (strpos($request_uri, $page_slug) !== false) {
                $page = get_page_by_path($page_slug);
                if ($page) {
                    $wp_query->is_404 = false;
                    status_header(200);
                    
                    // Load the appropriate template
                    $template = 'page-' . $page_slug . '.php';
                    if (file_exists(THEME_PATH . '/' . $template)) {
                        $GLOBALS['theme_current_page'] = $page_slug;
                        include(THEME_PATH . '/' . $template);
                        exit;
                    }
                }
            }
        }
    }
}
add_action('template_redirect', 'alignabyte_fix_404');
