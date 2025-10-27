/**
 * MV Braids Theme JavaScript
 */
(function($) {
    'use strict';

    // Wait for DOM to be ready
    $(document).ready(function() {
        
        /**
         * Mobile Menu Toggle
         */
        $('.mobile-menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.main-navigation').toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.site-header').length) {
                $('.mobile-menu-toggle').removeClass('active');
                $('.main-navigation').removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        /**
         * Header Scroll Effect
         */
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });

        /**
         * Smooth Scroll for Anchor Links
         */
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(e) {
            var href = $(this).attr('href');
            var hash = href.includes('#') ? href.substring(href.indexOf('#')) : '';
            
            if (hash && hash.length > 1) {
                var target = $(hash);
                
                if (target.length) {
                    e.preventDefault();
                    
                    // Close mobile menu if open
                    $('.mobile-menu-toggle').removeClass('active');
                    $('.main-navigation').removeClass('active');
                    $('body').removeClass('menu-open');
                    
                    // Smooth scroll with offset for fixed header
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 800, 'swing');
                }
            }
        });

        /**
         * Gallery Filter
         */
        $('.filter-btn').on('click', function() {
            var filter = $(this).data('filter');
            
            // Update active state
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            // Filter gallery items
            if (filter === 'all') {
                $('.gallery-item').fadeIn(400);
            } else {
                $('.gallery-item').each(function() {
                    var categories = $(this).data('category');
                    if (categories && categories.toString().indexOf(filter) > -1) {
                        $(this).fadeIn(400);
                    } else {
                        $(this).fadeOut(400);
                    }
                });
            }
        });

        /**
         * Gallery Lightbox
         */
        $('.gallery-item').on('click', function() {
            var imgSrc = $(this).find('img').attr('data-full') || $(this).find('img').attr('src');
            var imgAlt = $(this).find('img').attr('alt');
            
            $('#lightbox-img').attr('src', imgSrc);
            $('#lightbox-caption').text(imgAlt);
            $('#lightbox').fadeIn(300);
            $('body').css('overflow', 'hidden');
        });

        // Close lightbox
        $('.lightbox-close, #lightbox').on('click', function(e) {
            if (e.target === this) {
                $('#lightbox').fadeOut(300);
                $('body').css('overflow', 'auto');
            }
        });

        // Close lightbox with ESC key
        $(document).on('keyup', function(e) {
            if (e.key === 'Escape') {
                $('#lightbox').fadeOut(300);
                $('body').css('overflow', 'auto');
            }
        });

        /**
         * Fade In Animation on Scroll
         */
        function fadeInOnScroll() {
            $('.fade-in, .service-card, .style-card').each(function() {
                var elementTop = $(this).offset().top;
                var windowBottom = $(window).scrollTop() + $(window).height();
                
                if (elementTop < windowBottom - 50) {
                    $(this).addClass('animated');
                }
            });
        }

        $(window).on('scroll', fadeInOnScroll);
        fadeInOnScroll(); // Run on page load

        /**
         * Form Validation Enhancement
         */
        $('form').on('submit', function(e) {
            var isValid = true;
            
            // Check required fields
            $(this).find('[required]').each(function() {
                if (!$(this).val()) {
                    isValid = false;
                    $(this).addClass('error');
                    $(this).on('input change', function() {
                        $(this).removeClass('error');
                    });
                }
            });
            
            // Check email format
            var emailField = $(this).find('input[type="email"]');
            if (emailField.length && emailField.val()) {
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailField.val())) {
                    isValid = false;
                    emailField.addClass('error');
                }
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });

        /**
         * Lazy Loading for Images
         */
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img.lazy').forEach(function(img) {
                imageObserver.observe(img);
            });
        }

        /**
         * Auto-hide success/error messages after 5 seconds
         */
        setTimeout(function() {
            $('.success-message, .error-message').fadeOut(400);
        }, 5000);

        /**
         * Instagram Feed (placeholder - replace with actual Instagram API)
         */
        function loadInstagramFeed() {
            // This is a placeholder. In production, use Smash Balloon Instagram Feed plugin
            // or Instagram Basic Display API
            console.log('Instagram feed would load here');
        }

        if ($('.instagram-feed').length) {
            loadInstagramFeed();
        }

        /**
         * Service Card Animation
         */
        $('.service-card').hover(
            function() {
                $(this).find('.service-icon').css('transform', 'scale(1.1) rotate(5deg)');
            },
            function() {
                $(this).find('.service-icon').css('transform', 'scale(1) rotate(0deg)');
            }
        );

        /**
         * Scroll to Top Button (if added)
         */
        if ($('.scroll-to-top').length) {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 300) {
                    $('.scroll-to-top').fadeIn();
                } else {
                    $('.scroll-to-top').fadeOut();
                }
            });

            $('.scroll-to-top').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 600);
            });
        }

        /**
         * Date Picker Enhancement for Booking Form
         */
        if ($('#date').length) {
            // Disable Sundays (day 0)
            var today = new Date();
            var minDate = new Date(today);
            minDate.setDate(minDate.getDate() + 1);
            
            $('#date').attr('min', minDate.toISOString().split('T')[0]);
            
            $('#date').on('change', function() {
                var selectedDate = new Date(this.value);
                if (selectedDate.getDay() === 0) {
                    alert('Lo siento, los domingos estamos cerrados. Por favor, selecciona otra fecha.');
                    this.value = '';
                }
            });
        }

        /**
         * Character Counter for Textarea
         */
        $('textarea[maxlength]').each(function() {
            var maxLength = $(this).attr('maxlength');
            var $counter = $('<div class="char-counter">' + maxLength + ' caracteres restantes</div>');
            $(this).after($counter);
            
            $(this).on('input', function() {
                var remaining = maxLength - $(this).val().length;
                $counter.text(remaining + ' caracteres restantes');
            });
        });

        /**
         * Preload Hero Image
         */
        if ($('.hero-background').length) {
            $('.hero-background').on('load', function() {
                $(this).addClass('loaded');
            });
        }

    }); // End document ready

    /**
     * Window Load Event
     */
    $(window).on('load', function() {
        // Remove loading class from body
        $('body').removeClass('loading');
        
        // Initialize animations
        $('.fade-in').addClass('animated');

        /**
         * Instagram Photo Slideshow
         */
        if ($('.slideshow-container').length) {
            let currentSlide = 0;
            const slides = $('.slide');
            const dots = $('.dot');
            const totalSlides = slides.length;
            let slideInterval;

            // Show specific slide
            function showSlide(n) {
                slides.removeClass('active');
                dots.removeClass('active');
                
                currentSlide = (n + totalSlides) % totalSlides;
                
                slides.eq(currentSlide).addClass('active');
                dots.eq(currentSlide).addClass('active');
            }

            // Next slide
            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            // Previous slide
            function prevSlide() {
                showSlide(currentSlide - 1);
            }

            // Auto advance slides
            function startSlideshow() {
                slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
            }

            function stopSlideshow() {
                clearInterval(slideInterval);
            }

            // Arrow button clicks
            $('.slide-next').on('click', function() {
                nextSlide();
                stopSlideshow();
                startSlideshow(); // Restart auto-advance
            });

            $('.slide-prev').on('click', function() {
                prevSlide();
                stopSlideshow();
                startSlideshow(); // Restart auto-advance
            });

            // Dot navigation clicks
            dots.on('click', function() {
                const slideIndex = $(this).data('slide');
                showSlide(slideIndex);
                stopSlideshow();
                startSlideshow(); // Restart auto-advance
            });

            // Pause on hover
            $('.slideshow-container').on('mouseenter', function() {
                stopSlideshow();
            }).on('mouseleave', function() {
                startSlideshow();
            });

            // Start the slideshow
            startSlideshow();

            // Touch/swipe support for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            $('.slideshow-wrapper').on('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            });

            $('.slideshow-wrapper').on('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });

            function handleSwipe() {
                if (touchEndX < touchStartX - 50) {
                    // Swipe left - next slide
                    nextSlide();
                    stopSlideshow();
                    startSlideshow();
                }
                if (touchEndX > touchStartX + 50) {
                    // Swipe right - previous slide
                    prevSlide();
                    stopSlideshow();
                    startSlideshow();
                }
            }
        }

        /**
         * Scroll Animations for Elements
         */
        function animateOnScroll() {
            $('.video-box, .feature-item, .service-card').each(function() {
                const elementTop = $(this).offset().top;
                const windowBottom = $(window).scrollTop() + $(window).height();
                
                if (windowBottom > elementTop + 100) {
                    $(this).addClass('animate-in');
                }
            });
        }

        // Run on scroll
        $(window).on('scroll', animateOnScroll);
        
        // Run on load
        animateOnScroll();
    });

})(jQuery);
