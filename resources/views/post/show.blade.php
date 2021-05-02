@extends('layouts.blog')

@section('title', $post->title." - CSC227 Blog")

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
@stop
