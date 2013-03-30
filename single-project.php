<?php
	get_template_part('./inc/header');
?>

<div class="project-content">
	<?php
		if(have_posts()){
			the_post();

			$meta = get_post_custom();
	?>
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="single-project">
		<div class='pic'>
			<?php 
				$title = get_the_title();
				$attr = array(
					'class'	=> "image",
					'alt'	=> $title,
				);
				echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ;
			?>
		</div>
			<div class='right'>
				<div class='title'><p>پروژه: <?php the_title(); ?> </p></div>
				<?php
					if( count($meta['link'])>0 ){
						$url = $meta['link'][0];
					}
				?>
				<p><a href="<?php echo "http://$url" ?>" target='_blank'>اجرای پروژه</a></p>
			</div>
		<div class='detail'>
			<div class='text'> <?php the_content(); ?> </div>
		</div>
		<div class='badboy'></div>
	</div>
	<?php
		}
	?>
</div>

<?php
	get_template_part('./inc/footer');
?>