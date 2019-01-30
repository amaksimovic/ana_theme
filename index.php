<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-12 col-lg-9 pt-2 pb-2">

      <main>
        
        <?php

        if( have_posts() ):

          while( have_posts() ): the_post(); ?>

            <?php get_template_part( '/template_parts/content' ); ?>

        <?php endwhile; ?>

        <hr>

        <div class="float-left pagination pb-2">
            <?php next_posts_link('« Older posts'); ?>
        </div>
        <div class="float-right pagination pb-2">
            <?php previous_posts_link('Newer posts »'); ?>
        </div>

        <?php endif; ?>

      </main>

    </div>

<?php get_footer(); ?>
