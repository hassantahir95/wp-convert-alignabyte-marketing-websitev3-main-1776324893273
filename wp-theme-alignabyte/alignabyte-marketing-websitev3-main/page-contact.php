<?php
/**
 * Template Name: Contact Page
 */
$GLOBALS['theme_current_page'] = 'contact';
get_header();

$contact_status = isset($_GET['contact']) ? $_GET['contact'] : '';
?>

<!-- Booking Modal -->
<div id="booking-modal" class="hidden fixed inset-0 z-[100] flex items-end sm:items-center justify-center bg-foreground/60 backdrop-blur-sm">
    <div class="bg-background rounded-t-2xl sm:rounded-2xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto animate-scale-in" onclick="event.stopPropagation()">
        <div class="bg-primary rounded-t-2xl sm:rounded-t-2xl p-6 relative">
            <button onclick="closeBookingModal()" class="absolute top-4 right-4 text-primary-foreground/70 hover:text-primary-foreground transition-colors">
                <?php echo theme_icon('x', 'w-5 h-5'); ?>
            </button>
            <h3 class="text-xl font-heading font-bold text-primary-foreground">Fill Your Job Calendar</h3>
            <p class="text-primary-foreground/90 text-sm mt-1">Tell us where you work and we'll check availability.</p>
        </div>
        <div class="p-6">
            <div id="booking-success" class="hidden text-center py-8">
                <?php echo theme_icon('check-circle-2', 'w-16 h-16 text-success mx-auto mb-4'); ?>
                <h4 class="text-xl font-heading font-bold text-foreground mb-2">Application Received!</h4>
                <p class="text-muted-foreground text-sm mb-6">We'll review your territory and respond within 24 hours.</p>
                <button onclick="closeBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-8 py-2.5">Done</button>
            </div>
            <form id="booking-form" onsubmit="handleBookingSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Full Name *</label>
                    <input type="text" name="name" required placeholder="John Smith" class="w-full rounded-lg border border-border focus:ring-primary/30 h-11 px-3">
                </div>
                <div>
                    <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Email *</label>
                    <input type="email" name="email" required placeholder="john@company.com" class="w-full rounded-lg border border-border focus:ring-primary/30 h-11 px-3">
                </div>
                <div>
                    <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Phone *</label>
                    <input type="tel" name="phone" required placeholder="(555) 123-4567" class="w-full rounded-lg border border-border focus:ring-primary/30 h-11 px-3">
                </div>
                <button type="submit" class="w-full bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl py-5 text-base animate-pulse-glow">
                    Check My Availability <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-5 h-5'); ?>
                </button>
            </form>
        </div>
    </div>
</div>

