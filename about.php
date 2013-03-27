<?php
	/*
		Template Name: About us
	*/
	get_template_part('./inc/header');
?>

<div class="about-content">
	<?php 
		if(have_posts()){
			the_post();
	 ?>
	<div id="tit-otherpage">
		<h5>در باره ما</h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="left">
		<div class="hline">
			<h5>استخدام</h5>
		</div>
		<div class="career">
			<h5>همکاری با ما</h5>
			<p>ما در حال ارائه فرصت های بزرگ برای مدیرت پروژه و طراحی وب سایت می باشیم.</p>
			<a href="#">ثبت نام</a>
			<div class="badboy"></div>
		</div>
	</div>	
	<div class="right">
		<div class="hline">
			<h5>روش ما</h5>
		</div>
		<div class="text">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="badboy"></div>
	<div class="meet">
		<div class="hline">
			<h5>اعضای گروه</h5>
		</div>
		<ul>
			<?php
				$slide_attach= array(
					'numberposts' => '3',
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

						$name = get_the_title( $img->ID );
						$post = $img->post_excerpt;
						$detail = $img->post_content;

						echo "<li>
								<img src=\"$img_src[0]\" alt=\"$name\" />
								<div class='name'><p> $name </p></div>
								<div class='post'><p> $post </p></div>
								<div class='hline'></div>
								<div class='text'><p> $detail </p></div>
							  </li>";
					}
				}
			?>
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