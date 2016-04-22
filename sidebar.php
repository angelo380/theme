<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<?php wp_dropdown_categories('show_count=0&hierarchical=1&depth=1'); ?>
		<input type="hidden" name="post_type" value="movies" />
		<input type="text" placeholder="Buscar Pelicula" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input name="Buscar" type="submit" value="Buscar" />
	</form>
</aside>
<!-- /sidebar -->
