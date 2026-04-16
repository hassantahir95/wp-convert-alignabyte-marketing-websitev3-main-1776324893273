<!-- 10. FINAL CLOSE -->
<section id="final" class="relative py-16 md:py-20 lg:py-28 overflow-hidden">
    <img src="<?php echo theme_asset('final-sunset.jpg'); ?>" alt="Neighborhood at sunset" loading="lazy" class="absolute inset-0 w-full h-full object-cover scale-105 blur-[6px]">
    <div class="absolute inset-0 bg-gradient-to-br from-primary/90 via-[hsl(205,61%,24%)]/85 to-[hsl(205,80%,18%)]/90"></div>
    <div class="relative z-10 container-main text-center max-w-3xl mx-auto">
        <div class="sr-scale">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-5 md:mb-8">How Many Jobs Did You Miss This Month?</h2>
        </div>
        <div class="sr-slide-up sr-delay-1">
            <p class="text-base md:text-xl text-primary-foreground mb-2">Fix your pipeline once</p>
            <p class="text-base md:text-xl text-primary-foreground font-medium mb-8 md:mb-12">And never worry about empty weeks again.</p>
        </div>
        <div class="sr-slide-up sr-delay-2">
            <button onclick="openBookingModal()" class="bg-primary-foreground text-primary rounded-xl font-heading font-bold shadow-2xl py-4 px-6 text-sm md:py-5 md:px-12 md:text-lg hover:bg-primary-foreground/90 group">
                Fill My Calendar Now <?php echo theme_icon('arrow-right', 'inline-block ml-2 w-4 h-4 md:w-6 md:h-6 group-hover:translate-x-1 transition-transform'); ?>
            </button>
        </div>
    </div>
</section>
