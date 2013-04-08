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
					<p>درباره ما</p>
				</div>
				<div class="text">
					<?php
						$page_id = 9;
						$page = get_page($page_id);
						$link = get_permalink( $page );
						$content = apply_filters('the_content', $page->post_content);
						$content = substr($content, 0, 550);
						echo "<a class='footer-about' href=\"$link\">$content...</a>";
					?>
				</div>
			</div>
			<div class="badboy"></div>
			<div class="hlinefoot hfoot"></div>

			<div id="scroll-top-top">
				<a href="#"></a>
			</div>

			<div class="copy">
				<p>کپی رایت 1391 - تمامی حقوق این سایت متعلق به مِدیا تِک می باشد.</p>
			</div>
			<div class="badboy"></div>
		</div>
		<script type="text/javascript">
			  $(document).ready(function(){
			    $("a[rel^='prettyphoto']").prettyPhoto({
			    	autoplay_slideshow: true,
			    	show_title: false,
			    });
			  });
		</script>
	</footer>
</body>
</html>