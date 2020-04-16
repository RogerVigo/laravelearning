<?php

/** @var Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title' => $faker->sentence(10),
        'excerpt' => $faker->sentence(5),
        'body' => $faker->paragraph(2)
    ];
});
