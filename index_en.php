<div id="fullpage">
	<div class="section section-index-1" id="section-home">
		<div class="container">
			<div class="fix lang">
				<a href="/index.php?lang=vi"<?php echo @$_GET['lang'] == 'vi' ? ' class="active"' : '' ?>>VN</a>
				/
				<a href="/" <?php echo !isset($_GET['lang']) ? ' class="active"' : '' ?>>EN</a>
			</div>
		</div>
		<div class="scroller row">
			<div class="col-xs-12">
				<div class="text-center">
					<p><strong>scroll to begin</strong></p>
					<p>
						<!-- <img class="icon" src="/img/down-arrow.jpg" width="auto" height="30" alt="scroller"> -->
						<span class="icon"></span>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-index-2" id="section-about">
		<div class="container nano disable-ip6">
			<div class="row nano-content">
				<div class="animate">
					<div class="col-xs-12 col-md-6">
						<h3>ABOUT SMALLER THAN THREE</h3>
						<p><strong>Smaller Than Three</strong> is a concept brand introduced by Tim Pham.<br>
	Being one of the first few concept stores in Vietnam, we help our customers to celebrate the aesthetics of everyday living, starting with our surrounding items. We focus on the modernity, classiness and simplicity of our product lines, which delivers high quality standard with an inspirational imprint of Vietnam. <br>
	We enhance our customers living experience with the beauty of accessories; we add a little love into everything you have. 
	</p>
					</div>
					<div class="col-hack col-md-1 visible-md visible-lg visible-sm"></div>
					<div class="col-xs-12 col-md-6">
						<h3>LÁ COLLECTION</h3>
						<p>"Leaves have great impacts on our lives in many ways. They fuel plant life, offer shelter to small wildlife and create a living environment for microorganism. Personally, the color green has raised my soul with unforgettable memories. My subject matter is the fresh color green –from papaya, banana, sacred fig, sponge gourd, flame tree, shiso and aloe vera leaf – a truly inspiring essence of natural beauty. As I was painting these leaves, I was on a journey revisiting the stories that lie within each leaf.  Our little front yard, my grandmother’s smile, my mother’s hands, the first drop of summer rain, and the late autumn sunray captured through the spirit of the fresh color green are what keeps my dreams forever intact." - Tim Pham</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('./artworks.php'); ?>
	<div class="section section-index-4" id="section-details">
		<div class="container">
			<div class="row">
				<div class="animate">
					<div class="col-xs-12 col-md-6">
						<h3>DIMENSIONS</h3>
						<p>
							<strong>Calendar</strong>
							<br>
							<span>20 cm x 20 cm</span>
						</p>
						<p>
							<strong>Sketchbook</strong>
							<br>
							<span>14.8 cm x 22.3 cm</span>
						</p>
						<p>
							<strong>Postcard</strong>
							<br>
							<span>12 cm x 17 cm</span>
						</p>
						<p>
							<strong>Frames</strong>
							<br>
							50 cm x 70 cm<br>
							40 cm x 60 cm<br>
							16 cm x 22 cm
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-index-5" id="section-contact">
		<div class="container nano">
			<div class="row nano-content">
				<div class="animate">
					<div class="col-xs-12 col-md-6">
						<div class="row">
							<div class="col-xs-12">
								<h3>OUR POPUP STORES</h3>
								<address>
									<strong>Thinker & Dreamer Coffee</strong>
									<br>
									3rd floor, 42 Nguyen Hue Blvd, D1, Ho Chi Minh City, Vietnam<br>
								</address>

								<address>
									<strong>Lam Boutique</strong>
									<br>
									98 Mac Thi Buoi St, D1, Ho Chi Minh City, Vietnam<br>
								</address>

								<address>
									<strong>Nosbyn</strong>
									<br>
									77 Mac Thi Buoi St, D1, Ho Chi Minh City, Vietnam<br>
								</address>

								<address>
								<strong>Ren</strong>
								<br>
								2A Nguyen Thiep St, D1, Ho Chi Minh City, Vietnam
								</address>

								<h3>FOLLOW US</h3>
								<div><a class="link" href="http://facebook.com/smallerthanthree.vn">facebook.com/smallerthanthree.vn</a></div>
								<div><a class="link" href="http://instagram.com/smallerthanthree.vn">instagram.com/smallerthanthree.vn</a></div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<h3>TELL US WHAT YOU THINK</h3>
						<div class="alert alert-warning hidden" role="alert">Thank you for contacting us!</div>
						<form action="/" method="POST">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="inputName" placeholder="your name">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" id="inputEmail1" placeholder="your e-mail">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="content" id="inputContent" cols="5" rows="5" placeholder="your message"></textarea>
							</div>
							<button type="submit" class="btn btn-default text-bold pull-right btn-submit">SEND</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>