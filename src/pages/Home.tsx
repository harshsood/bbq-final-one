import React from 'react';
import HeroSection from '../components/sections/HeroSection';
import Services from '../components/Services';
import DeliveryAreas from '../components/DeliveryAreas';
import Certifications from '../components/Certifications';
import Testimonials from '../components/Testimonials';

const Home = () => {
  return (
    <>
      <HeroSection />
      <Services />
      <Certifications />
      <Testimonials />
      <DeliveryAreas />
    </>
  );
};

export default Home;