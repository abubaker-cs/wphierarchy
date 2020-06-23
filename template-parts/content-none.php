<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <!-- 404 Title -->
  <header class="entry-header">
    <h1><?php esc_html_e( '404 - Page Not Found', 'wphierarchy' ); ?></h1>
  </header>

  <!-- 404 - Description -->
  <div class="entry-content">

    <!-- 404 Message -->
    <p><?php esc_html_e( 'Sorry! No content found.', 'wphierarchy' ); ?></p>

    <!-- Search Form -->
    <p><?php echo get_search_form(); ?></p>

  </div>

</article>
