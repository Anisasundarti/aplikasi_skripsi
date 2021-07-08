<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kelurahan;
use Faker\Generator as Faker;

$factory->define(Kelurahan::class, function (Faker $faker) {

    return [
        'kelurahan' => $faker->word,
        'kecamatan_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
