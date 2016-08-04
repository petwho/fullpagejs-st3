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
    <!-- <link rel="stylesheet" href="/css/font-awesome.min.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <link rel="stylesheet" href="/css/animate.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo assetSrc('/css/jquery.fullpage.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo assetSrc('/css/main.css'); ?>" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> -->

	<script src="/js/jquery.min.js"></script>
    <!-- <script src="/js/jquery.easings.min.js"></script> -->
	<script type="text/javascript" src="/js/jquery.fullpage.js"></script>
	<!-- <script src="/js/jquery.nanoscroller.min.js"></script> -->
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
			// if ($('#check-sm-screen').is(':visible')) {
			// 	if ($('#check-ip6').is(':visible')) {
		 //            nanoClass = '.nano:not(".disable-ip6")';
			// 	} else {
		 //            nanoClass = '.nano';
			// 	}
	  //       }
	        // $(nanoClass).nanoScroller();
	        // $(nanoClass).find('.nano-content').css({paddingBottom: '15px'});
			$('#fullpage').fullpage({
				verticalCentered: false,

				//to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
				css3: true,
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['home', 'about', 'lá collection', 'details', 'contact'],
				normalScrollElements: '.nano',
		        onLeave: function(index, nextIndext) {
		        	// $(nanoClass).find('.nano-content').css({overflow: 'hidden'});
		        	// $(nanoClass).find('.nano-content').css({overflowY: 'scroll'});
		        	// $(nanoClass).nanoScroller();
		            if(nextIndext == 1 || nextIndext == 3 || nextIndext == 4){
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

	            	$('.section').find('p, h3, address, form, a.link, .alert').css({top: 'auto', opacity: 0});
            		// if ($('#check-sm-screen').is(':visible')) {
	    	        // 	if (nextIndext == 2 || nextIndext == 5) {
	    		       //  	$(nanoClass).bind("scrollend", function(e){
	    		       //  		console.log('scrollend')
	    		       //  		disUpId = setTimeout(function () {
	    		       //  	        $fullpage.setAllowScrolling(false, 'up');
	    		       //  	        $fullpage.setAllowScrolling(true, 'down');
	    		       //  		}, 800);
	    		       //  	});

	    		       //  	$(nanoClass).bind("scrolltop", function(e){
	    		       //  		console.log('scrolltop')
	    		       //  		disDownId = setTimeout(function () {
	    		       //  	        $fullpage.setAllowScrolling(false, 'down');
	    		       //  	        $fullpage.setAllowScrolling(true, 'up');
	    		       //  		}, 800);
	    		       //  	});
	    	        // 	}
			           //  if ((nextIndext == 2) && !$('#check-ip6').is(':visible')){
			           //  	if (index == 1) {
				          //       $fullpage.setAllowScrolling(true, 'up');
				          //       $fullpage.setAllowScrolling(false, 'down');
			           //  	} else if (index == 3) {
				          //   	$fullpage.setAllowScrolling(true, 'down');
				          //   	$fullpage.setAllowScrolling(false, 'up');
				          //   }
			           //  } else if (nextIndext == 5){
	             //        	if (index == 4) {
	        	    //             $fullpage.setAllowScrolling(true, 'up');
	        	    //             $fullpage.setAllowScrolling(false, 'down');
	             //        	}
	             //        } else {
	             //        	$(nanoClass).unbind("scrollend");
	             //        	$(nanoClass).unbind("scrolltop");
	             //        	clearTimeout(disUpId);
	             //        	clearTimeout(disDownId);
	             //        	console.log('enable up down');
	             //        	if ($fullpage) {
			           //  		$fullpage.setAllowScrolling(true, 'up');
			           //  		$fullpage.setAllowScrolling(true, 'down');
	             //        	}
	    	        //     }
    	         //    }
		        },
		        afterLoad: function(anchorLink, index){
	                var $loadedSection = $(this);
	              //   if ((index != 2) && (index != 5) && $fullpage) {
	            		// $fullpage.setAllowScrolling(true);
	              //   }
	                $loadedSection.find('p, h3, address, form, a.link, .alert').css({'position': 'relative', 'opacity': 0}).animate({
	                	opacity: 1,
	                	top: '15px',
	                }, 300);
	            }
			});

			// $fullpage = $.fn.fullpage;

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
</body>
</html>