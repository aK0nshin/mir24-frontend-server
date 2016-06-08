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

$factory->define(mir24\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(mir24\Article::class, function (Faker\Generator $faker) {
    return [
        'created_at'=> '1',
        'shorttext' => $faker->paragraphs(2)[0],
        'title' => $faker->title,
        'text' => $faker->paragraphs(5)[0],
        'copyright' => $faker->text,
        'created_by' => $faker->randomNumber(2),
    ];
});
