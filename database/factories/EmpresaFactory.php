<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empresa;
use App\Models\Corporativo;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'S_RazonSocial' => $faker->company,
        'S_RFC' => $faker->realText(13),
        'S_Pais' => $faker->country,
        'S_Estado' => $faker->state,
        'S_Municipio' => $faker->city,
        'S_ColoniaLocalidad' => $faker->streetName,
        'S_Domicilio' => $faker->address,
        'S_CodigoPostal' => $faker->numberBetween(10000, 99999),
        'S_UsoCFDI' => $faker->realText(45),
        'S_UrlRFC' => $faker->url,
        'S_UrlActaConstitutiva' => $faker->url,
        'S_Comentarios' => $faker->sentence,
        'tw_corporativos_id' => $faker->numberBetween(1, Corporativo::count()),
    ];
});
