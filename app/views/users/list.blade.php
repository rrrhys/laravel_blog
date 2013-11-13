@extends('layout')

@section('content')
	

@foreach($users as $user)
	<p><a href="mailto:{{$user->email}}">{{$user->email}}</a> {{ $user->name}}</p>
@endforeach

	@stop