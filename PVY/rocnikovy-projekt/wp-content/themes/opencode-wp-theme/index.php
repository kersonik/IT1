<?php
/**
 * OpenCode Presentation Theme - Index
 */
get_header();
?>

<main class="content" id="primary">
    <article class="page-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </article>
</main>

<footer class="footer">
    <p>OpenCode + WordPress Návod</p>
</footer>

<?php get_footer();