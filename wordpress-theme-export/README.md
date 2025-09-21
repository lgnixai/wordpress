# Export Business WordPress Theme

A modern, responsive WordPress theme designed for export and international trade businesses. Built with Tailwind CSS and inspired by shadcn/ui design principles.

## Features

- **Modern Design**: Clean, professional design with a focus on user experience
- **Fully Responsive**: Looks great on all devices
- **Custom Post Type**: Built-in Products post type for showcasing export products
- **Page Templates**: 
  - Homepage with hero section, features, products showcase
  - About Us page with team and company information
  - Contact Us page with contact form and business information
  - Product archive and single product pages
  - Blog archive and single post pages
- **Tailwind CSS**: Utility-first CSS framework for easy customization
- **shadcn/ui Components**: Modern UI components integrated
- **SEO Optimized**: Clean code structure for better search engine visibility
- **Translation Ready**: Fully prepared for internationalization

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Node.js 14.0 or higher (for development)

## Installation

1. Upload the theme folder to `/wp-content/themes/` directory
2. Activate the theme through the 'Themes' menu in WordPress
3. Install dependencies and build assets:

```bash
cd wp-content/themes/wordpress-theme-export
npm install
npm run build
```

## Development

For development with hot reload:

```bash
npm run dev
```

Build for production:

```bash
npm run build
```

## Theme Setup

### 1. Create Required Pages

After activating the theme, create the following pages:

- **Home** - Set as front page (Settings > Reading)
- **About** - Use "About Us" page template
- **Contact** - Use "Contact Us" page template
- **Blog** - Set as posts page (Settings > Reading)

### 2. Menu Setup

1. Go to Appearance > Menus
2. Create a "Primary Menu" and assign it to "Primary Menu" location
3. Create a "Footer Menu" and assign it to "Footer Menu" location

### 3. Customizer Options

Navigate to Appearance > Customize to set:

- **Site Identity**: Logo and site title
- **Header Settings**: CTA button text and link
- **Footer Settings**: Copyright text
- **Social Media**: Add your social media URLs
- **Company Information**: Phone, email, and address

### 4. Widgets

The theme includes several widget areas:

- Sidebar (for blog pages)
- Footer Widget Areas (4 columns)

## Custom Post Types

### Products

The theme includes a custom "Products" post type with:

- Product categories taxonomy
- Custom fields for price, SKU, features, and specifications
- Gallery support
- Archive and single product templates

To add products:

1. Go to Products > Add New
2. Add product information
3. Set featured image
4. Assign product categories
5. Add custom fields (if using ACF or similar plugin)

## Customization

### Colors

Edit the CSS variables in `assets/css/src/main.css`:

```css
:root {
  --primary: 221.2 83.2% 53.3%;
  --secondary: 210 40% 96.1%;
  /* ... other colors */
}
```

### Fonts

Update the font family in `tailwind.config.js`:

```javascript
fontFamily: {
  sans: ["Inter", "system-ui", "sans-serif"],
}
```

### Components

The theme uses Tailwind CSS utility classes. Common components include:

- `.btn` - Buttons
- `.card` - Card containers
- `.input` - Form inputs
- `.badge` - Labels and badges

## Plugin Recommendations

- **Advanced Custom Fields (ACF)**: For additional custom fields
- **Contact Form 7**: For advanced contact forms
- **Yoast SEO**: For enhanced SEO features
- **WP Super Cache**: For performance optimization

## Support

For support and documentation, please visit [your-website.com/support](https://your-website.com/support)

## License

This theme is licensed under GPL v2 or later.

## Credits

- Built with [Tailwind CSS](https://tailwindcss.com/)
- Design inspired by [shadcn/ui](https://ui.shadcn.com/)
- Icons from [Heroicons](https://heroicons.com/)