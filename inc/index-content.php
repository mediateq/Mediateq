<section class="banner">
	<script type="text/javascript">
		$(document).ready(function() {         
		    slideShow();
		});
	</script>
	<div class="slideshow">
		<div id="gallery">
			<?php
				$slide_attach= array(
					'numberposts' => '5',
					'orderby '=> 'menu_order',  
					'order'=> 'ASC',  
					'post_mime_type' => 'image', 
					'post_parent' => $post->ID, 
					'post_status' => null, 
					'post_type' => 'attachment'
				);

				$imge= get_children($slide_attach);

				if ($imge){

					foreach ($imge as $img) {

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
			<span></span>
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<p>
				متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
			</p>
		</div>
		<div class="second">
			<span></span>
			<div class="tit">
				<p>سربرگ</p>
			</div>
			<p>
				متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...متن مورد نظر...
			</p>
		</div>
		<div class="third">
			<span></span>
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
		<ul>
			<li>
				<div class="pic">
					<a href="#">
						<img src="<?php bloginfo('template_url') ?>/images/recent/1.jpg" alt="" />
						<div class="effect"></div>
					</a>
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
			</li>
			<li>
				<div class="pic">
					<a href="#">
						<img src="<?php bloginfo('template_url') ?>/images/recent/2.jpg" alt="" />
						<div class="effect"></div>
					</a>
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
			</li>
			<li>
				<div class="pic">
					<a href="#">
						<img src="<?php bloginfo('template_url') ?>/images/recent/3.jpg" alt="" />
						<div class="effect"></div>
					</a>
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
			</li>
			<li>
				<div class="pic">
					<a href="#">
						<img src="<?php bloginfo('template_url') ?>/images/recent/4.jpg" alt="" />
						<div class="effect"></div>
					</a>
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
			</li>
		</ul>
		<div class="badboy"></div>
	</div>	
</section>