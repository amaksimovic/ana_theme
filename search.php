<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-12 col-lg-9 pt-4 pb-2">

			<main>

				<?php if( have_posts() ): ?>

					<header class="page-header pt-3">
						<h1 class="search-title"><?php printf( __( 'Search results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>

					<hr>

					<?php while( have_posts() ): the_post(); ?>

						<?php get_template_part( '/template_parts/content', 'search' ); ?>

					<?php endwhile; ?>

					<hr>

					<div class="float-left pagination pb-2">
	            <?php next_posts_link('« Older posts'); ?>
	        </div>
	        <div class="float-right pagination pb-2">
	            <?php previous_posts_link('Newer posts »'); ?>
	        </div>

				<?php else:

						get_template_part( '/template_parts/content', 'none' );

					endif; ?>

			</main>

		</div>

<?php get_footer(); ?>
