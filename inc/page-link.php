<div class='pagelink'>
	<?php 
		global $wp_query;
		$big = 999999999;
		$args = array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages,
					'prev_text'    => ('«'),
					'next_text'    => ('»')
				);
		echo paginate_links( $args );
		wp_reset_query();
	?>
</div>

<div class="badboy"></div>