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

		<?php the_content(); ?>
		
		<div class='badboy'></div>
	</div>
</div>

<?php
	get_template_part('./inc/footer');
?>