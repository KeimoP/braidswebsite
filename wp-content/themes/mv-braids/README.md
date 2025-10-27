# MV Braids WordPress Theme

A warm, elegant, and modern WordPress theme designed for MV Braids - showcasing unique and detailed braid creations in A Coruña, Spain.

## Features

### Design
- **Mobile-First Responsive Design** - Perfect on all devices
- **Warm Color Palette** - Primary gold (#F6D57D) with elegant neutrals
- **Modern Typography** - Playfair Display for headings, Montserrat for body
- **Instagram Integration** - Showcase your best work
- **Gallery with Filtering** - Organized portfolio display

### Functionality
- **Advanced Booking Form** - With file uploads for current hair and reference photos
- **Custom Post Types**:
  - Services (with pricing and duration)
  - Gallery (with category filtering)
  - Bookings (admin management)
- **Email Notifications** - Automatic confirmation emails
- **GDPR Compliant** - Privacy policy integration and consent checkboxes

### Page Templates
1. **Homepage** - Hero section, featured styles, services preview, Instagram feed, CTAs
2. **Gallery** - Filterable masonry grid with lightbox
3. **Services & Pricing** - Card-based layout with detailed service information
4. **Booking** - Comprehensive form with file uploads and sidebar info
5. **About** - Tell your story
6. **FAQ** - Expandable questions and answers

## Installation

1. Upload the `mv-braids` folder to `/wp-content/themes/`
2. Activate the theme through the WordPress admin panel
3. Go to **Appearance > Customize** to configure:
   - Site Identity (logo, tagline)
   - Colors (if you want to customize)
   - Header Image (for hero section)
   - Menus

## Setup Instructions

### 1. Create Pages
Create these pages and assign the appropriate templates:

- **Inicio** (Homepage) - Template: Homepage
- **Galería** (Gallery) - Template: Gallery
- **Servicios** (Services) - Template: Services
- **Reserva** (Booking) - Template: Booking
- **Sobre Mí** (About) - Template: About
- **FAQ** (FAQ) - Template: FAQ
- **Política de Privacidad** (Privacy Policy) - Standard page template

### 2. Configure Menus
1. Go to **Appearance > Menus**
2. Create a menu called "Primary Menu"
3. Add pages: Inicio, Galería, Servicios, Sobre Mí, FAQ
4. Assign to "Primary Menu" location

### 3. Add Services
1. Go to **Services > Add New**
2. Add service title, description, and featured image
3. Fill in custom fields:
   - Price (e.g., "Desde €120")
   - Duration (e.g., "~3-4 horas")
   - Features (one per line)

### 4. Add Gallery Items
1. Go to **Gallery > Add New**
2. Upload featured image (this is the main photo)
3. Assign to a category (create categories first in **Gallery > Categories**)
4. Suggested categories:
   - Ghana Braids
   - French Braid Braids
   - Beaded Designs
   - Wedding Braids

### 5. Configure Contact Information
Edit `footer.php` to update:
- Instagram URL (replace @mv__braids link)
- WhatsApp number
- Email address
- Business hours

### 6. Set Homepage
1. Go to **Settings > Reading**
2. Select "A static page"
3. Choose your "Inicio" page as the homepage

## Recommended Plugins

### Essential
- **Contact Form 7** or **WPForms** - Additional form handling
- **Smash Balloon Instagram Feed** - Display Instagram feed
- **WPML** or **TranslatePress** - Multi-language support
- **UpdraftPlus** - Automated backups

### Performance
- **WP Rocket** or **W3 Total Cache** - Caching and optimization
- **Imagify** or **ShortPixel** - Image compression

### SEO
- **Rank Math SEO** or **Yoast SEO** - Search engine optimization

### Security
- **Wordfence** - Security and firewall
- **iThemes Security** - Additional protection

## Color Palette

```
Primary Gold:        #F6D57D
Gold Hover:          #f4ca5e
White:               #FFFFFF
Cream:               #FCF8F0
Dark Charcoal:       #2A2A2A
Soft Black:          #333333
Dusty Rose:          #E8B4B4
Muted Terracotta:    #D4A096
```

## Typography

- **Headings**: Playfair Display (Google Fonts)
- **Body**: Montserrat (Google Fonts)

## Customization

### Changing Colors
Edit the CSS variables in `style.css` under `:root`:

```css
:root {
    --primary-gold: #F6D57D;
    --white: #FFFFFF;
    --cream: #FCF8F0;
    /* etc. */
}
```

### Adding Custom Content
The theme uses standard WordPress hooks and filters. You can add custom functionality in `functions.php` or create a child theme.

## Booking Form Data

Booking submissions are saved as a custom post type "Booking" and include:
- Customer name, email, phone
- Selected service and preferred date
- Message/details
- Uploaded photos (current hair and reference)

Access bookings in **WordPress Admin > Bookings**

## Email Configuration

The theme sends two emails per booking:
1. **To Admin** - Notification with all booking details
2. **To Client** - Confirmation that request was received

Configure your SMTP settings using a plugin like **WP Mail SMTP** for reliable delivery.

## GDPR Compliance

The booking form includes:
- Privacy policy link and consent checkbox
- Clear data usage statement
- Complies with EU GDPR requirements

Make sure to create a comprehensive Privacy Policy page explaining:
- What data you collect
- How you use it
- How long you store it
- User rights (access, deletion, etc.)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Support

For theme support, customization requests, or bug reports, please contact the theme developer.

## Credits

- **Google Fonts**: Montserrat, Playfair Display
- **Font Awesome**: Icons (v6.4.0)
- **jQuery**: JavaScript library

## License

This theme is licensed under the GNU General Public License v2 or later.

## Changelog

### Version 1.0.0
- Initial release
- Homepage, Gallery, Services, Booking, About, FAQ templates
- Custom post types for Services, Gallery, Bookings
- Advanced booking form with file uploads
- Mobile-first responsive design
- Instagram integration ready
- GDPR compliant

---

**MV Braids** - Unique and Detailed Braid Creations
A Coruña, España | @mv__braids
