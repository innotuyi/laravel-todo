<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Todos::class, function (Faker $faker) {
    return [
        'name' =>$faker->sentence(3),
          'description' =>$faker->paragraph(3),
          'completed' =>false

    ];
});
