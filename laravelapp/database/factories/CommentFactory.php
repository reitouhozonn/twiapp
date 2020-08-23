<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 99),
        'tweet_id' => $faker->numberBetween(1, 99),
        'text' => $faker->word,
    ];
});
