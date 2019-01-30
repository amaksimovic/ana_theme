<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-12 col-lg-9 pt-2 pb-2">

      <main>

        <?php

        if( have_posts() ):

          while( have_posts() ): the_post(); ?>

            <?php get_template_part( '/template_parts/content', 'page' ); ?>

        <?php endwhile; ?>

        <?php endif; ?>

      </main>

    </div>

<?php get_footer(); ?>
