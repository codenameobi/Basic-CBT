<!DOCTYPE HTML>

<html>
	<head>
		<title>Quiz App</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/" class="logo"><span>Basic</span><strong>CBT App</strong></a>
						<nav class="top-right links">
							@if (Route::has('login'))
							
								@auth
									<a href="{{ url('/home') }}" class="button fit">Home</a>
								@else
									@if (Route::has('register'))
										<a href="{{ route('register') }}" class="button primary fit">Register</a>
									@endif
									<a href="{{ route('login') }}" class="button fit">Log In</a>
								@endauth
							@endif		
						</nav>
					</header>

                    
                    @yield('content')

                    <!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}a"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>