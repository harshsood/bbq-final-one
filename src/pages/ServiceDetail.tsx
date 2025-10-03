import React from 'react';
import { useParams, Link } from 'react-router-dom';
import { ArrowLeft, CheckCircle, Phone, Star, Clock, Shield } from 'lucide-react';
import { siteConfig } from '../config/siteConfig';

const ServiceDetail = () => {
  const { serviceId } = useParams();
  const service = siteConfig.services.main.find(s => s.id === serviceId);

  if (!service) {
    return (
      <div className="pt-32 min-h-screen bg-gray-50 flex items-center justify-center">
        <div className="text-center">
          <h1 className="text-4xl font-bold text-gray-900 mb-4">Service Not Found</h1>
          <Link to="/services" className="text-blue-600 hover:text-blue-800">
            ← Back to Services
          </Link>
        </div>
      </div>
    );
  }

  const relatedServices = siteConfig.services.main.filter(s => s.id !== serviceId).slice(0, 3);

  return (
    <div className="pt-32">
      {/* Hero Section */}
      <section className="py-20 bg-gradient-to-br from-gray-800 via-gray-700 to-blue-800">
        <div className="max-w-7xl mx-auto px-4">
          <div className="mb-8">
            <Link 
              to="/services" 
              className="inline-flex items-center text-gray-300 hover:text-white transition-colors"
            >
              <ArrowLeft className="mr-2" size={20} />
              Back to Services
            </Link>
          </div>
          
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div className="space-y-8">
              <div>
                <h1 className="text-5xl font-bold text-white leading-tight mb-6">
                  {service.name}
                </h1>
                <p className="text-xl text-gray-300 leading-relaxed mb-8">
                  {service.description}
                </p>
              </div>
              
              <div className="flex items-center space-x-8">
                <div className="text-center">
                  <div className="text-3xl font-bold text-orange-400">{service.price}</div>
                  <div className="text-gray-300">Starting Price</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-orange-400">24/7</div>
                  <div className="text-gray-300">Available</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-orange-400">Same Day</div>
                  <div className="text-gray-300">Service</div>
                </div>
              </div>
              
              <div className="flex flex-col sm:flex-row gap-4">
                <a 
                  href={`tel:${siteConfig.contact.phone}`}
                  className="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl flex items-center justify-center space-x-2"
                >
                  <Phone size={20} />
                  <span>Book Now: {siteConfig.contact.phone}</span>
                </a>
                <a 
                  href={`https://wa.me/${siteConfig.contact.whatsapp.replace(/[^0-9]/g, '')}`}
                  className="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-gray-800 transition-all duration-300 flex items-center justify-center space-x-2"
                >
                  <span>💬</span>
                  <span>WhatsApp</span>
                </a>
              </div>
            </div>

            <div className="relative">
              <div className="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
              <div className="relative bg-white p-8 rounded-3xl shadow-2xl">
                <img
                  src={service.image}
                  alt={service.name}
                  className="w-full h-96 object-cover rounded-2xl"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Service Features */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-16">
            <div>
              <h2 className="text-4xl font-bold text-gray-900 mb-8">Service Features</h2>
              <div className="space-y-6">
                {service.features.map((feature, index) => (
                  <div key={index} className="flex items-start space-x-4">
                    <div className="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                      <CheckCircle className="text-green-600" size={20} />
                    </div>
                    <div>
                      <h3 className="text-xl font-semibold text-gray-900 mb-2">{feature}</h3>
                      <p className="text-gray-600">Professional service with quality assurance and customer satisfaction guarantee.</p>
                    </div>
                  </div>
                ))}
              </div>
            </div>

            <div className="space-y-8">
              <div className="bg-gradient-to-br from-orange-50 to-red-50 p-8 rounded-2xl">
                <h3 className="text-2xl font-bold text-gray-900 mb-6">Why Choose Our Service?</h3>
                <div className="space-y-4">
                  <div className="flex items-center space-x-3">
                    <Shield className="text-green-600" size={24} />
                    <span className="text-gray-700">Licensed & Certified Technicians</span>
                  </div>
                  <div className="flex items-center space-x-3">
                    <Clock className="text-blue-600" size={24} />
                    <span className="text-gray-700">Same Day Service Available</span>
                  </div>
                  <div className="flex items-center space-x-3">
                    <Star className="text-yellow-500" size={24} />
                    <span className="text-gray-700">4.9/5 Customer Rating</span>
                  </div>
                </div>
              </div>

              <div className="bg-gray-50 p-8 rounded-2xl">
                <h3 className="text-2xl font-bold text-gray-900 mb-4">Service Areas</h3>
                <p className="text-gray-600 mb-4">We provide {service.name.toLowerCase()} across all major areas in Dubai:</p>
                <div className="grid grid-cols-2 gap-2 text-sm text-gray-600">
                  {siteConfig.deliveryAreas.map((area, index) => (
                    <div key={index}>• {area.zone}</div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Related Services */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Related Services</h2>
            <p className="text-xl text-gray-600">Explore our other gas cylinder services</p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            {relatedServices.map((relatedService, index) => (
              <div key={index} className="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <img
                  src={relatedService.image}
                  alt={relatedService.name}
                  className="w-full h-48 object-cover rounded-xl mb-4"
                />
                <h3 className="text-xl font-bold text-gray-900 mb-3">{relatedService.name}</h3>
                <p className="text-gray-600 mb-4">{relatedService.description.substring(0, 100)}...</p>
                <div className="flex items-center justify-between">
                  <span className="text-lg font-bold text-blue-600">{relatedService.price}</span>
                  <Link 
                    to={`/service/${relatedService.id}`}
                    className="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300"
                  >
                    Learn More
                  </Link>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <h2 className="text-4xl font-bold text-white mb-6">
            Ready to Book {service.name}?
          </h2>
          <p className="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Contact us now for professional gas cylinder service across Dubai
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a 
              href={`tel:${siteConfig.contact.phone}`}
              className="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2"
            >
              <Phone size={20} />
              <span>Call: {siteConfig.contact.phone}</span>
            </a>
            <a 
              href={`https://wa.me/${siteConfig.contact.whatsapp.replace(/[^0-9]/g, '')}`}
              className="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors flex items-center justify-center space-x-2"
            >
              <span>💬</span>
              <span>WhatsApp Order</span>
            </a>
          </div>
        </div>
      </section>
    </div>
  );
};

export default ServiceDetail;