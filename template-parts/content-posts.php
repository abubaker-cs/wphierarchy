<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <!-- Article's Title -->
  <header class="entry-header">

    <!-- Auto select ICON Type -->
    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

    <?php the_title( '<h2><a href=" ' . esc_url( get_permalink() ) . ' ">', '</a></h2>' ); ?>

    <div class="byline">
      <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>
    </div>

  </header>

  <!-- Content -->
  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>

  <!-- Show comments only if they are opened -->
  <?php
    if(comments_open()) :
      comments_template();
    endif;
  ?>


</article>
