<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'group' => $faker->randomDigit,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//article
$factory->define(App\Model\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text,
        'user_id' => $faker->randomDigit,
        'tag' => $faker->word,
        'published_at' => $faker->dateTimeBetween,
    ];
});

//tags
$factory->define(App\Model\Tags::class, function (Faker\Generator $faker) {
    return [
        'tag' => $faker->word,
    ];
});