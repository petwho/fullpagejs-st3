<?php
function assetSrc($file) {
	return $file.'?'.filemtime(__DIR__.'/'.$file);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smaller than three</title>
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

	<script type="text/javascript">
		$(document).ready(function() {
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

		            // if(index == 2 && direction == 'up'){
		            //     $('#fp-nav').addClass('white');
		            // }
		        }
			});
			$('#fp-nav').addClass('white');
			// $('strong').animateCss('bounce');
		});
	</script>

</head>
<body>
<header>
	<a href="/"><span class="separator">Smaller</span><span class="separator">Than</span><span class="separator">Three</span></a>
</header>

<?php if (@$_GET['lang'] == 'vi'): ?>
	<?php include('index_vi.php'); ?>
<?php else: ?>
	<?php include('index_en.php'); ?>
<?php endif; ?>
</body>
</html>