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
				$i=0;
				while(have_posts()){
					the_post();
			?>
			<li <?php if($i & 1) echo "class='odd'" ?>>
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
				$i++;
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