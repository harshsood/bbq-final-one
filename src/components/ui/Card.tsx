import React from 'react';

interface CardProps {
  children: React.ReactNode;
  className?: string;
  hover?: boolean;
  padding?: 'sm' | 'md' | 'lg';
}

const Card: React.FC<CardProps> = ({
  children,
  className = '',
  hover = true,
  padding = 'md'
}) => {
  const baseClasses = 'bg-white rounded-2xl shadow-lg border border-gray-100';
  const hoverClasses = hover ? 'hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1' : '';
  
  const paddingClasses = {
    sm: 'p-4',
    md: 'p-6',
    lg: 'p-8'
  };

  return (
    <div className={`${baseClasses} ${hoverClasses} ${paddingClasses[padding]} ${className}`}>
      {children}
    </div>
  );
};

export default Card;