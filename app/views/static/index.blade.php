@extends('layout')

@section('title')

@stop
@section('content')
Recent posts:
<ul>
@foreach($posts as $post)
<li><a href="{{URL::route('post.show',array($post->id))}}">{{$post->post_title}}</a> <br><small>{{$post->updated_at}}</small></li>
@endforeach
</ul>
@stop