<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function(Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

$factory->define(App\Tag::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word
    ];
});

$factory->define(App\Project::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->sentence,
        'description' => $faker->paragraph,
        'body' => $faker->realText,
        'url' => $faker->unique()->url
    ];
});

$factory->define(App\ProjectFaq::class, function(Faker\Generator $faker) {
    return [
        'question' => $faker->unique()->sentence . '?',
        'answer' => $faker->paragraph
    ];
});
