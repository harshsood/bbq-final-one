<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="BBQ Gas Dubai - Leading gas cylinder supplier in UAE. Fast delivery, licensed service, competitive prices. Order propane, butane & cooking gas cylinders online.">
    <meta name="keywords" content="gas cylinder Dubai, propane gas UAE, butane cylinder, cooking gas delivery, BBQ gas supplier, gas cylinder refill Dubai, emergency gas delivery">
    <meta name="author" content="BBQ Gas Dubai">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="Leading gas cylinder supplier in Dubai with same day delivery. Licensed, safe, and reliable service for homes and businesses.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="https://images.pexels.com/photos/2539395/pexels-photo-2539395.jpeg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🔥</text></svg>">
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "<?php echo bbq_gas_get_company_name(); ?>",
      "description": "Premium gas cylinder supplier in Dubai offering same day delivery for propane, butane, and cooking gas cylinders.",
      "url": "<?php echo home_url(); ?>",
      "telephone": "<?php echo bbq_gas_get_phone(); ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Dubai",
        "addressCountry": "UAE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.2048",
        "longitude": "55.2708"
      },
      "openingHours": "Mo-Su 00:00-23:59",
      "priceRange": "$$",
      "serviceArea": {
        "@type": "City",
        "name": "Dubai"
      }
    }
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="bg-blue-600 text-white py-2 px-4 text-sm">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between">
        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-2">
                <span>📞</span>
                <span><?php echo bbq_gas_get_phone(); ?></span>
            </div>
            <div class="flex items-center space-x-2">
                <span>📍</span>
                <span>Dubai, UAE</span>
            </div>
            <div class="flex items-center space-x-2">
                <span>🕒</span>
                <span>Same Day Connection</span>
            </div>
        </div>
        <div class="hidden md:block">
            <span>Licensed & Insured • Professional Installation</span>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="fixed w-full z-50 bg-white shadow-lg py-4 top-0" style="margin-top: 0;">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
        <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-xl">🔥</span>
            </div>
            <div>
                <h1 class="font-bold text-xl text-gray-800"><?php echo bbq_gas_get_company_name(); ?></h1>
                <p class="text-xs text-gray-600"><?php echo bbq_gas_get_tagline(); ?></p>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="<?php echo home_url(); ?>" class="font-medium text-gray-700 hover:text-blue-600 transition-colors">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="font-medium text-gray-700 hover:text-blue-600 transition-colors">About</a>
            <a href="<?php echo home_url('/services'); ?>" class="font-medium text-gray-700 hover:text-blue-600 transition-colors">Services</a>
            <a href="<?php echo home_url('/contact'); ?>" class="font-medium text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
            <a href="tel:<?php echo bbq_gas_get_phone(); ?>" class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg">
                Order Now
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-toggle" class="md:hidden p-2 text-gray-700">
            <span class="sr-only">Open menu</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t px-4 py-4 space-y-4">
        <a href="<?php echo home_url(); ?>" class="block font-medium text-gray-700 hover:text-blue-600">Home</a>
        <a href="<?php echo home_url('/about'); ?>" class="block font-medium text-gray-700 hover:text-blue-600">About</a>
        <a href="<?php echo home_url('/services'); ?>" class="block font-medium text-gray-700 hover:text-blue-600">Services</a>
        <a href="<?php echo home_url('/contact'); ?>" class="block font-medium text-gray-700 hover:text-blue-600">Contact</a>
        <a href="tel:<?php echo bbq_gas_get_phone(); ?>" class="block w-full bg-gradient-to-r from-orange-500 to-red-600 text-white px-6 py-2 rounded-lg font-medium text-center">
            Order Now
        </a>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>