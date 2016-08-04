<?php
include('./form.php');
function assetSrc($file) {
	return $file.'?'.filemtime(__DIR__.'/'.$file);
}
$lang = @$_GET['lang'];
$langQuerySuff = ($lang == 'vi') ? '&lang=vi' : '';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smaller Than Three</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/nanoscroller.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <link rel="stylesheet" href="/css/animate.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo assetSrc('/css/jquery.fullpage.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo assetSrc('/css/main.css'); ?>" />

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> -->

	<script src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.fullpage.js"></script>
	<script type="text/javascript">
		var disUpId, disDownId, $fullpage, nanoClass;
		$(document).ready(function() {
			$('form').submit(function (e) {
				var $button = $(this).find('button');
				var $name = $(this).find('input[name="name"]');
				var $email = $(this).find('input[name="email"]');
				var $content = $(this).find('textarea[name="content"]');

				$button.prop('disabled', true);
				$.ajax({
					method: 'POST',
					url: '/form.php',
					data: {
						name: $name.val(),
						email: $email.val(),
						content: $content.val(),
					}
				}).success(function () {
					$('.alert.hidden').removeClass('hidden');
					$name.val('');
					$email.val('');
					$content.val('');
					$button.prop('disabled', false);
				});
				e.preventDefault();
			});

			$('#fullpage').fullpage({
				verticalCentered: false,

				//to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
				css3: true,
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['home', 'about', 'lá collection', 'details', 'contact'],
				normalScrollElements: '.nano',
		        onLeave: function(index, nextIndext) {
		            if(nextIndext == 1 || nextIndext == 3 || nextIndext == 4){
		                setTimeout(function () {
			                $('#fp-nav').addClass('white');
		                }, 300);
		            } else {
			            setTimeout(function () {
				            $('#fp-nav').removeClass('white');
			            }, 300);
		            }
	            	$('.animate').css({top: 'auto', opacity: 0});

		        },
		        afterLoad: function(anchorLink, index){
	                var $loadedSection = $(this);
	                $loadedSection.find('.animate').css({
	                	position: 'relative',
	                	opacity: 0,
	                }).animate({
	                	opacity: 1,
	                	top: '15px',
	                }, 300);
	            }
			});

			$('#fp-nav').addClass('white');

			$('.container-artwork img').click(function (argument) {
				location.href = '/artwork.php?id=' + $(this).data('page') + "<?php echo $langQuerySuff; ?>";
			});
		});
	</script>

</head>
<body>
<div id="check-sm-screen" class="visible-xs"></div>
<div id="check-ip6"></div>
<header>
	<!-- <a href="/"><span class="separator">smaller</span><span class="separator">than</span><span class="separator">three</span></a> -->
	<a href="/"><img class="logo" src="/img/logo.png" alt="Smaller Than Three Logo"></a>
</header>
<?php if ($lang == 'vi'): ?>
	<?php include('index_vi.php'); ?>
<?php else: ?>
	<?php include('index_en.php'); ?>
<?php endif; ?>
<div class="hidden">
	<img src="/img/bg_art_md.jpg" alt="">
	<img src="/img/bg_art_xs.jpg" alt="">
</div>
</body>
</html>