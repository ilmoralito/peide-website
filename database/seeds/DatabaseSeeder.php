<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 5)->create();

        $users->each(function($user) {
            $user->posts()->saveMany(factory(App\Post::class, 5)->make());
        });

        $tags = factory(App\Tag::class, 5)->create();

        factory(App\Project::class, 10)->create()->each(function ($project) {
            $project->projectFaqs()->saveMany(factory(App\ProjectFaq::class, 5)->make());
            $project->projectPhotos()->saveMany(factory(App\ProjectPhoto::class, 5)->make());
        });
    }
}
