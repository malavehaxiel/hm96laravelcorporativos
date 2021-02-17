<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\DocumentoCorporativo;
use App\Models\Documento;
use App\Models\Corporativo;
use Faker\Generator as Faker;


$factory->define(DocumentoCorporativo::class, function (Faker $faker) {
    return [
        'tw_corporativos_id' => $faker->numberBetween(1, Corporativo::count()),
        'tw_documentos_id' => $faker->numberBetween(1, Documento::count()),
        'S_ArchivoUrl' => $faker->url
    ];
});