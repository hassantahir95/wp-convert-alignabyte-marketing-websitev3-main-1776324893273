<?php
/**
 * Template Name: Services Page
 */
$GLOBALS['theme_current_page'] = 'services';
get_header();
?>

<!-- Booking Modal (same as homepage) -->
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
        <img src="<?php echo theme_asset('howworks-bg.jpg'); ?>" alt="Construction blueprints" class="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]">
        <div class="absolute inset-0 bg-foreground/80"></div>
        <div class="relative z-10 container-main text-center">
            <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-5 md:mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                <span class="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Our Services</span>
            </div>
            <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-6 animate-fade-in-up delay-100">
                Everything Your Dispatch Needs to <span class="text-accent-blue">Stay Full</span>
            </h1>
            <p class="text-sm md:text-lg text-primary-foreground/90 max-w-2xl mx-auto mb-6 md:mb-10 animate-fade-in-up delay-200">
                The AlignaByte Dispatch™ System isn't one tool. It's an integrated engine that fills your schedule with confirmed residential projects.
            </p>
            <div class="animate-fade-in-up delay-300">
                <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 text-sm md:px-8 md:py-6 md:text-base animate-pulse-glow group">
                    Get Started <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
                </button>
            </div>
        </div>
    </section>

    <!-- SECTION 1: SERVICES -->
    <section class="bg-background">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="py-12 md:py-20 lg:py-28 lg:pl-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pr-16 px-4 sm:px-6">
                <div class="sr-slide-up">
                    <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                        <?php echo theme_icon('zap', 'w-4 h-4 text-primary'); ?>
                        <span class="text-xs font-heading font-semibold text-primary uppercase tracking-wider">Core Features</span>
                    </div>
                </div>
                <div class="sr-scale">
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-3 md:mb-4">
                        What's Inside the <span class="text-primary">AlignaByte Marketing System</span>
                    </h2>
                </div>
                <div class="sr-slide-up sr-delay-1">
                    <p class="text-base md:text-lg text-muted-foreground mb-6 md:mb-10">
                        Every component is built for one thing: keeping your crews working and your schedule full.
                    </p>
                </div>
                <div class="space-y-4 md:space-y-5">
                    <?php
                    $services = array(
                        array('icon' => 'phone', 'title' => 'Direct Homeowner Calls', 'desc' => 'Real homeowner calls routed straight to your dispatch line. No middlemen, no form fills.'),
                        array('icon' => 'map-pin', 'title' => 'Geo Targeted Job Matching', 'desc' => 'Every lead is matched by service type and your exact coverage area.'),
                        array('icon' => 'filter', 'title' => 'Intent Filtering Engine', 'desc' => 'Our system filters out tire kickers, spam, and low intent inquiries before they reach you.'),
                        array('icon' => 'calendar', 'title' => 'Automated Scheduling', 'desc' => 'Qualified projects are booked directly into your calendar. Your dispatch schedules, not chases.'),
                        array('icon' => 'bar-chart-3', 'title' => 'Pipeline Visibility', 'desc' => 'See your entire job pipeline at a glance. Know what\'s booked, pending, and coming.'),
                        array('icon' => 'shield', 'title' => 'Exclusive Territory Lock', 'desc' => 'One contractor per area. Your market. Your jobs. No internal competition.'),
                    );
                    foreach ($services as $i => $service): ?>
                        <div class="sr-slide-left sr-delay-<?php echo min($i + 1, 5); ?>">
                            <div class="group flex items-start gap-3 md:gap-4">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
                                    <?php echo theme_icon($service['icon'], 'w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-primary-foreground transition-colors'); ?>
                                </div>
                                <div>
                                    <h3 class="text-base md:text-lg font-heading font-bold text-foreground mb-1"><?php echo esc_html($service['title']); ?></h3>
                                    <p class="text-muted-foreground text-sm leading-relaxed"><?php echo esc_html($service['desc']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[400px] lg:h-auto">
                <img src="<?php echo theme_asset('services-dispatch.jpg'); ?>" alt="Dispatch scheduling system" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- SECTION 2: PROCESS -->
    <section class="bg-background">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="relative h-[300px] md:h-[400px] lg:h-auto">
                <img src="<?php echo theme_asset('services-onsite.jpg'); ?>" alt="Contractor on site" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
            </div>

            <div class="py-12 md:py-20 lg:py-28 lg:pr-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pl-16 px-4 sm:px-6">
                <div class="sr-slide-up">
                    <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                        <?php echo theme_icon('settings', 'w-4 h-4 text-primary'); ?>
                        <span class="text-xs font-heading font-semibold text-primary uppercase tracking-wider">The Process</span>
                    </div>
                </div>
                <div class="sr-scale">
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-3 md:mb-4">
                        From Zero to <span class="text-primary">Fully Booked</span>
                    </h2>
                </div>
                <div class="sr-slide-up sr-delay-1">
                    <p class="text-base md:text-lg text-muted-foreground mb-6 md:mb-10">
                        Four simple steps to transform your dispatch from empty to overflowing.
                    </p>
                </div>
                <div class="space-y-4 md:space-y-6">
                    <?php
                    $process_steps = array(
                        array('num' => '01', 'icon' => 'target', 'title' => 'Discovery Call', 'desc' => 'We learn your services, coverage area, crew capacity, and revenue goals.'),
                        array('num' => '02', 'icon' => 'settings', 'title' => 'System Setup', 'desc' => 'AlignaByte Dispatch™ is configured and calibrated to your exact specifications.'),
                        array('num' => '03', 'icon' => 'zap', 'title' => 'Launch & Optimize', 'desc' => 'Real homeowner calls start flowing. We monitor, optimize, and scale.'),
                        array('num' => '04', 'icon' => 'clock', 'title' => 'Scale & Dominate', 'desc' => 'Your job board fills weeks ahead. Your territory becomes yours.'),
                    );
                    foreach ($process_steps as $i => $step): ?>
                        <div class="sr-slide-right sr-delay-<?php echo min($i + 1, 4); ?>">
                            <div class="flex items-start gap-3 md:gap-5">
                                <div class="flex flex-col items-center flex-shrink-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary flex items-center justify-center">
                                        <?php echo theme_icon($step['icon'], 'w-5 h-5 md:w-6 md:h-6 text-primary-foreground'); ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 md:gap-3 mb-1">
                                        <span class="text-xs md:text-sm font-heading font-bold text-primary/60"><?php echo esc_html($step['num']); ?></span>
                                        <h3 class="text-base md:text-lg font-heading font-bold text-foreground"><?php echo esc_html($step['title']); ?></h3>
                                    </div>
                                    <p class="text-muted-foreground text-sm leading-relaxed"><?php echo esc_html($step['desc']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="sr-slide-up sr-delay-5">
                    <button onclick="openBookingModal()" class="mt-8 md:mt-10 bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 md:px-8 md:py-5 text-sm md:text-base group">
                        Get Started <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: WHAT YOU GET -->
    <section class="bg-background">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="py-12 md:py-20 lg:py-28 lg:pl-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pr-16 px-4 sm:px-6">
                <div class="sr-slide-up">
                    <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                        <?php echo theme_icon('check-circle-2', 'w-4 h-4 text-primary'); ?>
                        <span class="text-xs font-heading font-semibold text-primary uppercase tracking-wider">What You Get</span>
                    </div>
                </div>
                <div class="sr-scale">
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-6 md:mb-8">
                        What You Get with <span class="text-primary">AlignaByte Marketing</span>
                    </h2>
                </div>
                <div class="space-y-4 md:space-y-5 mb-8 md:mb-10">
                    <?php
                    $benefits = array(
                        '20 to 40 booked residential projects per month',
                        'Exclusive territory with no competition from our system',
                        'Direct homeowner calls, not internet leads',
                        'Automated scheduling into your dispatch',
                        '30 day pipeline visibility at all times',
                        'Dedicated account optimization',
                    );
                    foreach ($benefits as $i => $benefit): ?>
                        <div class="sr-slide-left sr-delay-<?php echo min($i + 1, 5); ?>">
                            <div class="flex items-start gap-3 md:gap-4">
                                <div class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-success/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo theme_icon('check-circle-2', 'w-4 h-4 md:w-5 md:h-5 text-success'); ?>
                                </div>
                                <span class="text-foreground font-medium text-sm md:text-base"><?php echo esc_html($benefit); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="sr-slide-up">
                    <div class="bg-primary rounded-2xl p-5 md:p-8">
                        <h3 class="text-lg md:text-xl font-heading font-bold text-primary-foreground mb-2 md:mb-3">Ready to dominate your area?</h3>
                        <p class="text-primary-foreground/90 text-sm mb-4 md:mb-6">We only take one contractor per territory. Check if yours is still available.</p>
                        <button onclick="openBookingModal()" class="bg-primary-foreground text-primary rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 w-full text-sm md:text-base">
                            Check Availability <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
                        </button>
                    </div>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[400px] lg:h-auto">
                <img src="<?php echo theme_asset('services-result.jpg'); ?>" alt="Completed residential home" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src="<?php echo theme_asset('services-cta-bg.jpg'); ?>" alt="Residential neighborhood" loading="lazy" class="absolute inset-0 w-full h-full object-cover blur-[6px] scale-105">
        <div class="absolute inset-0 bg-foreground/80"></div>
        <div class="relative z-10 container-main text-center max-w-3xl mx-auto">
            <div class="sr-scale">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-5">
                    Ready to Fill Your <span class="text-accent-blue">Job Calendar?</span>
                </h2>
            </div>
            <div class="sr-slide-up sr-delay-1">
                <p class="text-sm md:text-lg text-primary-foreground/90 mb-6 md:mb-10">
                    We only partner with one contractor per territory. Check if your area is still available before someone else locks it in.
                </p>
            </div>
            <div class="sr-slide-up sr-delay-2">
                <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 text-sm md:px-10 md:py-6 md:text-base animate-pulse-glow group">
                    Check My Availability <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
                </button>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
