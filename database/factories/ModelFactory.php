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

$factory->define(mir24\News::class, function (Faker\Generator $faker) {
    return [
        'status' => '1',
        'views' => $faker->randomNumber(4),
        'author' => $faker->name,
        'main_center' => false,
        'main_top' => false,
        'rubric_top' => false,
        'lightning' => false,
        'promo' => false,
        'title' => $faker->text,
        'advert' => $faker->paragraphs(10, true),
        'text' => $faker->paragraphs(40, true),
        'story' =>  $faker->text,
        'related_news' => '1',
        'img_id' => '1',
        'video_src' => 'http://path.com',
        'remove_after_36' => false,
        'best_news_title' => $faker->text,
        'avtomir_title' => $faker->text,
        'clip_src' => 'http://path.com',
        'last_edit_by' => '1',
        'created_by' => '1',
    ];
});
