<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\Models\User::class),
        'tweet_id' => $faker->randomNumber(),
        'text' => $faker->word,
    ];
});
