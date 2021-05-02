@extends('layouts.blog')

@section('title', $post->title." - CSC227 Blog")

@section('content')
<h1>{{ $post->title }}</h1>
<p><em>Tags: 
@if($post->tags->count() == 0)
none
@else
	@foreach($post->tags as $tag)
		<a href="/tag/{{ $tag->name }}">#{{ $tag->name }}</a>
	@endforeach
@endif
</em></p>
<hr>
<p>{{ $post->body }}</p>
@stop
