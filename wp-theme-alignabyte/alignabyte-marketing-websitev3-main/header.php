<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
$current_page = isset($GLOBALS['theme_current_page']) ? $GLOBALS['theme_current_page'] : '';
if (is_front_page()) {
    $current_page = 'home';
}
?>

<nav class="fixed top-0 left-0 right-0 z-50 bg-foreground/90 backdrop-blur-md border-b border-primary/10">
    <div class="container-main flex items-center justify-between h-16 md:h-20">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
            <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center">
                <span class="text-primary-foreground font-heading font-bold text-lg">A</span>
            </div>
            <span class="text-primary-foreground font-heading font-bold text-xl tracking-tight">
                Aligna<span class="text-accent-blue">Byte</span>
            </span>
        </a>

        <!-- Desktop -->
        <div class="hidden md:flex items-center gap-8">
            <a href="<?php echo esc_url(home_url('/')); ?>" 
               class="text-sm font-medium transition-colors hover:text-accent <?php echo ($current_page === 'home') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
                Home
            </a>
            <a href="<?php echo esc_url(home_url('/services/')); ?>" 
               class="text-sm font-medium transition-colors hover:text-accent <?php echo ($current_page === 'services') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
                Services
            </a>
            <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" 
               class="text-sm font-medium transition-colors hover:text-accent <?php echo ($current_page === 'case-studies') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
                Case Studies
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" 
               class="text-sm font-medium transition-colors hover:text-accent <?php echo ($current_page === 'contact') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
                Contact
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                <button class="bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl hover:opacity-90 px-6 py-2.5">
                    Fill My Job Calendar
                </button>
            </a>
        </div>

        <!-- Mobile toggle -->
        <button id="mobile-menu-toggle" class="md:hidden text-primary-foreground">
            <span id="menu-icon"><?php echo theme_icon('menu', 'w-6 h-6'); ?></span>
            <span id="close-icon" class="hidden"><?php echo theme_icon('x', 'w-6 h-6'); ?></span>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-foreground/95 backdrop-blur-md border-t border-primary/10 px-4 pb-6 pt-2">
        <a href="<?php echo esc_url(home_url('/')); ?>" 
           class="block py-3 text-sm font-medium transition-colors <?php echo ($current_page === 'home') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
            Home
        </a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>" 
           class="block py-3 text-sm font-medium transition-colors <?php echo ($current_page === 'services') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
            Services
        </a>
        <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" 
           class="block py-3 text-sm font-medium transition-colors <?php echo ($current_page === 'case-studies') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
            Case Studies
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" 
           class="block py-3 text-sm font-medium transition-colors <?php echo ($current_page === 'contact') ? 'text-accent' : 'text-primary-foreground/90'; ?>">
            Contact
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
            <button class="w-full mt-4 bg-primary text-primary-foreground rounded-xl font-heading font-bold shadow-xl py-2.5">
                Fill My Job Calendar
            </button>
        </a>
    </div>
</nav>

<main>
