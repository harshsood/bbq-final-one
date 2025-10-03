<?php
/**
 * Template Name: Elementor Full Width
 * 
 * @package BBQ_Gas
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        
        // Check if Elementor is editing this page
        if (\Elementor\Plugin::$instance->editor->is_edit_mode() || \Elementor\Plugin::$instance->preview->is_preview_mode()) {
            the_content();
        } else {
            // Display Elementor content or fallback
            if (class_exists('\Elementor\Plugin')) {
                echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(get_the_ID());
            } else {
                the_content();
            }
        }
    endwhile;
    ?>
</main>

<?php get_footer(); ?>