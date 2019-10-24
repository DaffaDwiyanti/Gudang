<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\keranjang;
use Faker\Generator as Faker;

$factory->define(keranjang::class, function (Faker $faker) {

    return [
        'user_id' => $faker->text,
        'id_barang' => $faker->text,
        'quantitas' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
