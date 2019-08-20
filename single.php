<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-12 col-lg-9 pt-4 pb-2">

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

								<div class="cover-img pb-2"><?php the_post_thumbnail(); ?></div>

							<?php endif; ?>

							<div class="content">
								<?php the_content(); ?>
							</div>

							<small><?php the_tags(); ?></small>

							<hr>

							<div class="post-comments pb-3">

								<a href="#comments" data-toggle="collapse" class="comments-title"><i class="fas fa-comments"></i>&nbsp&nbsp
									<?php

					            printf(
					                esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'ana_theme' ) ),
					                number_format_i18n( get_comments_number() ),
					                '<span>'. get_the_title() .'</span>'
					            );

						       ?>
								</a>

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
