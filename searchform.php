<form class="form-inline" role="search" method="get" action="<?php echo home_url( '/' ); ?>">

	<div class="input-group">
		<input required type="search" class="form-control" placeholder="Search..." value="<?php echo get_search_query() ?>" name="s" title="Search" size="15">
		<div class="input-group-append">
			<button type="submit" class="btn "><i class="fas fa-search"></i></button>
		</div>
	</div>

</form>
