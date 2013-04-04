<div class="category">

		<div class="cat">
			<div class="hline">
				<h5>گروه ها</h5>
			</div>
			<?php
				$blog_cat = wp_list_categories( array(
				  'taxonomy' => 'blogs',
				  'orderby' => 'count',
				  'show_count' => 0,
				  'pad_counts' => 0,
				  'hierarchical' => 1,
				  'echo' => 0,
				  'title_li' => ''
				) );

				if ( $blog_cat )
					echo '<ul class="blog-list">' . $blog_cat . '</ul>';
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
					'smallest' => 14, 
				    'largest' => 20,
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
						'sort_column'  => 'post_modified',
						'sort_order'   => 'DESC',
						'depth'        => 0,
						'show_date'    => 'modified',
						'date_format'  => 'j F  Y , H:i',
						'title_li'     => '',
						'echo'         => 1,
						'number' 	   => 8,
						'post_type'    => 'blog',
					    'post_status'  => 'publish' 
					);
					$posts = wp_list_pages( $args );

					echo $posts;
				?>
			</ul>
			
		</div>

</div>

<div class="badboy"></div>