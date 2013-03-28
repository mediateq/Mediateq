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
				query_posts( 'post_type=project');
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
				<div class='text'><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></div>
			</li>
			<?php
				}
			?>
		</ul>
	<div class='badboy'></div>
	</div>
</div>

<?php
	get_template_part('./inc/footer');
?>