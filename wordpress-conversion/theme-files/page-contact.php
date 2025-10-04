<?php
/**
 * Template Name: Contact Page
 * Description: Contact page template for BBQ Gas
 */

get_header(); ?>

<main class="pt-32">
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                Contact BBQ Gas
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600"> Dubai</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto mb-8">
                Ready to order gas cylinders or need assistance? Contact BBQ Gas now for fast,
                reliable cylinder delivery service across Dubai and Northern Emirates.
            </p>
            <div class="flex items-center justify-center flex-wrap gap-6 text-sm text-gray-600">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span>Licensed & Insured</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Fast Service</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    </svg>
                    <span>All Dubai Areas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Order Gas Cylinders</h3>
                        <p class="text-gray-600 mb-8">Fill out the form below and we'll contact you within 15 minutes to confirm your order.</p>

                        <?php echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]'); ?>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>

                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Order Hotline</p>
                                    <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="text-gray-600 hover:text-orange-600"><?php echo esc_html(bbq_gas_get_phone()); ?></a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">WhatsApp</p>
                                    <a href="https://wa.me/<?php echo esc_attr(str_replace(['+', ' '], '', bbq_gas_get_phone())); ?>" class="text-gray-600 hover:text-green-600"><?php echo esc_html(bbq_gas_get_phone()); ?></a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Email</p>
                                    <a href="mailto:<?php echo esc_attr(bbq_gas_get_email()); ?>" class="text-gray-600 hover:text-blue-600"><?php echo esc_html(bbq_gas_get_email()); ?></a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Operating Hours</p>
                                    <p class="text-gray-600">Gas Delivery Service</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="bg-red-50 border border-red-200 rounded-2xl p-6">
                        <h4 class="font-bold text-red-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Emergency Gas Service
                        </h4>
                        <p class="text-red-700 text-sm mb-4">
                            Need urgent gas cylinder delivery or having a gas emergency? Call our emergency hotline.
                        </p>
                        <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="block w-full bg-red-600 hover:bg-red-700 text-white px-4 py-3 rounded-lg font-semibold transition-colors text-center">
                            Emergency: <?php echo esc_html(bbq_gas_get_phone()); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">
                Ready to Order Gas Cylinders?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
                Call us now for immediate gas cylinder delivery across Dubai
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2">
                    <span>Call Now: <?php echo esc_html(bbq_gas_get_phone()); ?></span>
                </a>
                <a href="https://wa.me/<?php echo esc_attr(str_replace(['+', ' '], '', bbq_gas_get_phone())); ?>" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors flex items-center justify-center space-x-2">
                    <span>WhatsApp Order</span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
