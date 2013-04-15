<?php
	get_template_part('./inc/header');
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<div id="tit-otherpage">
	<h5><?php echo get_the_title('13'); ?><span> / <?php echo apply_filters( 'the_title', $term->name ); ?></h5></span>
</div>
<div class="hline">
	<div class="boldline"></div>
</div>

<div class="blog">
	<div class="blog-content">
	
	
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		global $wp_query;
		query_posts( array_merge( $wp_query->query, array( 'posts_per_page' => 3 ) ) );

		while(have_posts()){
			the_post();

			$meta = get_post_custom();
	?>

	<div class="posts">
			<div class="pic">
				<a href="<?php the_permalink(); ?>">
					<?php $title = get_the_title();
						  $attr = array(
								'class'	=> "image",
								'alt'	=> $title,
					    	);
						  echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ; 
					?>
				<div class="effect"></div>
				</a>
			</div>
			<div class="title">
				<h5><?php the_title(); ?></h5>
			</div>
			<div class="detail">
				<div class="date">
					<div class="image"></div>
					<p>تاریخ: <?php the_date('j F  Y'); ?></p>
				</div>
				<div class="by">
					<div class="image"></div>
					<p>توسط: <?php the_author(); ?></p>
				</div>
				<div class="num-of-com">
					<div class="image"></div>
					<p>تعداد دیدگاه: <?php comments_number( $zero = 0, $one = 1, $more='%'); ?></p>
				</div>
				<?php
					if( count($meta['resource'])>0 ){
						$res = $meta['resource'][0];
				?>
				<div class="resource">
					<div class="image"></div>
					<p>منبع: <?php echo " $res " ?></p>
				</div>
				<?php
					}
				?>
				<div class="badboy"></div>
			</div>
			<div class="text">
				<?php global $more; $more = 0; the_content('[ادامه...]'); ?>
			</div>
		</div>

		<?php
			}
		?>

	</div>

	<?php get_template_part('./inc/left-sidebar'); ?>

	<?php get_template_part('./inc/page-link'); ?>

</div>


<?php
	get_template_part('./inc/footer');
?>