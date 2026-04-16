<?php
/**
 * Template Name: Home Page
 */
$GLOBALS['theme_current_page'] = 'home';
get_header();
?>

<!-- Booking Modal -->
<div id="booking-modal" class="hidden fixed inset-0 z-[100] flex items-end sm:items-center justify-center bg-foreground/60 backdrop-blur-sm">
    <div class="bg-background rounded-t-2xl sm:rounded-2xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto animate-scale-in" onclick="event.stopPropagation()">
        <!-- Header -->
        <div class="bg-primary rounded-t-2xl sm:rounded-t-2xl p-6 relative">
            <button onclick="closeBookingModal()" class="absolute top-4 right-4 text-primary-foreground/70 hover:text-primary-foreground transition-colors">
                <?php echo theme_icon('x', 'w-5 h-5'); ?>
            </button>
            <h3 class="text-xl font-heading font-bold text-primary-foreground">Fill Your Job Calendar</h3>
            <p class="text-primary-foreground/90 text-sm mt-1">Tell us where you work and we'll check availability.</p>
        </div>
        
        <!-- Body -->
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

<!-- 1. HERO -->
<section id="hero" class="relative min-h-[100svh] flex items-center justify-center overflow-hidden">
    <img src="<?php echo theme_asset('hero-construction.jpg'); ?>" alt="Construction site" class="hero-image absolute inset-0 w-full h-full object-cover transition-opacity duration-500" data-index="0">
    <img src="<?php echo theme_asset('hero-aerial.jpg'); ?>" alt="Construction site" class="hero-image absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0" data-index="1">
    <img src="<?php echo theme_asset('hero-framing.jpg'); ?>" alt="Construction site" class="hero-image absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0" data-index="2">
    <img src="<?php echo theme_asset('hero-team.jpg'); ?>" alt="Construction site" class="hero-image absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0" data-index="3">
    <div class="absolute inset-0 bg-foreground/85"></div>
    <div class="relative z-10 container-main text-center max-w-4xl mx-auto py-20 md:py-32">
        <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-sm border border-primary/30 rounded-full px-4 py-1.5 mb-6 md:mb-10 animate-fade-in-up">
            <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
            <span class="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">AlignaByte Dispatch™</span>
        </div>
        <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-7xl font-heading font-extrabold text-primary-foreground leading-[1.1] mb-5 md:mb-8 animate-fade-in-up delay-100">
            Crews Sitting Idle While <span class="text-accent-blue">Competitors Book Your Jobs?</span>
        </h1>
        <p class="text-sm sm:text-base md:text-xl text-primary-foreground/90 max-w-3xl mx-auto mb-3 md:mb-4 font-body leading-relaxed animate-fade-in-up delay-200">
            We deliver <strong class="text-accent-blue">20 to 40 booked</strong> residential projects every month straight to your dispatch. Not leads, not guesses, but <strong class="text-accent-blue">confirmed work</strong>.
        </p>
        <p class="text-xs sm:text-sm md:text-base text-primary-foreground/80 mb-8 md:mb-12 animate-fade-in-up delay-300">No chasing. No ghost calls. No empty weeks.</p>
        <div class="animate-fade-in-up delay-400 mb-10 md:mb-16">
            <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl px-6 py-4 text-sm sm:px-8 sm:py-5 md:px-10 md:py-6 md:text-base animate-pulse-glow hover:opacity-90 group">
                Fill My Job Calendar <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
            </button>
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-8 animate-fade-in-up delay-500">
            <?php
            $hero_features = array('Booked jobs, not leads', 'Matched by service + location', 'Direct to your dispatch');
            foreach ($hero_features as $feature): ?>
                <div class="flex items-center gap-2">
                    <?php echo theme_icon('check-circle-2', 'w-4 h-4 md:w-5 md:h-5 text-success flex-shrink-0'); ?>
                    <span class="text-xs sm:text-sm text-primary-foreground/90"><?php echo esc_html($feature); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 2. PROBLEM -->
<section id="problem" class="bg-background">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="relative h-[300px] md:h-[400px] lg:h-auto lg:min-h-[600px]">
            <img src="<?php echo theme_asset('phone-jobsite.jpg'); ?>" alt="Missed calls on jobsite" class="absolute inset-0 w-full h-full object-cover">
        </div>
        <div class="py-12 md:py-20 lg:py-28 lg:pr-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pl-16 px-4 sm:px-6">
            <div class="sr-slide-up">
                <div class="inline-flex items-center gap-2 bg-destructive/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                    <?php echo theme_icon('alert-triangle', 'w-4 h-4 text-destructive'); ?>
                    <span class="text-xs font-heading font-semibold text-destructive uppercase tracking-wider">The Problem</span>
                </div>
            </div>
            <div class="sr-scale">
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-heading font-bold text-foreground mb-4 md:mb-6">Here's What's Actually Happening</h2>
            </div>
            <div class="sr-slide-up sr-delay-1">
                <p class="text-base md:text-lg text-muted-foreground mb-6 md:mb-8 font-body">You're not short on demand.<br>You're losing it in the process:</p>
            </div>
            <div class="space-y-3 md:space-y-4 mb-8 md:mb-10">
                <?php
                $problems = array(
                    array('icon' => 'phone', 'text' => 'Calls come in but don\'t convert'),
                    array('icon' => 'users', 'text' => 'Leads ghost after first contact'),
                    array('icon' => 'clock', 'text' => 'Dispatch chases instead of scheduling'),
                    array('icon' => 'calendar', 'text' => 'Job board has gaps every week'),
                );
                foreach ($problems as $i => $problem): ?>
                    <div class="sr-slide-left sr-delay-<?php echo min($i + 1, 4); ?>">
                        <div class="group flex items-center gap-3 md:gap-4 bg-card border border-border rounded-xl p-3 md:p-5 hover:border-destructive/30 hover:shadow-md transition-all">
                            <div class="w-9 h-9 md:w-10 md:h-10 rounded-lg bg-destructive/10 flex items-center justify-center flex-shrink-0">
                                <?php echo theme_icon($problem['icon'], 'w-4 h-4 md:w-5 md:h-5 text-destructive'); ?>
                            </div>
                            <span class="text-foreground font-medium text-sm md:text-base"><?php echo esc_html($problem['text']); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="sr-slide-up">
                <div class="bg-highlight rounded-2xl border border-primary/10 p-5 md:p-8">
                    <p class="text-base md:text-xl font-heading font-bold text-foreground mb-1">Your crews aren't the problem.</p>
                    <p class="text-base md:text-xl font-heading font-bold text-primary mb-4 md:mb-6">Your pipeline is.</p>
                    <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-5 py-4 md:px-6 md:py-5 text-sm md:text-base">
                        Fix My Pipeline <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Continue with more sections... Due to length, I'll create template parts for sections -->

<?php
// Include all other homepage sections
get_template_part('template-parts/sections/reframe');
get_template_part('template-parts/sections/solution');
get_template_part('template-parts/sections/authority');
get_template_part('template-parts/sections/how-it-works');
get_template_part('template-parts/sections/before-after');
get_template_part('template-parts/sections/case-studies');
get_template_part('template-parts/sections/testimonials');
get_template_part('template-parts/sections/final-close');

get_footer();
