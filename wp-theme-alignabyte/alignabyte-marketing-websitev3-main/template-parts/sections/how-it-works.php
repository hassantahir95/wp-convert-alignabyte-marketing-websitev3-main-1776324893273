<!-- 6. HOW IT WORKS -->
<section id="how-it-works" class="relative py-12 md:py-20 lg:py-28 overflow-hidden">
    <img src="<?php echo theme_asset('howworks-bg.jpg'); ?>" alt="Construction blueprints" loading="lazy" class="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]">
    <div class="absolute inset-0 bg-foreground/80"></div>
    <div class="relative z-10 container-main">
        <div class="sr-scale text-center mb-10 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground">Here's How Your Schedule Gets Filled</h2>
        </div>

        <div class="max-w-3xl mx-auto space-y-3 md:space-y-6">
            <?php
            $steps = array(
                array('icon' => 'users', 'title' => 'Homeowner Requests Service', 'desc' => 'Real homeowners in your area request the exact service you provide.'),
                array('icon' => 'target', 'title' => 'System Matches Job Type + Area', 'desc' => 'Our engine matches the job to your service type, location, and availability.'),
                array('icon' => 'phone', 'title' => 'Call Routed to You', 'desc' => 'The homeowner call goes directly to your dispatch line. No middlemen.'),
                array('icon' => 'calendar', 'title' => 'Appointment Booked', 'desc' => 'Your team books the appointment and confirms the project details.'),
                array('icon' => 'check-circle-2', 'title' => 'Project Added to Schedule', 'desc' => 'The job lands on your board. Your crew shows up. Work gets done.'),
            );
            foreach ($steps as $i => $step): ?>
                <div class="sr-slide-up sr-delay-<?php echo min($i + 1, 5); ?>">
                    <!-- Mobile: vertical layout -->
                    <div class="flex flex-col items-start sm:hidden">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center shadow-lg ml-4">
                            <span class="text-primary-foreground font-heading font-bold text-sm"><?php echo $i + 1; ?></span>
                        </div>
                        <div class="w-px bg-primary/20 h-3 ml-[1.65rem]"></div>
                        <div class="bg-foreground/60 border border-primary/15 rounded-xl backdrop-blur-sm shadow-lg p-4 w-full">
                            <div class="flex items-center gap-2 mb-1.5">
                                <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center flex-shrink-0">
                                    <?php echo theme_icon($step['icon'], 'w-4 h-4 text-primary-foreground'); ?>
                                </div>
                                <h3 class="text-sm text-primary-foreground font-heading font-bold leading-tight"><?php echo esc_html($step['title']); ?></h3>
                            </div>
                            <p class="text-primary-foreground/80 text-xs leading-relaxed"><?php echo esc_html($step['desc']); ?></p>
                        </div>
                    </div>

                    <!-- Desktop: horizontal layout -->
                    <div class="hidden sm:flex items-start gap-3 md:gap-8">
                        <div class="flex flex-col items-center flex-shrink-0 pt-1">
                            <div class="w-10 h-10 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full bg-primary flex items-center justify-center shadow-lg">
                                <span class="text-primary-foreground font-heading font-bold text-sm md:text-lg"><?php echo $i + 1; ?></span>
                            </div>
                            <?php if ($i < 4): ?>
                                <div class="w-px bg-primary/20 flex-1 min-h-[30px] md:min-h-[40px] mt-2 md:mt-3"></div>
                            <?php endif; ?>
                        </div>
                        <div class="bg-foreground/60 border border-primary/15 rounded-xl md:rounded-2xl backdrop-blur-sm shadow-lg p-4 md:p-8 flex-1 min-w-0">
                            <div class="flex items-center gap-2 md:gap-3 mb-1 md:mb-2">
                                <div class="w-8 h-8 md:w-10 md:h-10 rounded-lg md:rounded-xl bg-primary flex items-center justify-center flex-shrink-0">
                                    <?php echo theme_icon($step['icon'], 'w-4 h-4 md:w-5 md:h-5 text-primary-foreground'); ?>
                                </div>
                                <h3 class="text-sm md:text-base text-primary-foreground font-heading font-bold leading-tight"><?php echo esc_html($step['title']); ?></h3>
                            </div>
                            <p class="text-primary-foreground/80 text-xs md:text-sm leading-relaxed"><?php echo esc_html($step['desc']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sr-slide-up mt-10 md:mt-16">
            <div class="bg-foreground/60 border border-primary/15 backdrop-blur-sm rounded-2xl p-6 md:p-10 text-center max-w-2xl mx-auto">
                <p class="text-lg md:text-xl font-heading font-bold text-primary-foreground mb-1">Your crews stay working.</p>
                <p class="text-lg md:text-xl font-heading font-bold text-accent-blue mb-6 md:mb-8">Your weeks stay full.</p>
                <button onclick="openBookingModal()" class="bg-primary text-primary-foreground rounded-xl font-heading font-bold px-6 py-4 md:px-8 md:py-5 text-sm md:text-base">
                    See It In Action <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-5 md:h-5'); ?>
                </button>
            </div>
        </div>
    </div>
</section>
