<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>

		<a herf="#" class="open-the-search-form">
			<i class="fa fa-search"></i>
		</a>

		<label class= "pop-out-search">
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="search" title="Search for:" />
		</label>

	</fieldset>
</form>
