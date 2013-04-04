<?php
/*
Template Name: Archives Page
*/
?>

<?php get_template_part('./inc/header'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post-page" id="post-<?php the_ID(); ?>">
	<h1><?php the_title(); ?></h1>
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

	<h2>Archives by Title:</h2>
	<ul>
	    <?php wp_get_archives('type=alpha');?>
	</ul>

	<h2>Archives by Month:</h2>
	<ul>
	    <?php wp_get_archives('type=monthly'); ?>
	</ul>

	<h2>Archives by Subject:</h2>
	<ul>
	    <?php wp_list_categories('title_li='); ?>
	</ul>

	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
<?php endwhile; endif; ?>

<?php get_template_part('./inc/footer'); ?>