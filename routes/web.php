<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostController@list')->name('post.list');


Auth::routes();

Route::middleware('auth')->group(function() {
	Route::get('/post/create', 'PostController@create')->name('post.create');
	Route::post('/post/store', 'PostController@store')->name('post.store');
	Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
	Route::get('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
	Route::post('/post/update', 'PostController@update')->name('post.update');
});

Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/tag/{tag}', 'TagController@show')->name('tag.show');
Route::get('/about', function(){ return view('about'); });
