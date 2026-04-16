<!-- 5. AUTHORITY -->
<section id="authority" class="py-12 md:py-20 lg:py-28 bg-background">
    <div class="container-main">
        <div class="sr-slide-up relative rounded-2xl sm:rounded-3xl overflow-hidden min-h-[400px] md:min-h-[500px] flex items-center">
            <img src="<?php echo theme_asset('homes-wide.jpg'); ?>" alt="Multiple homes under construction" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-foreground/95 via-foreground/90 to-foreground/70 md:to-foreground/60"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/20 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-0 left-0 w-32 h-1 bg-gradient-to-r from-primary to-accent rounded-full"></div>
            <div class="relative z-10 p-6 md:p-16 max-w-2xl">
                <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-md border border-primary/30 rounded-full px-4 py-1.5 mb-6 md:mb-8">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest">Exclusive Access</span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-4 md:mb-6 leading-tight">
                    We Only Work With <span class="text-gradient">One Contractor</span> Per Area
                </h2>
                <p class="text-primary-foreground/90 text-base md:text-lg mb-3 md:mb-4">This system is exclusive.</p>
                <p class="text-primary-foreground/90 text-base md:text-lg mb-3 md:mb-4">We don't flood markets.</p>
                <p class="text-primary-foreground/90 text-base md:text-lg mb-6 md:mb-10">We build <strong class="text-primary-foreground">dominant local operators</strong>.</p>
                <button onclick="openBookingModal()" class="bg-gradient-to-r from-primary to-[hsl(205,80%,45%)] text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base shadow-[0_0_30px_hsl(205_61%_28%/0.4)] hover:-translate-y-0.5 transition-transform group">
                    Check My Availability <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform'); ?>
                </button>
                <div class="flex flex-wrap items-center gap-4 md:gap-6 mt-6 md:mt-8">
                    <?php
                    $badges = array(
                        array('icon' => 'shield', 'text' => 'Protected Territory'),
                        array('icon' => 'map-pin', 'text' => 'Geo Locked Area'),
                        array('icon' => 'lock', 'text' => 'Exclusive Contract'),
                    );
                    foreach ($badges as $badge): ?>
                        <div class="flex items-center gap-2">
                            <?php echo theme_icon($badge['icon'], 'w-4 h-4 text-primary'); ?>
                            <span class="text-primary-foreground/90 text-xs md:text-sm"><?php echo esc_html($badge['text']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
