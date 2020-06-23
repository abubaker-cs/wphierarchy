<?php get_header(); ?>

<!-- Primary Content -->
<div id="primary" class="content-area">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display Content -->
        <?php get_template_part('template-parts/content', 'page'); ?>

    <?php endwhile; else : ?>

        <!-- No Content -->
        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

    <p>Template: singular.php | Home, </p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
