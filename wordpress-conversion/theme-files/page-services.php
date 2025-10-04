<?php
/**
 * Template Name: Services Page
 * Description: Services listing page template for BBQ Gas
 */

get_header(); ?>

<main class="pt-32">
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold text-white mb-6">
                Gas Cylinder Services in
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-400"> Dubai</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto mb-8">
                Complete gas cylinder solutions for homes and businesses in Dubai. From residential cooking gas
                to commercial bulk supply with professional installation and emergency services.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Order Gas Cylinders
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="border-2 border-gray-300 hover:border-orange-500 text-white hover:text-orange-400 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                    Get Custom Quote
                </a>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    <section class="py-20 bg-gradient-to-br from-gray-100 to-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Gas Cylinder Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Professional gas cylinder supply and services for every need in Dubai
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services = new WP_Query(array(
                    'post_type' => 'bbq_service',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ));

                if ($services->have_posts()) :
                    while ($services->have_posts()) : $services->the_post();
                        $price = get_post_meta(get_the_ID(), '_service_price', true);
                        $features = explode("\n", get_the_excerpt());
                ?>
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-100 to-red-100 rounded-full transform translate-x-16 -translate-y-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>

                            <div class="relative z-10">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="mb-6">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover rounded-xl mb-4')); ?>
                                    </div>
                                <?php endif; ?>

                                <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php the_title(); ?></h3>
                                <p class="text-gray-600 mb-6 leading-relaxed"><?php echo wp_trim_words(get_the_content(), 20); ?></p>

                                <ul class="space-y-3 mb-6">
                                    <?php foreach (array_slice($features, 0, 4) as $feature) :
                                        $feature = trim($feature);
                                        if (!empty($feature)) :
                                    ?>
                                        <li class="flex items-center text-gray-700">
                                            <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                            <?php echo esc_html($feature); ?>
                                        </li>
                                    <?php
                                        endif;
                                    endforeach; ?>
                                </ul>

                                <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                                    <?php if ($price) : ?>
                                        <span class="text-lg font-bold text-blue-600"><?php echo esc_html($price); ?></span>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                                        Learn More →
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Gas Cylinder Types -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Gas Cylinder Sizes & Pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose the perfect gas cylinder size for your needs with transparent pricing
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- 5kg Cylinder -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl font-bold text-orange-600">5kg</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">5kg Gas Cylinder</h3>
                        <p class="text-gray-600 mb-4">Perfect for small families and light cooking</p>
                        <p class="text-sm text-gray-500 mb-6">2-3 weeks usage</p>
                        <div class="text-3xl font-bold text-blue-600 mb-6">AED 35</div>
                        <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="block w-full py-3 rounded-lg font-semibold transition-all duration-300 border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white">
                            Order 5kg Cylinder
                        </a>
                    </div>
                </div>

                <!-- 12kg Cylinder -->
                <div class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 ring-2 ring-orange-500 transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                            Most Popular
                        </span>
                    </div>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl font-bold text-orange-600">12kg</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">12kg Gas Cylinder</h3>
                        <p class="text-gray-600 mb-4">Ideal for medium families and regular cooking</p>
                        <p class="text-sm text-gray-500 mb-6">4-6 weeks usage</p>
                        <div class="text-3xl font-bold text-blue-600 mb-6">AED 65</div>
                        <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="block w-full py-3 rounded-lg font-semibold transition-all duration-300 bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white transform hover:scale-105">
                            Order 12kg Cylinder
                        </a>
                    </div>
                </div>

                <!-- 15kg Cylinder -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl font-bold text-orange-600">15kg</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">15kg Gas Cylinder</h3>
                        <p class="text-gray-600 mb-4">Best for large families and heavy cooking</p>
                        <p class="text-sm text-gray-500 mb-6">6-8 weeks usage</p>
                        <div class="text-3xl font-bold text-blue-600 mb-6">AED 85</div>
                        <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="block w-full py-3 rounded-lg font-semibold transition-all duration-300 border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white">
                            Order 15kg Cylinder
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
                Need Gas Cylinders Delivered Today?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
                Order now and get your gas cylinders delivered to your doorstep with same-day service across Dubai
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo esc_attr(bbq_gas_get_phone()); ?>" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2">
                    <span>Call: <?php echo esc_html(bbq_gas_get_phone()); ?></span>
                </a>
                <a href="https://wa.me/<?php echo esc_attr(str_replace(['+', ' '], '', bbq_gas_get_phone())); ?>" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors">
                    WhatsApp Order
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