<div class="min-h-screen pt-16 md:pt-20">
    <!-- HERO -->
    <section class="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src="<?php echo theme_asset('hero-team.jpg'); ?>" alt="Contractor team" class="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]">
        <div class="absolute inset-0 bg-foreground/80"></div>
        <div class="relative z-10 container-main text-center">
            <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-5 md:mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                <span class="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Get Started</span>
            </div>
            <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-6 animate-fade-in-up delay-100">
                Ready to <span class="text-accent-blue">Fill Your Calendar?</span>
            </h1>
            <p class="text-sm md:text-lg text-primary-foreground/90 max-w-2xl mx-auto animate-fade-in-up delay-200">
                Tell us about your business. We'll show you exactly how many booked jobs we can deliver every month.
            </p>
        </div>
    </section>

    <!-- FORM + INFO -->
    <section class="py-12 md:py-20 lg:py-28 bg-background">
        <div class="container-main">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
                <div>
                    <div class="sr-scale">
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-heading font-bold text-foreground mb-6 md:mb-8">
                            Check Your <span class="text-primary">Availability</span>
                        </h2>
                    </div>

                    <?php if ($contact_status === 'success'): ?>
                        <div class="sr-slide-up">
                            <div class="bg-success/10 border border-success/20 rounded-2xl p-6 md:p-10 text-center">
                                <?php echo theme_icon('check-circle-2', 'w-12 h-12 md:w-16 md:h-16 text-success mx-auto mb-4'); ?>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-foreground mb-2">Application Received!</h3>
                                <p class="text-muted-foreground text-sm">We'll review your territory and get back to you within 24 hours.</p>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="sr-slide-up sr-delay-1">
                            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="space-y-4 md:space-y-5">
                                <input type="hidden" name="action" value="alignabyte_contact">
                                <?php wp_nonce_field('alignabyte_contact', 'alignabyte_contact_nonce'); ?>
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                                    <div>
                                        <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Full Name *</label>
                                        <input type="text" name="name" required placeholder="John Smith" class="w-full rounded-lg border border-border h-10 md:h-11 px-3 focus:ring-primary/30">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Company Name *</label>
                                        <input type="text" name="company" required placeholder="Smith Roofing LLC" class="w-full rounded-lg border border-border h-10 md:h-11 px-3 focus:ring-primary/30">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                                    <div>
                                        <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Email *</label>
                                        <input type="email" name="email" required placeholder="john@smithroofing.com" class="w-full rounded-lg border border-border h-10 md:h-11 px-3 focus:ring-primary/30">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Phone *</label>
                                        <input type="tel" name="phone" required placeholder="(555) 123-4567" class="w-full rounded-lg border border-border h-10 md:h-11 px-3 focus:ring-primary/30">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Service Type *</label>
                                    <input type="text" name="service_type" required placeholder="e.g. Roofing, Remodeling, HVAC" class="w-full rounded-lg border border-border h-10 md:h-11 px-3 focus:ring-primary/30">
                                </div>
                                <div>
                                    <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Service Area *</label>
                                    <input type="text" name="service_area" required placeholder="e.g. Dallas, TX, 50 mile radius" class="w-full rounded-lg border border-border h-10 md:h-11 px-3 focus:ring-primary/30">
                                </div>
                                <div>
                                    <label class="block text-sm font-heading font-semibold text-foreground mb-1.5">Anything else?</label>
                                    <textarea name="message" placeholder="Tell us about your biggest scheduling challenge..." class="w-full rounded-lg border border-border min-h-[80px] md:min-h-[100px] px-3 py-2 focus:ring-primary/30"></textarea>
                                </div>
                                <button type="submit" class="w-full bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl py-4 md:py-5 text-sm md:text-base animate-pulse-glow">
                                    Check My Availability <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
                                </button>
                                <p class="text-[10px] md:text-xs text-muted-foreground text-center">We only accept one contractor per area. Applying does not guarantee acceptance.</p>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="space-y-4 md:space-y-6">
                    <div class="sr-slide-right">
                        <div class="bg-highlight border border-primary/10 rounded-2xl p-5 md:p-8">
                            <h3 class="text-lg md:text-xl font-heading font-bold text-foreground mb-4 md:mb-6">Why Contractors Choose AlignaByte Marketing</h3>
                            <div class="space-y-3 md:space-y-4">
                                <?php
                                $reasons = array(
                                    '20 to 40 booked jobs per month guaranteed',
                                    'Exclusive territory with no internal competition',
                                    'Direct homeowner calls to your dispatch',
                                    'System pays for itself in Week 1',
                                    'No contracts, results speak for themselves',
                                );
                                foreach ($reasons as $reason): ?>
                                    <div class="flex items-start gap-2 md:gap-3">
                                        <?php echo theme_icon('check-circle-2', 'w-4 h-4 md:w-5 md:h-5 text-success flex-shrink-0 mt-0.5'); ?>
                                        <span class="text-foreground text-xs md:text-sm font-medium"><?php echo esc_html($reason); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="sr-slide-right sr-delay-2">
                        <div class="bg-card border border-border rounded-2xl p-5 md:p-8 shadow-lg">
                            <h3 class="text-lg md:text-xl font-heading font-bold text-foreground mb-4 md:mb-6">Get In Touch</h3>
                            <div class="space-y-4 md:space-y-5">
                                <?php
                                $contact_info = array(
                                    array('icon' => 'phone', 'label' => 'Call Us', 'value' => '(555) BUILD NOW'),
                                    array('icon' => 'mail', 'label' => 'Email', 'value' => 'dispatch@alignabyte.com'),
                                    array('icon' => 'clock', 'label' => 'Response Time', 'value' => 'Within 24 Hours'),
                                    array('icon' => 'shield', 'label' => 'Territory', 'value' => 'One Contractor Per Area'),
                                );
                                foreach ($contact_info as $info): ?>
                                    <div class="flex items-center gap-3 md:gap-4">
                                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary flex items-center justify-center flex-shrink-0">
                                            <?php echo theme_icon($info['icon'], 'w-5 h-5 md:w-6 md:h-6 text-primary-foreground'); ?>
                                        </div>
                                        <div>
                                            <p class="text-xs md:text-sm text-muted-foreground"><?php echo esc_html($info['label']); ?></p>
                                            <p class="font-heading font-bold text-foreground text-sm md:text-base"><?php echo esc_html($info['value']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-12 md:py-20 lg:py-28 bg-highlight">
        <div class="container-main max-w-3xl">
            <div class="sr-scale text-center mb-8 md:mb-12">
                <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                    <span class="text-xs font-heading font-semibold text-primary uppercase tracking-wider">FAQ</span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-foreground">
                    Frequently Asked <span class="text-primary">Questions</span>
                </h2>
            </div>

            <div class="space-y-2 md:space-y-3">
                <?php
                $faqs = array(
                    array('q' => 'How does AlignaByte Marketing generate leads for my business?', 'a' => 'AlignaByte Marketing drives real homeowner calls directly to your dispatch line through geo-targeted campaigns. No form fills, no shared leads. Every call is a qualified homeowner in your service area looking for the work you do.'),
                    array('q' => 'What does \'exclusive territory\' mean?', 'a' => 'We only partner with one contractor per service type in each geographic area. That means no internal competition. If you lock in your territory, no other contractor in your trade will receive calls from our system in that zone.'),
                    array('q' => 'How quickly will I start receiving calls?', 'a' => 'Most contractors start receiving qualified homeowner calls within the first 5 to 7 days after system launch. Our team handles the full setup, calibration, and optimization so you can focus on running your crews.'),
                    array('q' => 'Is there a long term contract?', 'a' => 'No. AlignaByte Marketing operates on a month to month basis. We believe results should keep you here, not paperwork. Most contractors stay because the system pays for itself within the first week.'),
                    array('q' => 'What types of contractors do you work with?', 'a' => 'We work with residential contractors across roofing, remodeling, HVAC, plumbing, electrical, painting, landscaping, and general contracting. If you serve homeowners, AlignaByte Marketing can fill your calendar.'),
                    array('q' => 'How many jobs can I expect per month?', 'a' => 'Depending on your service area and capacity, most partners receive between 20 and 40 booked residential projects per month. We scale based on your crew size and revenue goals.'),
                    array('q' => 'What happens if a lead is not qualified?', 'a' => 'Our Intent Filtering Engine screens out spam, tire kickers, and low intent inquiries before they ever reach you. If a call doesn\'t meet our quality standards, it doesn\'t count toward your pipeline.'),
                );
                foreach ($faqs as $i => $faq): ?>
                    <div class="sr-slide-up sr-delay-<?php echo min($i + 1, 5); ?>">
                        <div class="faq-item bg-background border border-border rounded-xl overflow-hidden transition-all">
                            <button class="faq-trigger w-full flex items-center justify-between gap-3 md:gap-4 px-4 py-4 md:px-6 md:py-5 text-left">
                                <span class="font-heading font-bold text-foreground text-xs sm:text-sm md:text-base"><?php echo esc_html($faq['q']); ?></span>
                                <div class="w-7 h-7 md:w-8 md:h-8 rounded-full border border-border flex items-center justify-center flex-shrink-0">
                                    <span class="faq-icon-plus"><?php echo theme_icon('plus', 'w-3.5 h-3.5 md:w-4 md:h-4 text-muted-foreground'); ?></span>
                                    <span class="faq-icon-minus hidden"><?php echo theme_icon('minus', 'w-3.5 h-3.5 md:w-4 md:h-4 text-primary'); ?></span>
                                </div>
                            </button>
                            <div class="faq-content hidden px-4 md:px-6 pb-4 md:pb-5">
                                <p class="text-muted-foreground text-xs md:text-sm leading-relaxed"><?php echo esc_html($faq['a']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
