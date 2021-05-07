<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)
            ->create()
            ->each(function ($user) {
                $user->posts()->save(factory(App\Post::class)->make())
                ->each(function ($post) {
                    $tagIds = [];
                    for ($i = 0; $i <= rand(0, 2); $i++) {
                        logger(factory(App\Tag::class)->raw());
                        $tag = App\Tag::firstOrCreate(factory(App\Tag::class)->raw());
                        if ($tag) {
                            $tagIds[] = $tag->id;
                        }
                    }
                    $post->tags()->sync($tagIds);
                });
        });
    }
}
