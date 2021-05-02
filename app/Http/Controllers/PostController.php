<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required|unique:posts|not_in:list,create,delete,show,update,store,login,register',
            'body' => 'required'
        ]);

	$post = new Post();
	$post->title = $request->title;
	$post->url = $request->url;
	$post->body = $request->body;
	$post->user_id = Auth::id();
	$post->save();
	$tagNames = explode(',', $request->tags);
	$tagIds = [];
	foreach ($tagNames as $tagName) {
		$tag = Tag::firstOrCreate(['name' => $tagName]);
		if ($tag) {
			$tagIds[] = $tag->id;
		}
	}
	$post->tags()->sync($tagIds);
	return redirect('/post/'.$post->url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::with('tags')->find($post->id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required|unique:posts|not_in:list,create,delete,show,update,store,login,register',
            'body' => 'required'
        ]);

	$post = Post::find($request->id);
	$post->title = $request->title;
	$post->url = $request->url;
	$post->body = $request->body;
	$post->user_id = Auth::id();
	$post->save();
	return redirect('/post/'.$post->url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function list() {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('post.list', compact('posts'));
    }
}
