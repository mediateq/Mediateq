<?php
	get_template_part('./inc/header');
?>

<div id="tit-otherpage">
	<h5><?php echo get_the_title('22'); ?><span> / <?php the_title(); ?></span></h5>
</div>
<div class="hline">
	<div class="boldline"></div>
</div>

<div class="blog">
	<div class="blog-content">
		<?php
			if(have_posts()){
				the_post();

				$meta = get_post_custom();
		?>
		
		<div class="posts">
			<div class="pic">
				<?php $title = get_the_title();
					  $attr = array(
							'class'	=> "image",
							'alt'	=> $title,
				    	);
					  echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ; 
				?>
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
					<p>تعداد دیدگاه: <?php comments_number( $zero = 0, $one = 1 , $more='%'); ?></p>
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
				<?php the_content(); ?>
			</div>
			<div class="hline hline-comment">
				<h5>دیدگاه ها <span>(<?php comments_number( $zero = 0, $one = 1 , $more='%'); ?>)</span></h5>
			</div>
			<div class="comment">
				<?php comments_template( '', true ); ?>
			</div>
		</div>

		<?php
			}
		?>
	</div>

	<?php get_template_part('./inc/left-sidebar'); ?>

</div>

<?php
	get_template_part('./inc/footer');
?>