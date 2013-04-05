<div class="category">

		<div class="cat">
			<div class="hline">
				<h5>گروه ها</h5>
			</div>
			<?php
				$blog_cat = wp_list_categories( array(
				  'taxonomy' => 'blogs',
				  'orderby' => 'count',
				  'order' => 'DESC',
				  'show_count' => 1,
				  'pad_counts' => 0,
				  'hierarchical' => 1,
				  'echo' => 0,
				  'title_li' => '',
				) );

				if ( $blog_cat )
					echo "<ul class='blog-list'> $blog_cat  </ul>";
			?>
		</div>

		<div class="badboy"></div>

		<div class="tag">
			<div class="hline">
				<h5>برچسبها</h5>
			</div>
			<?php
				$blog_tag = wp_tag_cloud( array(
					'taxonomy' => 'blogs',
					'echo' => 0,
					'smallest' => 12, 
				    'largest' => 22,
				    'unit' => 'px', 
				    'number' => 0,  
				    'format' => 'flat',
				    'orderby' => 'count', 
				    'order' => 'ASC',
				    'link' => 'view',
				) );

				if ( $blog_tag ): 
			?>
				<div class="blog_tag">
					<?php echo $blog_tag; ?>
				</div>

			<?php 
				endif; 
			?>
		</div>

		<div class="badboy"></div>

		<div class="postcat">
			<div class="hline">
				<h5>مطالب</h5>
			</div>
			<ul>
				<?php
					$args = array(
							'posts_per_page'  => 8,
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

						echo "<li><a href=\"$url\"> $title </a> $date </li>";
					}
				?>
			</ul>
			
		</div>

</div>

<div class="badboy"></div>