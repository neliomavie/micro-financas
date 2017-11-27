<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<!-- meta charec set -->
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Page Title -->
	<title>Finance</title>		
	<!-- Meta Description -->
	<meta name="description" content="Blue One Page Creative HTML5 Template">
	<meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
	<meta name="author" content="Muhammad Morshed">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Font -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
			================================================== -->
			<!-- Fontawesome Icon font -->
			<link rel="stylesheet" href="/brand/css/font-awesome.min.css">
			<!-- Twitter Bootstrap css -->
			<link rel="stylesheet" href="/brand/css/bootstrap.min.css">
			<!-- jquery.fancybox  -->
			<link rel="stylesheet" href="/brand/css/jquery.fancybox.css">
			<!-- animate -->
			<link rel="stylesheet" href="/brand/css/animate.css">
			<!-- Main Stylesheet -->
			<link rel="stylesheet" href="/brand/css/main.css">
			<!-- media-queries -->
			<link rel="stylesheet" href="/brand/css/media-queries.css">

			<!-- Modernizer Script for old Browsers -->
			<script src="/brand/js/modernizr-2.6.2.min.js"></script>

		</head>

		<body id="body">

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
        	<div class="container">
        		<div class="navbar-header">
        			<!-- responsive nav button -->
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        				<span class="sr-only">Toggle navigation</span>
        				<i class="fa fa-bars fa-2x"></i>
        			</button>
        			<!-- /responsive nav button -->

        			<!-- logo -->
        			<a class="navbar-brand" href="/">
        				<h1 id="logo">
        					<img src="/brand/img/logo-5.png" alt="Brandi">
        				</h1>
        			</a>
        			<!-- /logo -->
        		</div>

        		<!-- main nav -->
        		<nav class="collapse navbar-collapse navbar-right" role="navigation">
        			<ul id="nav" class="nav navbar-nav">
        				<li class="current"><a href="/">Home</a></li>
        			</ul>

        			@if (Route::has('login'))
        			<ul id="nav" class="nav navbar-nav">
        				@auth
        				<li class="current"><a href="{{ url('/home') }}">{{Auth::user()->name}}</a></li>
        				<li class="current">
        					<a href="{{ route('logout') }}"
        					onclick="event.preventDefault();
        					document.getElementById('logout-form').submit();">
        					Sair
        				</a>

        				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        					{{ csrf_field() }}
        				</form>
        			</li>
        			@else
        			<li class="current"><a href="{{ route('login') }}">Entrar</a></li>
        			{{-- <li><a href="{{ route('register') }}">Registar</a></li> --}}
        			@endauth
        		</ul>
        		@endif
        	</nav>
        	<!-- /main nav -->

        </div>
    </header>
        <!--
        End Fixed Navigation
        ==================================== -->





        <!--
        Features
        ==================================== -->

        <section id="features" class="features">
        	<div class="container">
        		<div class="row">

        			<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
        				<h2>@yield('title')</h2>
        			</div>

        			<!-- service item -->
        			<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
        				<div class="service-item">

        					<div class="service-desc">
        						@yield('content')
        					</div>
        				</div>
        			</div>
        			<!-- end service item -->

        		</div>
        	</div>
        </section>

        <!--
        End Features
        ==================================== -->

		<!-- Essential jQuery Plugins
			================================================== -->
			<!-- Main jQuery -->
			<script src="/brand/js/jquery-1.11.1.min.js"></script>
			<!-- Single Page Nav -->
			<script src="/brand/js/jquery.singlePageNav.min.js"></script>
			<!-- Twitter Bootstrap -->
			<script src="/brand/js/bootstrap.min.js"></script>
			<!-- jquery.fancybox.pack -->
			<script src="/brand/js/jquery.fancybox.pack.js"></script>
			<!-- jquery.mixitup.min -->
			<script src="/brand/js/jquery.mixitup.min.js"></script>
			<!-- jquery.parallax -->
			<script src="/brand/js/jquery.parallax-1.1.3.js"></script>
			<!-- jquery.countTo -->
			<script src="/brand/js/jquery-countTo.js"></script>
			<!-- jquery.appear -->
			<script src="/brand/js/jquery.appear.js"></script>
			<!-- Contact form validation -->
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
			<!-- Google Map -->
			<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
			<!-- jquery easing -->
			<script src="/brand/js/jquery.easing.min.js"></script>
			<!-- jquery easing -->
			<script src="/brand/js/wow.min.js"></script>
			<script>
				var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			}
			);
				wow.init();
			</script> 
			<!-- Custom Functions -->
			<script src="/brand/js/custom.js"></script>
		</body>
		</html>
