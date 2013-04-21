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
	</div>
	<div class="welcome">
		<ul>
			<li>
				<span class="pic1"></span>
				<div class="tit">
					<h5>رتبه سایت</h5>
				</div>
				<p>
					ممکن است که وب سایت یا بلاگ شخصی داشته باشید که این روزها اکثر افراد دارند. با این حال، این مسئله که هر فردی میتواند وب سایتی داشته باشد، به این مفهوم نمیباشد که هر فردی میتواند وب سایت راه اندازی کند. در راه اندازی سایت، مراحل متعددی مانند طراحی، محتوا و بهینه سازی وجود دارند. آیا باید سایتتان را خودتان طراحی کنید، یا طراح متخصص استخدام کنید؟
				</p>
			</li>
			<li>
				<span class="pic2"></span>
				<div class="tit">
					<h5>نمایش بهینه سایت</h5>
				</div>
				<p>
					ده ها مرورگر وب در سراسر جهان در حال استفاده میباشند. برای همه آنها اجرای سندهای  <span>W3C</span> کمی متفاوت است. طراحی سایت باید با این تفاوتها دست به گریبان باشد. بدیهی است سازگاری صد در صد با همه مرورگرها بالقوه غیرممکن است. اما این امکان وجود دارد طراحی صفحه وب را طوری انجام داد که در محبوبترین مرورگرها به صورت بهینه و مناسب نمایش داده شود.
				</p>
			</li>
			<li>
				<span class="pic3"></span>
				<div class="tit">
					<h5>نمایش رسپانسیو سایت</h5>
				</div>
				<p>
					امروزه صفحه نمایش ها از 320 پیکسل  شروع شده و به 2560 پیکسل و حتی بزرگتر ختم میشود. بنابراین طرح های سنتی و قدیمی با عرض ثابت جوابگو نیست و طراحی های جدید نیاز به استفاده از روش انطباقی <span>(Responsive)</span> دارد و طرح و قالب مورد نظر باید به صورت خودکار برای صفحه نمایش ها و رزولوشن های مختلف تنظیم گردد تا برای انواع کاربران به درستی نمایش داده شود.
				</p>
			</li>
		</ul>
		<div class="badboy"></div>
	</div>
	<div class="hline hline-recent">
		<h5>پروژه های اخیر</h5>
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
					    'post_status' => 'publish',
					    'suppress_filters' => true 
					    ); 

				$recent_posts = wp_get_recent_posts( $args );

				foreach( $recent_posts as $recent ){

					$cont = $recent["post_content"];
					$pos = strpos($cont, '<!--more-->');
					$content = substr($recent["post_content"], 0, $pos);
					$url     = get_permalink($recent["ID"]);
					$title   = $recent["post_title"];
					$pict    = get_the_post_thumbnail($recent["ID"], "medium" , "alt=$title");

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
						</li>";
				}
			?>
		</ul>
		<div class="badboy"></div>
	</div>	
</section>