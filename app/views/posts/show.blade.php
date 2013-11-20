@extends('layout')

@section('title')
{{$post->post_title}}
@stop
@section('content')
{{Markdown::string($post->post_body)}}
<br>
<small>Posted at {{$post->updated_at}} 

	@if(Auth::check())
		<a href="{{URL::route('post.edit', array($post->id))}}">Edit</a></small>
	@endif
@stop