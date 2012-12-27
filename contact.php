<?php
	include('./inc/header.php')
?>

<div class="contact-content">
	<div class="tit">
		<h5>تماس با ما</h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="txt">
		<p>شما می توانید از طریق فرم زیر با ما در تماس باشید. همچنین آدرس و شماره های تماس ما در زیر قید شده است.</p>
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
			<div class="map"></div>
		</div>
		<div class="bot">
			<div class="hline">
				<h5>پیگیری ما</h5>
			</div>
			<div id="social" class="tooltips">
				<a href="#" class="facebook" title="Facebook"></a>
				<a href="#" class="evernote" title="Evernote"></a>
				<a href="#" class="linkedln" title="Linkedln"></a>
				<a href="#" class="google" title="Google plus"></a>
				<a href="#" class="vimeo" title="Vimeo"></a>
			</div>
		</div>
	</div>
	<div class="badboy"></div>
	
</div>

<?php
	include('./inc/footer.php')
?>