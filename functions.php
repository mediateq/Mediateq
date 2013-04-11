<?php
	
	add_theme_support('menus');

	add_theme_support('post-thumbnails');

	register_nav_menu('mainmenu' , 'Main Menu');
//////////////////////////// Project page ////////////////////////////////
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
	'hierarchical' => true,
	'menu_position' => 25,
	'menu_icon' => get_bloginfo('template_url') . '/images/projecticon.png',
	'supports' => array('title','editor','author','revisions','post-formats','thumbnail','custom-fields'),
);

	register_post_type('project', $args);
}

function add_custom_taxonomies_project() {
	register_taxonomy('projects', 'project', array(
		'labels' => array(
			'name' => _x( 'دسته بندی پروژه ها', 'taxonomy general name' ),
			'singular_name' => _x( 'دسته بندی پروژه', 'taxonomy singular name' ),
			'search_items' =>  __( 'جستجوی پروژه' ),
			'all_items' => __( 'همه گروه ها' ),
			'parent_item' => __( 'Parent Location' ),
			'parent_item_colon' => __( 'Parent Location:' ),
			'edit_item' => __( 'ویرایش پروژه' ),
			'update_item' => __( 'بروزرسانی پروژه' ),
			'add_new_item' => __( 'اضافه نمودن پروژه' ),
			'new_item_name' => __( 'اسم پروژه جدید' ),
			'menu_name' => __( 'دسته بندی پروژه ها' ),
		),
		'query_var' => true,
		'hierarchical' => true,
		'rewrite' => array(
			'slug' => 'project', 
			'with_front' => true, 
			'hierarchical' => true 
		),
	));
}

add_action( 'init', 'add_custom_taxonomies_project', 0 );
//////////////////////////// Gallery page ////////////////////////////////
add_action('init','gallery_init');

function gallery_init(){
	$labels = array(
	'name' => _x('عکس ها','post type general name'),
	'singular_name' => _x('عکس','post type singular name'),
	'add_new' => _x('اضافه نمودن عکس' , 'Gallery'),
	'add_new_item' => __('اضافه نمودن عکس'),
	'edit_item' => __('اصلاح عکس'),
	'new_item' => __('عکس جدبد'),
	'view_item' => __('مشاهده عکس'),
	'search_items' => __('جستجوی عکس'),
	'not_found' => __('هیچ عکسی یافت نشد'),
	'not_found_in_trash' => __('هیچ عکسی در زباله دان یافت نشد'),
	'parent_item_colon' => '',
	'menu_name' => 'گالری تصاویر'
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
	'hierarchical' => true,
	'menu_position' => 25,
	'menu_icon' => get_bloginfo('template_url') . '/images/galleryicon.png',
	'supports' => array('title','editor','author','revisions','post-formats','thumbnail','custom-fields'),
);

	register_post_type('gallery', $args);
}
//////////////////////////// Services page ////////////////////////////////
add_action('init','services_init');

function services_init(){
	$labels = array(
	'name' => _x('خدمات','post type general name'),
	'singular_name' => _x('خدمت','post type singular name'),
	'add_new' => _x('اضافه نمودن خدمت' , 'Services'),
	'add_new_item' => __('اضافه نمودن خدمت'),
	'edit_item' => __('اصلاح خدمت'),
	'new_item' => __('خدمت جدبد'),
	'view_item' => __('مشاهده خدمت'),
	'search_items' => __('جستجوی خدمت'),
	'not_found' => __('هیچ خدمتی یافت نشد'),
	'not_found_in_trash' => __('هیچ خدمتی در زباله دان یافت نشد'),
	'parent_item_colon' => '',
	'menu_name' => 'خدمات'
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
	'hierarchical' => true,
	'menu_position' => 25,
	'menu_icon' => get_bloginfo('template_url') . '/images/servicesicon.png',
	'supports' => array('title','editor','author','revisions','post-formats','thumbnail','custom-fields'),
);

	register_post_type('services', $args);
}
//////////////////////////// Blog page ////////////////////////////////
add_action('init','blog_init');

function blog_init(){
	$labels = array(
	'name' => _x('وبلاگ','post type general name'),
	'singular_name' => _x('مطلب','post type singular name'),
	'add_new' => _x('اضافه نمودن مطلب' , 'Blog'),
	'add_new_item' => __('اضافه نمودن مطلب'),
	'edit_item' => __('اصلاح مطلب'),
	'new_item' => __('مطلب جدبد'),
	'view_item' => __('مشاهده مطلب'),
	'search_items' => __('جستجوی مطلب'),
	'not_found' => __('هیچ مطلبی یافت نشد'),
	'not_found_in_trash' => __('هیچ مطلبی در زباله دان یافت نشد'),
	'parent_item_colon' => '',
	'menu_name' => 'وبلاگ'
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
	'hierarchical' => true,
	'menu_position' => 25,
	'menu_icon' => get_bloginfo('template_url') . '/images/blogicon.png',
	'supports' => array('title','editor','author','revisions','post-formats','thumbnail','custom-fields','comments','trackbacks'),
);

	register_post_type('blog', $args);
}

function add_custom_taxonomies_blog() {
	register_taxonomy('blogs', 'blog', array(
		'labels' => array(
			'name' => _x( 'دسته بندی مطالب', 'taxonomy general name' ),
			'singular_name' => _x( 'دسته بندی مطلب', 'taxonomy singular name' ),
			'search_items' =>  __( 'جستجوی مطلب' ),
			'all_items' => __( 'همه گروه ها' ),
			'parent_item' => __( 'Parent Location' ),
			'parent_item_colon' => __( 'Parent Location:' ),
			'edit_item' => __( 'ویرایش مطلب' ),
			'update_item' => __( 'بروزرسانی مطلب' ),
			'add_new_item' => __( 'اضافه نمودن گروه' ),
			'new_item_name' => __( 'اسم مطلب جدید' ),
			'menu_name' => __( 'دسته بندی مطالب' ),
		),
		'query_var' => true,
		'hierarchical' => true,
		'rewrite' => array(
			'slug' => 'blog', 
			'with_front' => true, 
			'hierarchical' => true 
		),
	));
}

add_action( 'init', 'add_custom_taxonomies_blog', 0 );
//////////////////////////// Pageination for taxonomy ////////////////////////////////
function my_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

function my_option_posts_per_page( $value ) {
    return 1;
}

add_action( 'init', 'my_modify_posts_per_page', 0);