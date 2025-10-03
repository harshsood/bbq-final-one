import React, { useState, useEffect } from 'react';
import { ArrowRight, Shield, CheckCircle, Truck } from 'lucide-react';

const Hero = () => {
  const [currentText, setCurrentText] = useState('');
  const [currentIndex, setCurrentIndex] = useState(0);
  const [isDeleting, setIsDeleting] = useState(false);
  const [typeSpeed, setTypeSpeed] = useState(150);

  const texts = ['BBQ Gas', 'Propane Gas', 'Heater Gas'];

  useEffect(() => {
    const handleType = () => {
      const current = texts[currentIndex];
      
      if (isDeleting) {
        setCurrentText(current.substring(0, currentText.length - 1));
        setTypeSpeed(75);
      } else {
        setCurrentText(current.substring(0, currentText.length + 1));
        setTypeSpeed(150);
      }

      if (!isDeleting && currentText === current) {
        setTimeout(() => setIsDeleting(true), 2000);
      } else if (isDeleting && currentText === '') {
        setIsDeleting(false);
        setCurrentIndex((prevIndex) => (prevIndex + 1) % texts.length);
      }
    };

    const timer = setTimeout(handleType, typeSpeed);
    return () => clearTimeout(timer);
  }, [currentText, isDeleting, currentIndex, typeSpeed, texts]);

  return (
    <section id="home" className="min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50 pt-32 pb-16">
      <div className="max-w-7xl mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Left Content */}
          <div className="space-y-8 animate-fade-in-up">
            <div>
              <h1 className="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Dubai's Premier
                <br />
                <span className="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                  {currentText}
                  <span className="animate-pulse">|</span>
                </span>
                <br />New Connections & Delivery
              </h1>
              <p className="text-xl text-gray-600 leading-relaxed mb-8">
                Professional gas cylinder new connections and delivery service for homes, restaurants, and BBQ enthusiasts across Dubai. 
                Licensed suppliers with expert installation and same-day delivery for BBQ gas, propane, and heater gas cylinders.
              </p>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <button className="group bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl flex items-center justify-center space-x-2">
                <span>Get New Connection</span>
                <ArrowRight className="group-hover:translate-x-1 transition-transform" size={20} />
              </button>
              <button className="border-2 border-gray-300 hover:border-orange-500 text-gray-700 hover:text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                BBQ Gas Delivery
              </button>
            </div>

            {/* Trust Indicators */}
            <div className="grid grid-cols-3 gap-6 pt-8">
              <div className="text-center">
                <div className="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                  <Shield className="text-green-600" size={24} />
                </div>
                <p className="text-sm font-medium text-gray-700">Licensed & Insured</p>
              </div>
              <div className="text-center">
                <div className="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                  <CheckCircle className="text-orange-600" size={24} />
                </div>
                <p className="text-sm font-medium text-gray-700">New Connections</p>
              </div>
              <div className="text-center">
                <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                  <Truck className="text-blue-600" size={24} />
                </div>
                <p className="text-sm font-medium text-gray-700">Same Day Delivery</p>
              </div>
            </div>
          </div>

          {/* Right Content - Image */}
          <div className="relative animate-fade-in-right">
            <div className="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
            <div className="relative bg-white p-8 rounded-3xl shadow-2xl">
              <img
                src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800"
                alt="BBQ Gas Cylinder New Connection Service in Dubai"
                className="w-full h-96 object-cover rounded-2xl"
              />
              
              {/* Floating Card */}
              <div className="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                <div className="flex items-center space-x-4">
                  <div className="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center">
                    <span className="text-white font-bold">✓</span>
                  </div>
                  <div>
                    <p className="font-semibold text-gray-800">5000+ Connections</p>
                    <p className="text-sm text-gray-600">BBQ Gas Installed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;