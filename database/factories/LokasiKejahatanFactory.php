<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LokasiKejahatan;
use Faker\Generator as Faker;

$factory->define(LokasiKejahatan::class, function (Faker $faker) {

    return [
        'id_jenis_kejahatan' => $faker->randomDigitNotNull,
        'nama_lokasi' => $faker->word,
        'alamat' => $faker->word,
        'gambar' => $faker->word,
        'deskripsi' => $faker->word,
        'latitude' => $faker->word,
        'longitude' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
