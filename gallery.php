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
				$slide_attach= array(
					'numberposts' => '-1',
					'orderby '=> 'menu_order',  
					'order'=> 'ASC',  
					'post_mime_type' => 'image', 
					'post_parent' => $post->ID, 
					'post_status' => null, 
					'post_type' => 'attachment'
				);

				$gall= get_children($slide_attach);

				if ($gall){

					foreach ($gall as $img) {

						$img_src= wp_get_attachment_image_src($img->ID,'large');

						$title = get_the_title( $img->ID );
						$detail = $img->post_content;

						echo "<li>
								<div class='pic'>
									<a href=\"$img_src[0]\" rel='prettyphoto[gallery1]' title=\"$title\"><img src=\"$img_src[0]\" alt=\"$title\">
										<div class='effect'></div>
									</a>
								</div>
								<div class='title'><p>$title</p></div>
								<div class='hline'></div>
								<div class='text'><p>$detail</p></div>
							</li>";
					}
				}
			?>
		</ul>
		<div class="badboy"></div>
	</div>
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