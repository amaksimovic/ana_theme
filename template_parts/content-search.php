<article id="search-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header-search pt-2">
		<h3><?php the_category(array('title_li' => false, 'style' => false)); ?><h3>
		<?php the_title( sprintf('<h2 class="entry-title-search"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
		<small><i class="far fa-calendar-alt"></i><?php the_time('  F j, Y'); ?></small>
	</header>

	<div class="row">

		<?php if( has_post_thumbnail() ): ?>

			<div class="col-12 col-lg-12">

				<div class="cover-img pb-2"><?php the_post_thumbnail( 'search-thumb' ); ?></div>
				<div class="content">
					<?php the_content( $more_link_text , $strip_teaser ); ?>
				</div>
				
			</div>

		<?php else: ?>

			<div class="col-12 col-lg-12 pb-2">

				<div class="content">
					<?php the_content( $more_link_text , $strip_teaser ); ?>
				</div>

			</div>

		<?php endif; ?>

	</div>

</article>
