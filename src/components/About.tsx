import React from 'react';
import { Award, Users, Clock, MapPin } from 'lucide-react';

const About = () => {
  const stats = [
    { icon: Users, number: '5000+', label: 'Happy Customers' },
    { icon: Clock, number: '24/7', label: 'Support Available' },
    { icon: Award, number: '15+', label: 'Years Experience' },
    { icon: MapPin, number: '100%', label: 'Dubai Coverage' }
  ];

  return (
    <section id="about" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left Content */}
          <div>
            <h2 className="text-4xl font-bold text-gray-900 mb-6">
              Why Choose BBQ Gas for Your New Connections?
            </h2>
            <div className="space-y-6">
              <div className="flex items-start space-x-4">
                <div className="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                  <div className="w-3 h-3 bg-orange-600 rounded-full"></div>
                </div>
                <div>
                  <h3 className="text-xl font-semibold text-gray-900 mb-2">Expert BBQ Gas Connections</h3>
                  <p className="text-gray-600">Specialized in BBQ gas cylinder new connections with professional installation for outdoor cooking and grilling enthusiasts across Dubai.</p>
                </div>
              </div>
              
              <div className="flex items-start space-x-4">
                <div className="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mt-1">
                  <div className="w-3 h-3 bg-red-600 rounded-full"></div>
                </div>
                <div>
                  <h3 className="text-xl font-semibold text-gray-900 mb-2">New Connection Specialists</h3>
                  <p className="text-gray-600">Our certified technicians specialize in new gas cylinder connections, following international safety standards for BBQ, propane, and heater gas installations.</p>
                </div>
              </div>
              
              <div className="flex items-start space-x-4">
                <div className="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                  <div className="w-3 h-3 bg-green-600 rounded-full"></div>
                </div>
                <div>
                  <h3 className="text-xl font-semibold text-gray-900 mb-2">Complete Installation Service</h3>
                  <p className="text-gray-600">Complete gas cylinder connection and installation service with ongoing support and maintenance across all Dubai areas.</p>
                </div>
              </div>
            </div>

            <button className="mt-8 bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
              Get New Connection
            </button>
          </div>

          {/* Right Content - Image */}
          <div className="relative">
            <div className="absolute inset-0 bg-gradient-to-r from-orange-200 to-red-200 rounded-3xl transform -rotate-3 opacity-30"></div>
            <img
              src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="BBQ Gas professional delivery team in Dubai"
              className="relative w-full h-96 object-cover rounded-3xl shadow-2xl"
            />
            
            {/* Floating Testimonial */}
            <div className="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl max-w-xs">
              <div className="flex items-center mb-3">
                <div className="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center">
                  <span className="text-white font-bold">4.9</span>
                </div>
                <div className="ml-3">
                  <div className="text-yellow-400 text-sm">★★★★★</div>
                  <p className="text-xs text-gray-600">Customer Rating</p>
                </div>
              </div>
              <p className="text-sm text-gray-700">"Best gas cylinder service in Dubai! Always on time."</p>
              <p className="text-xs text-gray-500 mt-2">- Ahmed K., Dubai</p>
            </div>
          </div>
        </div>

        {/* Stats Section */}
        <div className="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
          {stats.map((stat, index) => (
            <div key={index} className="text-center group">
              <div className="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                <stat.icon className="text-orange-600" size={24} />
              </div>
              <h3 className="text-3xl font-bold text-gray-900 mb-2">{stat.number}</h3>
              <p className="text-gray-600">{stat.label}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default About;