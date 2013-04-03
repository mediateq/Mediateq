<?php
	/*
		Template Name: Blog
	*/
	get_template_part('./inc/header');
?>

<div id="tit-otherpage">
	<h5><?php the_title(); ?></h5>
</div>
<div class="hline">
	<div class="boldline"></div>
</div>

<div class="blog">
	<div class="blog-content">
		
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts( 'post_type=blog&posts_per_page=3&paged=' . $paged);

			while(have_posts()){
				the_post();
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