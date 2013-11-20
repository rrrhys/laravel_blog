@extends('layout')

@section('title')

@stop
@section('content')
<h2>zz.</h2>

<h2>Recent posts:</h2>
<ul>
@foreach($posts as $post)
<li><a href="{{URL::route('post.show',array($post->id))}}">{{$post->post_title}}</a> <br><small>{{$post->updated_at}}</small></li>
@endforeach
</ul>
@stop
