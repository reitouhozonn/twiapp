<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Follower::class, function (Faker $faker) {
    return [
        'following_id' => $faker->randomNumber(),
        'followed_id' => $faker->randomNumber(),
    ];
});
