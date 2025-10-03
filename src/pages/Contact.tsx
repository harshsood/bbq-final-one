import React, { useState } from 'react';
import { Phone, Mail, MapPin, Clock, Send, MessageCircle, Headphones, Shield } from 'lucide-react';

const Contact = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    service: '',
    area: '',
    message: ''
  });

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    console.log('Form submitted:', formData);
  };

  const contactMethods = [
    {
      icon: Phone,
      title: 'Order Hotline',
      info: '+971 4 123 4567',
      info: '+971 58 282 1712',
      description: 'Call us for immediate gas cylinder orders',
      color: 'orange',
      available: '24/7 Available'
    },
    {
      icon: MessageCircle,
      title: 'WhatsApp Orders',
      info: '+971 50 123 4567',
      info: '+971 58 282 1712',
      description: 'Quick orders via WhatsApp messaging',
      color: 'green',
      available: 'Instant Response'
    },
    {
      icon: Mail,
      title: 'Email Support',
      info: 'orders@bbqgas.ae',
      description: 'Send us your requirements via email',
      color: 'blue',
      available: 'Within 2 Hours'
    },
    {
      icon: Headphones,
      title: 'Emergency Service',
      info: '+971 50 999 8888',
      info: '+971 58 282 1712',
      description: 'Emergency gas cylinder delivery',
      color: 'red',
      available: '24/7 Emergency'
    }
  ];

  const deliveryAreas = [
    'Dubai Marina', 'JBR', 'Downtown Dubai', 'Business Bay', 'DIFC',
    'Jumeirah', 'Deira', 'Bur Dubai', 'Dubai Hills', 'JVC', 'JVT',
    'Motor City', 'Sports City', 'Sharjah', 'Ajman'
  ];

  const faqs = [
    {
      question: 'What are your delivery hours?',
      answer: 'We deliver gas cylinders 24/7 across Dubai. Same-day delivery is available for orders placed before 6 PM.'
    },
    {
      question: 'Do you provide installation service?',
      answer: 'Yes, we provide free installation guidance with every delivery. Professional installation service is available for AED 120.'
    },
    {
      question: 'What gas cylinder sizes do you offer?',
      answer: 'We offer 5kg, 12kg, and 15kg gas cylinders for residential use, plus commercial bulk supply options.'
    },
    {
      question: 'Is there a minimum order requirement?',
      answer: 'No minimum order required. However, free delivery is available on orders above AED 100.'
    }
  ];

  return (
    <div className="pt-32">
      {/* Hero Section */}
      <section className="py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <h1 className="text-5xl font-bold text-gray-900 mb-6">
            Contact BBQ Gas
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600"> Dubai</span>
          </h1>
          <p className="text-xl text-gray-600 max-w-4xl mx-auto mb-8">
            Ready to order gas cylinders or need assistance? Contact BBQ Gas now for fast, 
            reliable cylinder delivery service across Dubai and Northern Emirates.
          </p>
          <div className="flex items-center justify-center space-x-8 text-sm text-gray-600">
            <div className="flex items-center space-x-2">
              <Shield className="text-green-500" size={16} />
              <span>Licensed & Insured</span>
            </div>
            <div className="flex items-center space-x-2">
              <Clock className="text-blue-500" size={16} />
              <span>24/7 Service</span>
            </div>
            <div className="flex items-center space-x-2">
              <MapPin className="text-orange-500" size={16} />
              <span>All Dubai Areas</span>
            </div>
          </div>
        </div>
      </section>

      {/* Contact Methods */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Multiple ways to reach us for your gas cylinder needs
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {contactMethods.map((method, index) => (
              <div key={index} className="bg-white border-2 border-gray-100 hover:border-orange-200 rounded-2xl p-8 text-center transition-all duration-300 hover:shadow-lg group">
                <div className={`w-16 h-16 bg-gradient-to-r ${
                  method.color === 'orange' ? 'from-orange-500 to-red-600' :
                  method.color === 'green' ? 'from-green-500 to-green-600' :
                  method.color === 'blue' ? 'from-blue-500 to-blue-600' :
                  'from-red-500 to-red-600'
                } rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300`}>
                  <method.icon className="text-white" size={24} />
                </div>
                
                <h3 className="text-xl font-bold text-gray-900 mb-2">{method.title}</h3>
                <p className="text-lg font-semibold text-blue-600 mb-2">{method.info}</p>
                <p className="text-gray-600 mb-3">{method.description}</p>
                <span className="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                  {method.available}
                </span>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Form & Info */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4">
          <div className="grid lg:grid-cols-3 gap-12">
            {/* Contact Form */}
            <div className="lg:col-span-2">
              <div className="bg-white rounded-2xl p-8 shadow-lg">
                <h3 className="text-3xl font-bold text-gray-900 mb-6">Order Gas Cylinders</h3>
                <p className="text-gray-600 mb-8">Fill out the form below and we'll contact you within 15 minutes to confirm your order.</p>
                
                <form onSubmit={handleSubmit} className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    <div>
                      <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-2">
                        Full Name *
                      </label>
                      <input
                        type="text"
                        id="name"
                        name="name"
                        value={formData.name}
                        onChange={handleChange}
                        required
                        className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="Enter your full name"
                      />
                    </div>
                    
                    <div>
                      <label htmlFor="phone" className="block text-sm font-medium text-gray-700 mb-2">
                        Phone Number *
                      </label>
                      <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value={formData.phone}
                        onChange={handleChange}
                        required
                        className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="+971 XX XXX XXXX"
                      />
                    </div>
                  </div>

                  <div className="grid md:grid-cols-2 gap-6">
                    <div>
                      <label htmlFor="email" className="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                      </label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        value={formData.email}
                        onChange={handleChange}
                        className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="Enter your email"
                      />
                    </div>
                    
                    <div>
                      <label htmlFor="area" className="block text-sm font-medium text-gray-700 mb-2">
                        Delivery Area *
                      </label>
                      <select
                        id="area"
                        name="area"
                        value={formData.area}
                        onChange={handleChange}
                        required
                        className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                      >
                        <option value="">Select your area</option>
                        {deliveryAreas.map((area, index) => (
                          <option key={index} value={area}>{area}</option>
                        ))}
                      </select>
                    </div>
                  </div>

                  <div>
                    <label htmlFor="service" className="block text-sm font-medium text-gray-700 mb-2">
                      Gas Cylinder Type *
                    </label>
                    <select
                      id="service"
                      name="service"
                      value={formData.service}
                      onChange={handleChange}
                      required
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    >
                      <option value="">Select cylinder type</option>
                      <option value="5kg">5kg Cooking Gas Cylinder</option>
                      <option value="12kg">12kg Cooking Gas Cylinder</option>
                      <option value="15kg">15kg Cooking Gas Cylinder</option>
                      <option value="commercial">Commercial Bulk Order</option>
                      <option value="installation">Installation Service</option>
                    </select>
                  </div>

                  <div>
                    <label htmlFor="message" className="block text-sm font-medium text-gray-700 mb-2">
                      Special Requirements
                    </label>
                    <textarea
                      id="message"
                      name="message"
                      value={formData.message}
                      onChange={handleChange}
                      rows={4}
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                      placeholder="Any special delivery instructions, quantity needed, or other requirements..."
                    />
                  </div>

                  <button
                    type="submit"
                    className="w-full bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg flex items-center justify-center space-x-2"
                  >
                    <span>Submit Order Request</span>
                    <Send size={20} />
                  </button>
                </form>
              </div>
            </div>

            {/* Contact Info & FAQs */}
            <div className="space-y-8">
              {/* Contact Details */}
              <div className="bg-white rounded-2xl p-8 shadow-lg">
                <h3 className="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                
                <div className="space-y-6">
                  <div className="flex items-center space-x-4">
                    <div className="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                      <Phone className="text-orange-600" size={20} />
                    </div>
                    <div>
                      <p className="font-semibold text-gray-900">Order Hotline</p>
                      <p className="text-gray-600">+971 4 123 4567</p>
                    </div>
                  </div>

                  <div className="flex items-center space-x-4">
                    <div className="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                      <MessageCircle className="text-green-600" size={20} />
                    </div>
                    <div>
                      <p className="font-semibold text-gray-900">WhatsApp</p>
                      <p className="text-gray-600">+971 50 123 4567</p>
                    </div>
                  </div>

                  <div className="flex items-center space-x-4">
                    <div className="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                      <Mail className="text-blue-600" size={20} />
                    </div>
                    <div>
                      <p className="font-semibold text-gray-900">Email</p>
                      <p className="text-gray-600">orders@bbqgas.ae</p>
                    </div>
                  </div>

                  <div className="flex items-center space-x-4">
                    <div className="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                      <Clock className="text-purple-600" size={20} />
                    </div>
                    <div>
                      <p className="font-semibold text-gray-900">Operating Hours</p>
                      <p className="text-gray-600">24/7 Gas Delivery</p>
                    </div>
                  </div>
                </div>
              </div>

              {/* Emergency Contact */}
              <div className="bg-red-50 border border-red-200 rounded-2xl p-6">
                <h4 className="font-bold text-red-800 mb-3 flex items-center">
                  <Phone className="mr-2" size={20} />
                  Emergency Gas Service
                </h4>
                <p className="text-red-700 text-sm mb-4">
                  Need urgent gas cylinder delivery or having a gas emergency? Call our emergency hotline.
                </p>
                <button className="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-3 rounded-lg font-semibold transition-colors">
                  Emergency: +971 58 282 1712
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* FAQs */}
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p className="text-xl text-gray-600">
              Common questions about our gas cylinder delivery service
            </p>
          </div>

          <div className="space-y-6">
            {faqs.map((faq, index) => (
              <div key={index} className="bg-gray-50 rounded-2xl p-6 hover:bg-gray-100 transition-colors">
                <h3 className="text-xl font-bold text-gray-900 mb-3">{faq.question}</h3>
                <p className="text-gray-600 leading-relaxed">{faq.answer}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <h2 className="text-4xl font-bold text-white mb-6">
            Ready to Order Gas Cylinders?
          </h2>
          <p className="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Call us now for immediate gas cylinder delivery across Dubai
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <button className="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2">
              <Phone size={20} />
              <span>Call Now: +971 58 282 1712</span>
            </button>
            <button className="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors flex items-center justify-center space-x-2">
              <MessageCircle size={20} />
              <span>WhatsApp Order</span>
            </button>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Contact;