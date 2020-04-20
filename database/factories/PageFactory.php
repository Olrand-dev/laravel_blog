<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(2,3)),
        'title' => $faker->sentence(rand(3,8)),
        'slug' => $faker->unique()->slug(rand(1,3)),
        'content' => $faker->text(5000),
    ];
});
