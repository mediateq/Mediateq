<?php
	get_template_part('./inc/header');
?>

<div class="project-content">
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
	<div class="single-project">
		<?php
			$slide_attach= array(
				'numberposts' => '1',
				'orderby '=> 'menu_order',  
				'order'=> 'ASC',  
				'post_mime_type' => 'image', 
				'post_parent' => $post->ID, 
				'post_status' => null, 
				'post_type' => 'attachment'
			);

			$images= get_children($slide_attach);

			if ($images){

				foreach ($images as $img) {

					$img_src= wp_get_attachment_image_src($img->ID,'large');

					$title = get_the_title();
					$link = $img->post_content;

					echo "<div class='pic'>
							<img src=\"$img_src[0]\" alt=\"$title\" />
						  </div>
						  <div class='right'>
							  <div class='title'><p>پروژه: $title </p></div>
							  <p><a href=\"$link\" target='_blank'>اجرای پروژه</a></p>
						  </div>";
				}
			}
		?>
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