<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="uk-background-muted uk-height-viewport">
	<div id="app">
		<nav class="uk-tile-secondary uk-padding uk-padding-remove-vertical" uk-navbar>
			<div class="uk-navbar-left">
				<a href="/" class="uk-navbar-item uk-logo">{{ config('app.name', 'Laravel') }}</a>
			</div>
			<div class="uk-navbar-right">
				@guest
				<ul class="uk-navbar-nav">
					<li>
						<a href="{{ route('login') }}">Login</a>
					</li>
					<li>
						<a href="{{ route('register') }}">Register</a>
					</li>
				</ul>
				@else
				<ul class="uk-navbar-nav">
					<li>
						<a href="#">{{ auth()->user()->name }}</a>
						<div uk-dropdown="offset: -20">
							<ul class="uk-nav uk-navbar-dropdown-nav">
								<li class="uk-active uk-text-uppercase">
									<a href="{{ route('logout') }}" class="uk-text-background" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
										Logout
									</a>
								</li>
							</ul>
						</div>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
				@endguest
			</div>
		</nav>

		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>