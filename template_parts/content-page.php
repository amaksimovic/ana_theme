<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header pt-3">
		<?php the_title( '<h1 class="entry-title">', '<a href="%s"></a></h1>' ); ?>
	</header>

	<div class="row">

		<div class="col-12 col-lg-12 pb-2">

			<div class="content">
				<?php the_content(); ?>
			</div>
			
		</div>

	</div>

</article>
