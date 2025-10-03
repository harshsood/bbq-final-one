<?php
/**
 * BBQ Gas Theme Functions - Elementor Ready
 * 
 * @package BBQ_Gas
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function bbq_gas_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Elementor support
    add_theme_support('elementor');
    add_theme_support('elementor-pro');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bbq-gas'),
        'footer' => __('Footer Menu', 'bbq-gas'),
    ));
}
add_action('after_setup_theme', 'bbq_gas_setup');

/**
 * Enqueue Scripts and Styles
 */
function bbq_gas_scripts() {
    // Enqueue Tailwind CSS from CDN
    wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com', array(), '3.4.1');
    
    // Enqueue custom styles
    wp_enqueue_style('bbq-gas-style', get_stylesheet_uri(), array('tailwind-css'), '1.0.0');
    
    // Enqueue jQuery (WordPress includes it)
    wp_enqueue_script('jquery');
    
    // Enqueue custom scripts
    wp_enqueue_script('bbq-gas-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('bbq-gas-main', 'bbq_gas_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('bbq_gas_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'bbq_gas_scripts');

/**
 * Elementor Compatibility
 */
function bbq_gas_elementor_init() {
    // Register Elementor locations
    if (did_action('elementor/loaded')) {
        require_once get_template_directory() . '/inc/elementor-widgets.php';
    }
}
add_action('init', 'bbq_gas_elementor_init');

/**
 * Register Elementor Locations
 */
function bbq_gas_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_location('header');
    $elementor_theme_manager->register_location('footer');
    $elementor_theme_manager->register_location('single');
    $elementor_theme_manager->register_location('archive');
}
add_action('elementor/theme/register_locations', 'bbq_gas_register_elementor_locations');

/**
 * Add Tailwind CSS Configuration
 */
function bbq_gas_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'orange': {
                            500: '#f97316',
                            600: '#ea580c',
                        },
                        'red': {
                            500: '#ef4444',
                            600: '#dc2626',
                        }
                    }
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'bbq_gas_tailwind_config');

/**
 * Customizer Options - Elementor Compatible
 */
