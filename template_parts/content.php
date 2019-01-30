<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header pt-3">
		<h2><?php the_category(array('title_li' => false, 'style' => false)); ?><h2>
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<small><i class="far fa-calendar-alt"></i><?php the_time('  F j, Y'); ?></small>
	</header>

	<div class="row">

		<?php if( has_post_thumbnail() ): ?>

			<div class="col-12 col-lg-12">

				<div class="cover-img pb-2"><?php the_post_thumbnail(); ?></div>
				<div class="content">
					<?php the_content( $more_link_text , $strip_teaser ); ?>
				</div>
				
			</div>

		<?php else: ?>

			<div class="col-12 col-lg-12 pb-3">

				<div class="content">
					<?php the_content( $more_link_text , $strip_teaser ); ?>
				</div>

			</div>

		<?php endif; ?>

	</div>

</article>
