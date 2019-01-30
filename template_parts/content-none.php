<article id="no-results">

	<header class="entry-header pt-2">
		<h1 class="page-title"><?php esc_html_e( 'Nothing was found!'); ?></h1>
	</header>

	<div class="row">

		<div class="col-12 col-lg-12">

			<p><?php esc_html_e( 'Try searching for something else or check the list of our most popular tags in the sidebar. Below you can also check out our most recent posts.' ); ?></p>
			
		</div>

		<div class="col-12 col-lg-12">

			<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

		</div>

	</div>

</article>
