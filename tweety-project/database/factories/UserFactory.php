<?php

/** @var Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    return [
        'username' => $faker->unique()->userName,
        'name' => $faker->name,
        'avatar' => $faker->image('public/storage/avatars', 200, 200, 'people', false, false, null),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '12345678', // password
        'remember_token' => Str::random(10),
    ];
});
