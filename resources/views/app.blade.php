<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>Shopping Point</title>

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link type="text/css" rel="stylesheet" href="/css/app.css">
	<link type="text/css" rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	

	@yield('aimeos_styles')

</head>
<body>
	<nav class="navbar navbar-default">

	<div class="container one">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<!--<ul class="nav navbar-nav">
                    
				  <li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Shop</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Catalog </a>
					 
				  </li>
				  
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Clothes<i class="fa fa-caret-down"></i>
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					  </div>
					</li>

                    </ul>-->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					@if (Auth::guest())
						<li><a href="/login">Login</a></li>
						<li><a href="/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{
route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')])
}}" title="My account">My account</a></li>
								<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a href="javascript: document.getElementById('logout').submit();">Logout</a></li>
							</ul>
						</li>
					@endif

					<!--<li>@yield('aimeos_head')</li>-->
				</ul>
			</div>
		</div>
		<!--second-div-->
		
		<div class="container sec">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/list"><img src="{{ asset('images/logo.png')}}"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<!-- <section id="catalog-search" class="catalog-filter-search" style="display: block !important">
					<h2>Search</h2>
					<div class="input-group">
						<form>
							<input class="form-control value ui-autocomplete-input" type="text" name="f_search" value="" data-url="/suggest" data-hint="Please enter at least three characters" autocomplete="off">
							<button class="btn btn-default reset" type="reset">
								<span class="symbol">
								</span>
							</button>
							<button class="btn btn-primary item-name" type="submit">
								Go
							</button>
						</form>
					</div>
				</section> -->

				<ul class="nav navbar-nav navbar-right">

					

					<li>@yield('aimeos_head')</li>
				</ul>
			</div>
				
				
				</div>
				
				
				<div class="container third">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<ul class="nav navbar-nav">
                    
				  <li class="nav-item">
					<a class="nav-link" href="{{ url('/') }}">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Shop</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Catalog </a>
					 
				  </li>
				  
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Clothes<i class="fa fa-caret-down"></i>
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					  </div>
					</li>

                    </ul>
			</div>

			
		</div>
		
		
		
	</nav>
	<div class="container">
		<div class="col-xs-3 sidebar_navv">
			@yield('aimeos_nav')
			@yield('aimeos_stage')
			@yield('aimeos_aside')
			@yield('content')

		</div>
		<div class="col-xs-9 body_part">
			@yield('aimeos_body')
		</div>
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>

	@yield('aimeos_scripts')

	</body>
</html>
