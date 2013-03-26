<section class="banner">
	<div class="slideshow">
		<div id="gallery">
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

				$images= get_children($slide_attach);

				if ($images){

					foreach ($images as $img) {

						$img_src= wp_get_attachment_image_src($img->ID,'large');

						$title = get_the_title( $img->ID );
						$content = $img->post_excerpt;
						$class = $img->post_content;

						echo "<a $class>
								<img src=\"$img_src[0]\" rel=\"<h3> $title </h3><p> $content </p>\" alt=\"$title\" />
							  </a>";
					}
					echo "<div class='caption'>
							<div class='content'></div>
						  </div>
						  <div class='badboy'></div>";
				}
			?>
	</div>
	<div class="welcome">
		<div class="first">
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<p>
				متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
			</p>
		</div>
		<div class="second">
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<p>
				متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
			</p>
		</div>
		<div class="third">
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<p>
				متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
			</p>
		</div>
		<div class="badboy"></div>
	</div>
	<div class="hline"></div>
	<div class="recent">
		<div class="first">
			<div class="pic">
				<img src="./images/others/3.jpg" alt="" />
			</div>
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<div class="hlines"></div>
			<div class="text">
				<p>
					متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
				</p>
			</div>
		</div>
		<div class="second">
			<div class="pic">
				<img src="./images/others/4.jpg" alt="" />
			</div>
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<div class="hlines"></div>
			<div class="text">
				<p>
					متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
				</p>
			</div>
		</div>
		<div class="third">
			<div class="pic">
				<img src="./images/others/2.jpg" alt="" />
			</div>
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<div class="hlines"></div>
			<div class="text">
				<p>
					متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
				</p>
			</div>
		</div>
		<div class="forth">
			<div class="pic">
				<img src="./images/others/1.jpg" alt="" />
			</div>
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<div class="hlines"></div>
			<div class="text">
				<p>
					متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
				</p>
			</div>
		</div>
		<div class="badboy"></div>
	</div>	
</section>