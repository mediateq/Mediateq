<?php
	/*
		Template Name: Project
	*/
	get_template_part('./inc/header');
?>

<div class="project-content">
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="project">
		<ul>
			<?php
				query_posts( 'post_type=project&posts_per_page=4&paged=' . $paged);
				while(have_posts()){
					the_post();
			?>
			<li>
				<div class='pic'>
					<a href="<?php the_permalink(); ?>"> 
						<?php the_post_thumbnail(); ?> 
						<div class='effect'></div>
					</a>
				</div>
				<div class='title'><p> <?php the_title(); ?> </p></div>
				<div class='hline'></div>
				<div class='text'>
					<?php global $more; $more = 0; the_content('[ادامه...]'); ?>
				</div>
			</li>
			<?php
				}
			?>
		</ul>
	<div class='badboy'></div>
	</div>
	<div class='pagelink'>
		<?php 
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
</div>

<?php
	get_template_part('./inc/footer');
?>