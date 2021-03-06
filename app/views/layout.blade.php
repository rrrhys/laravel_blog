<html>
<head>
	<title></title>
	{{HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}
	{{HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')}}
	{{HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css')}}
	{{HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css')}}

	{{HTML::style('css/main.css?v=2')}}
</head>
<body>

	<div class="navbar navbar-default">
		<a class="navbar-brand" href="/">Rrrhys Blog</a>
		<ul class="nav navbar-nav">

			@if (Auth::check())
				<li class='dropdown'>
					<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
						Signed in as {{Auth::user()->email}} <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							{{link_to_action('SessionController@destroy','Sign Out')}}
						</li>

					</ul>
					{{HTML::nav_link('post/create','Create')}}
				</li>

			@else
				<!--li>{{link_to_action('UserController@create','Sign in')}}</li-->
				<li class='dropdown'>
					<a class='signin_popup' data-toggle='dropdown'>
						Sign in
					</a>

	<div class="dropdown-menu" style='padding: 20px;'>
		{{ Form::open(array('action'=>array('SessionController@create')))}}
{{Form::label('email')}}
{{Form::text('email')}}

<br>
{{Form::label('password')}}
{{Form::password('password')}}
{{Form::submit('Sign In', array('id'=>'signin_button'))}}
		{{Form::close()}}
	</div>

				</li>
				<li>{{link_to_action('UserController@create','Register')}}</li>
			@endif
			
		</ul>
	</div>
	<div class="container">
@if ($success)
<div class='alert alert-success'>
	{{$success}}
</div>
@endif
@if ($error)
<div class='alert alert-danger'>
	{{$error}}
</div>
@endif
		
		<h1>@yield('title') <small>rrrhys.com</small></h1>
		@yield('content')
	</div>

	<script>
	$(function(){
		$(".signin_popup").on('click',function(){
			$(".signin-menu").popover();
		});
	})
	</script>
</body>
</html>
