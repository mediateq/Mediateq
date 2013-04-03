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
				    'order' => 'RAND',
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

</div>

<div class="badboy"></div>