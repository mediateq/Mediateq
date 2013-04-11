<?php
	get_template_part('./inc/header');
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<div id="tit-otherpage">
	<h5>کارهای ما<span> / <?php echo apply_filters( 'the_title', $term->name ); ?></h5></span>
</div>
<div class="hline">
	<div class="boldline"></div>
</div>

<div class="project-content">
	<div class="project">
		<ul>
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				global $wp_query;
				query_posts( array_merge( $wp_query->query, array( 'posts_per_page' => 3 ) ) );

				while(have_posts()){
					the_post();
			?>
			<li>
				<div class='pic'>
					<a href="<?php the_permalink(); ?>"> 
						<?php 
							$title = get_the_title();
							$attr = array(
								'class'	=> "image",
								'alt'	=> $title,
					    	);
						  	echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ; 
						?> 
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
	<?php get_template_part('./inc/page-link'); ?>
</div>


<?php
	get_template_part('./inc/footer');
?>