<?php get_header(); ?>

<main>
  <div class="container e404">
    <h1>Page not found</h1>
    <p>Unfortunately, the page you tried to reach does not exist.</p>

    <!-- Display recent blog posts. class="widget-recent-entries"-->
    <h2>Take a look at our latest posts</h2>
    <ul class="recent_posts">
      <?php
        // This function returns an array of posts with the set args
        $recent_posts = wp_get_recent_posts(
          array(
            'numberposts' => 3,
            'post_status' => 'published'
          )
        );

        //Loop through that array of posts
        foreach( $recent_posts as $post_item ) : ?>
          <li>
            <a href="<?php echo get_permalink( $post_item['ID'] ); ?>">
              <?php echo get_the_post_thumbnail( $post_item['ID'], 'medium' ); ?>
              <p><?php echo $post_item['post_title'] ?></p>
            </a>
          </li>
        <?php endforeach; ?>
    </ul>

    

  </div>
</main>

<?php get_footer(); ?>