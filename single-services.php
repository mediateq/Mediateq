<?php
	/*
		Template Name: Services
	*/
	get_template_part('./inc/header');
?>
	<div class="services-content">
		<div id="tit-otherpage">
			<h5><?php the_title(); ?></h5>
		</div>
		<div class="hline">
			<div class="boldline"></div>
		</div>
		<div class="services">
			<ul>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts( 'post_type=services&posts_per_page=5&paged=' . $paged);
					while(have_posts()){
						the_post();

						$meta = get_post_custom();
				?>

				<div class="right">
					<div class="hline">
						<h5><?php the_title(); ?></h5>
					</div>
					<?php the_content(); ?>
				</div>
				<div class="left">
					<div class="hline">
						<h5>امکانات</h5>
					</div>
					<ul>
						<?php
							if( count($meta['desc'])>0 ){
								 foreach ( $meta['desc'] as $desc ) {
									echo "<li><p> $desc </p></li>";
									
								}
							}
							
						?>
					</ul>
				</div>
				<div class="badboy"></div>
				<?php
					}
				?>
			</ul>
			<div class="badboy"></div>
		</div>

		<?php get_template_part('./inc/page-link'); ?>

	</div>
<?php
	get_template_part('./inc/partner');
?>
		
<?php
	get_template_part('./inc/footer');
?>