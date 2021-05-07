@extends('layouts.blog')

@section('title', "CSC227 Blog")

@section('content')
@foreach ($posts as $post)
	<h1><a href="/post/{{ $post->url }}">{{ $post->title }}</a></h1>
	<p>Posted by: <b>{{ $post->user->name }}</b></p>
@include('post.tags', [$post->tags])
	<p>{!! strlen($post->body > 256) ? nl2br(substr($post->body, 0, 256))." [...]" : nl2br($post->body) !!}</p>
	<hr>
@endforeach
@stop
