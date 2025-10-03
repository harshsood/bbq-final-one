import React from 'react';
import { MapPin, Clock, Truck, CheckCircle } from 'lucide-react';

const DeliveryAreas = () => {
  const areas = [
    {
      zone: 'Dubai Marina & JBR',
      areas: ['Dubai Marina', 'JBR', 'Al Sufouh', 'Knowledge Village'],
      deliveryTime: '30-45 mins',
      color: 'blue'
    },
    {
      zone: 'Downtown & Business Bay',
      areas: ['Downtown Dubai', 'Business Bay', 'DIFC', 'Trade Centre'],
      deliveryTime: '25-40 mins',
      color: 'orange'
    },
    {
      zone: 'Jumeirah & DIFC',
      areas: ['Jumeirah 1,2,3', 'Umm Suqeim', 'Al Wasl', 'Satwa'],
      deliveryTime: '35-50 mins',
      color: 'green'
    },
    {
      zone: 'New Dubai Areas',
      areas: ['Dubai Hills', 'JVC', 'JVT', 'Motor City', 'Sports City'],
      deliveryTime: '45-60 mins',
      color: 'red'
    }
  ];

  const features = [
    {
      icon: Clock,
      title: 'Same Day Delivery',
      description: 'Order before 6 PM for same-day delivery across Dubai'
    },
    {
      icon: Truck,
      title: 'Free Delivery',
      description: 'Free delivery on orders above AED 100 in Dubai'
    },
    {
      icon: CheckCircle,
      title: 'Real-time Tracking',
      description: 'Track your gas cylinder delivery in real-time'
    }
  ];

  return (
    <section id="delivery" className="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
      <div className="max-w-7xl mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">
            Gas Cylinder Delivery Areas in Dubai
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Fast and reliable gas cylinder delivery across Dubai and Northern Emirates. 
            Same-day delivery available in most areas with real-time tracking.
          </p>
        </div>

        {/* Delivery Features */}
        <div className="grid md:grid-cols-3 gap-8 mb-16">
          {features.map((feature, index) => (
            <div key={index} className="bg-white p-6 rounded-2xl shadow-lg text-center group hover:shadow-xl transition-all duration-300">
              <div className="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                <feature.icon className="text-orange-600" size={24} />
              </div>
              <h3 className="text-xl font-bold text-gray-900 mb-2">{feature.title}</h3>
              <p className="text-gray-600">{feature.description}</p>
            </div>
          ))}
        </div>

        {/* Delivery Areas Grid */}
        <div className="grid md:grid-cols-3 gap-8 mb-16">
          {areas.map((area, index) => (
            <div
              key={index}
              className="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100"
            >
              <div className={`w-12 h-12 bg-gradient-to-r ${
                area.color === 'blue' ? 'from-blue-500 to-blue-600' :
                area.color === 'orange' ? 'from-orange-500 to-red-600' :
                area.color === 'green' ? 'from-green-500 to-green-600' :
                area.color === 'purple' ? 'from-purple-500 to-purple-600' :
                area.color === 'red' ? 'from-red-500 to-red-600' :
                'from-indigo-500 to-indigo-600'
              } rounded-xl flex items-center justify-center mb-4`}>
                <MapPin className="text-white" size={20} />
              </div>
              
              <h3 className="text-xl font-bold text-gray-900 mb-3">{area.zone}</h3>
              
              <div className="space-y-2 mb-4">
                {area.areas.map((location, idx) => (
                  <div key={idx} className="flex items-center text-gray-600">
                    <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    {location}
                  </div>
                ))}
              </div>
              
              <div className="flex items-center justify-between pt-4 border-t border-gray-100">
                <div className="flex items-center space-x-2">
                  <Clock className="text-orange-600" size={16} />
                  <span className="text-sm text-gray-600">Delivery Time</span>
                </div>
                <span className="font-semibold text-orange-600">{area.deliveryTime}</span>
              </div>
            </div>
          ))}
        </div>

        {/* Call to Action */}
        <div className="bg-gradient-to-r from-orange-500 to-red-600 rounded-3xl p-8 text-center text-white">
          <h3 className="text-3xl font-bold mb-4">Need Gas Cylinders Delivered?</h3>
          <p className="text-xl mb-6 opacity-90">
            Order now and get your gas cylinders delivered to your doorstep across Dubai
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <button className="bg-white text-orange-600 px-8 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors">
              Order Now: +971 58 282 1712
            </button>
            <button className="border-2 border-white text-white px-8 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors">
              WhatsApp Order
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default DeliveryAreas;
