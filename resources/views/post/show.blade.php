@extends('layouts.blog')

@section('title', $post->title." - CSC227 Blog")

@section('content')
<h1>{{ $post->title }}</h1>
<p>Posted by: <b>{{ $post->user->name }}</b></p>
@include('post.tags', [$post->tags])
<hr>
<p>{!! nl2br($post->body) !!}</p>
@stop
