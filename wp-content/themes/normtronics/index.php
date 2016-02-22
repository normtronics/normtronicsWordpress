<?php get_header() ?>

  <?php
    if( have_posts() ):
      while ( have_posts() ): the_post();
  ?>
    <div class="container">
      <div class="row">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
        <hr>
      </div>
    </div>

  <?php
      endwhile;
    endif;
  ?>

<?php get_footer(); ?>
