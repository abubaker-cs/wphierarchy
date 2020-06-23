<?php get_header(); ?>

<!-- Primary Content -->
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <div class="author-bio">
        <h1><?php the_archive_title(); ?></h1>

        <p><?php the_author_meta('description', $post->post_author); ?></p>

      </div>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display Content -->
        <?php get_template_part('template-parts/content-posts', get_post_format() ); ?>

    <?php endwhile; else : ?>

        <!-- No Content -->
        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

    <!-- Pagination -->
    <?php echo paginate_links(); ?>


    <p>Author: author.php</p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
