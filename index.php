<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smaller than three</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.css" />
	<link rel="stylesheet" type="text/css" href="/css/main.css" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="/js/jquery.fullPage.js"></script>
	<!-- <script type="text/javascript" src="/js/examples.js"></script> -->

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,

				//to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
				css3:false,
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Home', 'About', 'Artworks', 'Details', 'Contact']
			});
		});
	</script>

</head>
<body>
<header>
	<span class="separator">smaller</span><span class="separator">than</span><span class="separator">three</span>
</header>


<div id="fullpage">
	<div class="section" id="section0">
		<!-- <div class="container"> -->
			<div class="scroller row">
				<div class="col-xs-12">
					<div class="text-center">
						<p><strong>scroll to begin</strong></p>
						<p><img src="/img/down-arrow.jpg" widht="20" height="20" alt="scroller"></p>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</div>
	<div class="section" id="section1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h3>ABOUT SMALLER THEN THREE</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<h3>LÁ COLLECTION</h3>
					<p>Lá với tôi không chỉ là cơ quan sinh dưỡng của cây mà màu xanh của nó đã nuôi nấng tâm hồn tôi bằng những kỷ niệm… tôi vẽ lá đu đủ, lá chuối, lá bồ đề, lá mướp, lá phượng, lá tía tô và nha đam không đơn giản bởi vẻ đẹp tự nhiên của nó mà ở mỗi chiếc lá còn cất giữ trong tôi những câu chuyện đẹp thuở ấu thơ… mảnh sân nhỏ trước nhà, nụ cười của bà, đôi bàn tay của mẹ, những giọt mưa mùa hạ, những tia nắng cuối thu… qua kẽ lá, những giấc mơ trong tôi còn nguyên mãi…</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section2"></div>
	<div class="section" id="section3">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h3>DIMENSSIONS</h3>
					<p>
						<strong>Calendar</strong>
						<br>
						<span>30cm x 30cm</span>
					</p>
					<p>
						<strong>Sketchbook</strong>
						<br>
						<span>14cm x 22cm</span>
					</p>
					<p>
						<strong>Postcard</strong>
						<br>
						<span>12cm x 16cm</span>
					</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<h3>QUALITY</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section4">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 text-left">
					<h3>WE SELL THESE ITEMS AT</h3>
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
						<strong>Yen Concept</strong>
						<br>
						60C Le Thi Rieng St, D1, Ho Chi Minh City, Vietnam<br>
					</address>

					<h3>FOLLOW US ON FACEBOOK</h3>
					<div><a href="http://facebook.com/smallerthanthree">facebook.com/smallerthanthree</a></div>
					<div><a href="http://instagram.com/smallerthanthree">instagram.com/smallerthanthree</a></div>
				</div>

				<div class="col-xs-12 col-md-6 text-left">
					<h3>TELL US WHAT YOU THINK</h3>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="inputName" placeholder="your name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="inputEmail1" placeholder="your e-mail">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="content" id="inputContent" cols="5" rows="5" placeholder="you message"></textarea>
						</div>
						<button type="submit" class="btn btn-default text-bold pull-right">SEND</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>