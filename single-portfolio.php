<?php get_header(); ?>

<!-- Primary Content -->
<div id="primary" class="content-area extended">

  <main id="main" class="site-main" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <header class="entry-header">

          <?php the_title( '<h1>', '</h1>' ); ?>

        </header>

        <div class="entry-content">

          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'full' ); ?>
          </a>

          <?php the_content(); ?>

          <!-- Custom Field -->
          <p>
            <a class="button" href="<?php the_field('url'); ?>" target="_blank">
              <?php esc_html_e('Visit the Site', 'wphierarchy'); ?>
            </a>
          </p>

        </div>

      </article>

    <?php endwhile; endif; ?>

    <p>Template: single-portfolio.php | For Custom Posts</p>

    </main>

</div>

<?php get_footer(); ?>