<!-- 9. TESTIMONIALS -->
<section id="testimonials" class="py-12 md:py-20 lg:py-28 bg-highlight">
    <div class="sr-scale max-w-5xl mx-auto px-4 text-center mb-8 md:mb-12">
        <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
            <?php echo theme_icon('quote', 'w-4 h-4 text-primary'); ?>
            <span class="text-xs font-heading font-semibold text-primary uppercase tracking-wider">Testimonials</span>
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground">
            Real Contractors. <span class="text-gradient">Real Outcomes.</span>
        </h2>
    </div>

    <div class="max-w-5xl mx-auto px-4 md:px-6 relative">
        <span class="absolute top-0 right-4 md:right-8 font-body text-[50px] sm:text-[70px] md:text-[140px] font-extrabold text-foreground/[0.08] leading-none pointer-events-none select-none">01</span>
        
        <div id="testimonial-content">
            <?php
            $testimonials = array(
                array('quote' => 'I stopped chasing leads. Now jobs come in ready to schedule.', 'name' => 'Mike R.', 'role' => 'Roofing Contractor / TX', 'stat' => '+32 jobs/mo', 'avatar' => 'M'),
                array('quote' => 'Our crews went from waiting to working every single week.', 'name' => 'David T.', 'role' => 'General Contractor / FL', 'stat' => '6 to 10/week', 'avatar' => 'D'),
                array('quote' => 'This is the first system that actually delivers booked work, not just calls.', 'name' => 'Sarah K.', 'role' => 'Remodeling / OH', 'stat' => '30 days ahead', 'avatar' => 'S'),
                array('quote' => 'We went from scrambling for leads to turning down overflow work in six weeks.', 'name' => 'Jason M.', 'role' => 'HVAC / AZ', 'stat' => '40+ jobs/mo', 'avatar' => 'J'),
            );
            $t = $testimonials[0];
            ?>
            <blockquote class="font-heading text-base sm:text-lg md:text-2xl lg:text-3xl font-semibold text-foreground leading-[1.2] max-w-3xl mb-4 md:mb-6">&ldquo;<?php echo esc_html($t['quote']); ?>&rdquo;</blockquote>
            <div class="inline-flex items-center gap-1.5 bg-primary/10 border border-primary/20 rounded-full px-3 py-1 mb-4 md:mb-6">
                <span class="text-xs">📊</span>
                <span class="text-xs font-body font-semibold text-primary"><?php echo esc_html($t['stat']); ?></span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 md:w-12 md:h-12 rounded-full bg-primary/10 flex items-center justify-center">
                    <span class="text-primary font-heading font-bold text-xs md:text-base"><?php echo esc_html($t['avatar']); ?></span>
                </div>
                <div class="text-left">
                    <p class="font-body font-semibold text-foreground text-sm"><?php echo esc_html($t['name']); ?></p>
                    <p class="font-body text-muted-foreground text-xs"><?php echo esc_html($t['role']); ?></p>
                </div>
            </div>
        </div>

        <div class="mt-6 md:mt-16 pt-4 md:pt-6 border-t border-border flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="flex gap-1.5" id="testimonial-dots">
                    <button onclick="goToTestimonial(0)" class="h-[2px] rounded-full transition-all w-5 md:w-8 bg-foreground"></button>
                    <button onclick="goToTestimonial(1)" class="h-[2px] rounded-full transition-all w-5 md:w-8 bg-border"></button>
                    <button onclick="goToTestimonial(2)" class="h-[2px] rounded-full transition-all w-5 md:w-8 bg-border"></button>
                    <button onclick="goToTestimonial(3)" class="h-[2px] rounded-full transition-all w-5 md:w-8 bg-border"></button>
                </div>
                <span class="font-mono text-[10px] md:text-xs text-muted-foreground" id="testimonial-counter">01/04</span>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="previousTestimonial()" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-border flex items-center justify-center hover:bg-card transition-colors">
                    <?php echo theme_icon('chevron-left', 'w-4 h-4 text-foreground'); ?>
                </button>
                <button onclick="nextTestimonial()" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-border flex items-center justify-center hover:bg-card transition-colors">
                    <?php echo theme_icon('chevron-right', 'w-4 h-4 text-foreground'); ?>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
// Testimonials data for JavaScript
window.testimonialsData = <?php echo json_encode($testimonials); ?>;
</script>
