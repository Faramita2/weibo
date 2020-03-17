<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Status::class, function (Faker $faker) {

    return [
        'content' => $faker->text(),
        'created_at' => now(),
        'updated_at' => now(),
        'user_id' => random_int(1, 50),
    ];
});
