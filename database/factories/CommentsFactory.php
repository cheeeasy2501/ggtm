<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'news_id' => $faker->numberBetween(1, 50),
        'content' => $faker->text(100),
    ];
});
