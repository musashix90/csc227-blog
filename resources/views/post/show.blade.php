@extends('layouts.blog')

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
@stop
