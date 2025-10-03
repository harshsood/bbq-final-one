<?php
/**
 * Elementor Custom Widgets for BBQ Gas
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * BBQ Gas Services Widget
 */
class BBQ_Gas_Services_Widget extends \Elementor\Widget_Base {
    
    public function get_name() {
        return 'bbq_gas_services';
    }
    
    public function get_title() {
        return 'BBQ Gas Services';
    }
    
    public function get_icon() {
        return 'eicon-posts-grid';
    }
    
    public function get_categories() {
        return ['bbq-gas'];
    }
    
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Content',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'title',
            [
                'label' => 'Section Title',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => bbq_gas_get_services_title(),
                'placeholder' => 'Enter section title',
            ]
        );
        
        $this->add_control(
            'description',
            [
                'label' => 'Section Description',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => bbq_gas_get_services_description(),
                'placeholder' => 'Enter section description',
            ]
        );
        
        $this->add_control(
            'services_count',
            [
                'label' => 'Number of Services',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 6,
                'min' => 1,
                'max' => 12,
            ]
        );
        
        $this->end_controls_section();
    }
    
    protected function render() {
        $settings = $this->get_settings_for_display();
        
        $services = get_posts(array(
            'post_type' => 'bbq_service',
            'posts_per_page' => $settings['services_count'],
            'post_status' => 'publish'
        ));
        
        ?>
        <section class="py-20 bg-gradient-to-br from-gray-100 to-gray-200">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo esc_html($settings['title']); ?></h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto"><?php echo esc_html($settings['description']); ?></p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($services as $service) : ?>
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-100 to-red-100 rounded-full transform translate-x-16 -translate-y-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>
                            
                            <div class="relative z-10">
                                <?php if (has_post_thumbnail($service->ID)) : ?>
                                    <div class="mb-6">
                                        <?php echo get_the_post_thumbnail($service->ID, 'medium', array('class' => 'w-full h-48 object-cover rounded-xl mb-4')); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php echo $service->post_title; ?></h3>
                                <p class="text-gray-600 mb-6 leading-relaxed"><?php echo $service->post_content; ?></p>
                                
                                <?php if ($service->post_excerpt) : ?>
                                    <ul class="space-y-3 mb-6">
                                        <?php 
                                        $features = explode(', ', $service->post_excerpt);
                                        foreach (array_slice($features, 0, 4) as $feature) : ?>
                                            <li class="flex items-center text-gray-700">
                                                <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                                <?php echo trim($feature); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                
                                <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                                    <span class="text-lg font-bold text-blue-600">
                                        <?php echo get_post_meta($service->ID, '_service_price', true) ?: 'Contact for Price'; ?>
                                    </span>
                                    <a href="<?php echo get_permalink($service->ID); ?>" class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}

/**
 * BBQ Gas Testimonials Widget
 */
class BBQ_Gas_Testimonials_Widget extends \Elementor\Widget_Base {
    
    public function get_name() {
        return 'bbq_gas_testimonials';
    }
    
    public function get_title() {
        return 'BBQ Gas Testimonials';
    }
    
    public function get_icon() {
        return 'eicon-testimonial-carousel';
    }
    
