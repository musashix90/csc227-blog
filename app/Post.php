<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tags');
    }


    public function getRouteKeyName()
    {
        return 'url';
    }
}
