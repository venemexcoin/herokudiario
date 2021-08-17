<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@stack('title_base')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/developer-1.ico')}}">
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
		@stack('styles')
		@livewireStyles

	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="https://herokuproy1.herokuapp.com/">ChamocellDeveloper</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="https://herokuproy1.herokuapp.com/">Home</a></li>
							 <li class="menu_admin">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="/">Mi espacio</a></li>
									<li><a href="{{route('general.uno')}}">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Paginas Completas</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>
							</li> 
							@if(Route::has('login'))
								@auth
									@if(Auth::user()->utype === 'ADM')
									<li class="menu_admin">
										<a href="#">Menu Administrador</a>
										<ul>
											<li><a href="left-sidebar.html">Left Sidebar</a></li>
											<li><a href="right-sidebar.html">Right Sidebar</a></li>
											<li><a href="no-sidebar.html">No Sidebar</a></li>
											<li>
												<a href="#">Submenu</a>
												<ul>
													<li><a href="#">Option 1</a></li>
													<li><a href="#">Option 2</a></li>
													<li><a href="#">Option 3</a></li>
													<li><a href="#">Option 4</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a title="My Account" href="#">My Account {{Auth::user()->name}}</a></li>
											<li><a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a></li>
											<li><a href="{{'logout'}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
											<form id="logout-form" method="POST" action="{{route('logout')}}">
												@csrf
												
											</form>
										</ul>
									</li> 
									   
									@else
									<li class="menu_admin">
										<a href="#">Menu Usuario</a>
										<ul>
											<li><a href="left-sidebar.html">Left Sidebar</a></li>
											<li><a href="right-sidebar.html">Right Sidebar</a></li>
											<li><a href="no-sidebar.html">No Sidebar</a></li>
											<li>
												<a href="#">Submenu</a>
												<ul>
													<li><a href="#">Option 5</a></li>
													<li><a href="#">Option 6</a></li>
													<li><a href="#">Option 7</a></li>
													<li><a href="#">Option 8</a></li>
												</ul>
											</li>
										</ul>
									</li>

									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a title="My Account" href="#">My Account {{Auth::user()->name}}</a></li>
											<li><a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a></li>
											<li><a href="{{'logout'}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
											<form id="logout-form" method="POST" action="{{route('logout')}}">
												@csrf
											</form>
										</ul>
									</li>  	 
									@endif
								@else  
									<li><a href="{{route('login')}}" class="button primary">Login</a></li>
									{{-- <li><a href="{{route('register')}}" class="button primary">Register</a></li> --}}
									
								@endif
							@endif
						</ul>
					</nav>
				</header>

			{{$slot}}


		</div>

		<!-- Scripts -->
			<script src="{{asset('assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('assets/js/browser.min.js')}}"></script>
			<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('assets/js/util.js')}}"></script>
			<script src="{{asset('assets/js/main.js')}}"></script>
			<script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script> 	
			@stack('scripts')
			@livewireScripts
	</body>
</html>