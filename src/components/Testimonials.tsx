import React, { useState, useEffect } from 'react';
import { ChevronLeft, ChevronRight, Star, Quote } from 'lucide-react';
import { siteConfig } from '../config/siteConfig';

const Testimonials = () => {
  const [currentSlide, setCurrentSlide] = useState(0);
  const testimonials = siteConfig.testimonials;

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % testimonials.length);
    }, 5000);
    return () => clearInterval(timer);
  }, [testimonials.length]);

  const nextSlide = () => {
    setCurrentSlide((prev) => (prev + 1) % testimonials.length);
  };

  const prevSlide = () => {
    setCurrentSlide((prev) => (prev - 1 + testimonials.length) % testimonials.length);
  };

  const goToSlide = (index: number) => {
    setCurrentSlide(index);
  };

  return (
    <section className="py-20 bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800">
      <div className="max-w-7xl mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-white mb-4">
            What Our Customers Say
          </h2>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Trusted by thousands of customers across Dubai for reliable gas cylinder services
          </p>
        </div>

        <div className="relative">
          {/* Main Testimonial Display */}
          <div className="bg-white rounded-3xl p-8 md:p-12 shadow-2xl mx-auto max-w-4xl relative overflow-hidden">
            <div className="absolute top-6 left-6 text-orange-500 opacity-20">
              <Quote size={60} />
            </div>
            
            <div className="relative z-10">
              <div className="flex flex-col md:flex-row items-center gap-8">
                <div className="flex-shrink-0">
                  <img
                    src={testimonials[currentSlide].image}
                    alt={testimonials[currentSlide].name}
                    className="w-24 h-24 rounded-full object-cover border-4 border-orange-200"
                  />
                </div>
                
                <div className="flex-1 text-center md:text-left">
                  <div className="flex justify-center md:justify-start mb-4">
                    {[...Array(testimonials[currentSlide].rating)].map((_, i) => (
                      <Star key={i} className="text-yellow-400 fill-current" size={24} />
                    ))}
                  </div>
                  
                  <p className="text-xl text-gray-700 mb-6 leading-relaxed italic">
                    "{testimonials[currentSlide].comment}"
                  </p>
                  
                  <div>
                    <h4 className="text-2xl font-bold text-gray-900 mb-1">
                      {testimonials[currentSlide].name}
                    </h4>
                    <p className="text-orange-600 font-semibold mb-2">
                      {testimonials[currentSlide].location}
                    </p>
                    <p className="text-sm text-gray-500">
                      Service: {testimonials[currentSlide].service}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/* Navigation Arrows */}
          <button
            onClick={prevSlide}
            className="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-100 rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110"
          >
            <ChevronLeft className="text-gray-700" size={24} />
          </button>
          
          <button
            onClick={nextSlide}
            className="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-100 rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110"
          >
            <ChevronRight className="text-gray-700" size={24} />
          </button>
        </div>

        {/* Dots Indicator */}
        <div className="flex justify-center mt-8 space-x-2">
          {testimonials.map((_, index) => (
            <button
              key={index}
              onClick={() => goToSlide(index)}
              className={`w-3 h-3 rounded-full transition-all duration-300 ${
                index === currentSlide 
                  ? 'bg-orange-500 w-8' 
                  : 'bg-gray-400 hover:bg-gray-300'
              }`}
            />
          ))}
        </div>

        {/* Customer Stats */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16">
          <div className="text-center">
            <div className="text-4xl font-bold text-white mb-2">8000+</div>
            <div className="text-gray-300">Happy Customers</div>
          </div>
          <div className="text-center">
            <div className="text-4xl font-bold text-white mb-2">15+</div>
            <div className="text-gray-300">Years Experience</div>
          </div>
          <div className="text-center">
            <div className="text-4xl font-bold text-white mb-2">4.9</div>
            <div className="text-gray-300">Average Rating</div>
          </div>
          <div className="text-center">
            <div className="text-4xl font-bold text-white mb-2">100%</div>
            <div className="text-gray-300">Dubai Coverage</div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;