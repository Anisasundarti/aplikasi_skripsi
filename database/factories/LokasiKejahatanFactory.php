<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LokasiKejahatan;
use Faker\Generator as Faker;

$factory->define(LokasiKejahatan::class, function (Faker $faker) {

    return [
        'id_jenis_kejahatan' => $faker->randomDigitNotNull,
        'alamat' => $faker->word,
        'deskripsi' => $faker->word,
        'tahun_kejadian' => $faker->word,
        'kelurahan' => $faker->word,
        'kecamatan' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
