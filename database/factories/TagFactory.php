<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $tag_names = [
        'NotMyBestWork',
        'LoremIpsum',
        'FinalProject',
        'CSC227Rocks',
        'TheTitleLooksWeird',
        'FakeNews',
        'ShowerThoughts',
        'ForYourConsideration',
        'LastDayOfClass',
        'RandomlyGenerated',
        'TestingPleaseIgnore'
    ];
    return [
        'name' => $tag_names[array_rand($tag_names)]
    ];
});
