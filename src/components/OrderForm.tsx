import React, { useState } from 'react';
import { Send, Phone } from 'lucide-react';
import { siteConfig } from '../config/siteConfig';

interface OrderFormProps {
  formType?: 'order' | 'connection';
  onClose?: () => void;
}

const OrderForm: React.FC<OrderFormProps> = ({ formType = 'order', onClose }) => {
  const [formData, setFormData] = useState({
    name: '',
    phone: '',
    email: '',
    area: '',
    service: '',
    quantity: '1',
    address: '',
    message: ''
  });

  const [submitted, setSubmitted] = useState(false);

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    const message = `
*${formType === 'connection' ? 'New Gas Connection Request' : 'Gas Cylinder Order'}*

📋 Customer Details:
Name: ${formData.name}
Phone: ${formData.phone}
Email: ${formData.email}

📍 Delivery Details:
Area: ${formData.area}
Address: ${formData.address}

🔥 Service Details:
Service: ${formData.service}
Quantity: ${formData.quantity}

💬 Additional Notes:
${formData.message || 'None'}
    `.trim();

    const whatsappUrl = `https://wa.me/${siteConfig.contact.whatsapp.replace(/[^0-9]/g, '')}?text=${encodeURIComponent(message)}`;

    window.open(whatsappUrl, '_blank');
    setSubmitted(true);

    setTimeout(() => {
      if (onClose) onClose();
      setSubmitted(false);
      setFormData({
        name: '',
        phone: '',
        email: '',
        area: '',
        service: '',
        quantity: '1',
        address: '',
        message: ''
      });
    }, 2000);
  };

  const serviceOptions = formType === 'connection'
    ? [
        { value: '', label: 'Select Connection Type' },
        { value: 'lpg-connection', label: 'LPG Gas Connection' },
        { value: 'cooking-gas', label: 'New Cooking Gas Connection' },
        { value: 'bbq-gas', label: 'BBQ Gas Connection' },
        { value: 'heater-gas', label: 'Heater Gas Connection' },
      ]
    : [
        { value: '', label: 'Select Cylinder Type' },
        { value: '5kg', label: '5kg Gas Cylinder - AED 35' },
        { value: '12kg', label: '12kg Gas Cylinder - AED 65' },
        { value: '15kg', label: '15kg Gas Cylinder - AED 85' },
        { value: 'propane', label: 'Propane Gas Cylinder' },
        { value: 'commercial', label: 'Commercial Bulk Order' },
      ];

  const deliveryAreas = [
    'Dubai Marina', 'JBR', 'Downtown Dubai', 'Business Bay', 'DIFC',
    'Jumeirah', 'Deira', 'Bur Dubai', 'Dubai Hills', 'JVC', 'JVT',
    'Motor City', 'Sports City', 'Arabian Ranches', 'The Springs',
    'The Meadows', 'Palm Jumeirah', 'Sharjah', 'Ajman'
  ];

  if (submitted) {
    return (
      <div className="text-center py-8">
        <div className="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg className="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h3 className="text-2xl font-bold text-gray-900 mb-2">Order Sent Successfully!</h3>
        <p className="text-gray-600">We've received your request. Our team will contact you shortly.</p>
      </div>
    );
  }

  return (
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
            className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
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
            className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
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
            className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="your.email@example.com"
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
            className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
          >
            <option value="">Select your area</option>
            {deliveryAreas.map((area, index) => (
              <option key={index} value={area}>{area}</option>
            ))}
          </select>
        </div>
      </div>

      <div className="grid md:grid-cols-2 gap-6">
        <div>
          <label htmlFor="service" className="block text-sm font-medium text-gray-700 mb-2">
            {formType === 'connection' ? 'Connection Type *' : 'Cylinder Type *'}
          </label>
          <select
            id="service"
            name="service"
            value={formData.service}
            onChange={handleChange}
            required
            className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
          >
            {serviceOptions.map((option, index) => (
              <option key={index} value={option.value}>{option.label}</option>
            ))}
          </select>
        </div>

        <div>
          <label htmlFor="quantity" className="block text-sm font-medium text-gray-700 mb-2">
            Quantity *
          </label>
          <input
            type="number"
            id="quantity"
            name="quantity"
            value={formData.quantity}
            onChange={handleChange}
            min="1"
            required
            className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="1"
          />
        </div>
      </div>

      <div>
        <label htmlFor="address" className="block text-sm font-medium text-gray-700 mb-2">
          Delivery Address *
        </label>
        <input
          type="text"
          id="address"
          name="address"
          value={formData.address}
          onChange={handleChange}
          required
          className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
          placeholder="Building name, Villa number, Street name"
        />
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
          rows={3}
          className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all resize-none"
          placeholder="Any special delivery instructions or requirements..."
        />
      </div>

      <div className="bg-orange-50 border border-orange-200 rounded-lg p-4 flex items-start space-x-3">
        <Phone className="text-orange-600 mt-1" size={20} />
        <div className="text-sm">
          <p className="font-semibold text-gray-900">Need Immediate Assistance?</p>
          <p className="text-gray-600">Call us directly at <a href={`tel:${siteConfig.contact.phone}`} className="text-orange-600 font-medium">{siteConfig.contact.phone}</a></p>
        </div>
      </div>

      <button
        type="submit"
        className="w-full bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg flex items-center justify-center space-x-2"
      >
        <span>Send via WhatsApp</span>
        <Send size={20} />
      </button>

      <p className="text-xs text-center text-gray-500">
        By submitting this form, you'll be redirected to WhatsApp to complete your order.
      </p>
    </form>
  );
};

export default OrderForm;
