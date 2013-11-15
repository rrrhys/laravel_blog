@extends('layout')

@section('title')
{{$post->post_title}}
@stop
@section('content')
{{$post->post_body}}
<br>
<small>Posted at {{$post->updated_at}} <a href="{{URL::route('post.edit', array($post->id))}}">Edit</a></small>
@stop