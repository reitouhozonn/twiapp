<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'screen_name' => $faker->word,
        'name' => $faker->name,
        'profile_image' => $faker->word,
        'email' => $faker->safeEmail,
        'email_verified_at' => $faker->dateTime(),
        'password' => bcrypt($faker->password),
        'remember_token' => Str::random(10),
    ];
});
