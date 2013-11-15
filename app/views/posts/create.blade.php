@extends('layout')

@section('title')
Make a new post
@stop
@section('content')
{{Form::open(array('route'=>'post.store'))}}
	{{Form::label('post_title',"Post Title")}}
	{{Form::text('post_title')}}<br>

	{{Form::label('post_body', "Post Body")}}
	{{Form::textarea('post_body')}}<br>
	
	{{Form::submit('Save')}}
{{Form::close()}}
@stop