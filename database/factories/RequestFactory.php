<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Request::class, function (Faker $faker) {
    return [
        'user_id' => mt_rand(1, 50),
        'service' => $faker->text(191),
        'task' => $faker->text(300),
        'is_read' => $faker->boolean(),
    ];
});
