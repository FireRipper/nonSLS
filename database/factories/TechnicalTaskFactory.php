<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TechnicalTask;
use Faker\Generator as Faker;

$factory->define(TechnicalTask::class, function (Faker $faker) {
    return [
        'user_id' => mt_rand(1, 50),
        'text' => $faker->text(600),
    ];
});
