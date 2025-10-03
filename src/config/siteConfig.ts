// Site Configuration - WordPress Theme Ready
export const siteConfig = {
  // Company Information
  company: {
    name: 'BBQ Gas',
    tagline: "Dubai's Gas Cylinder Experts",
    description: 'Professional gas cylinder new connections and delivery service for homes, restaurants, and BBQ enthusiasts across Dubai.',
    logo: '🔥',
    established: '2010'
  },

  // Contact Information
  contact: {
    phone: '+971 58 282 1712',
    email: 'orders@bbqgas.ae',
    emergencyPhone: '+971 58 282 1712',
    whatsapp: '+971 58 282 1712',
    address: 'Dubai, UAE',
    serviceAreas: 'All Dubai Areas'
  },

  // Business Hours
  hours: {
    delivery: 'Same Day Connection',
    support: 'Professional Installation',
    emergency: '24/7 Emergency'
  },

  // Services
  services: {
    main: [
      {
        id: 'lpg-gas-connection',
        name: 'LPG Gas Connection',
        description: 'Safe and reliable LPG connections for your home. Professional installation with quality assurance and same-day service.',
        price: 'Starting from AED 35',
        features: [
          'LPG gas cylinder installation',
          'Safety inspection included', 
          'Free connection setup',
          'Home cooking solutions',
          'Quality gas cylinders',
          'Professional technicians'
        ],
  image: '/images/all/WhatsApp-Image-2022-09-01-at-12.27.34-PM-1.jpeg'
      },
      {
        id: 'bbq-gas-supply',
        name: 'BBQ Gas Supply',
        description: 'Never run out of gas in your BBQ events with our fast delivery. Premium quality gas cylinders for outdoor cooking.',
        price: 'Starting from AED 45',
        features: [
          'BBQ gas cylinder supply',
          'Fast delivery service',
          'Premium quality gas',
          'Outdoor cooking support',
          'Event gas supply',
          'Emergency delivery'
        ],
  image: '/images/all/civil-defence-dubai-logo1.jpg'
      },
      {
        id: 'new-cooking-gas-connection',
        name: 'New Cooking Gas Connection',
        description: 'Hassle-free new connections tailored to your cooking needs. Professional setup with safety compliance.',
        price: 'Starting from AED 55',
        features: [
          'New gas connection setup',
          'Cooking gas installation',
          'Safety compliance check',
          'Professional installation',
          'Quality assurance',
          'Same-day connection'
        ],
  image: '/images/all/WhatsApp-Image-2022-09-01-at-12.27.30-PM.jpeg'
      },
      {
        id: 'bbq-cleaning-service',
        name: 'BBQ Cleaning Service',
        description: 'Professional BBQ cleaning for a spotless grill. Deep cleaning service to maintain your BBQ equipment.',
        price: 'Starting from AED 80',
        features: [
          'Deep BBQ cleaning',
          'Professional equipment',
          'Spotless grill maintenance',
          'Regular cleaning service',
          'Equipment sanitization',
          'Post-cleaning inspection'
        ],
  image: '/images/all/EAFSM.png'
      },
      {
        id: 'propane-gas-supplier',
        name: 'Propane Gas Supplier',
        description: 'Affordable propane gas supply for residential and commercial use. Reliable delivery across Dubai.',
        price: 'Starting from AED 40',
        features: [
          'Propane gas supply',
          'Residential & commercial',
          'Affordable pricing',
          'Reliable delivery',
          'Quality propane cylinders',
          'Bulk supply available'
        ],
  image: '/images/all/civil-defence-dubai-logo1.jpg'
      },
      {
        id: 'heater-gas-supplier',
        name: 'Heater Gas Supplier',
        description: 'Propane gas cylinders supplier for Pyramid heaters and Mushroom heaters in Dubai. Professional heating solutions.',
        price: 'Starting from AED 65',
        features: [
          'Heater gas supply',
          'Pyramid heater gas',
          'Mushroom heater gas',
          'Professional heating solutions',
          'Dubai-wide delivery',
          'Quality gas cylinders'
        ],
  image: '/images/all/EAFSM.png'
      }
    ]
  },

  // Cylinder Types
  cylinders: [
    {
      size: '5kg',
      description: 'Perfect for small families and light cooking',
      duration: '2-3 weeks usage',
      price: 'AED 35',
      popular: false
    },
    {
      size: '12kg', 
      description: 'Ideal for medium families and regular cooking',
      duration: '4-6 weeks usage',
      price: 'AED 65',
      popular: true
    },
    {
      size: '15kg',
      description: 'Best for large families and heavy cooking', 
      duration: '6-8 weeks usage',
      price: 'AED 85',
      popular: false
    }
  ],

  // Delivery Areas
  deliveryAreas: [
    {
      zone: 'Dubai Marina & JBR',
      areas: ['Dubai Marina', 'JBR', 'Al Sufouh', 'Knowledge Village'],
      deliveryTime: '30-45 mins'
    },
    {
      zone: 'Downtown & Business Bay',
      areas: ['Downtown Dubai', 'Business Bay', 'DIFC', 'Trade Centre'], 
      deliveryTime: '25-40 mins'
    },
    {
      zone: 'Jumeirah & DIFC',
      areas: ['Jumeirah 1,2,3', 'Umm Suqeim', 'Al Wasl', 'Satwa'],
      deliveryTime: '35-50 mins'
    },
    {
      zone: 'Deira & Bur Dubai',
      areas: ['Deira', 'Bur Dubai', 'Karama', 'Oud Metha'],
      deliveryTime: '40-55 mins'
    },
    {
      zone: 'New Dubai Areas', 
      areas: ['Dubai Hills', 'JVC', 'JVT', 'Motor City', 'Sports City'],
      deliveryTime: '45-60 mins'
    },
    {
      zone: 'Northern Emirates',
      areas: ['Sharjah', 'Ajman', 'RAK', 'Fujairah'],
      deliveryTime: '60-90 mins'
    }
  ],

  // Social Media
  social: {
    facebook: '#',
    instagram: '#', 
    twitter: '#',
    linkedin: '#'
  },

  // SEO
  seo: {
    title: 'BBQ Gas Dubai - Premium Gas Cylinder Supplier | Same Day Delivery',
    description: 'BBQ Gas Dubai - Leading gas cylinder supplier in UAE. Fast delivery, licensed service, competitive prices. Order propane, butane & cooking gas cylinders online. 24/7 support.',
    keywords: 'gas cylinder Dubai, propane gas UAE, butane cylinder, cooking gas delivery, BBQ gas supplier, gas cylinder refill Dubai, emergency gas delivery'
  },

  // Testimonials
  testimonials: [
    {
      id: 1,
      name: 'Ahmed Al-Rashid',
      location: 'Dubai Marina',
      rating: 5,
      comment: 'Excellent service! BBQ Gas provided same-day LPG connection for my new apartment. Professional technicians and great customer service.',
      service: 'LPG Gas Connection',
  image: '/images/all/WhatsApp-Image-2022-09-01-at-11.48.28-PM.jpeg'
    },
    {
      id: 2,
      name: 'Sarah Mohammed',
      location: 'Downtown Dubai',
      rating: 5,
      comment: 'Best BBQ gas supplier in Dubai! Never run out of gas during our weekend BBQ parties. Fast delivery and quality service.',
      service: 'BBQ Gas Supply',
  image: '/images/all/WhatsApp-Image-2022-09-01-at-12.27.36-PM.jpeg'
    },
    {
      id: 3,
      name: 'Omar Hassan',
      location: 'Business Bay',
      rating: 5,
      comment: 'Professional cooking gas connection service. The technicians were knowledgeable and completed the installation perfectly.',
      service: 'New Cooking Gas Connection',
  image: '/images/all/icon2-cc0rawpixel-150x150.png'
    },
    {
      id: 4,
      name: 'Fatima Al-Zahra',
      location: 'Jumeirah',
      rating: 5,
      comment: 'Amazing BBQ cleaning service! My grill looks brand new. Professional team and excellent attention to detail.',
      service: 'BBQ Cleaning Service',
  image: '/images/all/WhatsApp-Image-2022-09-01-at-12.27.36-PM.jpeg'
    },
    {
      id: 5,
      name: 'Khalid Rahman',
      location: 'Dubai Hills',
      rating: 5,
      comment: 'Reliable propane gas supplier for our restaurant. Consistent quality and timely delivery. Highly recommended!',
      service: 'Propane Gas Supplier',
  image: '/images/all/WhatsApp-Image-2022-09-01-at-11.48.28-PM.jpeg'
    },
    {
      id: 6,
      name: 'Mariam Abdullah',
      location: 'JVC',
      rating: 5,
      comment: 'Perfect heater gas supply for our outdoor events. Professional service and competitive pricing.',
      service: 'Heater Gas Supplier',
  image: '/images/all/WhatsApp-Image-2022-09-01-at-12.27.36-PM.jpeg'
    }
  ]
};

export default siteConfig;