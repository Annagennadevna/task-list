<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'task' => $faker->text(mt_rand(10, 20)),
        'user_id' => 1,
    ];
});
