@extends('layouts.blog')

@section('content')
@foreach ($posts as $post)
	<h1><a href="/post/{{ $post->url }}">{{ $post->title }}</a></h1>
	<p>{{ strlen($post->body > 256) ? substr($post->body, 0, 256)." [...]" : $post->body }}</p>
	<hr>
@endforeach
@stop
