@extends('layout')

@section('title')
Header
@stop
@section('content')
{{Form::open(array('action'=>array('UserController@store')))}}
{{Form::label('email')}} {{Form::text('email')}}<br>
{{Form::label('password')}} {{Form::password('password')}}<br>
{{Form::label('password_confirmation')}} {{Form::password('password_confirmation')}}<br>
{{Form::submit('Register')}}
{{Form::close()}}
@stop