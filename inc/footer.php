</div>
	</div>
	<footer class="contain">
		<div class="container">
			<div class="first">
				<div class="hlinefoot">
					<p>وبلاگ</p>
				</div>
				<div class="footer-blog">
					<ul>
						<?php
							$args = array(
									'posts_per_page'  => 4,
									'orderby'         => 'modified',
									'order'           => 'DESC',
									'post_type'       => 'blog',
									'post_status'     => 'publish',
									'suppress_filters' => true 
								);
							$posts = get_posts( $args );

							foreach( $posts as $post ) {	
								
								$url = get_permalink();
								$title = get_the_title();
								$date = get_the_modified_date('j F  Y , H:i');

								echo "<li>
										<a class='recent-blog' href=\"$url\">$title</a>
									  </li>
									  <div class='badboy'></div>
									  <p class='date'>$date</p>";
							}
						?>
					</ul>
				<div class="badboy"></div>
				</div>
			</div>
			<div class="second">
				<div class="hlinefoot">
					<p>گالری تصاویر</p>
				</div>
				<ul>
					<?php 
						$args = array(
						    'numberposts' => 7,
						    'offset' => 0,
						    'category' => 0,
						    'orderby' => 'post_date',
						    'order' => 'DESC',
						    'include' => '',
						    'exclude' => '',
						    'meta_key' => '',
						    'meta_value' =>'',
						    'post_type' => 'gallery',
						    'post_status' => 'publish',
						    'suppress_filters' => true 
						    ); 

							$recent_posts = wp_get_recent_posts( $args );

							foreach( $recent_posts as $recent ){

								// $url     = get_permalink($recent["ID"]);
								$url = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) );
								$title   = $recent["post_title"];
								$content = substr($recent["post_content"], 0, 100);
								$pict    = get_the_post_thumbnail($recent["ID"], "medium", "alt=$title");

								echo "<li>
										<a href=\"$url\" title=\"$title\"  rel='prettyphoto[gallery1]'> $pict </a>
									</li>";
							}
						?>
					</ul>
			</div>
			<div class="third">
				<div class="hlinefoot">
					<p>کارهای ما</p>
				</div>
				<ul>
					<?php 
						$args = array(
						    'numberposts' => 6,
						    'offset' => 0,
						    'category' => 0,
						    'orderby' => 'post_date',
						    'order' => 'DESC',
						    'include' => '',
						    'exclude' => '',
						    'meta_key' => '',
						    'meta_value' =>'',
						    'post_type' => 'project',
						    'post_status' => 'publish',
						    'suppress_filters' => true 
						    ); 

						$recent_posts = wp_get_recent_posts( $args );

						foreach( $recent_posts as $recent ){

							$url     = get_permalink($recent["ID"]);
							$title   = $recent["post_title"];
							$content = substr($recent["post_content"], 0, 100);
							$pict    = get_the_post_thumbnail($recent["ID"], "medium");

							echo "<li>
									<a class='recent-work' href=\"$url\">$title</a>
								  </li>
								  <div class='badboy'></div>";
						}
					?>
				</ul>
			</div>
			<div class="forth">
				<div class="hlinefoot">
					<p>برترین ها</p>
				</div>
				<ul>
					<?php 
						$args = array(
						    'numberposts' => 7,
						    'offset' => 0,
						    'category' => 0,
						    'orderby' => 'post_date',
						    'order' => 'DESC',
						    'include' => '',
						    'exclude' => '',
						    'meta_key' => '',
						    'meta_value' =>'',
						    'post_type' => 'best',
						    'post_status' => 'publish',
						    'suppress_filters' => true 
						    ); 

							$recent_posts = wp_get_recent_posts( $args );
						
							foreach( $recent_posts as $recent ){

								$link = get_post_meta($recent["ID"], "link", true);
								// $url = get_permalink($recent["ID"]);
								// $url = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) );
								$title = $recent["post_title"];
								$content = substr($recent["post_content"], 0, 100);
								$pict = get_the_post_thumbnail($recent["ID"], "medium", "alt=$title");

								echo "<li>
										<a href=\"$link\" title=\"$title\" target='_blank' > $pict </a>
									</li>";
							}
						
					?>
				</ul>
			</div>
			<div class="badboy"></div>
			<div class="hlinefoot hfoot"></div>

			<div id="scroll-top-top">
				<a href="#"></a>
			</div>

			<div class="copy">
				<p>کپی رایت 1391 - تمامی حقوق این سایت متعلق به مِدیا تِک می باشد.</p>
				<!-- Begin ToolsIR.com counter code -->
				<div style="display:none;">
					<script type="text/javascript" src="http://counter.toolsir.com/secure.js"></script>
					<script type="text/javascript">
					  var _torder = '&pic=1';
					  var _turl = 'http://mediateq.ir';
					  _tCounter (_torder,_turl);
					</script>
				</div>
				<!-- End ToolsIR.com counter code -->
			</div>
			<div class="badboy"></div>
		</div>
	</footer>
	<script type="text/javascript">
	  $(document).ready(function(){
	    $("a[rel^='prettyphoto']").prettyPhoto({
	    	autoplay_slideshow: true,
	    	show_title: false,
	    });
	  });
	</script>
</body>
</html>