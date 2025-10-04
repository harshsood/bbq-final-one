import React from 'react';
import HeroSection from '../components/sections/HeroSection';
import Services from '../components/Services';
import DeliveryAreas from '../components/DeliveryAreas';
import Certifications from '../components/Certifications';
import Testimonials from '../components/Testimonials';
import PopupForm from '../components/PopupForm';

const Home = () => {
  return (
    <>
      <HeroSection />
      <Services />
      <Certifications />
      <Testimonials />
      <DeliveryAreas />
      <PopupForm delay={7000} />
    </>
  );
};

export default Home;