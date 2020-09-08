<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->text(300),
    ];
});
