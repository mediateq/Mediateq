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
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts( 'post_type=project&posts_per_page=4&paged=' . $paged);
				while(have_posts()){
					the_post();
			?>
			<li>
				<div class='pic'>
					<a href="<?php the_permalink(); ?>"> 
						<?php $link= the_post_thumbnail(); ?> 
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
			// posts_nav_link(' or ', 'You can go back to the previous page', 'you can go forward to the next page');
			previous_posts_link('صفحه قبل',0);
			next_posts_link('صفحه بعد',0);
			wp_reset_query();
		?>
	</div>
</div>

<?php
	get_template_part('./inc/footer');
?>