import { Shield, Award, CheckCircle, Phone } from 'lucide-react';

const Certifications = () => {
  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left Side - Group of Companies Card */}
          <div className="flex flex-col items-center justify-center h-full">
            <div className="bg-white rounded-2xl shadow-lg p-10 flex flex-col items-center justify-center min-h-[300px]">
              <h2 className="text-3xl font-bold text-gray-900 mb-4 text-center">We Are A Group Of Companies</h2>
              {/* Optionally add more info or logos here if needed */}
            </div>
          </div>

          {/* Right Side - Certificates Heading and Logos */}
          <div className="flex flex-col items-center justify-center h-full">
            <h2 className="text-4xl font-bold text-gray-900 mb-8 text-center">Certificates</h2>
            <div className="flex flex-row flex-wrap justify-center items-center gap-8">
              <img src="/images/all/sce-logo.png" alt="Supreme Council of Energy" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
              <img src="/images/all/EAFSM.png" alt="Emirates Authority for Standardization & Metrology" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
              <img src="/images/all/download-1.png" alt="Industry Regulatory Authority" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
              <img src="/images/all/hah-1.jpg" alt="Roads & Transport Authority" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
              <img src="/images/all/civil-defence-dubai-logo1.jpg" alt="Dubai Civil Defence" className="h-32 w-auto object-contain bg-white rounded-xl shadow p-4" />
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Certifications;
