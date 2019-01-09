<!DOCTYPE html>
<html>

<head>
	<title>Imut | Imunisasi Terpadu</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
	<!-- <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet"> -->
	<!-- //for bootstrap working -->
	

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	
	<!-- banner -->
	@include('frontend.partials.navbar')
	@yield('content')
	<!-- footer -->
	@include('frontend.partials.footer')
	<!-- //footer -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js') }}"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->

	<script type="text/javascript" src="{{ asset('frontend/js/easing.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/move-top.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});
			

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script>
		@yield('pageScript');
	</script>
	<script src="{{ asset('frontend/js/jquery.quicksand.js') }}" type="text/javascript"></script>
	<script src="{{ asset('frontend/js/script.js') }}" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>