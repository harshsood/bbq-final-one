import { useState, useEffect } from 'react';
import { ArrowRight, Shield, CheckCircle, Truck } from 'lucide-react';
import { siteConfig } from '../../config/siteConfig';
import Button from '../ui/Button';
import Section from '../ui/Section';
import Container from '../ui/Container';
import Modal from '../ui/Modal';
import OrderForm from '../OrderForm';

const HeroSection = () => {
  const [currentText, setCurrentText] = useState('');
  const [currentIndex, setCurrentIndex] = useState(0);
  const [isDeleting, setIsDeleting] = useState(false);
  const [typeSpeed, setTypeSpeed] = useState(150);
  const [showConnectionModal, setShowConnectionModal] = useState(false);
  const [showOrderModal, setShowOrderModal] = useState(false);

  const texts = ['BBQ Gas', 'Propane Gas', 'Heater Gas'];

  useEffect(() => {
    const handleType = () => {
      const current = texts[currentIndex];
      
      if (isDeleting) {
        setCurrentText(current.substring(0, currentText.length - 1));
        setTypeSpeed(75);
      } else {
        setCurrentText(current.substring(0, currentText.length + 1));
        setTypeSpeed(150);
      }

      if (!isDeleting && currentText === current) {
        setTimeout(() => setIsDeleting(true), 2000);
      } else if (isDeleting && currentText === '') {
        setIsDeleting(false);
        setCurrentIndex((prevIndex) => (prevIndex + 1) % texts.length);
      }
    };

    const timer = setTimeout(handleType, typeSpeed);
    return () => clearTimeout(timer);
  }, [currentText, isDeleting, currentIndex, typeSpeed, texts]);

  return (
    <Section background="gradient" className="min-h-screen pt-40 pb-16">
      <Container>
        <div className="grid lg:grid-cols-2 gap-12 items-start">
          {/* Left Content */}
          <div className="space-y-8 animate-fade-in-up">
            <div>
              <h1 className="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Dubai's Premier
                <br />
                <span className="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                  {currentText}
                  <span className="animate-pulse">|</span>
                </span>
                <br />
                New Connections & Delivery
              </h1>
              <p className="text-xl text-gray-600 leading-relaxed mb-8">
                {siteConfig.company.description}
              </p>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <Button size="lg" onClick={() => setShowConnectionModal(true)}>
                <span>Get New Connection</span>
                <ArrowRight size={20} />
              </Button>
              <Button variant="outline" size="lg" onClick={() => setShowOrderModal(true)}>
                BBQ Gas Delivery
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="grid grid-cols-3 gap-6 pt-8">
              <div className="text-center">
                <div className="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                  <Shield className="text-green-600" size={24} />
                </div>
                <p className="text-sm font-medium text-gray-700">Licensed & Insured</p>
              </div>
              <div className="text-center">
                <div className="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                  <CheckCircle className="text-orange-600" size={24} />
                </div>
                <p className="text-sm font-medium text-gray-700">New Connections</p>
              </div>
              <div className="text-center">
                <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                  <Truck className="text-blue-600" size={24} />
                </div>
                <p className="text-sm font-medium text-gray-700">Same Day Delivery</p>
              </div>
            </div>
          </div>

          {/* Right Content - Image */}
          <div className="relative animate-fade-in-right">
            <div className="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 opacity-20"></div>
            <div className="relative bg-white p-8 rounded-3xl shadow-2xl">
              <img
                src="/images/all/WhatsApp-Image-2022-09-01-at-11.48.28-PM.jpeg"
                alt="BBQ Gas Delivery Truck in Dubai"
                className="w-full h-96 object-cover rounded-2xl"
              />
              
              {/* Floating Card */}
              <div className="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                <div className="flex items-center space-x-4">
                  <div className="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center">
                    <span className="text-white font-bold">✓</span>
                  </div>
                  <div>
                    <p className="font-semibold text-gray-800">5000+ Connections</p>
                    <p className="text-sm text-gray-600">BBQ Gas Installed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </Container>

      <Modal
        isOpen={showConnectionModal}
        onClose={() => setShowConnectionModal(false)}
        title="Get New Gas Connection"
      >
        <OrderForm formType="connection" onClose={() => setShowConnectionModal(false)} />
      </Modal>

      <Modal
        isOpen={showOrderModal}
        onClose={() => setShowOrderModal(false)}
        title="Order Gas Cylinders"
      >
        <OrderForm formType="order" onClose={() => setShowOrderModal(false)} />
      </Modal>
    </Section>
  );
};

export default HeroSection;
