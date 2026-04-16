</main>

<footer class="bg-foreground pt-10 md:pt-16 pb-6 md:pb-8">
    <div class="container-main">
        <!-- 3-column grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 sm:gap-8 mb-8 md:mb-10">
            <!-- Brand + tagline -->
            <div class="flex flex-col gap-3 md:gap-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                    <div class="w-8 h-8 md:w-9 md:h-9 rounded-xl bg-primary flex items-center justify-center">
                        <span class="text-primary-foreground font-heading font-bold text-base md:text-lg">A</span>
                    </div>
                    <span class="text-primary-foreground font-heading font-bold text-lg md:text-xl tracking-tight">
                        Aligna<span class="text-accent-blue">Byte</span>
                    </span>
                </a>
                <p class="text-primary-foreground/80 text-xs md:text-sm leading-relaxed max-w-xs">
                    The job-booking engine built for residential contractors. No leads. No guesses. Just booked work.
                </p>
            </div>

            <!-- Navigation -->
            <div>
                <h4 class="font-heading font-semibold text-primary-foreground text-xs md:text-sm uppercase tracking-wider mb-3 md:mb-4">
                    Navigation
                </h4>
                <ul class="space-y-2 md:space-y-2.5">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>" 
                           class="text-primary-foreground/80 text-xs md:text-sm hover:text-accent transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/services/')); ?>" 
                           class="text-primary-foreground/80 text-xs md:text-sm hover:text-accent transition-colors">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" 
                           class="text-primary-foreground/80 text-xs md:text-sm hover:text-accent transition-colors">
                            Case Studies
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" 
                           class="text-primary-foreground/80 text-xs md:text-sm hover:text-accent transition-colors">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h4 class="font-heading font-semibold text-primary-foreground text-xs md:text-sm uppercase tracking-wider mb-3 md:mb-4">
                    Connect
                </h4>
                <div class="flex gap-3">
                    <a href="#" 
                       aria-label="Facebook"
                       class="w-9 h-9 md:w-10 md:h-10 rounded-full border border-primary-foreground/20 flex items-center justify-center text-primary-foreground/80 hover:bg-accent hover:text-foreground hover:border-accent transition-all duration-200">
                        <?php echo theme_icon('facebook', 'w-4 h-4'); ?>
                    </a>
                    <a href="#" 
                       aria-label="Instagram"
                       class="w-9 h-9 md:w-10 md:h-10 rounded-full border border-primary-foreground/20 flex items-center justify-center text-primary-foreground/80 hover:bg-accent hover:text-foreground hover:border-accent transition-all duration-200">
                        <?php echo theme_icon('instagram', 'w-4 h-4'); ?>
                    </a>
                    <a href="#" 
                       aria-label="LinkedIn"
                       class="w-9 h-9 md:w-10 md:h-10 rounded-full border border-primary-foreground/20 flex items-center justify-center text-primary-foreground/80 hover:bg-accent hover:text-foreground hover:border-accent transition-all duration-200">
                        <?php echo theme_icon('linkedin', 'w-4 h-4'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider + copyright -->
        <div class="border-t border-primary-foreground/10 pt-4 md:pt-6 flex flex-col sm:flex-row items-center justify-between gap-2 md:gap-3">
            <p class="text-primary-foreground/70 text-[10px] md:text-xs">
                © <?php echo date('Y'); ?> AlignaByte Marketing™. All rights reserved.
            </p>
            <p class="text-primary-foreground/60 text-[10px] md:text-xs">
                Exclusive job-booking for residential contractors.
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
