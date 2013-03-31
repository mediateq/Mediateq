</div>
	</div>
	<footer class="contain">
		<div class="container">
			<div class="first">
				<div class="hlinefoot">
					<p>تماس با ما</p>
				</div>
				<div class="contact">
					<form action="mail.php" id="contact" method="post" target="_blank">
						<input type="text"  class="text" name="name" id="name" placeholder="نام" autocomplete="off" />
						<input type="text" class="text" name="email" id="email" placeholder="ایمیل" autocomplete="off" />
						<textarea name="message" id="message" cols="25" rows="5" placeholder="پیام"></textarea>
						<input type="submit" class="button" id="submit" name="submit" value="ارسال" />
					</form>
				<div class="badboy"></div>
				</div>
			</div>
			<div class="second">
				<div class="hlinefoot">
					<p>گالری تصاویر</p>
				</div>
				<ul>
					<?php $args = array(
						    'numberposts' => 9,
						    'offset' => 0,
						    'category' => 0,
						    'orderby' => 'post_date',
						    'order' => 'DESC',
						    'include' => '',
						    'exclude' => '',
						    'meta_key' => '',
						    'meta_value' =>'',
						    'post_type' => 'gallery',
						    'post_status' => 'draft, publish, future, pending, private',
						    'suppress_filters' => true 
						    ); 

							$recent_posts = wp_get_recent_posts( $args );

							foreach( $recent_posts as $recent ){

								// $url     = get_permalink($recent["ID"]);
								$url = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) );
								$title   = $recent["post_title"];
								$content = substr($recent["post_content"], 0, 100);
								$pict    = get_the_post_thumbnail($recent["ID"], "medium");

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
					<?php $args = array(
						    'numberposts' => 7,
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
							$content = substr($recent["post_content"], 0, 100);
							$pict    = get_the_post_thumbnail($recent["ID"], "medium");

							echo "<li>
									<p class='recent-work'><a class='recent-work' href=\"$url\">$title</a></p>
								  </li>";
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
						$page_id = 16;
						$page = get_page($page_id);
						$link = get_permalink( $page );
						$content = apply_filters('the_content', $page->post_content);
						$content = substr($content, 0, 400);
						echo "<a class='footer-about' href=\"$link\">$content...</a>";
					?>
				</div>
			</div>
			<div class="badboy"></div>
			<div class="hlinefoot hfoot"></div>
			<div class="anchor">
				<a href="#myAnchor" rel="" id="anchor1" class="anchorLink"></a>
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