</div>
	</div>
	<footer class="contain">
		<div class="container">
			<div class="first">
				<div class="hlinefoot">
					<p>تماس با ما</p>
				</div>
				<div class="contact">
					<form action="mail.php" id="contact" method="post" target="_blank">
						<input type="text"  class="text" name="name" id="name" placeholder="نام" autocomplete="off" />
						<input type="text" class="text" name="email" id="email" placeholder="ایمیل" autocomplete="off" />
						<textarea name="message" id="message" cols="25" rows="5" placeholder="پیام"></textarea>
						<input type="submit" class="button" id="submit" name="submit" value="ارسال" />
					</form>
				<div class="badboy"></div>
				</div>
			</div>
			<div class="second">
				<div class="hlinefoot">
					<p>ارتباط با ما</p>
				</div>
				<div class="text">
					<p>آدرس: .............. .............. ........... ..... .......... .......... ......... ......</p>
					<p>تلفن: 123456789 </p>
				</div>
			</div>
			<div class="third">
				<div class="hlinefoot">
					<p>لینک های مفید</p>
				</div>
				<div class="link">
					<h5><a href="#">لینک 1</a></h5>
					<h5><a href="#">لینک 2</a></h5>
					<h5><a href="#">لینک 3</a></h5>
					<h5><a href="#">لینک 4</a></h5>
				</div>
			</div>
			<div class="forth">
				<div class="hlinefoot">
					<p>درباره ما</p>
				</div>
				<div class="text">
					<p>
						<?php
							$page_id = '33';
							$page = get_page($page_id);
							$link = get_permalink( $page );
 							$content = apply_filters('the_content', $page->post_content);
 							$content = substr($content, 0, 400);
							echo "<a href=\"$link\"> $content... </a>";
						?>
						
					</p>
				</div>
			</div>
			<div class="badboy"></div>
			<div class="hlinefoot hfoot"></div>
			<div class="anchor">
				<a href="#myAnchor" rel="" id="anchor1" class="anchorLink"></a>
			</div>
			<div class="copy">
				<p>کپی رایت 1391 - تمامی حقوق این سایت متعلق به مِدیا تِک می باشد</p>
			</div>
			<div class="badboy"></div>
		</div>
	</footer>
</body>
</html>