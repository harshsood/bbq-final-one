# BBQ Gas Dubai - WordPress Theme Ready

A modern, responsive website for BBQ Gas Dubai - a premium gas cylinder supplier in Dubai. This project is structured to be easily converted to a WordPress theme.

## Features

- **Multi-page Application**: Home, About, Services, Contact
- **SEO Optimized**: Complete meta tags, structured data, semantic HTML
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Animated UI**: Typing animations, hover effects, smooth transitions
- **WordPress Ready**: Modular structure for easy theme conversion

## Project Structure

```
src/
├── components/
│   ├── ui/              # Reusable UI components
│   │   ├── Button.tsx
│   │   ├── Card.tsx
│   │   ├── Section.tsx
│   │   └── Container.tsx
│   ├── sections/        # Page sections
│   │   └── HeroSection.tsx
│   ├── Header.tsx       # Site header
│   ├── Footer.tsx       # Site footer
│   └── ...
├── pages/               # Page components
│   ├── Home.tsx
│   ├── About.tsx
│   ├── Services.tsx
│   └── Contact.tsx
├── config/              # Site configuration
│   └── siteConfig.ts    # Centralized site settings
├── utils/               # Utility functions
│   └── constants.ts     # Theme constants
├── hooks/               # Custom React hooks
│   └── useScrollAnimation.ts
└── ...
```

## WordPress Theme Conversion

This project is structured for easy WordPress theme conversion:

### 1. Configuration Management
- All site content is centralized in `src/config/siteConfig.ts`
- Easy to convert to WordPress customizer options
- Structured data for WordPress integration

### 2. Component Architecture
- Reusable UI components in `src/components/ui/`
- Section-based components for easy WordPress block creation
- Modular design for WordPress template parts

### 3. Content Structure
- Separated content from presentation
- WordPress-ready data structures
- SEO-optimized content organization

### 4. Styling System
- Tailwind CSS for utility-first styling
- Consistent design tokens in `src/utils/constants.ts`
- WordPress-compatible CSS structure

## Key Components for WordPress

### Site Configuration (`siteConfig.ts`)
Contains all customizable content:
- Company information
- Contact details
- Services data
- Delivery areas
- SEO settings

### UI Components
- `Button.tsx` - Reusable button component
- `Card.tsx` - Content card component
- `Section.tsx` - Page section wrapper
- `Container.tsx` - Content container

### Page Templates
- `Home.tsx` - Homepage template
- `About.tsx` - About page template
- `Services.tsx` - Services page template
- `Contact.tsx` - Contact page template

## Development

```bash
# Install dependencies
npm install

# Start development server
npm run dev

# Build for production
npm run build
```

## Deployment

The project includes routing fixes for deployment:
- HashRouter for client-side routing
- `_redirects` file for SPA support
- Optimized build configuration

## WordPress Integration Notes

1. **Content Management**: Replace `siteConfig.ts` with WordPress customizer/options
2. **Dynamic Content**: Convert static data to WordPress queries
3. **Forms**: Integrate with WordPress form handling
4. **SEO**: Use WordPress SEO plugins with existing meta structure
5. **Images**: Replace static images with WordPress media library

## Contact Information

- **Phone**: +971 58 282 1712
- **Email**: orders@bbqgas.ae
- **Service Area**: Dubai, UAE

## License

This project is designed for BBQ Gas Dubai and can be used as a WordPress theme template.