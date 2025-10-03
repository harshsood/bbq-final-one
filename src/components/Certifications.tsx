import React from 'react';
import { Shield, Award, CheckCircle, Phone } from 'lucide-react';

const Certifications = () => {
  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">
            Licensed & Certified Gas Cylinder Supplier
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            BBQ Gas is fully licensed and certified by Dubai authorities for safe gas cylinder 
            supply and installation services across the UAE.
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left Side - Certification Images */}
          <div className="space-y-8">
            <div className="relative group">
              <div className="absolute inset-0 bg-gradient-to-r from-orange-200 to-red-200 rounded-2xl transform rotate-2 opacity-30 group-hover:rotate-3 transition-transform duration-300"></div>
              <div className="relative bg-white p-6 rounded-2xl shadow-lg">
                <img
                  src="https://images.pexels.com/photos/1123262/pexels-photo-1123262.jpeg?auto=compress&cs=tinysrgb&w=800"
                  alt="Professional gas cylinder storage facility in Dubai"
                  className="w-full h-64 object-cover rounded-xl mb-4"
                />
                <div className="text-center">
                  <h3 className="text-xl font-bold text-gray-900 mb-2">Dubai Municipality Licensed</h3>
                  <p className="text-gray-600">Certified gas cylinder storage and distribution facility</p>
                </div>
              </div>
            </div>

            <div className="relative group">
              <div className="absolute inset-0 bg-gradient-to-r from-blue-200 to-green-200 rounded-2xl transform -rotate-2 opacity-30 group-hover:-rotate-3 transition-transform duration-300"></div>
              <div className="relative bg-white p-6 rounded-2xl shadow-lg">
                <img
                  src="https://images.pexels.com/photos/2539395/pexels-photo-2539395.jpeg?auto=compress&cs=tinysrgb&w=800"
                  alt="Professional gas cylinder delivery truck in Dubai"
                  className="w-full h-64 object-cover rounded-xl mb-4"
                />
                <div className="text-center">
                  <h3 className="text-xl font-bold text-gray-900 mb-2">ISO 9001:2015 Certified</h3>
                  <p className="text-gray-600">Quality management system for gas cylinder services</p>
                </div>
              </div>
            </div>
          </div>

          {/* Right Side - Certification Logos and Contact */}
          <div className="space-y-8">
            <div className="bg-gray-50 rounded-2xl p-8">
              <h3 className="text-2xl font-bold text-gray-900 mb-6 text-center">Our Certifications</h3>
              
              <div className="grid grid-cols-2 gap-6 mb-8">
                <div className="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div className="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <Shield className="text-white" size={24} />
                  </div>
                  <p className="text-center text-sm font-medium text-gray-700">Dubai Municipality</p>
                </div>

                <div className="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div className="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <Award className="text-white" size={24} />
                  </div>
                  <p className="text-center text-sm font-medium text-gray-700">ISO 9001:2015</p>
                </div>

                <div className="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div className="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <CheckCircle className="text-white" size={24} />
                  </div>
                  <p className="text-center text-sm font-medium text-gray-700">ADNOC Approved</p>
                </div>

                <div className="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div className="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <Shield className="text-white" size={24} />
                  </div>
                  <p className="text-center text-sm font-medium text-gray-700">Safety Certified</p>
                </div>

                <div className="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow col-span-2">
                  <div className="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <Award className="text-white" size={24} />
                  </div>
                  <p className="text-center text-sm font-medium text-gray-700">UAE Gas Supplier License</p>
                </div>
              </div>

              {/* Contact CTA */}
              <div className="bg-gradient-to-r from-orange-500 to-red-600 rounded-xl p-6 text-center text-white">
                <h4 className="text-xl font-bold mb-3">Ready for New Gas Connection?</h4>
                <p className="mb-4 opacity-90">Call our certified technicians now</p>
                <button className="bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2 mx-auto">
                  <Phone size={20} />
                  <span>+971 58 282 1712</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Certifications;