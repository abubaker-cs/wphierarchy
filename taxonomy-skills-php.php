<?php get_header('splash'); ?>

<!-- Primary Content -->
<div id="primary" class="content-area extended">

  <main id="main" class="site-main" role="main">

      <h1><?php the_archive_title(); ?></h1>
      <p><?php the_archive_description(); ?></p>

      <hr>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display Content -->
        <?php get_template_part('template-parts/content', 'portfolio' ); ?>

    <?php endwhile; else : ?>

        <!-- No Content -->
        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

    <!-- Pagination -->
    <?php echo paginate_links(); ?>

      <p class="reference">Template: taxonomy-skills-php.php | CPT: Portfolio (all)</p>



    </main>



</div>

<?php get_footer('splash'); ?>
