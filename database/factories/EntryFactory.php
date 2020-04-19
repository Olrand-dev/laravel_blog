<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(3,8)),
        'slug' => $faker->slug(),
        'excerpt' => $faker->paragraph(rand(3,5)),
        'content' => $faker->text(3000),
    ];
});
