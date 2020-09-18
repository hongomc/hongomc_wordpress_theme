<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <?php get_template_part('template-parts/entry-header'); ?>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>
