<?php get_header(); ?>

<!-- Primary Content -->
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <h1><?php wp_title(''); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display Content -->
        <?php get_template_part('template-parts/content-posts', get_post_format() ); ?>

    <?php endwhile; else : ?>

        <!-- No Content -->
        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>


    <!-- Pagination -->
    <?php echo paginate_links(); ?>


    <p>Template: home.php | Blog (your latest posts) </p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
