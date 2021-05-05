<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
	'title',
	'url',
	'body'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tags');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getRouteKeyName()
    {
        return 'url';
    }
}
