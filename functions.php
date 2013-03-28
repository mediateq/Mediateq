<?php
	
	add_theme_support('menus');

	register_nav_menu('mainmenu' , 'Main Menu');
//////////////////////////// Portfolio page ////////////////////////////////
add_action('init','project_init');

function project_init(){
	$labels = array(
	'name' => _x('پروژه ها','post type general name'),
	'singular_name' => _x('پروژه','post type singular name'),
	'add_new' => _x('اضافه نمودن پروژه' , 'Project'),
	'add_new_item' => __('اضافه نمودن پروژه'),
	'edit_item' => __('اصلاح پروژه'),
	'new_item' => __('پروژه جدبد'),
	'view_item' => __('مشاهده پروژه'),
	'search_items' => __('جستجوی پروژه'),
	'not_found' => __('هیچ پروژه ای یافت نشد'),
	'not_found_in_trash' => __('هیچ پروژه ای در زباله دان یافت نشد'),
	'parent_item_colon' => '',
	'menu_name' => 'پروژه ها'
);
	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => 5,
	'menu_icon' => get_bloginfo('template_url') . '/images/projecticon.png',
	'supports' => array('title','editor','thumbnail','excerpt','comments'),
);

	register_post_type('project', $args);
}

add_shortcode('project', 'all_project');

function all_project(){
	$project = new WP_Query(array(
	'post_type' => 'project'
));

	$html = "<ul>";

	while($project->have_posts()){
		$project->the_post();

		$title   = get_the_title();
		$content = get_the_content();
		$link = get_permalink();
		$pic = get_the_post_thumbnail();

		$html 	.= "<li>
						<div class='pic'>
							<a href=\"$link\"> 
								$pic 
								<div class='effect'></div>
							</a>
						</div>
						<div class='title'><p> $title </p></div>
						<div class='hline'></div>
						<div class='text'> $content </div>
					</li>";
	}

	$html 	.= "</ul>";
				
	return $html;
}