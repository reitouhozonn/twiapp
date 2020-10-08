<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'screen_name' => $faker->unique()->word,
        'name' => $faker->name,
        'profile_image' => 'faker.jpeg',
        'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => $faker->dateTime(),
        'password' => Hash::make('1234'),
        'remember_token' => Str::random(10),
        'created_at'     => now(),
        'updated_at'     => now(),
    ];
});
