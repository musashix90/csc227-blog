<p><em>Tags: 
@if($post->tags->count() == 0)
none
@else
	@foreach($post->tags as $tag)
		<a href="/tag/{{ $tag->name }}">#{{ $tag->name }}</a>
	@endforeach
@endif
</em></p>
