<div id="fullpage">
	<div class="section" id="section-home">
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
	<div class="section" id="section-about">
		<div class="container nano">
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
						<h3>BỘ SƯU TẬP LÁ</h3>
						<p>"Lá với tôi không chỉ là cơ quan sinh dưỡng của cây mà màu xanh của nó đã nuôi nấng tâm hồn tôi bằng những kỷ niệm… Tôi vẽ lá đu đủ, lá chuối, lá bồ đề, lá mướp, lá phượng, lá tía tô và nha đam không đơn giản bởi vẻ đẹp tự nhiên của nó mà ở mỗi chiếc lá còn cất giữ trong tôi những câu chuyện đẹp thuở ấu thơ… Mảnh sân nhỏ trước nhà, nụ cười của bà, đôi bàn tay của mẹ, những giọt mưa mùa hạ, những tia nắng cuối thu… Qua kẽ lá, những giấc mơ trong tôi còn nguyên mãi…" - Tim Phạm</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('./artworks.php'); ?>
	<div class="section" id="section-details">
		<div class="container">
			<div class="row">
				<div class="animate">
					<div class="col-xs-12 col-md-6">
						<h3>KÍCH THƯỚC</h3>
						<p>
						<strong>Lịch bàn</strong>
						<br>
						20 cm x 20 cm
						</p>
						<p>
						<strong>Sổ</strong>
						<br>
						14.8 cm x 22.3 cm
						</p>
						<p>
						<strong>Bưu thiếp</strong>
						<br>
						12 cm x 17 cm
						</p>
						<p>
						<strong>Khung:</strong>
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
	<div class="section" id="section-contact">
		<div class="container nano">
			<div class="row nano-content">
				<div class="animate">
					<div class="col-xs-12 col-md-6 text-left">
						<div class="row">
							<div class="col-xs-12">
								<h3>SẢN PHẨM CÓ BÁN TẠI</h3>
								<address>
									<strong>Thinker & Dreamer Coffee</strong>
									Lầu 3, 42 Nguyễn Huệ, Quận 1, Thành phố Hồ Chí Minh, Việt Nam<br>
								</address>
								<address>
									<strong>Lam Boutique</strong>
									<br>
									98 Mạc Thị Bưởi, Quận 1, Thành phố Hồ Chí Minh, Việt Nam<br>
								</address>
								<address>
									<strong>Nosbyn</strong>
									<br>
									77 Mạc Thị Bưởi, Quận 1, Thành phố Hồ Chí Minh, Việt Nam<br>
								</address>
								<address>
									<strong>Ren</strong>
									<br>
									2A Nguyễn Thiệp, Quận 1, Thành phố Hồ Chí Minh, Việt Nam
								</address>
								<h3>FOLLOW US</h3>
								<div><a class="link" href="http://facebook.com/smallerthanthreevn.vn">facebook.com/smallerthanthree.vn</a></div>
								<div><a class="link" href="http://instagram.com/smallerthanthreevn.vn">instagram.com/smallerthanthree.vn</a></div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-md-6 text-left">
						<h3>TELL US WHAT YOU THINK</h3>
						<div class="alert alert-warning hidden" role="alert">Cảm ơn bạn đã liên hệ với chúng tôi!</div>
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