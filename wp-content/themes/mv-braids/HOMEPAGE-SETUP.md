# MV Braids - Modern Homepage Setup Guide

## 🎉 Your Homepage Has Been Redesigned!

The homepage now features:
- ✨ **Animated circular logo** in the hero section
- 📸 **Automatic Instagram photo slideshow** with controls
- 🎬 **Stock GIF/video showcase** section
- 💎 **Modern animations** and smooth transitions
- 🎨 **Enhanced color schemes** with your gold palette

---

## 📸 STEP 1: Add Your Instagram Photos to the Slideshow

### Where to Add Photos:
Navigate to: `wp-content/themes/mv-braids/images/slideshow/`

### Instructions:
1. **Download 5-10 of your best Instagram photos** from @mv__trenzas
   - Use vertical phone photos (best fit)
   - High resolution (1080px width minimum)

2. **Rename them:**
   ```
   slide-1.jpg
   slide-2.jpg
   slide-3.jpg
   slide-4.jpg
   slide-5.jpg
   ```

3. **Upload to the slideshow folder**

4. **Features:**
   - Auto-advances every 5 seconds
   - Arrow navigation buttons
   - Dot indicators
   - Swipe gestures on mobile
   - Pauses when hovering

### To Add More Slides:
Edit `page-home.php` and add more slide divs + update dot count. See the README in the slideshow folder for details.

---

## 🎬 STEP 2: Add GIF Videos or Images

### Where to Add GIFs:
Navigate to: `wp-content/themes/mv-braids/images/gifs/`

### Instructions:
1. **Find or create 3 GIF files** showing braiding process
   
   **Free GIF sources:**
   - Giphy.com (search "hair braiding")
   - Tenor.com (search "braids tutorial")
   - Pexels.com (download videos, convert to GIF)

2. **Rename them:**
   ```
   braiding-process-1.gif
   braiding-process-2.gif
   braiding-process-3.gif
   ```

3. **Specifications:**
   - Square format (500x500px to 800x800px)
   - File size under 2MB each
   - 3-10 seconds looping animation

4. **Upload to the gifs folder**

### Alternative - Use Your Own Videos:
You can use short video clips from your Instagram/TikTok:
- Download video from your social media
- Convert to GIF using ezgif.com
- Upload to gifs folder

---

## 🎨 What Changed on the Homepage:

### ❌ REMOVED:
- Blog posts section
- Gallery post queries
- Static featured styles cards
- Old Instagram feed placeholder boxes

### ✅ ADDED:
1. **Hero Section:**
   - Your circular logo with animation
   - Smooth fade-in animations
   - Scroll indicator
   - Animated gradient background

2. **Instagram Slideshow:**
   - Full-screen vertical image display
   - Automatic rotation
   - Navigation controls
   - Mobile swipe support

3. **Video Showcase:**
   - 3-column GIF grid
   - Hover effects
   - Caption boxes

4. **Why Choose Section:**
   - 4 feature boxes with icons
   - Animated on scroll
   - Responsive grid

5. **Enhanced CTA:**
   - Pulsing icon animation
   - Dual action buttons
   - Dark elegant background

---

## 🎯 Customization Options

### Change Slideshow Speed:
Edit `js/script.js` line with `5000` (milliseconds):
```javascript
slideInterval = setInterval(nextSlide, 5000); // 5 seconds
```

### Change Colors:
Colors are already set to your gold palette in `style.css`:
- Primary Gold: #F6D57D
- Light Cream: #FCF8F0
- Dark Charcoal: #2A2A2A

### Add More Slides:
1. Add images to slideshow folder (slide-6.jpg, slide-7.jpg, etc.)
2. Edit `page-home.php` - copy a slide div and update number
3. Add corresponding dots in the dots section

### Use Videos Instead of GIFs:
Replace `<img>` tags with `<video>` tags in `page-home.php`:
```html
<video autoplay loop muted playsinline class="video-gif">
    <source src="[video-url].mp4" type="video/mp4">
</video>
```

---

## 📱 Mobile Optimizations

Everything is fully responsive:
- Logo scales down on mobile
- Slideshow adjusts to phone screens
- Touch/swipe gestures work
- Video grid stacks vertically
- Buttons go full-width

---

## ⚡ Performance Tips

1. **Optimize images:**
   - Keep Instagram photos under 500KB
   - Use JPG format for photos
   - Compress before uploading

2. **Optimize GIFs:**
   - Keep under 2MB each
   - Use tools like ezgif.com to compress
   - Consider using MP4 video instead (smaller file size)

3. **Lazy loading:**
   - WordPress automatically lazy-loads images
   - First slide loads immediately

---

## 🚀 Quick Start Checklist

- [ ] Upload your circular logo (already done: `images/logo.png`)
- [ ] Add 5 Instagram photos to `images/slideshow/`
- [ ] Add 3 GIF files to `images/gifs/`
- [ ] Test the slideshow navigation
- [ ] Check mobile responsiveness
- [ ] Verify all animations work
- [ ] Test on different devices

---

## 🎨 Animation Features

1. **Logo Animation:**
   - Entrance with 3D rotation
   - Hover effect with scale and tilt
   - Glowing shadow effect

2. **Text Animations:**
   - Staggered fade-in on load
   - Smooth timing delays

3. **Slideshow:**
   - Fade transitions between slides
   - Smooth arrow hover effects
   - Dot scaling animations

4. **Video Boxes:**
   - Image zoom on hover
   - Card lift effect
   - Icon rotation in features

5. **CTA Section:**
   - Pulsing icon animation
   - Button hover effects

---

## 📝 Notes

- The slideshow automatically detects the number of slides
- All animations are smooth and performant
- Mobile gestures are touch-optimized
- Colors match your brand identity
- No blog posts or WordPress posts will appear

---

## 💡 Pro Tips

1. **Best Instagram photos to use:**
   - Clear views of finished braids
   - Different styles and angles
   - Good lighting
   - Your signature work

2. **GIF content ideas:**
   - Time-lapse of braiding process
   - Before/after transformations
   - Detail shots of your technique
   - Satisfied client reactions

3. **Update regularly:**
   - Swap out slideshow photos monthly
   - Add seasonal content
   - Showcase new styles

---

**Everything is ready to go! Just add your photos and GIFs to the specified folders.**

Need help? Check the README.md files in each folder for detailed instructions.
