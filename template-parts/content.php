<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <!-- Article's Title -->
  <header class="entry-header">
    <?php the_title( '<h1>', '</h1>' ); ?>
  </header>

  <!-- Content -->
  <div class="entry-content">
    <?php the_content(); ?>
  </div>

</article>
