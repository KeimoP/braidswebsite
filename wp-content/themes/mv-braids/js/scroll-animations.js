/**
 * Scroll Animations for MV Braids Theme
 * Uses Intersection Observer API for smooth scroll-triggered animations
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initScrollAnimations);
    } else {
        initScrollAnimations();
    }

    function initScrollAnimations() {
        // Check if Intersection Observer is supported
        if (!('IntersectionObserver' in window)) {
            // Fallback: show all elements immediately
            const elements = document.querySelectorAll('.scroll-animate, .video-box, .feature-item, .service-card, .style-card, .location-feature, .instagram-item');
            elements.forEach(el => el.classList.add('animate-in'));
            return;
        }

        // Create observer with options
        const observerOptions = {
            root: null, // viewport
            rootMargin: '0px 0px -100px 0px', // trigger slightly before element enters viewport
            threshold: 0.15 // trigger when 15% of element is visible
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add animation class
                    entry.target.classList.add('animate-in');
                    
                    // Optional: unobserve after animation to improve performance
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Select all elements to animate
        const animateElements = document.querySelectorAll(
            '.scroll-animate, .video-box, .feature-item, .service-card, ' +
            '.style-card, .location-feature, .instagram-item, ' +
            '.about-vanessa-content, .slideshow-container'
        );

        // Observe each element
        animateElements.forEach((el, index) => {
            // Add slight delay for stagger effect
            el.style.transitionDelay = `${index * 0.1}s`;
            observer.observe(el);
        });

        // Smooth scroll for anchor links
        initSmoothScroll();
        
        // Add parallax effect to hero section
        initParallaxEffect();
    }

    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip empty anchors
                if (href === '#' || href === '#0') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.site-header')?.offsetHeight || 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    function initParallaxEffect() {
        const heroSection = document.querySelector('.hero-section');
        if (!heroSection) return;

        // Only apply parallax on larger screens
        if (window.innerWidth < 768) return;

        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    const parallaxSpeed = 0.5;
                    
                    if (heroSection) {
                        heroSection.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
                    }
                    
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // Add entrance animations to hero elements
    window.addEventListener('load', () => {
        const heroLogo = document.querySelector('.hero-logo-image');
        const heroTitle = document.querySelector('.hero-title');
        const heroTagline = document.querySelector('.hero-tagline');
        const heroButtons = document.querySelector('.hero-buttons');

        setTimeout(() => {
            if (heroLogo) heroLogo.style.opacity = '1';
        }, 100);

        setTimeout(() => {
            if (heroTitle) heroTitle.style.opacity = '1';
        }, 400);

        setTimeout(() => {
            if (heroTagline) heroTagline.style.opacity = '1';
        }, 700);

        setTimeout(() => {
            if (heroButtons) heroButtons.style.opacity = '1';
        }, 1000);
    });

})();
