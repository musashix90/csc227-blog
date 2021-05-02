@extends('layouts.blog')

@section('title', "New Post - CSC227 Blog")

@section('content')
<h1>New Post</h1>
<form method="POST" action="/post/store">
	@csrf
	<div class="form-group">
		<label for="title">Post Title</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>

		@error('title')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="form-group">
		<label for="title">Post URL</label>
		<input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url') }}" required>

		@error('url')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="form-group">
		<label for="body">Post Body</label>
		<textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="10" required>{{ old('body') }}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
$( "#title" ).keyup(function() {
	var title = $("#title").val();
	var url = title.replace(/\s+/g, '-').toLowerCase();
	url = url.replace(/[^a-z0-9\-]/g, '');
	url = url.replace(/\-+/g, '-');
	$("#url").val(url);
});
</script>
@stop
