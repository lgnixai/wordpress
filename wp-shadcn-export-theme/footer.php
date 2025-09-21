    </main>
    <footer class="border-t border-[hsl(var(--border))] mt-16">
        <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm text-[hsl(var(--muted-foreground))]">
            <div>
                <div class="font-semibold text-[hsl(var(--foreground))] mb-2"><?php bloginfo('name'); ?></div>
                <p class="leading-relaxed"><?php bloginfo('description'); ?></p>
            </div>
            <div>
                <div class="font-semibold text-[hsl(var(--foreground))] mb-2">Menu</div>
                <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false]); ?>
            </div>
            <div>
                <div class="font-semibold text-[hsl(var(--foreground))] mb-2">Contact</div>
                <p>Email: <?php echo antispambot(get_option('admin_email')); ?></p>
            </div>
            <div>
                <div class="font-semibold text-[hsl(var(--foreground))] mb-2">Follow</div>
                <div class="flex gap-3">
                    <a href="#" class="hover:text-[hsl(var(--primary))]">LinkedIn</a>
                    <a href="#" class="hover:text-[hsl(var(--primary))]">Twitter</a>
                </div>
            </div>
        </div>
        <div class="text-center text-xs text-[hsl(var(--muted-foreground))] py-4 border-t border-[hsl(var(--border))]">
            © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
    </html>
