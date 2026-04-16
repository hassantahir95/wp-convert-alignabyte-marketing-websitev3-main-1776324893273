<!-- 7. BEFORE & AFTER -->
<section id="before-after" class="py-12 md:py-20 lg:py-28 bg-background">
    <div class="container-main">
        <div class="sr-scale text-center mb-10 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground">
                The Difference Is <span class="text-primary">Night and Day</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 max-w-4xl mx-auto mb-8 md:mb-12">
            <div class="sr-slide-left">
                <div class="bg-card border border-border rounded-2xl shadow-xl overflow-hidden">
                    <div class="bg-foreground px-5 md:px-6 py-3 md:py-4">
                        <span class="text-primary-foreground font-heading font-bold text-base md:text-lg">Before</span>
                    </div>
                    <div class="p-4 md:p-6 space-y-3 md:space-y-4">
                        <?php
                        $before_items = array('2 to 3 jobs per week', 'Spotty calls', 'Empty schedule', 'Manual chasing', 'Unclear pipeline');
                        foreach ($before_items as $item): ?>
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-destructive/10 flex items-center justify-center flex-shrink-0">
                                    <?php echo theme_icon('x', 'w-3 h-3 md:w-4 md:h-4 text-destructive'); ?>
                                </div>
                                <span class="text-muted-foreground text-sm"><?php echo esc_html($item); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="sr-slide-right">
                <div class="bg-card border-2 border-primary/30 rounded-2xl shadow-xl ring-4 ring-primary/5 overflow-hidden">
                    <div class="bg-primary px-5 md:px-6 py-3 md:py-4 flex items-center gap-2">
                        <?php echo theme_icon('trending-up', 'w-4 h-4 md:w-5 md:h-5 text-primary-foreground'); ?>
                        <span class="text-primary-foreground font-heading font-bold text-base md:text-lg">After</span>
                    </div>
                    <div class="p-4 md:p-6 space-y-3 md:space-y-4">
                        <?php
                        $after_items = array('6 to 10 jobs per week', 'Consistent bookings', 'Fully booked weeks', 'Automated dispatch', 'Confirmed job flow');
                        foreach ($after_items as $item): ?>
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-success/10 flex items-center justify-center flex-shrink-0">
                                    <?php echo theme_icon('check', 'w-3 h-3 md:w-4 md:h-4 text-success'); ?>
                                </div>
                                <span class="text-foreground font-bold text-sm"><?php echo esc_html($item); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="sr-slide-up text-center">
            <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-4 md:px-8 md:py-5 text-sm md:text-base group">
                Upgrade My Job Flow <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
            </button>
        </div>
    </div>
</section>
