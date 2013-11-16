@extends('layout')

@section('title')
Edit existing post '<i>{{$post->post_title}}</i>'
@stop
@section('content')
{{Form::model($post,array('method'=>'PUT', 'route' => array('post.update',$post->id )) )}}
	{{Form::label('post_title',"Post Title")}}
	{{Form::text('post_title')}}<br>

	{{Form::label('post_body', "Post Body")}}
	{{Form::textarea('post_body')}}<br>
	
	{{Form::submit('Save')}}
{{Form::close()}}
@stop