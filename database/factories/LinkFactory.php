<?php

use Faker\Generator as Faker;

$factory->define(E2Wedding\Link::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
    ];
});
