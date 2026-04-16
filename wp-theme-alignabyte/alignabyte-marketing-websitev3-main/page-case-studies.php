<?php
/**
 * Template Name: Case Studies Page
 */
$GLOBALS['theme_current_page'] = 'case-studies';
get_header();
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
        <img src="<?php echo theme_asset('hero-aerial.jpg'); ?>" alt="Aerial construction view" class="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]">
        <div class="absolute inset-0 bg-foreground/85"></div>
        <div class="relative z-10 container-main text-center">
            <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-5 md:mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                <span class="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Case Studies</span>
            </div>
            <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold text-primary-foreground leading-tight mb-4 md:mb-6 animate-fade-in-up delay-100">
                What Happens When Your <span class="text-accent-blue">Job Flow Is Fixed</span>
            </h1>
            <p class="text-sm md:text-lg text-primary-foreground/90 max-w-2xl mx-auto animate-fade-in-up delay-200">
                Real contractors. Real numbers. Real transformation.
            </p>
        </div>
    </section>

    <!-- ACCORDION CASE STUDIES -->
    <section class="py-12 md:py-20 lg:py-28 bg-background">
        <div class="container-main">
            <div class="sr-scale text-center mb-10 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground mb-3 md:mb-4">
                    Real Contractors. Real Outcomes.
                </h2>
                <p class="text-sm md:text-lg text-muted-foreground max-w-2xl mx-auto">
                    See how contractors like you transformed their dispatch with AlignaByte Marketing.
                </p>
            </div>

            <div class="space-y-4 md:space-y-5">
                <?php
                $case_studies = array(
                    array(
                        'id' => 'case-1',
                        'label' => 'Case Study 01',
                        'title' => 'From Idle Gaps to Fully Scheduled',
                        'image' => 'case-roofing-new.jpg',
                        'imageAlt' => 'Roofing project in progress',
                        'problem' => 'A residential roofing contractor in Texas was relying entirely on word of mouth. Crews were sitting idle 2 to 3 days every week, and revenue was unpredictable month to month.',
                        'solution' => 'We deployed AlignaByte Dispatch™ with geo targeted homeowner calls and automated scheduling directly into their dispatch calendar.',
                        'challenges' => 'The team had no prior experience with digital lead systems and initially resisted changing their workflow. We provided hands on onboarding and weekly optimization calls.',
                        'results' => '32 confirmed projects booked within 4 weeks. 100% schedule utilization. Zero idle crew days. 3x revenue increase in the first 30 days.',
                    ),
                    array(
                        'id' => 'case-2',
                        'label' => 'Case Study 02',
                        'title' => 'Breaking Free From Referral Dependency',
                        'image' => 'case-general-new.jpg',
                        'imageAlt' => 'General contracting site',
                        'problem' => 'A general contractor in Florida was entirely dependent on referrals. When referrals slowed, so did revenue. There was no predictable pipeline and no way to forecast upcoming work.',
                        'solution' => 'AlignaByte Dispatch™ created a consistent flow of 6 to 10 pre qualified, booked jobs per week using intent filtered homeowner calls matched to their service area.',
                        'challenges' => 'Transitioning from a referral mindset to a system driven pipeline required a shift in how the owner thought about growth. We guided the transition over 3 weeks.',
                        'results' => 'Eliminated referral dependency completely. Predictable weekly revenue. Expanded operations to a second crew within 60 days.',
                    ),
                    array(
                        'id' => 'case-3',
                        'label' => 'Case Study 03',
                        'title' => 'Dispatch at Full Capacity',
                        'image' => 'case-remodel-new.jpg',
                        'imageAlt' => 'Kitchen remodeling project',
                        'problem' => 'A remodeling company in Ohio had a reactive dispatch process, always scrambling to fill the next week. Material waste was high because jobs were planned last minute.',
                        'solution' => 'AlignaByte Marketing filled their job board 30 days in advance with confirmed residential projects, giving full visibility into upcoming work and material needs.',
                        'challenges' => 'The company had 3 crews and needed to coordinate scheduling across all of them without overlap. We customized the dispatch flow to handle multi crew routing.',
                        'results' => '30 day forward visibility on all scheduled work. Reduced material waste by 40%. Hired 3 additional crew members to handle the increased volume.',
                    ),
                );
                foreach ($case_studies as $i => $cs): ?>
                    <div class="sr-slide-up sr-delay-<?php echo min($i + 1, 3); ?>">
                        <div class="accordion-item border border-border rounded-2xl overflow-hidden bg-card shadow-sm transition-shadow" data-accordion-id="<?php echo esc_attr($cs['id']); ?>">
                            <button class="accordion-trigger w-full hover:no-underline p-0 pr-4 md:pr-10 flex items-stretch">
                                <div class="hidden sm:block w-1/4 flex-shrink-0 relative min-h-[80px]">
                                    <img src="<?php echo theme_asset($cs['image']); ?>" alt="<?php echo esc_attr($cs['imageAlt']); ?>" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                                </div>
                                <div class="flex-1 text-left py-4 px-4 md:py-6 md:px-8">
                                    <span class="text-[10px] md:text-xs font-heading font-semibold text-primary uppercase tracking-wider"><?php echo esc_html($cs['label']); ?></span>
                                    <h3 class="text-sm sm:text-base md:text-xl font-heading font-bold text-foreground mt-1"><?php echo esc_html($cs['title']); ?></h3>
                                </div>
                                <div class="flex items-center px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="accordion-icon w-5 h-5 text-muted-foreground transition-transform"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </button>
                            <div class="accordion-content hidden px-4 md:px-8 sm:pl-[calc(25%+1.5rem)] md:sm:pl-[calc(25%+2rem)] pb-6 md:pb-8 pt-2">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                    <div>
                                        <h4 class="text-xs md:text-sm font-heading font-bold text-primary uppercase tracking-wider mb-1.5 md:mb-2">The Problem</h4>
                                        <p class="text-muted-foreground text-xs md:text-sm leading-relaxed"><?php echo esc_html($cs['problem']); ?></p>
                                    </div>
                                    <div>
                                        <h4 class="text-xs md:text-sm font-heading font-bold text-primary uppercase tracking-wider mb-1.5 md:mb-2">The Solution</h4>
                                        <p class="text-muted-foreground text-xs md:text-sm leading-relaxed"><?php echo esc_html($cs['solution']); ?></p>
                                    </div>
                                    <div>
                                        <h4 class="text-xs md:text-sm font-heading font-bold text-primary uppercase tracking-wider mb-1.5 md:mb-2">The Challenges</h4>
                                        <p class="text-muted-foreground text-xs md:text-sm leading-relaxed"><?php echo esc_html($cs['challenges']); ?></p>
                                    </div>
                                    <div>
                                        <h4 class="text-xs md:text-sm font-heading font-bold text-primary uppercase tracking-wider mb-1.5 md:mb-2">The Results</h4>
                                        <p class="text-muted-foreground text-xs md:text-sm leading-relaxed"><?php echo esc_html($cs['results']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="sr-slide-up text-center mt-10 md:mt-14">
                <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base">
                    I Want These Results <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
                </button>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="relative py-16 md:py-20 lg:py-28 overflow-hidden">
        <img src="<?php echo theme_asset('final-sunset.jpg'); ?>" alt="Neighborhood sunset" loading="lazy" class="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/90 via-[hsl(205,61%,24%)]/85 to-[hsl(205,80%,18%)]/90"></div>
        <div class="relative z-10 container-main text-center max-w-3xl mx-auto">
            <div class="sr-scale">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-5 md:mb-8">Your Success Story Starts Here</h2>
            </div>
            <div class="sr-slide-up sr-delay-1">
                <p class="text-base md:text-xl text-primary-foreground/90 mb-8 md:mb-12">Join the contractors who stopped chasing and started scheduling.</p>
            </div>
            <div class="sr-slide-up sr-delay-2">
                <button onclick="openBookingModal()" class="bg-primary-foreground text-primary rounded-xl font-heading font-bold shadow-2xl px-6 py-4 text-sm md:px-10 md:py-7 md:text-lg hover:bg-primary-foreground/90 group">
                    Fill My Calendar Now <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-6 md:h-6 group-hover:translate-x-1 transition-transform'); ?>
                </button>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
