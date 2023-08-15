<?php get_header(); ?>

<main>
  <div class="container e404">
    <h1>Page not found</h1>
    <p>Unfortunately, the page you tried to reach does not exist.</p>

    <!-- Display recent blog posts. class="widget-recent-entries"-->
    <?php
      the_widget( 'WP_Widget_Recent_Posts',
      array(
        'title' => 'Take a look at our latest posts',
        'number' => 3
      ) );
    ?>

  </div>
</main>

<?php get_footer(); ?>