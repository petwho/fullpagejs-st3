<?php
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
    <!-- <link rel="stylesheet" href="/css/font-awesome.min.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo assetSrc('/css/jquery.fullpage.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo assetSrc('/css/main.css'); ?>" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="/js/jquery.fullpage.js"></script>
	<script src="/js/wow.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// new WOW().init();

			$('#fullpage').fullpage({
				verticalCentered: false,

				//to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
				css3:false,
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['home', 'about', 'lá collection', 'details', 'contact'],
		        onLeave: function(index, nextIndext){

		            if(nextIndext == 1 || nextIndext == 3){
		                // $('#fp-nav, header').addClass('white');
		                setTimeout(function () {
			                $('#fp-nav').addClass('white');
		                }, 300);
		            } else {
			            // $('#fp-nav, header').removeClass('white');
			            setTimeout(function () {
				            $('#fp-nav').removeClass('white');
			            }, 300);
		            }

		            // $('.wowme').addClass('wow bounceInUp');
		            // new WOW().init();

		            // if(index == 2 && direction == 'up'){
		            //     $('#fp-nav').addClass('white');
		            // }
		        },
		        // afterLoad: function(anchorLink, index){
	                // var $loadedSection = $(this);
	                // $('.wow').addClass('wow bounceInUp').removeClass('hidden');
	                // new WOW().init();
	            // }
			});
			$('#fp-nav').addClass('white');
			// $('strong').animateCss('bounce');

			$('.container-artwork img').click(function (argument) {
				location.href = '/artwork.php?id=' + $(this).data('page') + "<?php echo $langQuerySuff; ?>";
			});
		});
	</script>

</head>
<body>
<header>
	<!-- <a href="/"><span class="separator">smaller</span><span class="separator">than</span><span class="separator">three</span></a> -->
	<a href="/"><img class="logo" src="/img/logo.png" alt="Smaller Than Three Logo"></a>
</header>

<?php if ($lang == 'vi'): ?>
	<?php include('index_vi.php'); ?>
<?php else: ?>
	<?php include('index_en.php'); ?>
<?php endif; ?>
</body>
</html>