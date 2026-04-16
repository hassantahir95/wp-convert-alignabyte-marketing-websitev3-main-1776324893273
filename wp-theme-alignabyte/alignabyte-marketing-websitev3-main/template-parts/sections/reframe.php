<!-- 3. REFRAME -->
<section id="reframe" class="bg-background">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="py-12 md:py-20 lg:py-28 lg:pl-[max(2rem,calc((100vw-72rem)/2+2rem))] lg:pr-16 px-4 sm:px-6">
            <div class="sr-scale">
                <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-foreground mb-2">You Don't Need More Leads</h2>
                <p class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-heading font-extrabold text-primary mb-6 md:mb-10">You Need Booked Jobs</p>
            </div>
            <div class="sr-slide-up sr-delay-1">
                <p class="text-base md:text-lg text-muted-foreground mb-6 md:mb-8 font-body">Most agencies send traffic. We send:</p>
            </div>
            <div class="space-y-3 md:space-y-4 mb-8 md:mb-10">
                <?php
                $items = array('Confirmed homeowners', 'Ready to move projects', 'Scheduled work');
                foreach ($items as $i => $item): ?>
                    <div class="sr-slide-right sr-delay-<?php echo min($i + 1, 3); ?>">
                        <div class="flex items-center gap-3 md:gap-4">
                            <div class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <?php echo theme_icon('check-circle-2', 'w-4 h-4 md:w-5 md:h-5 text-primary'); ?>
                            </div>
                            <span class="text-foreground font-bold text-base md:text-lg"><?php echo esc_html($item); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="sr-slide-up">
                <div class="grid grid-cols-3 gap-3 md:gap-4 mb-8 md:mb-10">
                    <?php
                    $stats = array(
                        array('num' => '20+', 'label' => 'Jobs/Month', 'color' => 'text-primary'),
                        array('num' => '98%', 'label' => 'Book Rate', 'color' => 'text-primary'),
                        array('num' => '30', 'label' => 'Days Ahead', 'color' => 'text-success'),
                    );
                    foreach ($stats as $stat): ?>
                        <div class="bg-card border border-border rounded-xl shadow-lg p-3 md:p-4 text-center">
                            <p class="text-xl sm:text-2xl md:text-3xl font-heading font-extrabold <?php echo esc_attr($stat['color']); ?>"><?php echo esc_html($stat['num']); ?></p>
                            <p class="text-[10px] md:text-xs text-muted-foreground mt-1"><?php echo esc_html($stat['label']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="sr-slide-up sr-delay-2">
                <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 md:px-8 md:py-5 text-sm md:text-base group">
                    Get Booked Jobs <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
                </button>
            </div>
        </div>
        <div class="relative h-[300px] md:h-[400px] lg:h-auto lg:min-h-[600px]">
            <img src="<?php echo theme_asset('dispatch-tablet.jpg'); ?>" alt="Dispatch tablet" class="absolute inset-0 w-full h-full object-cover">
        </div>
    </div>
</section>
