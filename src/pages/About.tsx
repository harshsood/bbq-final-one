import React from 'react';
import { Award, Users, Clock, MapPin, Shield, CheckCircle, Star, Truck } from 'lucide-react';

const About = () => {
  const stats = [
    { icon: Users, number: '8000+', label: 'Happy Customers' },
    { icon: Clock, number: '24/7', label: 'Support Available' },
    { icon: Award, number: '15+', label: 'Years Experience' },
    { icon: MapPin, number: '100%', label: 'Dubai Coverage' }
  ];

  const values = [
    {
      icon: Shield,
      title: 'Safety First',
      description: 'Every gas cylinder delivery includes comprehensive safety inspection and proper installation guidance from our certified technicians.'
    },
    {
      icon: CheckCircle,
      title: 'Quality Assurance',
      description: 'We source only premium quality gas cylinders from licensed suppliers, ensuring consistent performance and reliability.'
    },
    {
      icon: Truck,
      title: 'Reliable Service',
      description: 'On-time delivery guaranteed with real-time tracking and 24/7 customer support for all your gas cylinder needs.'
    },
    {
      icon: Star,
      title: 'Customer Satisfaction',
      description: 'Over 8000 satisfied customers across Dubai trust us for their gas cylinder supply and emergency refill services.'
    }
  ];

  const team = [
    {
      name: 'Ahmed Al-Rashid',
      position: 'Operations Manager',
      image: 'https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=400',
      description: '15+ years in gas cylinder industry'
    },
    {
      name: 'Sarah Mohammed',
      position: 'Safety Coordinator',
      image: 'https://images.pexels.com/photos/3760263/pexels-photo-3760263.jpeg?auto=compress&cs=tinysrgb&w=400',
      description: 'Certified safety inspector'
    },
    {
      name: 'Omar Hassan',
      position: 'Delivery Manager',
      image: 'https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=400',
      description: 'Expert in logistics coordination'
    }
  ];

  return (
    <div className="pt-32">
      {/* Hero Section */}
      <section className="py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50">
        <div className="max-w-7xl mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-8">
              <div>
                <h1 className="text-5xl font-bold text-gray-900 leading-tight mb-6">
                  About BBQ Gas
                  <span className="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600"> Dubai</span>
                </h1>
                <p className="text-xl text-gray-600 leading-relaxed">
                  Since 2010, BBQ Gas has been Dubai's most trusted gas cylinder supplier, 
                  delivering safety, reliability, and exceptional service to homes, restaurants, 
                  and businesses across the emirate.
                </p>
              </div>
              
              <div className="space-y-4">
                <div className="flex items-center space-x-3">
                  <div className="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                    <CheckCircle className="text-white" size={16} />
                  </div>
                  <span className="text-gray-700">Dubai Municipality Licensed Gas Supplier</span>
                </div>
                <div className="flex items-center space-x-3">
                  <div className="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                    <CheckCircle className="text-white" size={16} />
                  </div>
                  <span className="text-gray-700">ISO 9001:2015 Quality Management Certified</span>
                </div>
                <div className="flex items-center space-x-3">
                  <div className="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                    <CheckCircle className="text-white" size={16} />
                  </div>
                  <span className="text-gray-700">24/7 Emergency Gas Delivery Service</span>
                </div>
              </div>
            </div>

            <div className="relative">
              <div className="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
              <img
                src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800"
                alt="BBQ Gas professional team in Dubai"
                className="relative w-full h-96 object-cover rounded-3xl shadow-2xl"
              />
            </div>
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-16 bg-white">
        <div className="max-w-7xl mx-auto px-4">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
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

      {/* Our Values */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              What sets BBQ Gas apart as Dubai's premier gas cylinder supplier
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value, index) => (
              <div key={index} className="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <div className="w-16 h-16 bg-gradient-to-r from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                  <value.icon className="text-orange-600" size={24} />
                </div>
                <h3 className="text-xl font-bold text-gray-900 mb-4">{value.title}</h3>
                <p className="text-gray-600 leading-relaxed">{value.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Our Story */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <div>
              <h2 className="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
              <div className="space-y-6 text-gray-600 leading-relaxed">
                <p>
                  Founded in 2010, BBQ Gas began as a small family business with a simple mission: 
                  to provide safe, reliable gas cylinder delivery services to Dubai residents and businesses.
                </p>
                <p>
                  Over the years, we've grown to become one of Dubai's most trusted gas suppliers, 
                  serving over 8,000 customers across all emirates. Our commitment to safety, 
                  quality, and customer satisfaction has earned us recognition from Dubai Municipality 
                  and numerous industry certifications.
                </p>
                <p>
                  Today, BBQ Gas operates a modern fleet of delivery vehicles, employs certified 
                  technicians, and maintains the highest safety standards in the industry. We're 
                  proud to be your trusted partner for all gas cylinder needs in Dubai.
                </p>
              </div>
            </div>

            <div className="relative">
              <img
                src="https://images.pexels.com/photos/2539395/pexels-photo-2539395.jpeg?auto=compress&cs=tinysrgb&w=800"
                alt="BBQ Gas delivery service history"
                className="w-full h-96 object-cover rounded-3xl shadow-2xl"
              />
              
              <div className="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl">
                <div className="flex items-center mb-3">
                  <div className="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center">
                    <span className="text-white font-bold">15+</span>
                  </div>
                  <div className="ml-3">
                    <p className="font-semibold text-gray-800">Years</p>
                    <p className="text-sm text-gray-600">Serving Dubai</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Team Section */}
      <section className="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div className="max-w-7xl mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Experienced professionals dedicated to your safety and satisfaction
            </p>
          </div>

          <div className="grid md:grid-cols-3 gap-8">
            {team.map((member, index) => (
              <div key={index} className="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <img
                  src={member.image}
                  alt={member.name}
                  className="w-24 h-24 rounded-full mx-auto mb-6 object-cover"
                />
                <h3 className="text-xl font-bold text-gray-900 mb-2">{member.name}</h3>
                <p className="text-orange-600 font-semibold mb-3">{member.position}</p>
                <p className="text-gray-600">{member.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-orange-500 to-red-600">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <h2 className="text-4xl font-bold text-white mb-6">
            Ready to Experience the BBQ Gas Difference?
          </h2>
          <p className="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
            Join thousands of satisfied customers who trust BBQ Gas for their gas cylinder needs in Dubai
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <button className="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors">
              Order Gas Cylinders
            </button>
            <button className="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition-colors">
              Get Free Quote
            </button>
          </div>
        </div>
      </section>
    </div>
  );
};

export default About;