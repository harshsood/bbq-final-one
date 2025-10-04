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
            'hero_image',
            [
                'label' => 'Hero Image',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/images/all/WhatsApp-Image-2022-09-01-at-11.48.28-PM.jpeg',
                ],
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
        <section class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50 pt-32 pb-16">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 animate-fade-in-up">
                        <div>
                            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                                <?php echo esc_html($settings['title']); ?>
                            </h1>
                            <p class="text-xl text-gray-600 leading-relaxed mb-8">
                                <?php echo esc_html($settings['description']); ?>
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                                <?php echo esc_html($settings['primary_button_text']); ?>
                            </button>
                            <button class="border-2 border-gray-300 hover:border-orange-500 text-gray-700 hover:text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                                <?php echo esc_html($settings['secondary_button_text']); ?>
                            </button>
                        </div>

                        <!-- Trust Indicators -->
                        <div class="grid grid-cols-3 gap-6 pt-8">
                            <div class="text-center">
                                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-green-600 text-2xl">🛡️</span>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Licensed & Insured</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-orange-600 text-2xl">✅</span>
                                </div>
                                <p class="text-sm font-medium text-gray-700">New Connections</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-blue-600 text-2xl">🚚</span>
                                </div>
                                <p class="text-sm font-medium text-gray-700">Same Day Delivery</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative animate-fade-in-right">
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
                        <div class="relative bg-white p-8 rounded-3xl shadow-2xl">
                            <img src="<?php echo esc_url($settings['hero_image']['url']); ?>"
                                 alt="BBQ Gas Cylinder Service" class="w-full h-96 object-cover rounded-2xl">

                            <!-- Floating Card -->
                            <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center">
                                        <span class="text-white font-bold">✓</span>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">5000+ Connections</p>
                                        <p class="text-sm text-gray-600">BBQ Gas Installed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

/**
 * BBQ Gas Certifications Widget
 */
class BBQ_Gas_Certifications_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'bbq_gas_certifications';
    }

    public function get_title() {
        return 'BBQ Gas Certifications';
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
            'section_title',
            [
                'label' => 'Section Title',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'We Are A Group Of Companies',
            ]
        );

        $this->add_control(
            'certificates_title',
            [
                'label' => 'Certificates Title',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Certificates',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Side - Group of Companies Card -->
                    <div class="flex flex-col items-center justify-center h-full">
                        <div class="bg-white rounded-2xl shadow-lg p-10 flex flex-col items-center justify-center min-h-[300px]">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-center"><?php echo esc_html($settings['section_title']); ?></h2>
                        </div>
                    </div>

                    <!-- Right Side - Certificates Heading and Logos -->
                    <div class="flex flex-col items-center justify-center h-full">
                        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center"><?php echo esc_html($settings['certificates_title']); ?></h2>
                        <div class="flex flex-row flex-wrap justify-center items-center gap-8">
                            <img src="/images/all/sce-logo.png" alt="Supreme Council of Energy" class="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
                            <img src="/images/all/EAFSM.png" alt="Emirates Authority for Standardization & Metrology" class="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
                            <img src="/images/all/download-1.png" alt="Industry Regulatory Authority" class="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
                            <img src="/images/all/hah-1.jpg" alt="Roads & Transport Authority" class="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
                            <img src="/images/all/civil-defence-dubai-logo1.jpg" alt="Dubai Civil Defence" class="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

/**
 * BBQ Gas Delivery Areas Widget
 */
class BBQ_Gas_Delivery_Areas_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'bbq_gas_delivery_areas';
    }

    public function get_title() {
        return 'BBQ Gas Delivery Areas';
    }

    public function get_icon() {
        return 'eicon-google-maps';
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
                'default' => 'Gas Cylinder Delivery Areas in Dubai',
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => 'Section Description',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Fast and reliable gas cylinder delivery across Dubai and Northern Emirates. Same-day delivery available in most areas with real-time tracking.',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $areas = [
            ['zone' => 'Dubai Marina & JBR', 'areas' => ['Dubai Marina', 'JBR', 'Al Sufouh', 'Knowledge Village'], 'time' => '30-45 mins', 'color' => 'blue'],
            ['zone' => 'Downtown & Business Bay', 'areas' => ['Downtown Dubai', 'Business Bay', 'DIFC', 'Trade Centre'], 'time' => '25-40 mins', 'color' => 'orange'],
            ['zone' => 'Jumeirah & DIFC', 'areas' => ['Jumeirah 1,2,3', 'Umm Suqeim', 'Al Wasl', 'Satwa'], 'time' => '35-50 mins', 'color' => 'green'],
            ['zone' => 'New Dubai Areas', 'areas' => ['Dubai Hills', 'JVC', 'JVT', 'Motor City', 'Sports City'], 'time' => '45-60 mins', 'color' => 'red']
        ];
        ?>
        <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo esc_html($settings['title']); ?></h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto"><?php echo esc_html($settings['description']); ?></p>
                </div>

                <div class="grid md:grid-cols-4 gap-8 mb-16">
                    <?php foreach ($areas as $area) : ?>
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                            <div class="w-12 h-12 bg-gradient-to-r from-<?php echo $area['color']; ?>-500 to-<?php echo $area['color']; ?>-600 rounded-xl flex items-center justify-center mb-4">
                                <span class="text-white text-xl">📍</span>
                            </div>

                            <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $area['zone']; ?></h3>

                            <div class="space-y-2 mb-4">
                                <?php foreach ($area['areas'] as $location) : ?>
                                    <div class="flex items-center text-gray-600">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <?php echo $location; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <span class="text-sm text-gray-600">Delivery Time</span>
                                <span class="font-semibold text-orange-600"><?php echo $area['time']; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-r from-orange-500 to-red-600 rounded-3xl p-8 text-center text-white">
                    <h3 class="text-3xl font-bold mb-4">Need Gas Cylinders Delivered?</h3>
                    <p class="text-xl mb-6 opacity-90">Order now and get your gas cylinders delivered to your doorstep across Dubai</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:<?php echo bbq_gas_get_phone(); ?>" class="bg-white text-orange-600 px-8 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors">Order Now: <?php echo bbq_gas_get_phone(); ?></a>
                        <a href="https://wa.me/<?php echo str_replace(['+', ' ', '-'], '', bbq_gas_get_phone()); ?>" class="border-2 border-white text-white px-8 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors">WhatsApp Order</a>
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
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new BBQ_Gas_Certifications_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new BBQ_Gas_Delivery_Areas_Widget());
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