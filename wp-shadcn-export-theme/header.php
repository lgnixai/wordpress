<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[hsl(var(--background))] text-[hsl(var(--foreground))] antialiased'); ?>>
<a class="skip-link sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:bg-black/80 focus:text-white focus:px-3 focus:py-2" href="#content">Skip to content</a>
<header class="border-b border-[hsl(var(--border))] sticky top-0 z-50 backdrop-blur supports-[backdrop-filter]:bg-black/40">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a class="font-semibold text-lg tracking-tight" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <nav class="hidden md:flex gap-6 items-center">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex gap-6',
                'fallback_cb' => false,
                'depth' => 1,
                'link_before' => '<span class="hover:text-[hsl(var(--primary))] transition-colors">',
                'link_after' => '</span>',
            ]);
            ?>
            <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="inline-flex items-center rounded-md border border-[hsl(var(--border))] px-3 py-1.5 text-sm hover:bg-white/5">Products</a>
        </nav>
        <button id="mobile-menu-toggle" class="md:hidden inline-flex items-center justify-center rounded-md border border-[hsl(var(--border))] p-2 text-sm" aria-expanded="false" aria-controls="mobile-menu">Menu</button>
    </div>
    <div id="mobile-menu" class="md:hidden hidden border-t border-[hsl(var(--border))]">
        <div class="px-4 py-3 space-y-2">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex flex-col gap-2',
                'fallback_cb' => false,
                'depth' => 1,
            ]);
            ?>
            <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="inline-flex items-center rounded-md border border-[hsl(var(--border))] px-3 py-1.5 text-sm">Products</a>
        </div>
    </div>
</header>
<main id="content" class="min-h-[60vh]">
