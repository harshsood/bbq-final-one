<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <!-- Company Info -->
            <div class="space-y-6">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">🔥</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl"><?php echo bbq_gas_get_company_name(); ?></h3>
                        <p class="text-sm text-gray-400"><?php echo bbq_gas_get_tagline(); ?></p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Dubai's most trusted gas cylinder supplier, delivering safety, reliability, and 
                    exceptional service to homes, restaurants, and businesses across the emirate since 2010.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-orange-600 hover:bg-orange-700 rounded-lg flex items-center justify-center transition-colors">
                        <span class="text-white">📘</span>
                    </a>
                    <a href="#" class="w-10 h-10 bg-red-600 hover:bg-red-700 rounded-lg flex items-center justify-center transition-colors">
                        <span class="text-white">📷</span>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-500 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors">
                        <span class="text-white">🐦</span>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-700 hover:bg-blue-800 rounded-lg flex items-center justify-center transition-colors">
                        <span class="text-white">💼</span>
                    </a>
                </div>
            </div>

            <!-- Services -->
            <div>
                <h4 class="font-bold text-lg mb-6">Gas Cylinders</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">5kg Cooking Gas</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">12kg Cooking Gas</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">15kg Cooking Gas</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Commercial Bulk Supply</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Installation & Maintenance</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Safety Inspections</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="<?php echo home_url('/about'); ?>" class="text-gray-300 hover:text-white transition-colors">About BBQ Gas</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Delivery Areas</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Safety Guidelines</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>" class="text-gray-300 hover:text-white transition-colors">Gas Cylinder Prices</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">FAQs</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Customer Reviews</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-bold text-lg mb-6">Contact Us</h4>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <span class="text-orange-400 text-lg">📞</span>
                        <div>
                            <p class="text-sm text-gray-400">Order Line</p>
                            <p class="text-white"><?php echo bbq_gas_get_phone(); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-red-400 text-lg">🚨</span>
                        <div>
                            <p class="text-sm text-gray-400">Emergency</p>
                            <p class="text-white"><?php echo bbq_gas_get_phone(); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-green-400 text-lg">✉️</span>
                        <div>
                            <p class="text-sm text-gray-400">Email</p>
                            <p class="text-white"><?php echo bbq_gas_get_email(); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-orange-400 text-lg">📍</span>
                        <div>
                            <p class="text-sm text-gray-400">Address</p>
                            <p class="text-white">Serving All Dubai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">
                    <p class="text-gray-400 text-sm">
                        © <?php echo date('Y'); ?> <?php echo bbq_gas_get_company_name(); ?> Dubai. All rights reserved.
                    </p>
                    <div class="flex items-center space-x-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Sitemap</a>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-400 mt-4 md:mt-0">
                    <span>Licensed by</span>
                    <span class="text-white font-semibold">Dubai Municipality & ADNOC</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>