<!-- 4. SOLUTION -->
<section id="solution" class="py-12 md:py-20 lg:py-28 bg-background">
    <div class="container-main">
        <div class="sr-scale text-center mb-10 md:mb-16">
            <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-1.5 mb-4 md:mb-6">
                <?php echo theme_icon('zap', 'w-4 h-4 text-primary'); ?>
                <span class="text-xs font-heading font-semibold text-primary uppercase tracking-wider">The System</span>
            </div>
            <h2 class="text-2xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground">
                Introducing the <span class="text-primary">AlignaByte Dispatch™</span> System
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
            <?php
            $features = array(
                array('icon' => 'phone', 'title' => 'Direct Homeowner Calls', 'desc' => 'Real calls sent directly to your dispatch line'),
                array('icon' => 'map-pin', 'title' => 'Job Matching Engine', 'desc' => 'Matched by service type and exact location'),
                array('icon' => 'shield', 'title' => 'Intent Filtering', 'desc' => 'Low intent inquiries filtered out automatically'),
                array('icon' => 'calendar', 'title' => 'Auto Booking', 'desc' => 'Projects booked directly into your schedule'),
                array('icon' => 'clock', 'title' => 'Pipeline Filled', 'desc' => 'Job board filled weeks ahead, always'),
            );
            foreach ($features as $i => $feature): ?>
                <div class="sr-slide-up sr-delay-<?php echo min($i + 1, 5); ?>">
                    <div class="group bg-card border border-border rounded-2xl p-5 md:p-8 hover:border-primary/30 hover:shadow-lg transition-all h-full">
                        <div class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-4 md:mb-5 group-hover:bg-primary transition-colors">
                            <?php echo theme_icon($feature['icon'], 'w-6 h-6 md:w-7 md:h-7 text-primary group-hover:text-primary-foreground transition-colors'); ?>
                        </div>
                        <h3 class="text-base md:text-lg font-heading font-bold text-foreground mb-2"><?php echo esc_html($feature['title']); ?></h3>
                        <p class="text-muted-foreground text-sm leading-relaxed"><?php echo esc_html($feature['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="sr-slide-up sr-delay-5">
                <div class="relative rounded-2xl p-5 md:p-8 flex flex-col justify-between overflow-hidden min-h-[220px] md:min-h-[240px] h-full">
                    <img src="<?php echo theme_asset('solution-dashboard.jpg'); ?>" alt="Scheduling dashboard" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/85 to-primary/70"></div>
                    <div class="relative z-10">
                        <p class="text-primary-foreground font-heading font-bold text-lg md:text-xl mb-2 md:mb-3">Your dispatch doesn't chase anymore. It schedules.</p>
                        <p class="text-primary-foreground/90 text-sm mb-4 md:mb-6">Install the system that fills your calendar automatically.</p>
                    </div>
                    <button onclick="openBookingModal()" class="relative z-10 bg-primary-foreground text-primary rounded-xl font-heading font-bold w-full py-4 md:py-5 text-sm md:text-base">
                        Install My Booking System <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
