<?php
	/*
		Template Name: Contact
	*/
	get_template_part('./inc/header');
?>

<div class="contact-content">
	<?php 
		if(have_posts()){
			the_post();
	 ?>
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="txt">
		<?php the_content(); ?>
	</div>
	<div class="right">
		<div class="hline">
			<h5>فرم تماس</h5>
		</div>
		<div class="contact-page">
			<form action="mail.php" id="contact" method="post" target="_blank">
				<p><span>*</span> نام:</p>
				<input type="text"  class="text" name="name" id="name" autocomplete="off" />
				<p><span>*</span> ایمیل:</p>
				<input type="text" class="text" name="email" id="email" autocomplete="off" />
				<p><span>*</span> پیام:</p>
				<textarea name="message" id="message" cols="25" rows="5" ></textarea>
				<input type="submit" class="button" id="submit" name="submit" value="ارسال" />
			</form>
			<div class="badboy"></div>
		</div>
	</div>
	<div class="left">
		<div class="top">
			<div class="hline">
				<h5>مکان ما</h5>
			</div>
			<div class="map">
				<iframe width="350" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=210699599557021519142.0004d93c5fa44fec878c0&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.31331,59.562614&amp;spn=0.004841,0.00751&amp;z=16&amp;output=embed"></iframe>
			</div>
		</div>
		<div class="bot">
			<div class="hline">
				<h5>پیگیری ما</h5>
			</div>
			<div id="social" class="tooltips">
				<a href="https://www.facebook.com/Mediateq.ir" class="facebook" title="Facebook"></a>
				<a href="http://twitter.com/mediateqco" class="twitter" title="Twitter"></a>
				<a href="https://plus.google.com/u/0/103700325036876027169/posts" class="google" title="Google plus"></a>
				<a href="http://dribbble.com/mediateqco" class="dribbble" title="Dribbble"></a>
			</div>
		</div>
	</div>
	<div class="badboy"></div>
	<?php
		}
	?>
</div>

<?php
	get_template_part('./inc/footer')
?>