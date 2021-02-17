<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contacto;
use App\Models\Corporativo;
use Faker\Generator as Faker;

$factory->define(Contacto::class, function (Faker $faker) {
    return [
        'S_Nombre' => $faker->name,
        'S_Puesto' => $faker->word,
        'S_Comentarios' => $faker->sentence,
        'N_TelefonoFijo' => $faker->ean8,
        'N_TelefonoMovil' => $faker->ean8,
        'S_Email' => $faker->email,
        'tw_corporativos_id' => $faker->numberBetween(1, Corporativo::count()),
    ];
});
