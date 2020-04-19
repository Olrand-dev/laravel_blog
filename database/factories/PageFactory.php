<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(3,8)),
        'slug' => $faker->slug(),
        'content' => $faker->text(5000),
    ];
});
