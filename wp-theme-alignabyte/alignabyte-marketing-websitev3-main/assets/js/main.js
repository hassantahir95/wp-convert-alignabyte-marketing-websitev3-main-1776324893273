/**
 * AlignaByte Marketing Theme JavaScript
 */

(function() {
    'use strict';

    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    }

    // Scroll reveal
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('sr-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all scroll reveal elements
    document.querySelectorAll('.sr-scale, .sr-slide-up, .sr-slide-left, .sr-slide-right, .sr-shutter').forEach(function(el) {
        observer.observe(el);
    });

    // Hero image carousel
    const heroImages = document.querySelectorAll('.hero-image');
    if (heroImages.length > 0) {
        let currentHeroIndex = 0;
        setInterval(function() {
            heroImages[currentHeroIndex].style.opacity = '0';
            heroImages[currentHeroIndex].style.animation = 'none';
            
            currentHeroIndex = (currentHeroIndex + 1) % heroImages.length;
            
            heroImages[currentHeroIndex].style.opacity = '1';
            heroImages[currentHeroIndex].style.animation = 'hero-zoom 3s ease-out forwards';
        }, 3000);
    }

    // Testimonials carousel
    if (typeof window.testimonialsData !== 'undefined') {
        let currentTestimonialIndex = 0;
        const testimonialContent = document.getElementById('testimonial-content');
        const testimonialCounter = document.getElementById('testimonial-counter');
        const testimonialDots = document.getElementById('testimonial-dots');

        window.goToTestimonial = function(index) {
            if (index === currentTestimonialIndex) return;
            
            currentTestimonialIndex = index;
            const t = window.testimonialsData[index];
            
            testimonialContent.style.opacity = '0';
            testimonialContent.style.transform = 'translateY(12px)';
            
            setTimeout(function() {
                testimonialContent.innerHTML = `
                    <blockquote class="font-heading text-base sm:text-lg md:text-2xl lg:text-3xl font-semibold text-foreground leading-[1.2] max-w-3xl mb-4 md:mb-6">&ldquo;${t.quote}&rdquo;</blockquote>
                    <div class="inline-flex items-center gap-1.5 bg-primary/10 border border-primary/20 rounded-full px-3 py-1 mb-4 md:mb-6">
                        <span class="text-xs">📊</span>
                        <span class="text-xs font-body font-semibold text-primary">${t.stat}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 md:w-12 md:h-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="text-primary font-heading font-bold text-xs md:text-base">${t.avatar}</span>
                        </div>
                        <div class="text-left">
                            <p class="font-body font-semibold text-foreground text-sm">${t.name}</p>
                            <p class="font-body text-muted-foreground text-xs">${t.role}</p>
                        </div>
                    </div>
                `;
                
                testimonialContent.style.opacity = '1';
                testimonialContent.style.transform = 'translateY(0)';
                
                // Update counter
                testimonialCounter.textContent = String(index + 1).padStart(2, '0') + '/' + String(window.testimonialsData.length).padStart(2, '0');
                
                // Update dots
                const dots = testimonialDots.querySelectorAll('button');
                dots.forEach(function(dot, i) {
                    if (i === index) {
                        dot.classList.remove('bg-border');
                        dot.classList.add('bg-foreground');
                    } else {
                        dot.classList.remove('bg-foreground');
                        dot.classList.add('bg-border');
                    }
                });
                
                // Update big number
                const bigNumber = document.querySelector('.font-body.text-\\[50px\\]');
                if (bigNumber) {
                    bigNumber.textContent = String(index + 1).padStart(2, '0');
                }
            }, 300);
        };

        window.nextTestimonial = function() {
            const nextIndex = (currentTestimonialIndex + 1) % window.testimonialsData.length;
            window.goToTestimonial(nextIndex);
        };

        window.previousTestimonial = function() {
            const prevIndex = (currentTestimonialIndex - 1 + window.testimonialsData.length) % window.testimonialsData.length;
            window.goToTestimonial(prevIndex);
        };

        // Auto advance every 6 seconds
        setInterval(window.nextTestimonial, 6000);
    }

    // Booking modal
    window.openBookingModal = function() {
        const modal = document.getElementById('booking-modal');
        if (modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeBookingModal = function() {
        const modal = document.getElementById('booking-modal');
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
            
            // Reset form after closing
            setTimeout(function() {
                const form = document.getElementById('booking-form');
                const success = document.getElementById('booking-success');
                if (form && success) {
                    form.classList.remove('hidden');
                    form.reset();
                    success.classList.add('hidden');
                }
            }, 300);
        }
    };

    // Close modal on backdrop click
    const bookingModal = document.getElementById('booking-modal');
    if (bookingModal) {
        bookingModal.addEventListener('click', function(e) {
            if (e.target === bookingModal) {
                window.closeBookingModal();
            }
        });
    }

    // Booking form submission
    window.handleBookingSubmit = function(event) {
        event.preventDefault();
        
        const form = document.getElementById('booking-form');
        const success = document.getElementById('booking-success');
        
        // Simulate form submission
        setTimeout(function() {
            form.classList.add('hidden');
            success.classList.remove('hidden');
        }, 500);
        
        return false;
    };

    // Accordion functionality for case studies
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(function(item) {
        const trigger = item.querySelector('.accordion-trigger');
        const content = item.querySelector('.accordion-content');
        const icon = item.querySelector('.accordion-icon');
        
        if (trigger && content) {
            trigger.addEventListener('click', function() {
                const isOpen = !content.classList.contains('hidden');
                
                // Close all other accordions
                accordionItems.forEach(function(otherItem) {
                    if (otherItem !== item) {
                        const otherContent = otherItem.querySelector('.accordion-content');
                        const otherIcon = otherItem.querySelector('.accordion-icon');
                        if (otherContent) {
                            otherContent.classList.add('hidden');
                            otherItem.classList.remove('shadow-lg');
                        }
                        if (otherIcon) {
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    }
                });
                
                // Toggle current accordion
                if (isOpen) {
                    content.classList.add('hidden');
                    item.classList.remove('shadow-lg');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                } else {
                    content.classList.remove('hidden');
                    item.classList.add('shadow-lg');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            });
        }
    });

    // FAQ accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        const trigger = item.querySelector('.faq-trigger');
        const content = item.querySelector('.faq-content');
        const plusIcon = item.querySelector('.faq-icon-plus');
        const minusIcon = item.querySelector('.faq-icon-minus');
        
        if (trigger && content) {
            trigger.addEventListener('click', function() {
                const isOpen = !content.classList.contains('hidden');
                
                if (isOpen) {
                    content.classList.add('hidden');
                    plusIcon.classList.remove('hidden');
                    minusIcon.classList.add('hidden');
                } else {
                    content.classList.remove('hidden');
                    plusIcon.classList.add('hidden');
                    minusIcon.classList.remove('hidden');
                }
            });
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

})();
