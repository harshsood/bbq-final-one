import React from 'react';
import { Home, Building, Wrench, Clock, Shield, Truck, CheckCircle, Star, Phone, ArrowRight } from 'lucide-react';
import { Link } from 'react-router-dom';
import { siteConfig } from '../config/siteConfig';

const Services = () => {
  const mainServices = siteConfig.services.main;

  const additionalServices = [
    {
      icon: Clock,
      title: 'Fast Delivery',
      description: 'Quick and efficient gas cylinder delivery service across Dubai.'
    },
    {
      icon: Shield,
      title: 'Safety Inspections',
      description: 'Comprehensive safety inspections and gas leak detection by certified professionals.'
    },
    {
      icon: Truck,
      title: 'Free Delivery',
      description: 'Free gas cylinder delivery on orders above AED 100 across all Dubai areas.'
    },
    {
      icon: CheckCircle,
      title: 'Quality Guarantee',
      description: 'All gas cylinders come with quality guarantee and full customer support.'
    }
  ];

  const cylinderTypes = [
    {
      size: '5kg',
      description: 'Perfect for small families and light cooking',
      duration: '2-3 weeks usage',
      price: 'AED 35',
      popular: false
    },
    {
      size: '12kg',
      description: 'Ideal for medium families and regular cooking',
      duration: '4-6 weeks usage',
      price: 'AED 65',
      popular: true
    },
    {
      size: '15kg',
      description: 'Best for large families and heavy cooking',
      duration: '6-8 weeks usage',
      price: 'AED 85',
      popular: false
    }
  ];

  return (
    <div className="pt-32">
      {/* Hero Section */}
      <section className="py-20 bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <h1 className="text-5xl font-bold text-white mb-6">
            Gas Cylinder Services in
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-400"> Dubai</span>
          </h1>
          <p className="text-xl text-gray-300 max-w-4xl mx-auto mb-8">
            Complete gas cylinder solutions for homes and businesses in Dubai. From residential cooking gas
            to commercial bulk supply with professional installation and emergency services.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <button className="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
              Order Gas Cylinders
            </button>
            <button className="border-2 border-gray-300 hover:border-orange-500 text-gray-700 hover:text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
              Get Custom Quote
            </button>
          </div>
        </div>
      </section>

      {/* Main Services */}
      <section className="py-20 bg-gradient-to-br from-gray-100 to-gray-200">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Our Gas Cylinder Services</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Professional gas cylinder supply and services for every need in Dubai
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {mainServices.map((service, index) => (
              <div key={index} className="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden group">
                {/* Background Pattern */}
                <div className="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-100 to-red-100 rounded-full transform translate-x-16 -translate-y-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>
                
                <div className="relative z-10">
                  <div className="mb-6">
                    <img
                      src={service.image}
                      alt={service.name}
                      className="w-full h-48 object-cover rounded-xl mb-4"
                    />
                  </div>
                  
                  <h3 className="text-2xl font-bold text-gray-900 mb-4">{service.name}</h3>
                  <p className="text-gray-600 mb-6 leading-relaxed">{service.description}</p>
                  
                  <ul className="space-y-3">
                    {service.features.slice(0, 4).map((feature, idx) => (
                      <li key={idx} className="flex items-center text-gray-700">
                        <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                        {feature}
                      </li>
                    ))}
                  </ul>
                  
                  <div className="flex items-center justify-between pt-6 border-t border-gray-100">
                    <span className="text-lg font-bold text-blue-600">{service.price}</span>
                    <Link 
                      to={`/service/${service.id}`}
                      className="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 flex items-center space-x-2"
                    >
                      <span>Learn More</span>
                      <ArrowRight size={16} />
                    </Link>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Gas Cylinder Types */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Gas Cylinder Sizes & Pricing</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Choose the perfect gas cylinder size for your needs with transparent pricing
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            {cylinderTypes.map((cylinder, index) => (
              <div key={index} className={`relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 ${cylinder.popular ? 'ring-2 ring-orange-500 transform scale-105' : ''}`}>
                {cylinder.popular && (
                  <div className="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span className="bg-gradient-to-r from-orange-500 to-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                      Most Popular
                    </span>
                  </div>
                )}
                
                <div className="text-center">
                  <div className="w-20 h-20 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span className="text-3xl font-bold text-orange-600">{cylinder.size}</span>
                  </div>
                  
                  <h3 className="text-2xl font-bold text-gray-900 mb-4">{cylinder.size} Gas Cylinder</h3>
                  <p className="text-gray-600 mb-4">{cylinder.description}</p>
                  <p className="text-sm text-gray-500 mb-6">{cylinder.duration}</p>
                  
                  <div className="text-3xl font-bold text-blue-600 mb-6">{cylinder.price}</div>
                  
                  <button className={`w-full py-3 rounded-lg font-semibold transition-all duration-300 ${
                    cylinder.popular 
                      ? 'bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white transform hover:scale-105' 
                      : 'border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white'
                  }`}>
                    Order {cylinder.size} Cylinder
                  </button>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Additional Services */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Additional Services</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Comprehensive support services for all your gas cylinder needs
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {additionalServices.map((service, index) => (
              <div key={index} className="text-center group">
                <div className="w-20 h-20 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                  <service.icon className="text-orange-600" size={32} />
                </div>
                <h3 className="text-xl font-bold text-gray-900 mb-4">{service.title}</h3>
                <p className="text-gray-600">{service.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <h2 className="text-4xl font-bold text-white mb-6">
            Need Gas Cylinders Delivered Today?
          </h2>
          <p className="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Order now and get your gas cylinders delivered to your doorstep with same-day service across Dubai
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <button className="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2">
              <Phone size={20} />
              <span>Call: +971 58 282 1712</span>
            </button>
            <button className="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors">
              WhatsApp Order
            </button>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Services;