<?php
	include('./inc/header.php')
?>

<div class="contact-content">
	<div class="tit">
		<p>تماس با ما</p>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="text">
		<p>شما می توانید از طریق فرم زیر با ما در تماس باشید. همچنین آدرس و شماره های تماس ما در زیر قید شده است.</p>
	</div>
	<div class="right">
		<div class="hline">
			<p>فرم تماس</p>
		</div>
		<form class="contact-page" id="contact-page" action="mail.php" method="post" target="ifrm">
			<input type="text"  class="text" name="name" id="name" placeholder="نام" autocomplete="off" />
			<input type="text" class="text" name="email" id="email" placeholder="ایمیل" autocomplete="off" />
			<textarea name="message" id="message" cols="25" rows="5" placeholder="پیام"></textarea>
			<input type="submit" class="button" id="submit" name="submit" value="ارسال" />
		</form>
	</div>
	<div class="left">
		<div class="hline">
			<p>مکان ما</p>
		</div>
	</div>
	<div class="badboy"></div>
	
</div>

<?php
	include('./inc/footer.php')
?>