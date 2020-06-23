<?php get_header(); ?>

<!-- Primary Content -->
<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <!-- Article's Title -->
        <header class="entry-header">

          <?php the_title( '<h1>', '</h1>' ); ?>

        </header>

        <!-- Content -->
        <div class="entry-content">

          <!-- <pre>< ?php var_export($post); ?></pre> -->

          <p><img src="<?php echo esc_url( $post->guid ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"></p>

          <?php the_content(); ?>
        </div>

        <!-- Show comments only if they are opened -->
        <?php
          if(comments_open()) :
            comments_template();
          endif;
        ?>


      </article>


    <?php endwhile; else : ?>

        <!-- No Content -->
        <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

    <p>Template: image.php -> attachment.php</p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
