import React, { useState, useEffect } from 'react';
import { X } from 'lucide-react';
import OrderForm from './OrderForm';

interface PopupFormProps {
  delay?: number;
}

const PopupForm: React.FC<PopupFormProps> = ({ delay = 7000 }) => {
  const [isVisible, setIsVisible] = useState(false);
  const [hasShown, setHasShown] = useState(false);

  useEffect(() => {
    const hasSeenPopup = sessionStorage.getItem('hasSeenPopup');

    if (!hasSeenPopup && !hasShown) {
      const timer = setTimeout(() => {
        setIsVisible(true);
        setHasShown(true);
        sessionStorage.setItem('hasSeenPopup', 'true');
      }, delay);

      return () => clearTimeout(timer);
    }
  }, [delay, hasShown]);

  const handleClose = () => {
    setIsVisible(false);
  };

  if (!isVisible) return null;

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center animate-fadeIn">
      <div
        className="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm"
        onClick={handleClose}
      />

      <div className="relative bg-white rounded-2xl shadow-2xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto animate-slideUp">
        <div className="sticky top-0 bg-gradient-to-r from-orange-500 to-red-600 px-6 py-4 flex items-center justify-between rounded-t-2xl">
          <div className="text-white">
            <h2 className="text-2xl font-bold">Get Your Gas Cylinder Today!</h2>
            <p className="text-orange-100 text-sm">Same-day delivery across Dubai</p>
          </div>
          <button
            onClick={handleClose}
            className="p-2 hover:bg-white/20 rounded-lg transition-colors"
            aria-label="Close popup"
          >
            <X size={24} className="text-white" />
          </button>
        </div>

        <div className="px-6 py-6">
          <div className="mb-6 text-center">
            <div className="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-medium mb-4">
              <span className="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
              <span>Special Offer: Free delivery on orders above AED 100</span>
            </div>
          </div>

          <OrderForm formType="order" onClose={handleClose} />
        </div>
      </div>
    </div>
  );
};

export default PopupForm;
