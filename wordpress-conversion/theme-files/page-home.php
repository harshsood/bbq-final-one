<?php
/**
 * Template Name: Home Page (Elementor Ready)
 *
 * @package BBQ_Gas
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();

        // Check if page has Elementor content
        if (class_exists('\Elementor\Plugin')) {
            $elementor_page = \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_ID());

            if ($elementor_page) {
                // Display Elementor content
                echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(get_the_ID());
            } else {
                // Display default home page sections
                get_template_part('template-parts/home', 'default');
            }
        } else {
            // Fallback if Elementor is not active
            get_template_part('template-parts/home', 'default');
        }
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
