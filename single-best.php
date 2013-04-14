<?php
	/*
		Template Name: Best website
	*/
	get_template_part('./inc/header');
?>

<div class="best-content">
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="best">
		<ul>
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts( 'post_type=best&posts_per_page=12&paged=' . $paged);
				$i=1;
				while(have_posts()){
					the_post();

					$meta = get_post_custom();
			?>
			<li <?php if($i%4==0) echo "class='factor-four'" ?>>
				<div class='pic'>
					<?php 
						if( count($meta['link'])>0 ){
							$link = $meta['link'][0];
				
					?>
					<a href="<?php echo "$link"; ?>" title="<?php the_title(); ?>" target="_blank">
						<?php $title = get_the_title();
							  $attr = array(
									'class'	=> "image",
									'alt'	=> $title,
						    	);
							  echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ; 
						?>
						<div class='effect'></div>
					</a>
					<?php
						}
					?>
				</div>
				<div class='title'><p><?php the_title(); ?></p></div>
				<div class='hline'></div>
				<div class='text'><?php the_content(); ?></div>
			</li>
			<?php
				$i++;
				}
			?>
		</ul>
		<div class="badboy"></div>
	</div>

<?php get_template_part('./inc/page-link'); ?>

</div>
	
<?php
	get_template_part('./inc/footer');;
?>