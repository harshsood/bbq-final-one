<!-- Hero Section -->
<section id="home" class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50 pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-fade-in-up">
                <div>
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Dubai's Premier
                        <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                            <span id="typing-text">BBQ Gas</span><span class="animate-pulse">|</span>
                        </span>
                        <br>New Connections & Delivery
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed mb-8">
                        Professional gas cylinder new connections and delivery service for homes, restaurants, and BBQ enthusiasts across Dubai.
                        Licensed suppliers with expert installation and same-day delivery for BBQ gas, propane, and heater gas cylinders.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="group bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl flex items-center justify-center space-x-2">
                        <span>Get New Connection</span>
                    </button>
                    <button class="border-2 border-gray-300 hover:border-orange-500 text-gray-700 hover:text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                        BBQ Gas Delivery
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
                    <img src="/images/all/WhatsApp-Image-2022-09-01-at-11.48.28-PM.jpeg"
                         alt="BBQ Gas Cylinder New Connection Service in Dubai"
                         class="w-full h-96 object-cover rounded-2xl">

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

<!-- Services Section - Dynamic from WordPress -->
<?php echo do_shortcode('[bbq_gas_services]'); ?>

<!-- Certifications Section - Dynamic from WordPress -->
<?php echo do_shortcode('[bbq_gas_certifications]'); ?>

<!-- Testimonials Section - Dynamic from WordPress -->
<?php echo do_shortcode('[bbq_gas_testimonials]'); ?>

<!-- Delivery Areas Section - Dynamic from WordPress -->
<?php echo do_shortcode('[bbq_gas_delivery_areas]'); ?>

<script>
// Typing animation
document.addEventListener('DOMContentLoaded', function() {
    const texts = ['BBQ Gas', 'Propane Gas', 'Heater Gas'];
    const typingElement = document.getElementById('typing-text');
    if (!typingElement) return;

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
