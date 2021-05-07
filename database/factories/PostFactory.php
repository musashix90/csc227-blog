<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->realText($maxNbCharacters = 100);
    $url = preg_replace("/\s+/", "-", strtolower($title));
    $url = preg_replace("/[^a-z0-9\-]/", "", $url);
    $url = preg_replace("/\-+/", "-", $url);
    return [
        'title' => $title,
        'url' => $url,
        'body' => join("\n\n", $faker->paragraphs($nb = 3))
    ];
});
