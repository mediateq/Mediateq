<?php
	/*
		Template Name: Gallery
	*/
	get_template_part('./inc/header');
?>

<div class="gallery-content">
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="gallery">
		<ul>
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts( 'post_type=gallery&posts_per_page=12&paged=' . $paged);
				while(have_posts()){
					the_post();
			?>
			<li>
				<div class='pic'>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<a href="<?php echo $url ?>" rel='prettyphoto[gallery1]' title="<?php the_title(); ?>">
						<?php $title = get_the_title();
							  $attr = array(
									'class'	=> "image",
									'alt'	=> $title,
						    	);
							  echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ; 
						?>
						<div class='effect'></div>
					</a>
				</div>
				<div class='title'><p><?php the_title(); ?></p></div>
				<div class='hline'></div>
				<div class='text'><?php the_content(); ?></div>
			</li>
			<?php
				}
			?>
		</ul>
		<div class="badboy"></div>
	</div>

<?php get_template_part('./inc/page-link'); ?>

</div>
	<script type="text/javascript">
		  $(document).ready(function(){
		    $("a[rel^='prettyphoto']").prettyPhoto({
		    	autoplay_slideshow: true,
		    	show_title: false,
		    });
		  });
	</script>
<?php
	get_template_part('./inc/footer');;
?>