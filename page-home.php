<?php get_header(); ?>

<main>
  <div class="container">
    <?php
      while( have_posts() ) : the_post();
    ?>
    <div class="content">
      <?php
        the_content();
        endwhile;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>