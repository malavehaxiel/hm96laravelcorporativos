<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Documento;
use Faker\Generator as Faker;


$factory->define(Documento::class, function (Faker $faker) {
    return [
        'S_Nombre' => $faker->word,
        'S_Descripcion' => $faker->sentence,
        'N_Obligatorio' => $faker->numberBetween(0,1)
    ];
});