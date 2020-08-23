<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Follower::class, function (Faker $faker) {
    return [
        'following_id' => $faker->numberBetween(1, 99),
        'followed_id' => $faker->numberBetween(1, 99),
    ];
});
