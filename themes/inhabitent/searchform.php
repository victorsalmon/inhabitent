<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>

		<a herf="#" class="open-the-search-form">
			<i class="fa fa-search"></i>
		</a>

		<label class= "pop-out-search">
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>

	</fieldset>
</form>
