<!-- 8. CASE STUDIES -->
<section id="case-studies" class="py-12 md:py-20 lg:py-28 bg-foreground">
    <div class="container-main">
        <div class="sr-scale text-center mb-10 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground">What Happens When Your Job Flow Is Fixed</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mb-8 md:mb-12">
            <?php
            $case_studies = array(
                array('img' => 'case-roofing.jpg', 'tag' => 'Roofing', 'stat' => '32', 'label' => 'Booked Jobs', 'desc' => 'Crew went from idle gaps to fully scheduled weeks in just 4 weeks'),
                array('img' => 'case-general.jpg', 'tag' => 'General', 'stat' => '6 to 10', 'label' => 'Jobs Per Week', 'desc' => 'Consistent bookings, no more referral dependency'),
                array('img' => 'case-remodel.jpg', 'tag' => 'Remodeling', 'stat' => '30 Days', 'label' => 'Filled Ahead', 'desc' => 'Dispatch operating at full capacity, planned months out'),
            );
            foreach ($case_studies as $i => $cs): ?>
                <div class="sr-slide-up sr-delay-<?php echo min($i + 1, 3); ?>">
                    <div class="group relative h-[280px] sm:h-[320px] md:h-[420px] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="<?php echo theme_asset($cs['img']); ?>" alt="<?php echo esc_attr($cs['tag']); ?>" loading="lazy" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/10"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                            <span class="text-[10px] md:text-xs font-heading font-semibold text-accent uppercase tracking-widest"><?php echo esc_html($cs['tag']); ?></span>
                            <p class="text-3xl md:text-4xl font-heading font-extrabold text-primary-foreground mt-1 md:mt-2"><?php echo esc_html($cs['stat']); ?></p>
                            <p class="text-base md:text-lg font-heading font-bold text-primary-foreground"><?php echo esc_html($cs['label']); ?></p>
                            <p class="text-primary-foreground/80 text-xs md:text-sm mt-1"><?php echo esc_html($cs['desc']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sr-slide-up text-center">
            <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base">
                I Want These Results <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
            </button>
        </div>
    </div>
</section>
