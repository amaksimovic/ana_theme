<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-12 col-lg-9 pt-2 pb-2">

			<main>

				<?php

				if( have_posts() ):

					while( have_posts() ): the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="entry-header pt-3">
								<h2><?php the_category(array( 'title_li' => false, 'style' => false )); ?><h2>
								<?php the_title( '<h1 class="entry-title">','</h1>' ); ?>
								<small><i class="far fa-calendar-alt"></i><?php the_time('  F j, Y'); ?></small>
							</header>

							<?php if( has_post_thumbnail() ): ?>

								<div class="cover-img pb-2"><?php the_post_thumbnail( array(750,450) ); ?></div>

							<?php endif; ?>

							<div class="content">
								<?php the_content(); ?>
							</div>

							<small><?php the_tags(); ?></small>

							<hr>

							<div class="post-comments pb-3">

								<a href="#comments" data-toggle="collapse" class="comments-title"><i class="fas fa-comments"></i>&nbsp&nbspClick to comment and view the conversation</a>
								<div id="comments" class="collapse pt-2">
									<?php
											if( comments_open() ){
												comments_template();
											} else {
												echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
											}
									 ?>
							 	</div>

						 	</div>

							<div class="post-link clearfix">
			          <div class="float-left pb-2"><?php previous_post_link(); ?></div>
			          <div class="float-right pb-2"><?php next_post_link(); ?></div>
							</div>

						</article>

					<?php endwhile;

				endif;

				?>

			</main>

		</div>

<?php get_footer(); ?>
