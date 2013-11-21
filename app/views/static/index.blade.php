@extends('layout')

@section('title')

@stop
@section('content')
<h2>Home</h2>
<p>Hey
<h2>Recent posts:</h2>
<ul>
@foreach($posts as $post)
<li><a href="{{URL::route('post.show',array($post->id))}}">{{$post->post_title}}</a> <br><small>{{$post->updated_at}}</small></li>
@endforeach
</ul>
@stop
