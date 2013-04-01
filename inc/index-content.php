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
	<div class="hline hline-recent">
		<h5>فعالیت های اخیر</h5>
	</div>
	<div class="recent">
		<ul>
			<?php $args = array(
					    'numberposts' => 4,
					    'offset' => 0,
					    'category' => 0,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'include' => '',
					    'exclude' => '',
					    'meta_key' => '',
					    'meta_value' =>'',
					    'post_type' => 'project',
					    'post_status' => 'draft, publish, future, pending, private',
					    'suppress_filters' => true 
					    ); 

				$recent_posts = wp_get_recent_posts( $args );

				foreach( $recent_posts as $recent ){

					$url     = get_permalink($recent["ID"]);
					$title   = $recent["post_title"];
					$content = substr($recent["post_content"], 0, 250);
					$pict    = get_the_post_thumbnail($recent["ID"], "medium");

					echo "<li>
							<div class='pic'>
								<a href=\"$url\">
									$pict
									<div class='effect'></div>
								</a>
							</div>
							<div class='tit'>
								<p>$title</p>
							</div>
							<div class='hlines'></div>
							<div class='text'>
								<p>$content</p>
							</div>
						</li>";
				}
			?>
		</ul>
		<div class="badboy"></div>
	</div>	
</section>