<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <p><?php _e('Sorry, no results were found.', 'roots'); ?> </p>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>



<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="no-bullet">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>