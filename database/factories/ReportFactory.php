<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'user_id' => mt_rand(1, 50),
        'request_id' => mt_rand(1, 50),
        'text' => $faker->text(300),
        'units' => $faker->randomElement(['м', 'км', 'кг', 'г', 'шт']),
        'price' => mt_rand(0, 20000),
    ];
});
