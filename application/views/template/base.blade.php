<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width">
	{{ Asset::container('bootstrapper')->styles(); }}
	{{ Asset::container('bootstrapper')->scripts(); }}
	{{ Asset::scripts() }}
	{{ Asset::styles() }}
</head>
<body>
	<!-- HEADER -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{ URL::to_action('home@index') }}" name="top">Alys Google Maps Organiser</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="{{ URL::to_action('home@index') }}"><i class="icon-home icon-white"></i> Home</a></li>
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-book icon-white"></i> Adresses	<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ URL::to_action('home@marker') }}"><i class="icon-align-justify"></i> Listing</a></li>
								<li><a href="{{ URL::to_action('home@new_marker') }}"><i class="icon-plus-sign"></i> Ajouter</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-user icon-white"></i> Clients	<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ URL::to_action('client@listing') }}"><i class="icon-align-justify"></i> Listing</a></li>
								<li><a href="{{ URL::to_action('client@new_client') }}"><i class="icon-plus-sign"></i> Ajouter</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</div>
		<!--/.navbar-inner -->
	</div>
	<!--/.navbar -->
	<!-- end HEADER -->

	<!-- Content -->
	@yield('content')

</body>
</html>
