<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Favorite::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'tweet_id' => $faker->randomNumber(),
    ];
});
