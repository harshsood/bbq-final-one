import React from 'react';
import { Phone, Mail, MapPin, Facebook, Instagram, Twitter, Linkedin } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-gray-900 text-white">
      {/* Main Footer */}
      <div className="max-w-7xl mx-auto px-4 py-16">
        <div className="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
          {/* Company Info */}
          <div className="space-y-6">
            <div className="flex items-center space-x-3">
              <div className="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                <span className="text-white font-bold text-xl">🔥</span>
              </div>
              <div>
                <h3 className="font-bold text-xl">BBQ Gas</h3>
                <p className="text-sm text-gray-400">Dubai's Gas Cylinder Experts</p>
              </div>
            </div>
            <p className="text-gray-300 leading-relaxed">
              Dubai's most trusted gas cylinder supplier, delivering safety, reliability, and 
              exceptional service to homes, restaurants, and businesses across the emirate since 2010.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="w-10 h-10 bg-orange-600 hover:bg-orange-700 rounded-lg flex items-center justify-center transition-colors">
                <Facebook size={18} />
              </a>
              <a href="#" className="w-10 h-10 bg-red-600 hover:bg-red-700 rounded-lg flex items-center justify-center transition-colors">
                <Instagram size={18} />
              </a>
              <a href="#" className="w-10 h-10 bg-blue-500 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors">
                <Twitter size={18} />
              </a>
              <a href="#" className="w-10 h-10 bg-blue-700 hover:bg-blue-800 rounded-lg flex items-center justify-center transition-colors">
                <Linkedin size={18} />
              </a>
            </div>
          </div>

          {/* Services */}
          <div>
            <h4 className="font-bold text-lg mb-6">Gas Cylinders</h4>
            <ul className="space-y-3">
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">5kg Cooking Gas</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">12kg Cooking Gas</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">15kg Cooking Gas</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Commercial Bulk Supply</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Installation & Maintenance</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Safety Inspections</a></li>
            </ul>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-bold text-lg mb-6">Quick Links</h4>
            <ul className="space-y-3">
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">About BBQ Gas</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Delivery Areas</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Safety Guidelines</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Gas Cylinder Prices</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">FAQs</a></li>
              <li><a href="#" className="text-gray-300 hover:text-white transition-colors">Customer Reviews</a></li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h4 className="font-bold text-lg mb-6">Contact Us</h4>
            <div className="space-y-4">
              <div className="flex items-center space-x-3">
                <Phone className="text-orange-400" size={18} />
                <div>
                  <p className="text-sm text-gray-400">Order Line</p>
                  <p className="text-white">+971 58 282 1712</p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <Phone className="text-red-400" size={18} />
                <div>
                  <p className="text-sm text-gray-400">Emergency</p>
                  <p className="text-white">+971 58 282 1712</p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <Mail className="text-green-400" size={18} />
                <div>
                  <p className="text-sm text-gray-400">Email</p>
                  <p className="text-white">orders@bbqgas.ae</p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <MapPin className="text-orange-400" size={18} />
                <div>
                  <p className="text-sm text-gray-400">Address</p>
                  <p className="text-white">Serving All Dubai</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Bottom Footer */}
      <div className="border-t border-gray-800">
        <div className="max-w-7xl mx-auto px-4 py-6">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <div className="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">
              <p className="text-gray-400 text-sm">
                © 2024 BBQ Gas Dubai. All rights reserved.
              </p>
              <div className="flex items-center space-x-6 text-sm">
                <a href="#" className="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" className="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                <a href="#" className="text-gray-400 hover:text-white transition-colors">Sitemap</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
