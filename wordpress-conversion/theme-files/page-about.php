<?php
/**
 * Template Name: About Page
 * Description: About page template for BBQ Gas
 */

get_header(); ?>

<main class="pt-32">
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <h1 class="text-5xl font-bold text-gray-900 leading-tight mb-6">
                            About BBQ Gas
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600"> Dubai</span>
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed">
                            Since 2010, BBQ Gas has been Dubai's most trusted gas cylinder supplier,
                            delivering safety, reliability, and exceptional service to homes, restaurants,
                            and businesses across the emirate.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Dubai Municipality Licensed Gas Supplier</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">ISO 9001:2015 Quality Management Certified</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Emergency Gas Delivery Service</span>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2022-09-01-at-12.27.36-PM.jpeg"
                        alt="BBQ Gas professional team in Dubai"
                        class="relative w-full h-96 object-cover rounded-3xl shadow-2xl"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">8000+</h3>
                    <p class="text-gray-600">Happy Customers</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Fast</h3>
                    <p class="text-gray-600">Response Time</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">15+</h3>
                    <p class="text-gray-600">Years Experience</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">100%</h3>
                    <p class="text-gray-600">Dubai Coverage</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <div class="space-y-6 text-gray-600 leading-relaxed">
                        <p>
                            Founded in 2010, BBQ Gas began as a small family business with a simple mission:
                            to provide safe, reliable gas cylinder delivery services to Dubai residents and businesses.
                        </p>
                        <p>
                            Over the years, we've grown to become one of Dubai's most trusted gas suppliers,
                            serving over 8,000 customers across all emirates. Our commitment to safety,
                            quality, and customer satisfaction has earned us recognition from Dubai Municipality
                            and numerous industry certifications.
                        </p>
                        <p>
                            Today, BBQ Gas operates a modern fleet of delivery vehicles, employs certified
                            technicians, and maintains the highest safety standards in the industry. We're
                            proud to be your trusted partner for all gas cylinder needs in Dubai.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2022-09-01-at-11.48.28-PM.jpeg"
                        alt="BBQ Gas delivery service history"
                        class="w-full h-96 object-cover rounded-3xl shadow-2xl"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">
                Ready to Experience the BBQ Gas Difference?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
                Join thousands of satisfied customers who trust BBQ Gas for their gas cylinder needs in Dubai
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors">
                    Order Gas Cylinders
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors">
                    Get Free Quote
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
