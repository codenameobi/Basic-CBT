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

            <header id="header" class="alt">
						<a href="/" class="logo"><span>Basic</span><strong>CBT App</strong></a>
						<nav class="top-right links">
                        @guest
                            
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            @if(Route::has('register'))
                                
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                        @else
                                <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="" aria-labelledby="">
                                <a class="dropdown-item" href="{{ route('client.home') }}">
                                        {{ __('Select Categories') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </ul>
                </div>
            </div>		
						</nav>
					</header>       
					

                    @yield('content')

                    <!-- Scripts -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>        
            <script src="{{ asset('js/counter.js') }}"></script>        
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}a"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>