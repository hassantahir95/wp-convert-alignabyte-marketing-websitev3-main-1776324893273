# AlignaByte Marketing WordPress Theme

**Production-ready WordPress theme converted from React/Vite project.**

## Overview

This is a complete, production-ready WordPress theme for AlignaByte Marketing - a job-booking engine built for residential contractors. The theme was converted from a React/Vite (Lovable) project with **zero placeholders** and **all content preserved exactly as it appeared in the original**.

## Features

### Complete Page Coverage
- **Homepage** - Full-featured landing page with 10 sections
- **Services** - Detailed services page with features and process steps
- **Case Studies** - Interactive accordion-style case studies
- **Contact** - Contact form with FAQ section

### All Functionality Implemented
- ✅ Mobile-responsive navigation with hamburger menu
- ✅ Scroll-triggered animations (IntersectionObserver)
- ✅ Hero image carousel (4 images, 3-second rotation)
- ✅ Testimonials carousel (manual + auto-advance)
- ✅ Booking modal with form handling
- ✅ Accordion components (case studies & FAQs)
- ✅ Contact form with email notifications
- ✅ Smooth scrolling for anchor links

### Design & Styling
- Custom Tailwind CSS configuration
- Google Fonts (Inter & Poppins)
- Full-width responsive layout
- CSS animations and transitions
- 22 high-quality images included

## Installation

1. Upload the `alignabyte-marketing-websitev3-main` folder to `wp-content/themes/`
2. Activate the theme in WordPress admin (Appearance → Themes)
3. The theme will automatically create all required pages
4. Configure your email address in WordPress Settings for contact form notifications

## File Structure

```
alignabyte-marketing-websitev3-main/
├── style.css              # Theme metadata
├── functions.php          # Core theme functions
├── index.php              # Fallback template
├── header.php             # Header with navigation
├── footer.php             # Footer with social links
├── front-page.php         # Homepage template
├── page-services.php      # Services page
├── page-case-studies.php  # Case studies page
├── page-contact.php       # Contact page
├── inc/
│   └── icons.php          # Inline SVG icons (Lucide)
├── template-parts/
│   └── sections/          # Reusable section templates
│       ├── reframe.php
│       ├── solution.php
│       ├── authority.php
│       ├── how-it-works.php
│       ├── before-after.php
│       ├── case-studies.php
│       ├── testimonials.php
│       └── final-close.php
├── assets/
│   ├── css/
│   │   ├── input.css      # Tailwind source
│   │   └── style.css      # Built CSS (33KB minified)
│   ├── js/
│   │   └── main.js        # Vanilla JavaScript
│   └── images/            # All image assets (22 files)
├── tailwind.config.js     # Tailwind configuration
├── package.json           # Build tools
└── languages/             # Translation-ready
```

## Development

### Prerequisites
- Node.js (for building CSS)
- npm

### Build CSS
```bash
cd wp-content/themes/alignabyte-marketing-websitev3-main
npm install
npm run build:css
```

### Customization
- Edit `assets/css/input.css` for custom styles
- Modify `tailwind.config.js` for theme configuration
- Update `assets/js/main.js` for JavaScript functionality
- Edit PHP templates for content changes

## Theme Configuration

### Functions Included
- **Auto-page creation** on theme activation
- **Contact form handler** with nonce verification
- **Booking modal handler** (AJAX-ready)
- **Custom asset helper** function
- **404 redirect fix** for known pages
- **Google Fonts enqueue**
- **Theme support** (title-tag, post-thumbnails, html5)

### Customizable Elements
- Colors (Tailwind config)
- Fonts (functions.php - Google Fonts URL)
- Contact form recipient (WordPress admin email)
- Navigation menu items (header.php)
- Social media links (footer.php)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance

- **CSS**: 33KB minified
- **JavaScript**: Vanilla JS (no frameworks)
- **Images**: Optimized JPEGs
- **Lazy loading**: Implemented for images
- **Animations**: GPU-accelerated transforms

## Security

- All user input sanitized
- Nonce verification on forms
- WordPress core security functions
- No external dependencies
- Proper escaping of output

## Accessibility

- Semantic HTML5
- ARIA labels on interactive elements
- Keyboard navigation support
- Color contrast compliance
- Screen reader friendly

## SEO

- Proper heading hierarchy
- Meta descriptions support
- Title tag support
- Semantic markup
- Fast loading times

## Support

For issues or questions, refer to the original React project source or WordPress documentation.

## Credits

- **Original Design**: Lovable/React project
- **Conversion**: WordPress theme development
- **Icons**: Lucide Icons (inline SVG)
- **Fonts**: Google Fonts (Inter & Poppins)
- **CSS Framework**: Tailwind CSS 3.4

## License

GNU General Public License v2 or later

## Changelog

### Version 1.0.0
- Initial release
- Complete conversion from React/Vite project
- All pages and functionality implemented
- Production-ready

---

**This theme is ready for production use.**
