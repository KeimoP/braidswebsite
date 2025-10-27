# MV Braids Theme - Quick Start Guide

## 🎨 Theme Activation

1. **Activate the Theme**
   - Go to WordPress Admin Dashboard
   - Navigate to **Appearance > Themes**
   - Find "MV Braids" and click **Activate**

## 📄 Initial Setup (30 minutes)

### Step 1: Create Pages

Create the following pages in WordPress Admin (**Pages > Add New**):

| Page Name (Spanish) | Slug | Template |
|---------------------|------|----------|
| Inicio | inicio | Homepage |
| Galería | galeria | Gallery |
| Servicios | servicios | Services |
| Reserva | reserva | Booking |
| Sobre Mí | sobre-mi | About |
| FAQ | faq | FAQ |
| Política de Privacidad | politica-de-privacidad | Privacy Policy |

**How to assign a template:**
1. While editing the page, look for "Page Attributes" or "Template" in the right sidebar
2. Select the appropriate template from the dropdown
3. Click "Publish"

### Step 2: Set Homepage

1. Go to **Settings > Reading**
2. Select "A static page"
3. For "Homepage", choose "Inicio"
4. Save Changes

### Step 3: Create Navigation Menu

1. Go to **Appearance > Menus**
2. Click "Create a new menu"
3. Name it "Primary Menu"
4. Add pages in this order:
   - Inicio
   - Galería
   - Servicios
   - Sobre Mí
   - FAQ
5. Check "Primary Menu" under "Display location"
6. Save Menu

### Step 4: Add Services

1. Go to **Services > Add New**
2. Example Service #1:
   - **Title**: Box Braids Medianas
   - **Content**: Las box braids medianas son perfectas para un look versátil y elegante. Duran de 6-8 semanas con el cuidado adecuado.
   - **Featured Image**: Upload a photo
   - **Price**: Desde €120
   - **Duration**: ~3-4 horas
   - **Features** (one per line):
     ```
     Incluye lavado y preparación
     Trenzas uniformes y prolijas
     Instrucciones de cuidado
     Retoque de bordes incluido
     ```

3. Repeat for other services:
   - Ghana Braids (€140-180, 4-5 horas)
   - Cornrows (€80-120, 2-3 horas)
   - Knotless Braids (€160-200, 5-6 horas)
   - Fulani Braids (€130-170, 4-5 horas)

### Step 5: Add Gallery Items

1. Go to **Gallery > Add New**
2. For each gallery item:
   - **Title**: Description of the style
   - **Featured Image**: Upload the photo (this is what will be displayed)
   - **Category**: Assign to appropriate category

**First, create categories:**
- Go to **Gallery > Categories**
- Add these categories:
  - Ghana Braids
  - Box Braids
  - Cornrows
  - Fulani Braids
  - Trenzas de Boda
  - Diseños con Cuentas

### Step 6: Customize Theme Settings

1. Go to **Appearance > Customize**
2. **Site Identity**:
   - Site Title: MV Braids
   - Tagline: Unique and Detailed Braid Creations
   - Upload logo (if you have one)
3. **Header Image**:
   - Upload a high-quality hero image (1920x1080px recommended)
4. Save & Publish

## 🔧 Essential Settings

### Contact Information

Edit these files to update your contact info:

**Footer (footer.php)** - Line 17-20:
```php
<a href="https://instagram.com/mv__braids" ... >  // Update Instagram
<a href="https://wa.me/34XXXXXXXXX" ... >        // Update WhatsApp number
<a href="mailto:YOUR_EMAIL@domain.com" ... >     // Update Email
```

**Booking Page (page-booking.php)** - Line 180:
- Update Google Maps embed code with your actual studio location

### Email Configuration

For booking form emails to work reliably:

1. Install **WP Mail SMTP** plugin
2. Configure with your email provider (Gmail, SendGrid, etc.)
3. Test email sending

## 🎨 Customizing Colors

To change colors, edit `style.css` (Lines 42-64):

```css
:root {
    --primary-gold: #F6D57D;        /* Change to your color */
    --white: #FFFFFF;
    --cream: #FCF8F0;
    /* etc. */
}
```

## 📱 Testing

After setup, test these features:

- [ ] Homepage displays correctly
- [ ] Gallery filtering works
- [ ] Services display with prices
- [ ] Booking form submits successfully
- [ ] Email notifications arrive
- [ ] Mobile menu works
- [ ] Site looks good on mobile (use browser dev tools)

