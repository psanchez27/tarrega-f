<!-- This file is to create a custom search form -->


<form role="search" method="get" id="searchform"
	class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit"
			value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
      <!-- For only post types -->
      <!-- <input type="hidden" value="post" name="post_type" id="post_type" /> -->
	</div>
</form>
