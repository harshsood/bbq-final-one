import React from 'react';

interface SectionProps {
  children: React.ReactNode;
  className?: string;
  background?: 'white' | 'gray' | 'gradient' | 'primary';
  padding?: 'sm' | 'md' | 'lg';
  id?: string;
}

const Section: React.FC<SectionProps> = ({
  children,
  className = '',
  background = 'white',
  padding = 'lg',
  id
}) => {
  const backgroundClasses = {
    white: 'bg-white',
    gray: 'bg-gray-50',
    gradient: 'bg-gradient-to-br from-blue-50 via-white to-orange-50',
    primary: 'bg-gradient-to-r from-orange-500 to-red-600'
  };

  const paddingClasses = {
    sm: 'py-10',
    md: 'py-16', 
    lg: 'py-20'
  };

  return (
    <section 
      id={id}
      className={`${backgroundClasses[background]} ${paddingClasses[padding]} ${className}`}
    >
      <div className="max-w-7xl mx-auto px-4">
        {children}
      </div>
    </section>
  );
};

export default Section;