## 🚀 Recommended Plugins to Install

### Essential
1. **Smash Balloon Instagram Feed** - For Instagram integration
   - Free version: https://wordpress.org/plugins/instagram-feed/
   - After install: Connect your Instagram account
   - Use shortcode `[instagram-feed]` in the homepage

2. **Contact Form 7** (Alternative form handler)
   - Free: https://wordpress.org/plugins/contact-form-7/

3. **UpdraftPlus** - Backups
   - Free: https://wordpress.org/plugins/updraftplus/

### Performance
4. **WP Rocket** (Premium) or **W3 Total Cache** (Free)
5. **ShortPixel Image Optimizer** - Compress images

### SEO
6. **Rank Math SEO** - Better than Yoast, easier to use
   - Free: https://wordpress.org/plugins/seo-by-rank-math/

### Security
7. **Wordfence** - Security scanner and firewall
   - Free: https://wordpress.org/plugins/wordfence/

## 📝 Adding Instagram Feed

**Option 1: Using Smash Balloon Instagram Feed Plugin** (Recommended)

1. Install "Smash Balloon Instagram Feed" plugin
2. Go to **Instagram Feed > Settings**
3. Connect your Instagram account (@mv__braids)
4. Go to Homepage editor
5. Replace lines 145-164 with: `<?php echo do_shortcode('[instagram-feed]'); ?>`

**Option 2: Manual Instagram embed**

Replace the placeholder Instagram images in `page-home.php` with actual image URLs from your Instagram.

## 🎯 Content Recommendations

### Homepage Hero Image
- Size: 1920x1080px
- Format: JPG (optimized)
- Shows: Your best braid work with good lighting

### Gallery Photos
- Size: Minimum 800x800px
- Format: JPG (optimized)
- Quality: High-resolution, well-lit, clear details

### Service Images
- Size: 600x400px
- Format: JPG
- Shows: Clear example of each braid style

## 🔒 GDPR Compliance Checklist

- [x] Privacy Policy page created
- [ ] Add cookie notice (use "Cookie Notice" plugin)
- [x] Booking form has privacy consent checkbox
- [ ] Update Privacy Policy with your actual email and contact info
- [ ] Add data retention policy (how long you keep booking data)

## 📞 Support & Help

### If booking form doesn't send emails:
1. Install WP Mail SMTP plugin
2. Check WordPress > Settings > General - verify "Email Address"
3. Test with WP Mail SMTP's email test feature

### If gallery filter doesn't work:
1. Clear browser cache
2. Check if jQuery is loaded (view page source, search for "jquery")
3. Check browser console for JavaScript errors (F12 > Console tab)

### If mobile menu doesn't open:
1. Clear browser cache
2. Test on actual mobile device (not just browser resize)
3. Check if JavaScript file is loaded

## 🎓 Next Steps After Setup

1. **Add real content** - Replace placeholder text with your own
2. **Upload photos** - Add 20-30 gallery items minimum
3. **Test booking form** - Submit a test booking
4. **SEO Setup** - Install Rank Math and optimize pages
5. **Speed Optimization** - Install caching plugin
6. **Instagram integration** - Connect Instagram feed
7. **Analytics** - Install Google Analytics or Jetpack stats
8. **Backup** - Set up automated backups with UpdraftPlus

## 📱 Mobile Testing URLs

Test your site on:
- https://search.google.com/test/mobile-friendly
- https://www.responsinator.com/

## 🌐 Spanish Text Customization

All Spanish text is in the theme. To change any text:
1. Search for the Spanish phrase in theme files
2. Edit the text directly
3. Or use a translation plugin for multi-language support

## ✨ Final Polish

Before going live:
- [ ] Add your actual Instagram handle everywhere
- [ ] Update phone numbers and email addresses
- [ ] Add real studio location to Google Maps
- [ ] Fill in About page with your story
- [ ] Customize FAQ with your real Q&A
- [ ] Add at least 15-20 gallery photos
- [ ] Test booking form end-to-end
- [ ] Check all links work
- [ ] Verify mobile experience
- [ ] Set up email notifications
- [ ] Create and publish 2-3 blog posts (optional)

---

**Congratulations! Your MV Braids website is ready to launch! 🎉**

Need help? Contact through the theme documentation or your developer.
