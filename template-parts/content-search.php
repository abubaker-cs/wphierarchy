<article id="post-<?php the_ID(); ?>" class="post">

  <header class="entry-header">

    <h2 class="search-title">
      <a href="<?php the_permalink(); ?>">

        <!-- Type of Content: Post, Page, Custom -->
        <?php echo get_post_type( $post ); ?>:

        <!-- Title -->
        <?php the_title(); ?>
      </a>
    </h2>

  </header>

  <div class="entry-content">

    <!-- Excerpt -->
    <?php the_excerpt(); ?>

  </div>

</article>
