<?php
/**
 * OpenCode Presentation Theme - Main Template
 * S hamburger menu vpravo nahoře
 */

get_header();
?>

<!-- Navigation -->
<nav class="presentation-nav">
    <div class="nav-container">
        <span class="nav-title">OpenCode + WP</span>
        <button class="menu-toggle" onclick="toggleMenu()" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<!-- Menu Overlay -->
<div class="menu-overlay" id="menuOverlay" onclick="toggleMenu()"></div>

<!-- Slide-in Menu vpravo -->
<aside class="menu-panel" id="menu">
    <div class="menu-header">
        <button class="menu-close" onclick="toggleMenu()">X</button>
        <span class="menu-title">Návod</span>
    </div>
    <div class="menu-links">
        <a href="/opencode-wordpress-navod/" class="menu-link">
            <span class="link-icon">👋</span>
            <span class="link-text">Úvod</span>
        </a>
        <a href="/opencode-wordpress-navod/1-zakladni-pojmy/" class="menu-link">
            <span class="link-icon">💡</span>
            <span class="link-text">1. Základní pojmy</span>
        </a>
        <a href="/opencode-wordpress-navod/2-co-je-k-tomu-potreba/" class="menu-link">
            <span class="link-icon">🔧</span>
            <span class="link-text">2. Co je potřeba</span>
        </a>
        <a href="/opencode-wordpress-navod/3-instalace-wordpress-mcp/" class="menu-link">
            <span class="link-icon">⬇️</span>
            <span class="link-text">3. Instalace</span>
        </a>
        <a href="/opencode-wordpress-navod/4-konfigurace-opencode/" class="menu-link">
            <span class="link-icon">⚙️</span>
            <span class="link-text">4. Konfigurace</span>
        </a>
        <a href="/opencode-wordpress-navod/5-co-kdyz-to-nejde/" class="menu-link">
            <span class="link-icon">❓</span>
            <span class="link-text">5. Co když nejde</span>
        </a>
        <a href="/opencode-wordpress-navod/6-k-cemu-to-je-dobre/" class="menu-link">
            <span class="link-icon">🚀</span>
            <span class="link-text">6. K čemu to je</span>
        </a>
    </div>
    <div class="menu-footer">
        <a href="/" class="menu-link">🏠 Zpět na hlavní stránku</a>
    </div>
</aside>

<!-- Main Content -->
<main class="content" id="primary">
    <article class="page-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </article>
</main>

<!-- Footer -->
<footer class="footer">
    <p>🎓 <strong>OpenCode + WordPress</strong> | Vytvořeno s AI</p>
</footer>

<script>
function toggleMenu() {
    document.getElementById('menu').classList.toggle('active');
    document.getElementById('menuOverlay').classList.toggle('active');
}
</script>

<?php get_footer();