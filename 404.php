<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-12 col-lg-9 pt-2 pb-2">

      <main>

				<header class="page-header pt-2">
					<h1 class="search-title"><?php esc_html_e('Sorry, page not found.'); ?></h1>
				</header>

				<article id="page-not-found">

					<p><?php esc_html_e( "Check out our most recent posts. Maybe there you'll find what you were looking for."); ?></p>

					<div class="row">

						<div class="col-12 col-lg-9">

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						</div>

					</div>

				</article>

			</main>

		</div>

<?php get_footer(); ?>
