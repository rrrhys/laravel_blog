<html>
<head>
	<title></title>
	{{HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}
	{{HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')}}
	{{HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css')}}
	{{HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css')}}
</head>
<body>

	<div class="navbar navbar-default">
		<a class="navbar-brand">Laravel Blog</a>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">OK</a></li>
			<li><a href="#">Yes</a></li>
		</ul>
	</div>
	<div class="container">
		<h1>Laravel Quickstart</h1>
		@yield('content')
	</div>
</body>
</html>