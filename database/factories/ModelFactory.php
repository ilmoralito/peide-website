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
        'url' => $faker->unique()->url,
        'slug' => $faker->slug
    ];
});

$factory->define(App\ProjectFaq::class, function(Faker\Generator $faker) {
    return [
        'question' => $faker->unique()->sentence . '?',
        'answer' => $faker->paragraph
    ];
});

$factory->define(App\ProjectPhoto::class, function(Faker\Generator $faker) {
    return [
        'url' => $faker->unique()->imageUrl
    ];
});

$factory->define(App\Event::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl,
        'price' => $faker->randomFloat,
        'address' => $faker->streetAddress,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});

$factory->define(App\EventFaq::class, function(Faker\Generator $faker) {
    return [
        'question' => $faker->unique()->sentence . '?',
        'answer' => $faker->unique()->sentence
    ];
});

$factory->define(App\Shedule::class, function(Faker\Generator $faker) {
    return [
        'location' => $faker->streetAddress,
        'start_date' => $faker->dateTime,
        'closing_date' => $faker->dateTime
    ];
});
