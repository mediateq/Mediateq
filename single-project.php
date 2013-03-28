<?php
	/*
		Template Name: My projects
	*/
	get_template_part('./inc/header');
?>

<div class="portfolio-content">
	<?php
		if(have_posts()){
			the_post();
	?>
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="portfolio">
		<ul>
			<?php
				$pic = get_the_post_thumbnail();
				
			?>
			<li>
				<div class="pic">
					$pic
				</div>
			</li>
		</ul>
		<div class="badboy"></div>
	</div>
	<?php
		}
	?>
</div>

<?php
	get_template_part('./inc/footer');
?>