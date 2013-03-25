<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/zepto.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url') ?>/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<a name="myAnchor" id="myAnchor"></a>
	<div class="contain">
		<div class="container">
			<header class="header">
				<div class="log-so">
					<div class="logo">
						<a href="http://www.mediateq.ir"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Mediateq" title="Mediateq"/><p>Mediateq</p></a>
					</div>
					<div class="social-con">
						<div class="socialicon">
							<ul>
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
								<li><a href="#" class="dribbble"></a></li>
								<li><a href="#" class="linkedin"></a></li>
								<li><a href="#" class="pintrest"></a></li>								
							</ul>
						</div>
						<div class="badboy"></div>
						<div class="contact">
							<ul>
								<li>
									<span class="postzip"></span>
									<h5><a href="mailto:info@mediateq.ir" target="_blank">info<span class="at"></span>mediateq.ir</a></h5>
								</li>
								<li>
									<span class="tel"></span>
									<p>8833 814 (936)98+</p> 
								</li>
							</ul>
							<div class="badboy"></div>
						</div>
						<div class="badboy"></div>
					</div>
					<div class="badboy"></div>
				</div>
				<div class="menu-part">
					<div class="menu">
						<nav>
							<?php
								wp_nav_menu(array(
									'theme_location'  => 'mainmenu',
									'menu'            => '', 
									'container'       => false, 
									'container_class' => '', 
									'container_id'    => '',
									'menu_class'      => '', 
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => false,
									'before'          => '<p>',
									'after'           => '</p>',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<menu>%3$s<li></li></menu>',
									'depth'           => 0,
									'walker'          => '',
								));
							?>							
						</nav>
						<div class="searchbox">
							<form action="http://www.google.com/search" method="get" target="_blank" accept-charset="utf-8">
								<input type="hidden" name="sitesearch" value="www.mediateq.ir" />
								<input type="text" class="search" name="as_q" autocomplete="off" />
							</form>
						</div>
						<div class="badboy"></div>
					</div>	
				</div>
			</header>