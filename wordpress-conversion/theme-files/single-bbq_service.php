<?php
/**
 * Single Service Template
 *
 * @package BBQ_Gas
 */

get_header(); ?>

<main id="main" class="site-main pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-4">
        <?php
        while (have_posts()) :
            the_post();

            $price = get_post_meta(get_the_ID(), '_service_price', true);
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-3xl shadow-xl overflow-hidden'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="relative h-96">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                            <h1 class="text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                            <?php if ($price) : ?>
                                <p class="text-2xl font-semibold"><?php echo esc_html($price); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="p-8 bg-gradient-to-r from-orange-500 to-red-600 text-white">
                        <h1 class="text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                        <?php if ($price) : ?>
                            <p class="text-2xl font-semibold"><?php echo esc_html($price); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="p-8 lg:p-12">
                    <div class="prose prose-lg max-w-none mb-8">
                        <?php the_content(); ?>
                    </div>

                    <?php if (get_the_excerpt()) : ?>
                        <div class="bg-gray-50 rounded-2xl p-6 mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Service Features</h3>
                            <ul class="grid md:grid-cols-2 gap-4">
                                <?php
                                $features = explode(', ', get_the_excerpt());
                                foreach ($features as $feature) : ?>
                                    <li class="flex items-center text-gray-700">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <?php echo trim($feature); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Call to Action -->
                    <div class="bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl p-8 text-center text-white">
                        <h3 class="text-3xl font-bold mb-4">Order This Service Now</h3>
                        <p class="text-xl mb-6 opacity-90">Call us for immediate service and professional installation</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="tel:<?php echo bbq_gas_get_phone(); ?>" class="bg-white text-orange-600 px-8 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center space-x-2">
                                <span>📞</span>
                                <span>Call: <?php echo bbq_gas_get_phone(); ?></span>
                            </a>
                            <a href="https://wa.me/<?php echo str_replace(array('+', ' ', '-'), '', bbq_gas_get_phone()); ?>" class="border-2 border-white text-white px-8 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors inline-flex items-center justify-center space-x-2">
                                <span>💬</span>
                                <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Navigation -->
            <div class="mt-8">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();

                if ($prev_post || $next_post) : ?>
                    <nav class="flex justify-between items-center">
                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="bg-white rounded-xl px-6 py-3 shadow-lg hover:shadow-xl transition-all flex items-center space-x-2">
                                <span>←</span>
                                <span><?php echo get_the_title($prev_post->ID); ?></span>
                            </a>
                        <?php else : ?>
                            <div></div>
                        <?php endif; ?>

                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="bg-white rounded-xl px-6 py-3 shadow-lg hover:shadow-xl transition-all flex items-center space-x-2">
                                <span><?php echo get_the_title($next_post->ID); ?></span>
                                <span>→</span>
                            </a>
                        <?php endif; ?>
                    </nav>
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
