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
          {/* Left Side - Text Content */}
          <div>
            <h3 className="text-2xl font-bold text-gray-900 mb-6">Our Certifications</h3>
            <ul className="list-disc pl-6 text-gray-700 text-lg space-y-2">
              <li>Supreme Council of Energy Approved</li>
              <li>Emirates Authority for Standardization & Metrology</li>
              <li>Dubai Civil Defence Certified</li>
              <li>Roads & Transport Authority Registered</li>
              <li>Industry Regulatory Authority Licensed</li>
            </ul>
            <div className="mt-8 bg-gradient-to-r from-orange-500 to-red-600 rounded-xl p-6 text-center text-white">
              <h4 className="text-xl font-bold mb-3">Ready for New Gas Connection?</h4>
              <p className="mb-4 opacity-90">Call our certified technicians now</p>
              <button className="bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2 mx-auto">
                <Phone size={20} />
                <span>+971 58 282 1712</span>
              </button>
            </div>
          </div>

          {/* Right Side - Certification Logos */}
          <div className="flex flex-wrap justify-center gap-8">
            <img src="/images/all/sce-logo.png" alt="Supreme Council of Energy" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
            <img src="/images/all/cropped-Untitled-design-1.png" alt="Emirates Authority for Standardization & Metrology" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
            <img src="/images/all/download-1.png" alt="Industry Regulatory Authority" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
            <img src="/images/all/cropped-Untitled-design-35x68.png" alt="Roads & Transport Authority" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
            <img src="/images/all/civil-defence-dubai-logo1.jpg" alt="Dubai Civil Defence" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Certifications;