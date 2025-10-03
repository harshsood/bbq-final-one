<?php
/**
 * Main Template File
 * 
 * @package BBQ_Gas
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50 pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div>
                        <h1 class="text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                            <?php echo bbq_gas_get_hero_title(); ?><br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                                <span id="typing-text">BBQ Gas</span><span class="animate-pulse">|</span>
                            </span>
                        </h1>
                        <p class="text-xl text-gray-300 leading-relaxed mb-8">
                            <?php echo bbq_gas_get_hero_description(); ?>
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                            Get New Connection
                        </button>
                        <button class="border-2 border-gray-300 hover:border-orange-500 text-gray-300 hover:text-orange-400 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                            BBQ Gas Delivery
                        </button>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-3 gap-6 pt-8">
                        <div class="text-center">
                            <div class="bg-green-100 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <span class="text-green-600 text-2xl">🛡️</span>
                            </div>
                            <p class="text-sm font-medium text-gray-300">Licensed & Insured</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-orange-100 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <span class="text-orange-600 text-2xl">✅</span>
                            </div>
                            <p class="text-sm font-medium text-gray-300">New Connections</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                                <span class="text-blue-600 text-2xl">🚚</span>
                            </div>
                            <p class="text-sm font-medium text-gray-300">Same Day Delivery</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
                    <div class="relative bg-white p-8 rounded-3xl shadow-2xl">
                        <img src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800" 
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
    
    <!-- Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo bbq_gas_get_services_title(); ?></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    <?php echo bbq_gas_get_services_description(); ?>
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $services = get_posts(array(
                    'post_type' => 'bbq_service',
                    'posts_per_page' => 3,
                    'post_status' => 'publish'
                ));
                
                if (!empty($services)) {
                    foreach ($services as $service) : ?>
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-6">
                                <span class="text-white text-2xl">🔥</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php echo $service->post_title; ?></h3>
                            <p class="text-gray-600 mb-6 leading-relaxed"><?php echo $service->post_content; ?></p>
                            
                            <?php if ($service->post_excerpt) : ?>
                                <ul class="space-y-2 mb-6">
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
                            
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-blue-600">
                                    <?php echo get_post_meta($service->ID, '_service_price', true) ?: 'Contact for Price'; ?>
                                </span>
                                <button class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                                    Order Now
                                </button>
                            </div>
                        </div>
                    <?php endforeach;
                } else {
                    // Default services if none exist
                    $default_services = array(
                        array(
                            'title' => 'BBQ Gas New Connections',
                            'content' => 'Professional BBQ gas cylinder new connections for your outdoor cooking and grilling needs with expert installation.',
                            'features' => array('LPG gas cylinder installation', 'Safety inspection included', 'Free connection setup', 'Home cooking solutions'),
                            'price' => 'Starting from AED 35'
                        ),
                        array(
                            'title' => 'BBQ Gas Supply',
                            'content' => 'Never run out of gas in your BBQ events with our fast delivery. Premium quality gas cylinders for outdoor cooking.',
                            'features' => array('BBQ gas cylinder supply', 'Fast delivery service', 'Premium quality gas', 'Outdoor cooking support'),
                            'price' => 'Starting from AED 45'
                        ),
                        array(
                            'title' => 'New Cooking Gas Connection',
                            'content' => 'Hassle-free new connections tailored to your cooking needs. Professional setup with safety compliance.',
                            'features' => array('New gas connection setup', 'Cooking gas installation', 'Safety compliance check', 'Professional installation'),
                            'price' => 'Starting from AED 55'
                        ),
                        array(
                            'title' => 'BBQ Cleaning Service',
                            'content' => 'Professional BBQ cleaning for a spotless grill. Deep cleaning service to maintain your BBQ equipment.',
                            'features' => array('Deep BBQ cleaning', 'Professional equipment', 'Spotless grill maintenance', 'Regular cleaning service'),
                            'price' => 'Starting from AED 80'
                        ),
                        array(
                            'title' => 'Propane Gas Supplier',
                            'content' => 'Affordable propane gas supply for residential and commercial use. Reliable delivery across Dubai.',
                            'features' => array('Propane gas supply', 'Residential & commercial', 'Affordable pricing', 'Reliable delivery'),
                            'price' => 'Starting from AED 40'
                        ),
                        array(
                            'title' => 'Heater Gas Supplier',
                            'content' => 'Propane gas cylinders supplier for Pyramid heaters and Mushroom heaters in Dubai. Professional heating solutions.',
                            'features' => array('Heater gas supply', 'Pyramid heater gas', 'Mushroom heater gas', 'Professional heating solutions'),
                            'price' => 'Starting from AED 65'
                        )
                    );
                    
                    foreach ($default_services as $service) : ?>
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-6">
                                <span class="text-white text-2xl">🔥</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php echo $service['title']; ?></h3>
                            <p class="text-gray-600 mb-6 leading-relaxed"><?php echo $service['content']; ?></p>
                            
                            <ul class="space-y-2 mb-6">
                                <?php foreach ($service['features'] as $feature) : ?>
                                    <li class="flex items-center text-gray-700">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <?php echo $feature; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-blue-600"><?php echo $service['price']; ?></span>
                                <button class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                                    Order Now
                                </button>
                            </div>
                        </div>
                    <?php endforeach;
                } ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">What Our Customers Say</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Trusted by thousands of customers across Dubai for reliable gas cylinder services
                </p>
            </div>

            <?php
            $testimonials = get_posts(array(
                'post_type' => 'bbq_testimonial',
                'posts_per_page' => -1,
                'post_status' => 'publish'
            ));
            
            if (!empty($testimonials)) : ?>
                <div class="testimonials-slider relative">
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
            <?php endif; ?>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Licensed & Certified Gas Cylinder Supplier
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    BBQ Gas is fully licensed and certified by Dubai authorities for safe gas cylinder 
                    supply and installation services across the UAE.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Side - Certification Images -->
                <div class="space-y-8">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-200 to-red-200 rounded-2xl transform rotate-2 opacity-30 group-hover:rotate-3 transition-transform duration-300"></div>
                        <div class="relative bg-white p-6 rounded-2xl shadow-lg">
                            <img
                                src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Professional gas cylinder storage facility in Dubai"
                                class="w-full h-64 object-cover rounded-xl mb-4"
                            />
                            <div class="text-center">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Dubai Municipality Licensed</h3>
                                <p class="text-gray-600">Certified gas cylinder storage and distribution facility</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-200 to-green-200 rounded-2xl transform -rotate-2 opacity-30 group-hover:-rotate-3 transition-transform duration-300"></div>
                        <div class="relative bg-white p-6 rounded-2xl shadow-lg">
                            <img
                                src="https://images.pexels.com/photos/2539395/pexels-photo-2539395.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Professional gas cylinder delivery truck in Dubai"
                                class="w-full h-64 object-cover rounded-xl mb-4"
                            />
                            <div class="text-center">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">ISO 9001:2015 Certified</h3>
                                <p class="text-gray-600">Quality management system for gas cylinder services</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Certification Logos and Contact -->
                <div class="space-y-8">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Our Certifications</h3>
                        
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white text-2xl">🛡️</span>
                                </div>
                                <p class="text-center text-sm font-medium text-gray-700">Dubai Municipality</p>
                            </div>

                            <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white text-2xl">🏆</span>
                                </div>
                                <p class="text-center text-sm font-medium text-gray-700">ISO 9001:2015</p>
                            </div>

                            <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white text-2xl">✅</span>
                                </div>
                                <p class="text-center text-sm font-medium text-gray-700">ADNOC Approved</p>
                            </div>

                            <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white text-2xl">🔒</span>
                                </div>
                                <p class="text-center text-sm font-medium text-gray-700">Safety Certified</p>
                            </div>

                            <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow col-span-2">
                                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white text-2xl">📜</span>
                                </div>
                                <p class="text-center text-sm font-medium text-gray-700">UAE Gas Supplier License</p>
                            </div>
                        </div>

                        <!-- Contact CTA -->
                        <div class="bg-gradient-to-r from-orange-500 to-red-600 rounded-xl p-6 text-center text-white">
                            <h4 class="text-xl font-bold mb-3">Ready for New Gas Connection?</h4>
                            <p class="mb-4 opacity-90">Call our certified technicians now</p>
                            <a href="tel:<?php echo bbq_gas_get_phone(); ?>" class="bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center space-x-2">
                                <span>📞</span>
                                <span><?php echo bbq_gas_get_phone(); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">
                Ready for New Gas Connection?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
                Call us now for immediate gas cylinder connection and delivery across Dubai
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo bbq_gas_get_phone(); ?>" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors inline-flex items-center justify-center space-x-2">
                    <span>📞</span>
                    <span>Call Now: <?php echo bbq_gas_get_phone(); ?></span>
                </a>
                <a href="https://wa.me/<?php echo str_replace(array('+', ' ', '-'), '', bbq_gas_get_phone()); ?>" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors inline-flex items-center justify-center space-x-2">
                    <span>💬</span>
                    <span>WhatsApp Order</span>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
// Typing animation
document.addEventListener('DOMContentLoaded', function() {
    const texts = ['BBQ Gas', 'Propane Gas', 'Heater Gas'];
    const typingElement = document.getElementById('typing-text');
    let currentIndex = 0;
    let currentText = '';
    let isDeleting = false;
    
    function type() {
        const fullText = texts[currentIndex];
        
        if (isDeleting) {
            currentText = fullText.substring(0, currentText.length - 1);
        } else {
            currentText = fullText.substring(0, currentText.length + 1);
        }
        
        typingElement.textContent = currentText;
        
        let typeSpeed = isDeleting ? 75 : 150;
        
        if (!isDeleting && currentText === fullText) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && currentText === '') {
            isDeleting = false;
            currentIndex = (currentIndex + 1) % texts.length;
        }
        
        setTimeout(type, typeSpeed);
    }
    
    type();
});
</script>

<?php get_footer(); ?>