    public function get_categories() {
        return ['bbq-gas'];
    }
    
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Content',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'title',
            [
                'label' => 'Section Title',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'What Our Customers Say',
                'placeholder' => 'Enter section title',
            ]
        );
        
        $this->add_control(
            'description',
            [
                'label' => 'Section Description',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Trusted by thousands of customers across Dubai for reliable gas cylinder services',
                'placeholder' => 'Enter section description',
            ]
        );
        
        $this->add_control(
            'autoplay',
            [
                'label' => 'Autoplay',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Yes',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        
        $this->end_controls_section();
    }
    
    protected function render() {
        $settings = $this->get_settings_for_display();
        
        $testimonials = get_posts(array(
            'post_type' => 'bbq_testimonial',
            'posts_per_page' => -1,
            'post_status' => 'publish'
        ));
        
        ?>
        <section class="py-20 bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-white mb-4"><?php echo esc_html($settings['title']); ?></h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($settings['description']); ?></p>
                </div>
                
                <div class="testimonials-slider relative" data-autoplay="<?php echo $settings['autoplay']; ?>">
                    <?php foreach ($testimonials as $index => $testimonial) : 
                        $customer_name = get_post_meta($testimonial->ID, '_customer_name', true);
                        $customer_location = get_post_meta($testimonial->ID, '_customer_location', true);
                        $customer_rating = get_post_meta($testimonial->ID, '_customer_rating', true);
                        $service_type = get_post_meta($testimonial->ID, '_service_type', true);
                        ?>
                        <div class="testimonial-slide <?php echo $index === 0 ? 'active' : 'hidden'; ?>">
                            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl mx-auto max-w-4xl relative overflow-hidden">
                                <div class="absolute top-6 left-6 text-orange-500 opacity-20">
                                    <svg width="60" height="60" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14,17H17L19,13V7H13V13H16M6,17H9L11,13V7H5V13H8L6,17Z" />
                                    </svg>
                                </div>
                                
                                <div class="relative z-10">
                                    <div class="flex flex-col md:flex-row items-center gap-8">
                                        <?php if (has_post_thumbnail($testimonial->ID)) : ?>
                                            <div class="flex-shrink-0">
                                                <?php echo get_the_post_thumbnail($testimonial->ID, 'thumbnail', array('class' => 'w-24 h-24 rounded-full object-cover border-4 border-orange-200')); ?>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <div class="flex-1 text-center md:text-left">
                                            <div class="flex justify-center md:justify-start mb-4">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <svg class="w-6 h-6 <?php echo $i <= $customer_rating ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?>" viewBox="0 0 24 24">
                                                        <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.46,13.97L5.82,21L12,17.27Z" />
                                                    </svg>
                                                <?php endfor; ?>
                                            </div>
                                            
                                            <p class="text-xl text-gray-700 mb-6 leading-relaxed italic">
                                                "<?php echo $testimonial->post_content; ?>"
                                            </p>
                                            
                                            <div>
                                                <h4 class="text-2xl font-bold text-gray-900 mb-1"><?php echo $customer_name; ?></h4>
                                                <p class="text-orange-600 font-semibold mb-2"><?php echo $customer_location; ?></p>
                                                <p class="text-sm text-gray-500">Service: <?php echo $service_type; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <!-- Navigation -->
                    <button class="testimonial-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-100 rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <button class="testimonial-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-100 rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <?php foreach ($testimonials as $index => $testimonial) : ?>
                        <button class="testimonial-dot w-3 h-3 rounded-full transition-all duration-300 <?php echo $index === 0 ? 'bg-orange-500 w-8' : 'bg-gray-400'; ?>" data-slide="<?php echo $index; ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        
        <script>
        jQuery(document).ready(function($) {
            const slider = $('.testimonials-slider');
            const slides = slider.find('.testimonial-slide');
            const dots = $('.testimonial-dot');
            let currentSlide = 0;
            let autoplayInterval;
            
            function showSlide(index) {
                slides.addClass('hidden').removeClass('active');
                slides.eq(index).removeClass('hidden').addClass('active');
                
                dots.removeClass('bg-orange-500 w-8').addClass('bg-gray-400');
                dots.eq(index).removeClass('bg-gray-400').addClass('bg-orange-500 w-8');
                
                currentSlide = index;
            }
            
            function nextSlide() {
                const next = (currentSlide + 1) % slides.length;
                showSlide(next);
            }
            
            function prevSlide() {
                const prev = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(prev);
            }
            
            // Navigation
            $('.testimonial-next').click(nextSlide);
            $('.testimonial-prev').click(prevSlide);
            
            // Dots
            dots.click(function() {
                const index = $(this).data('slide');
                showSlide(index);
            });
            
            // Autoplay
            if (slider.data('autoplay') === 'yes') {
                autoplayInterval = setInterval(nextSlide, 5000);
                
                slider.hover(
                    function() { clearInterval(autoplayInterval); },
                    function() { autoplayInterval = setInterval(nextSlide, 5000); }
                );
            }
        });
        </script>
        <?php
    }
}

/**
 * BBQ Gas Hero Widget
 */
class BBQ_Gas_Hero_Widget extends \Elementor\Widget_Base {
    
    public function get_name() {
        return 'bbq_gas_hero';
    }
    
    public function get_title() {
        return 'BBQ Gas Hero Section';
    }
    
    public function get_icon() {
        return 'eicon-header';
    }
    
    public function get_categories() {
        return ['bbq-gas'];
    }
    
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Content',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'title',
            [
                'label' => 'Hero Title',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => bbq_gas_get_hero_title(),
                'placeholder' => 'Enter hero title',
            ]
        );
        
        $this->add_control(
            'description',
            [
                'label' => 'Hero Description',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => bbq_gas_get_hero_description(),
                'placeholder' => 'Enter hero description',
            ]
        );
        
        $this->add_control(
            'primary_button_text',
            [
                'label' => 'Primary Button Text',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Get New Connection',
            ]
        );
        
        $this->add_control(
            'secondary_button_text',
            [
                'label' => 'Secondary Button Text',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'BBQ Gas Delivery',
            ]
        );
        
        $this->end_controls_section();
    }
    
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="min-h-screen bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800 pt-32 pb-16">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 animate-fade-in-up">
                        <div>
                            <h1 class="text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                                <?php echo esc_html($settings['title']); ?>
                            </h1>
                            <p class="text-xl text-gray-300 leading-relaxed mb-8">
                                <?php echo esc_html($settings['description']); ?>
                            </p>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                                <?php echo esc_html($settings['primary_button_text']); ?>
                            </button>
                            <button class="border-2 border-gray-300 hover:border-orange-500 text-gray-300 hover:text-orange-400 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                                <?php echo esc_html($settings['secondary_button_text']); ?>
                            </button>
                        </div>
                    </div>
                    
                    <div class="relative animate-fade-in-right">
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
                        <div class="relative bg-white p-8 rounded-3xl shadow-2xl">
                            <img src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800" 
                                 alt="BBQ Gas Cylinder Service" class="w-full h-96 object-cover rounded-2xl">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

/**
 * Register Widgets
 */
function register_bbq_gas_elementor_widgets() {
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new BBQ_Gas_Services_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new BBQ_Gas_Testimonials_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new BBQ_Gas_Hero_Widget());
}
add_action('elementor/widgets/widgets_registered', 'register_bbq_gas_elementor_widgets');

/**
 * Add BBQ Gas Category
 */
function add_bbq_gas_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'bbq-gas',
        [
            'title' => 'BBQ Gas',
            'icon' => 'fa fa-fire',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_bbq_gas_elementor_widget_categories');