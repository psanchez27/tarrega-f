<?php get_header(); ?>

<main>
  <div class="continer">

    <!-- Archive content -->
    <?php
      // Archive title
      the_archive_title( '<h1 class="archive-title">', '</h1>' );

      // Start loop
      if( have_posts() ) :
        while( have_posts() ) : the_post();
    ?>

    <article>

      <!-- Post title -->
      <h2><?php the_title(); ?></h2>

      <!-- Post thumbnail -->
      <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
      </div>

      <!-- Meta info -->
      <div class="meta-info">
        <p>Created by: <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></p>
        <p>Categories: <?php the_category( ', ' ); ?></p>
        <p>Tags: <?php the_tags( '', ', ' ); ?></p>
      </div>

      <!-- Content -->
      <?php the_excerpt(); ?>

    </article>

    <!-- End the while loop -->
    <?php endwhile; ?>

    <!-- Page pagination -->
    <div class="tarrega-pagination">
      <div class="left"><?php previous_posts_link( '<< Newer posts' ); ?></div>
      <div class="right"><?php next_posts_link( 'Older Posts >>' ) ?></div>
    </div>

    <!-- If nothing to show -->
    <?php else: ?>
    <p>Nothing to show at the moment, please return soon!</p>

    <!-- End if block for the main loop -->
    <?php endif; ?>
    
  </div>
</main>

<?php get_footer(); ?>