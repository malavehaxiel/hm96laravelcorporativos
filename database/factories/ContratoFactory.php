<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrato;
use App\Models\Corporativo;
use Faker\Generator as Faker;

$factory->define(Contrato::class, function (Faker $faker) {
    return [
        'D_FechaInicio' => $faker->date('Y-m-d','now'),
        'D_FechaFin' => $faker->date('Y-m-d','now'),
        'S_URLContrato' => $faker->url,
        'tw_corporativos_id' => $faker->numberBetween(1, Corporativo::count()),
    ];
});
