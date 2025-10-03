// BBQ Gas Theme JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Typing Animation for Hero Section
    const typingElement = document.getElementById('typing-text');
    if (typingElement) {
        const texts = ['BBQ Gas', 'Propane Gas', 'Heater Gas'];
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
    }
    
    // Smooth Scrolling for Anchor Links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Contact Form Handler
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            formData.append('action', 'bbq_gas_contact');
            formData.append('nonce', bbq_gas_ajax.nonce);
            
            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;
            
            fetch(bbq_gas_ajax.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
        
        .testimonial-slide {
            transition: opacity 0.5s ease-in-out;
        }
        
        .testimonial-slide.hidden {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }
        
        .testimonial-slide.active {
            opacity: 1;
            position: relative;
        }
                if (data.success) {
                    alert('Thank you! Your message has been sent successfully.');
                    contactForm.reset();
                } else {
                    alert('Sorry, there was an error sending your message. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Sorry, there was an error sending your message. Please try again.');
            })
            .finally(() => {
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            });
        });
    }
    
    // Scroll Animation Observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    animateElements.forEach(el => observer.observe(el));
    
    // Header Scroll Effect
    const header = document.querySelector('header');
    if (header) {
        let lastScrollY = window.scrollY;
        
        window.addEventListener('scroll', function() {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScrollY = currentScrollY;
        });
    }
    
    // Testimonials Slider
    const slider = $('.testimonials-slider');
    if (slider.length) {
        const slides = slider.find('.testimonial-slide');
        const dots = $('.testimonial-dot');
        let currentSlide = 0;
        let autoplayInterval;
        
        function showSlide(index) {
            slides.addClass('hidden').removeClass('active');
            slides.eq(index).removeClass('hidden').addClass('active');
            
            dots.removeClass('bg-orange-500 w-8').addClass('bg-gray-400');
            dots.eq(index).removeClass('bg-gray-400').addClass('bg-orange-500 w-8');
            
            currentSlide = index;
        }
        
        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }
        
        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }
        
        // Navigation
        $('.testimonial-next').click(nextSlide);
        $('.testimonial-prev').click(prevSlide);
        
        // Dots
        dots.click(function() {
            const index = $(this).data('slide');
            showSlide(index);
        });
        
        // Autoplay
        autoplayInterval = setInterval(nextSlide, 5000);
        
        slider.hover(
            function() { clearInterval(autoplayInterval); },
            function() { autoplayInterval = setInterval(nextSlide, 5000); }
        );
    }
});

// Utility Functions
function makePhoneCall(phoneNumber) {
    window.location.href = 'tel:' + phoneNumber;
}

function openWhatsApp(phoneNumber, message = '') {
    const cleanPhone = phoneNumber.replace(/[^0-9]/g, '');
    const whatsappUrl = `https://wa.me/${cleanPhone}${message ? '?text=' + encodeURIComponent(message) : ''}`;
    window.open(whatsappUrl, '_blank');
}

// Add CSS classes for animations
const style = document.createElement('style');
style.textContent = `
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    header.scrolled {
        background-color: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }
`;
document.head.appendChild(style);