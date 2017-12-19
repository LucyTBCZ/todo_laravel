@extends('layouts.app')

@section('content')
	<a href="{{route('posts.index')}}" class="btn btn-default">Go Back</a>
	<h3>{{$post->title}}</h3>
	<div>
		{{$post->body}}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
@endsection