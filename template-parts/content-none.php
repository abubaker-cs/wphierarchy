<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <!-- 404 Title -->
  <header class="entry-header">
    <h1><?php esc_html_e( '404', 'wphierarchy' ); ?></h1>
  </header>

  <!-- 404 - Description -->
  <div class="entry-content">
    <p><?php esc_html_e( 'Sorry! No content found.', 'wphierarchy' ); ?></p>
  </div>

</article>
