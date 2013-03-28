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
			<li>
				<div class="pic">
					<a href="#"><img src="./images/blog-img-01.jpg" alt="">
					<div class="effect"></div>
					</a>
				</div>
				<div class="title"><p>کار شرکت...</p></div>
				<div class="hline"></div>
				<div class="text"><p>توضیحات کار</p></div>
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