function bbq_gas_customize_register($wp_customize) {
    // Company Information Section
    $wp_customize->add_section('bbq_gas_company', array(
        'title' => __('Company Information', 'bbq-gas'),
        'priority' => 30,
    ));
    
    // Company Name
    $wp_customize->add_setting('bbq_gas_company_name', array(
        'default' => 'BBQ Gas',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_company_name', array(
        'label' => __('Company Name', 'bbq-gas'),
        'section' => 'bbq_gas_company',
        'type' => 'text',
    ));
    
    // Tagline
    $wp_customize->add_setting('bbq_gas_tagline', array(
        'default' => "Dubai's Gas Cylinder Experts",
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_tagline', array(
        'label' => __('Company Tagline', 'bbq-gas'),
        'section' => 'bbq_gas_company',
        'type' => 'text',
    ));
    
    // Phone Number
    $wp_customize->add_setting('bbq_gas_phone', array(
        'default' => '+971 58 282 1712',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_phone', array(
        'label' => __('Phone Number', 'bbq-gas'),
        'section' => 'bbq_gas_company',
        'type' => 'text',
    ));
    
    // Email
    $wp_customize->add_setting('bbq_gas_email', array(
        'default' => 'orders@bbqgas.ae',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_email', array(
        'label' => __('Email Address', 'bbq-gas'),
        'section' => 'bbq_gas_company',
        'type' => 'email',
    ));
    
    // Hero Section
    $wp_customize->add_section('bbq_gas_hero', array(
        'title' => __('Hero Section', 'bbq-gas'),
        'priority' => 31,
    ));
    
    // Hero Title
    $wp_customize->add_setting('bbq_gas_hero_title', array(
        'default' => "Dubai's Premier Gas New Connections & Delivery",
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_hero_title', array(
        'label' => __('Hero Title', 'bbq-gas'),
        'section' => 'bbq_gas_hero',
        'type' => 'text',
    ));
    
    // Hero Description
    $wp_customize->add_setting('bbq_gas_hero_description', array(
        'default' => 'Professional gas cylinder new connections and delivery service for homes, restaurants, and BBQ enthusiasts across Dubai.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_hero_description', array(
        'label' => __('Hero Description', 'bbq-gas'),
        'section' => 'bbq_gas_hero',
        'type' => 'textarea',
    ));
    
    // Services Section
    $wp_customize->add_section('bbq_gas_services_section', array(
        'title' => __('Services Section', 'bbq-gas'),
        'priority' => 32,
    ));
    
    // Services Title
    $wp_customize->add_setting('bbq_gas_services_title', array(
        'default' => 'Gas Cylinder Types & Services',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_services_title', array(
        'label' => __('Services Section Title', 'bbq-gas'),
        'section' => 'bbq_gas_services_section',
        'type' => 'text',
    ));
    
    // Services Description
    $wp_customize->add_setting('bbq_gas_services_description', array(
        'default' => 'Complete gas cylinder solutions for homes and businesses in Dubai.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('bbq_gas_services_description', array(
        'label' => __('Services Section Description', 'bbq-gas'),
        'section' => 'bbq_gas_services_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'bbq_gas_customize_register');

/**
 * Custom Post Types
 */
function bbq_gas_custom_post_types() {
    // Services Post Type
    register_post_type('bbq_service', array(
        'labels' => array(
            'name' => __('Services', 'bbq-gas'),
            'singular_name' => __('Service', 'bbq-gas'),
            'add_new' => __('Add New Service', 'bbq-gas'),
            'add_new_item' => __('Add New Service', 'bbq-gas'),
            'edit_item' => __('Edit Service', 'bbq-gas'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'elementor'),
        'menu_icon' => 'dashicons-admin-tools',
        'show_in_rest' => true,
    ));
    
    // Testimonials Post Type
    register_post_type('bbq_testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'bbq-gas'),
            'singular_name' => __('Testimonial', 'bbq-gas'),
            'add_new' => __('Add New Testimonial', 'bbq-gas'),
            'add_new_item' => __('Add New Testimonial', 'bbq-gas'),
            'edit_item' => __('Edit Testimonial', 'bbq-gas'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'elementor'),
        'menu_icon' => 'dashicons-format-quote',
        'show_in_rest' => true,
    ));
}
add_action('init', 'bbq_gas_custom_post_types');

/**
 * Add Custom Fields for Testimonials
 */
function bbq_gas_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'bbq_gas_testimonial_meta_box_callback',
        'bbq_testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'bbq_gas_add_testimonial_meta_boxes');

function bbq_gas_testimonial_meta_box_callback($post) {
    wp_nonce_field('bbq_gas_testimonial_meta', 'bbq_gas_testimonial_nonce');
    
    $customer_name = get_post_meta($post->ID, '_customer_name', true);
    $customer_location = get_post_meta($post->ID, '_customer_location', true);
    $customer_rating = get_post_meta($post->ID, '_customer_rating', true);
    $service_type = get_post_meta($post->ID, '_service_type', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="customer_name">Customer Name</label></th>';
    echo '<td><input type="text" id="customer_name" name="customer_name" value="' . esc_attr($customer_name) . '" /></td></tr>';
    echo '<tr><th><label for="customer_location">Location</label></th>';
    echo '<td><input type="text" id="customer_location" name="customer_location" value="' . esc_attr($customer_location) . '" /></td></tr>';
    echo '<tr><th><label for="customer_rating">Rating (1-5)</label></th>';
    echo '<td><select id="customer_rating" name="customer_rating">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '"' . selected($customer_rating, $i, false) . '>' . $i . ' Star' . ($i > 1 ? 's' : '') . '</option>';
    }
    echo '</select></td></tr>';
    echo '<tr><th><label for="service_type">Service Type</label></th>';
    echo '<td><input type="text" id="service_type" name="service_type" value="' . esc_attr($service_type) . '" /></td></tr>';
    echo '</table>';
}

function bbq_gas_save_testimonial_meta($post_id) {
    if (!isset($_POST['bbq_gas_testimonial_nonce']) || !wp_verify_nonce($_POST['bbq_gas_testimonial_nonce'], 'bbq_gas_testimonial_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    update_post_meta($post_id, '_customer_name', sanitize_text_field($_POST['customer_name']));
    update_post_meta($post_id, '_customer_location', sanitize_text_field($_POST['customer_location']));
    update_post_meta($post_id, '_customer_rating', intval($_POST['customer_rating']));
    update_post_meta($post_id, '_service_type', sanitize_text_field($_POST['service_type']));
}
add_action('save_post', 'bbq_gas_save_testimonial_meta');

/**
 * Create Default Content
 */
function bbq_gas_create_default_content() {
    if (get_option('bbq_gas_default_content_created')) {
        return;
    }
    
    // Create Services
    $services = array(
        array(
            'title' => 'LPG Gas Connection',
            'content' => 'Safe and reliable LPG connections for your home. Professional installation with quality assurance and same-day service.',
            'excerpt' => 'LPG gas cylinder installation, Safety inspection included, Free connection setup, Home cooking solutions',
            'price' => 'Starting from AED 35'
        ),
        array(
            'title' => 'BBQ Gas Supply',
            'content' => 'Never run out of gas in your BBQ events with our fast delivery. Premium quality gas cylinders for outdoor cooking.',
            'excerpt' => 'BBQ gas cylinder supply, Fast delivery service, Premium quality gas, Outdoor cooking support',
            'price' => 'Starting from AED 45'
        ),
        array(
            'title' => 'New Cooking Gas Connection',
            'content' => 'Hassle-free new connections tailored to your cooking needs. Professional setup with safety compliance.',
            'excerpt' => 'New gas connection setup, Cooking gas installation, Safety compliance check, Professional installation',
            'price' => 'Starting from AED 55'
        ),
        array(
            'title' => 'BBQ Cleaning Service',
            'content' => 'Professional BBQ cleaning for a spotless grill. Deep cleaning service to maintain your BBQ equipment.',
            'excerpt' => 'Deep BBQ cleaning, Professional equipment, Spotless grill maintenance, Regular cleaning service',
            'price' => 'Starting from AED 80'
        ),
        array(
            'title' => 'Propane Gas Supplier',
            'content' => 'Affordable propane gas supply for residential and commercial use. Reliable delivery across Dubai.',
            'excerpt' => 'Propane gas supply, Residential & commercial, Affordable pricing, Reliable delivery',
            'price' => 'Starting from AED 40'
        ),
        array(
            'title' => 'Heater Gas Supplier',
            'content' => 'Propane gas cylinders supplier for Pyramid heaters and Mushroom heaters in Dubai. Professional heating solutions.',
            'excerpt' => 'Heater gas supply, Pyramid heater gas, Mushroom heater gas, Professional heating solutions',
            'price' => 'Starting from AED 65'
        )
    );
    
    foreach ($services as $service) {
        $post_id = wp_insert_post(array(
            'post_title' => $service['title'],
            'post_content' => $service['content'],
            'post_excerpt' => $service['excerpt'],
            'post_status' => 'publish',
            'post_type' => 'bbq_service'
        ));
        
        if ($post_id) {
            update_post_meta($post_id, '_service_price', $service['price']);
        }
    }
    
    // Create Testimonials
    $testimonials = array(
        array(
            'title' => 'Ahmed Al-Rashid Review',
            'content' => 'Excellent service! BBQ Gas provided same-day LPG connection for my new apartment. Professional technicians and great customer service.',
            'customer_name' => 'Ahmed Al-Rashid',
            'location' => 'Dubai Marina',
            'rating' => 5,
            'service' => 'LPG Gas Connection'
        ),
        array(
            'title' => 'Sarah Mohammed Review',
            'content' => 'Best BBQ gas supplier in Dubai! Never run out of gas during our weekend BBQ parties. Fast delivery and quality service.',
            'customer_name' => 'Sarah Mohammed',
            'location' => 'Downtown Dubai',
            'rating' => 5,
            'service' => 'BBQ Gas Supply'
        ),
        array(
            'title' => 'Omar Hassan Review',
            'content' => 'Professional cooking gas connection service. The technicians were knowledgeable and completed the installation perfectly.',
            'customer_name' => 'Omar Hassan',
            'location' => 'Business Bay',
            'rating' => 5,
            'service' => 'New Cooking Gas Connection'
        ),
        array(
            'title' => 'Fatima Al-Zahra Review',
            'content' => 'Amazing BBQ cleaning service! My grill looks brand new. Professional team and excellent attention to detail.',
            'customer_name' => 'Fatima Al-Zahra',
            'location' => 'Jumeirah',
            'rating' => 5,
            'service' => 'BBQ Cleaning Service'
        ),
        array(
            'title' => 'Khalid Rahman Review',
            'content' => 'Reliable propane gas supplier for our restaurant. Consistent quality and timely delivery. Highly recommended!',
            'customer_name' => 'Khalid Rahman',
            'location' => 'Dubai Hills',
            'rating' => 5,
            'service' => 'Propane Gas Supplier'
        ),
        array(
            'title' => 'Mariam Abdullah Review',
            'content' => 'Perfect heater gas supply for our outdoor events. Professional service and competitive pricing.',
            'customer_name' => 'Mariam Abdullah',
            'location' => 'JVC',
            'rating' => 5,
            'service' => 'Heater Gas Supplier'
        )
    );
    
    foreach ($testimonials as $testimonial) {
        $post_id = wp_insert_post(array(
            'post_title' => $testimonial['title'],
            'post_content' => $testimonial['content'],
            'post_status' => 'publish',
            'post_type' => 'bbq_testimonial'
        ));
        
        if ($post_id) {
            update_post_meta($post_id, '_customer_name', $testimonial['customer_name']);
            update_post_meta($post_id, '_customer_location', $testimonial['location']);
            update_post_meta($post_id, '_customer_rating', $testimonial['rating']);
            update_post_meta($post_id, '_service_type', $testimonial['service']);
        }
    }
    
    update_option('bbq_gas_default_content_created', true);
}
add_action('after_switch_theme', 'bbq_gas_create_default_content');

/**
 * Contact Form Handler
 */
function bbq_gas_handle_contact_form() {
    if (!wp_verify_nonce($_POST['nonce'], 'bbq_gas_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Send email
    $to = get_theme_mod('bbq_gas_email', 'orders@bbqgas.ae');
    $subject = 'New Gas Cylinder Order Request';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nMessage: $message";
    
    wp_mail($to, $subject, $body);
    
    wp_send_json_success('Form submitted successfully');
}
add_action('wp_ajax_bbq_gas_contact', 'bbq_gas_handle_contact_form');
add_action('wp_ajax_nopriv_bbq_gas_contact', 'bbq_gas_handle_contact_form');

/**
 * Helper Functions
 */
function bbq_gas_get_company_name() {
    return get_theme_mod('bbq_gas_company_name', 'BBQ Gas');
}

function bbq_gas_get_phone() {
    return get_theme_mod('bbq_gas_phone', '+971 58 282 1712');
}

function bbq_gas_get_email() {
    return get_theme_mod('bbq_gas_email', 'orders@bbqgas.ae');
}

function bbq_gas_get_tagline() {
    return get_theme_mod('bbq_gas_tagline', "Dubai's Gas Cylinder Experts");
}

function bbq_gas_get_hero_title() {
    return get_theme_mod('bbq_gas_hero_title', "Dubai's Premier Gas New Connections & Delivery");
}

function bbq_gas_get_hero_description() {
    return get_theme_mod('bbq_gas_hero_description', 'Professional gas cylinder new connections and delivery service for homes, restaurants, and BBQ enthusiasts across Dubai.');
}

function bbq_gas_get_services_title() {
    return get_theme_mod('bbq_gas_services_title', 'Gas Cylinder Types & Services');
}

function bbq_gas_get_services_description() {
    return get_theme_mod('bbq_gas_services_description', 'Complete gas cylinder solutions for homes and businesses in Dubai.');
}

/**
 * Elementor Canvas Template Support
 */
function bbq_gas_add_elementor_canvas_support() {
    add_post_type_support('page', 'elementor');
    add_post_type_support('post', 'elementor');
}
add_action('init', 'bbq_gas_add_elementor_canvas_support');

/**
 * Remove Elementor Default Colors and Fonts
 */
function bbq_gas_remove_elementor_defaults() {
    update_option('elementor_disable_color_schemes', 'yes');
    update_option('elementor_disable_typography_schemes', 'yes');
}
add_action('after_switch_theme', 'bbq_gas_remove_elementor_defaults');