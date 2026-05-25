<?php
defined( 'ABSPATH' ) || exit;

$integrations = [
    'Laravel', 'PHP 8', 'MySQL', 'PostgreSQL', 'Redis',
    'Docker', 'Nginx', 'GitHub', 'GitLab', 'Slack',
    'Vite', 'Tailwind', 'Alpine.js', 'Vue.js', 'React',
];
?>

<div class="pt-8">
    <div class="flex flex-col gap-2 mb-10">
        <h2 class="text-3xl md:text-4xl font-medium font-geist text-white tracking-tight">
            <?php esc_html_e( 'Works With Your Stack', 'lumina' ); ?>
        </h2>
        <p class="text-zinc-500 max-w-lg">
            <?php esc_html_e( 'Seamless integration with the tools and frameworks you already use.', 'lumina' ); ?>
        </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 pointer-events-auto">
        <?php foreach ( $integrations as $tech ) : ?>
            <div class="glass-card rounded-2xl p-5 flex items-center justify-center text-center bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50 transition-all duration-300 group">
                <span class="text-sm font-mono text-zinc-400 group-hover:text-zinc-200 transition-colors"><?php echo esc_html( $tech ); ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>
